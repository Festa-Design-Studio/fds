# Alternative Azure Deployment Method

Since GitHub Actions deployment is having issues, let's use Azure's built-in deployment:

## Step 1: Disable GitHub Actions Deployment

1. Go to your Azure App Service
2. Click "Deployment Center" in the left menu
3. Click "Disconnect" to disconnect GitHub Actions

## Step 2: Use Local Git Deployment

1. In Deployment Center, choose:
   - **Source**: Local Git
   - Click "Save"

2. You'll see Git Clone Uri (something like: https://festa-design-studio.scm.azurewebsites.net/festa-design-studio.git)

3. In "Deployment Center" → "Local Git/FTPS credentials":
   - Note your username (starts with $)
   - Set a password if you haven't already

## Step 3: Deploy from Command Line

In your local terminal:

```bash
# Add Azure as a remote
git remote add azure https://festa-design-studio.scm.azurewebsites.net/festa-design-studio.git

# Push to Azure
git push azure main
```

When prompted:
- Username: (the $ username from step 2)
- Password: (the password you set)

## Step 4: Post-Deployment Commands

After deployment completes, SSH into your App Service and run:

```bash
cd /home/site/wwwroot
composer install --optimize-autoloader --no-dev
php artisan storage:link
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

This method is more reliable than GitHub Actions for Azure App Service.