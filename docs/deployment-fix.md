# Fixing the "Failed to open the referenced table 'services'" Migration Error

This runbook walks a developer through reproducing and fixing the foreign-key error that appears during Laravel Cloud deployments when the `service_deliverables` migration runs before the `services` table exists.

## 1. Symptoms

You will see the deployment fail with a log segment similar to:

```
SQLSTATE[HY000]: General error: 1824 Failed to open the referenced table 'services'
(SQL: alter table `service_deliverables` add constraint
       `service_deliverables_service_id_foreign`
       foreign key (`service_id`) references `services` (`id`) on delete cascade)
```

Locally, the same error appears when you run:

```bash
php artisan migrate
```

## 2. Root Cause

Laravel creates foreign keys only after the referenced table exists. The project originally shipped two migrations with the **same timestamp down to the second**:

- `create_services_table`
- `create_service_deliverables_table`

When file names are identical up to the second, some environments run them in an unpredictable order. If `service_deliverables` runs first, MySQL blocks the foreign key because `services` has not been created yet.

## 3. Prerequisites for the Fix

- PHP 8.2+
- Composer dependencies installed (`composer install`)
- Node dependencies installed if you plan to run the full build (`npm install`)
- Access to a MySQL 8 instance (local Docker container or the Laravel Cloud database credentials)

## 4. Step-by-Step Fix

1. **Pull the latest `main` branch**
   ```bash
git checkout main
git pull origin main
```

2. **Ensure the services migration file sorts before the deliverables migration**
   ```bash
mv database/migrations/2025_05_26_201041_create_services_table.php \
   database/migrations/2025_05_26_201000_create_services_table.php
```
   *If the repository already contains `2025_05_26_201000_create_services_table.php`, skip this step. The important part is that the services file name is lexicographically smaller than any migration that relies on it.*

3. **Regenerate Composer’s autoload files**
   ```bash
composer dump-autoload
```

4. **Point Laravel at a MySQL database (mirroring Laravel Cloud)**
   ```bash
cp .env .env.laravel-cloud
php -r "file_put_contents('.env.laravel-cloud', str_replace('DB_CONNECTION=sqlite', 'DB_CONNECTION=mysql', file_get_contents('.env.laravel-cloud')));"
# Edit .env.laravel-cloud and fill DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD
```

5. **Run the migrations against MySQL**
   ```bash
php artisan --env=laravel-cloud migrate:fresh --seed
```
   This command validates both the new ordering and your seed data in the same engine Laravel Cloud uses.

6. **Dry-run the production migration order**
   ```bash
php artisan --env=laravel-cloud migrate --pretend
```
   You should now see SQL statements for both `services` and `service_deliverables` with no errors.

7. **Commit and push the renamed migration**
   ```bash
git add database/migrations/2025_05_26_201000_create_services_table.php
git commit -m "Ensure services migration runs before deliverables"
git push origin main
```

## 5. Redeploy in Laravel Cloud

1. Trigger a new deployment from the Laravel Cloud dashboard.
2. Watch the **Preparing database** step. You should see `create_services_table` run before `create_service_deliverables_table`.
3. Deployment should finish successfully. If it still fails, SSH into the container and confirm the migration filenames in `database/migrations` match what you pushed.

## 6. Post-Fix Validation

After the successful deployment:

- Visit `/services` and confirm deliverables are listed for each service.
- Use Tinker to double-check data exists:
  ```bash
  php artisan tinker --env=production
  >>> App\Models\Service::with('deliverables')->get();
  ```
- Review the deployment log to make sure no other migrations were skipped.

## 7. Rollback Plan

If anything goes wrong:

1. Rename the migration file back to its original timestamp.
2. Run `php artisan migrate:rollback` locally to undo the latest migrations.
3. Fix any data discrepancies manually (e.g., delete orphaned `service_deliverables` rows) before redeploying.

Keeping this runbook with your deployment documentation ensures future developers can diagnose and resolve the issue quickly.