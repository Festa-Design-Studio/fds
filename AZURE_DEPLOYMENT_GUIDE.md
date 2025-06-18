# Azure Deployment Guide for Festa Design Studio

This guide will walk you through deploying your Laravel application to Azure App Service step by step.

## Prerequisites
- Azure subscription
- Your GitHub repository: `https://github.com/Festa-Design-Studio/fds.git`
- Access to your GitHub account

---

## Part 1: Create Azure Resources

### Step 1: Create Azure App Service

1. **Log into Azure Portal**
   - Go to [portal.azure.com](https://portal.azure.com)
   - Sign in with your Azure account

2. **Create a Resource Group**
   - Click "Resource groups" in the left sidebar
   - Click "+ Create"
   - Fill in:
     - **Resource group name**: `festa-design-studio`
     - **Region**: Choose closest to your users (e.g., "East US" or "West Europe")
   - Click "Review + create" → "Create"

3. **Create App Service**
   - Click "Create a resource" (+ icon)
   - Search for "Web App" and select it
   - Click "Create"
   - Fill in the form:
     - **Resource Group**: Select `festa-design-studio`
     - **Name**: `festa-design-studio` (this will be your URL: festa-design-studio.azurewebsites.net)
     - **Publish**: Code
     - **Runtime stack**: PHP 8.2
     - **Operating System**: Linux
     - **Region**: Same as resource group
     - **App Service Plan**: Create new
       - **Name**: `festa-plan`
       - **Sku and size**: Click "Change size" → Choose "Basic B1" (good for testing)
   - Click "Review + create" → "Create"
   - Wait 2-3 minutes for deployment to complete

### Step 2: Create Azure Database for MySQL

1. **Create MySQL Database**
   - Click "Create a resource" (+ icon)
   - Search for "Azure Database for MySQL" and select "Flexible Server"
   - Click "Create"
   - Fill in **Basics** tab:
     - **Resource group**: `festa-design-studio`
     - **Server name**: `festa-mysql-server` (must be globally unique)
     - **Region**: Same as your app
     - **MySQL version**: 8.0
     - **Workload type**: For development or hobby projects
     - **Admin username**: `festaadmin`
     - **Password**: Create a strong password (save this!)
   
   - **Workload Details** section:
     - **Compute + storage**: Keep default or click "Configure server" 
       - Choose "Burstable" tier, "B1ms" size (1 vCore, 2GB RAM)
       - Storage: 20 GB
       - Click "Save"
   
   - **High Availability**: Leave unchecked (not needed for development)
   
   - Click "Next: Networking >"
   
   - **Networking** tab:
     - **Connectivity method**: Public access (selected traffic)
     - **Firewall rules**: 
       - Check "Allow public access from any Azure service within Azure to this server"
       - Under "Add current client IP address": Check this box
       - Click "+ Add 0.0.0.0 - 255.255.255.255" to allow all connections (for testing)
   
   - Click "Review + create" → "Create"
   - Wait 5-10 minutes for deployment

2. **Create Database**
   - Once MySQL server is created, go to the resource
   - Click "Databases" in the left menu
   - Click "+ Add"
   - **Database name**: `festa_production`
   - Click "Save"

---

## Part 2: Configure App Service Settings

### Step 3: Configure Environment Variables

1. **Go to Your App Service**
   - Navigate to your `festa-design-studio` App Service
   - Click "Environment variables" in the left menu (or click the link in the Configuration notice)

2. **Add Environment Variables** (Click "+ Add" for each):
   - You'll see three fields: **Name**, **Value**, and **Deployment Slot setting**
   - Leave **Deployment Slot setting** unchecked for all variables
   - Add each of these one by one:

   **Variable 1:**
   - Name: `APP_NAME`
   - Value: `Festa Design Studio`
   
   **Variable 2:**
   - Name: `APP_ENV`
   - Value: `production`
   
   **Variable 3:**
   - Name: `APP_DEBUG`
   - Value: `false`
   
   **Variable 4:**
   - Name: `APP_URL`
   - Value: `https://festa-design-studio.azurewebsites.net` (replace with your actual app name)
   
   **Variable 5:**
   - Name: `DB_CONNECTION`
   - Value: `mysql`
   
   **Variable 6:**
   - Name: `DB_HOST`
   - Value: `festa-mysql-server.mysql.database.azure.com` (replace with your MySQL server name)
   
   **Variable 7:**
   - Name: `DB_PORT`
   - Value: `3306`
   
   **Variable 8:**
   - Name: `DB_DATABASE`
   - Value: `festa_production`
   
   **Variable 9:**
   - Name: `DB_USERNAME`
   - Value: `festaadmin`
   
   **Variable 10:**
   - Name: `DB_PASSWORD`
   - Value: `[your-mysql-password]` (the password you created for MySQL)
   
   **Variable 11:**
   - Name: `SESSION_DRIVER`
   - Value: `database`
   
   **Variable 12:**
   - Name: `CACHE_STORE`
   - Value: `database`
   
   **Variable 13:**
   - Name: `QUEUE_CONNECTION`
   - Value: `database`
   
   **Variable 14:**
   - Name: `LOG_CHANNEL`
   - Value: `stack`
   
   **Variable 15:**
   - Name: `LOG_LEVEL`
   - Value: `error`
   
   **Variable 16:**
   - Name: `MAIL_MAILER`
   - Value: `log`

3. **Generate APP_KEY**
   - In your local terminal, run: `php artisan key:generate --show`
   - Copy the output (starts with `base64:`)
   - Add as **Variable 17:**
     - Name: `APP_KEY`
     - Value: `base64:your-generated-key-here` (paste the output from your terminal)

4. **Save Configuration**
   - Click "Save" at the top
   - Click "Continue" when prompted

---

## Part 3: Set Up GitHub Deployment

### Step 4: Configure GitHub Actions Secrets

1. **Enable Basic Authentication** (Required for publish profile)
   - In your App Service, go to "Configuration" in the left menu
   - Click on "General settings" tab
   - Scroll down to "SCM Basic Auth Publishing Credentials"
   - Set it to **"On"**
   - Click "Save" at the top
   - Wait for the setting to apply (30 seconds)

2. **Get Azure Publish Profile**
   - Now click "Download publish profile" at the top of your App Service overview
   - Save the downloaded file (it will be named something like `festa-design-studio.PublishSettings`)
   - Open it in a text editor (Notepad, TextEdit, etc.) and copy ALL the content

3. **Add GitHub Secrets**
   - Go to your GitHub repository: `https://github.com/Festa-Design-Studio/fds`
   - Click "Settings" tab
   - Click "Secrets and variables" → "Actions"
   - Click "New repository secret" and add these:

   ```
   AZURE_WEBAPP_NAME = festa-design-studio
   AZURE_RESOURCE_GROUP = festa-design-studio
   AZURE_WEBAPP_PUBLISH_PROFILE = [paste entire publish profile content]
   ```

### Step 5: Enable GitHub Actions Deployment

1. **In Azure App Service**
   - Go to "Deployment Center" in left menu
   - **Source**: GitHub
   - Click "Authorize" and sign in to GitHub
   - **Organization**: Festa-Design-Studio
   - **Repository**: fds
   - **Branch**: main
   - **Build provider**: GitHub Actions
   - Click "Save"

---

## Part 4: Deploy and Test

### Step 6: Trigger First Deployment

1. **Commit and Push Changes**
   - The configuration files are already created
   - You just need to commit them to trigger deployment:
   
   ```bash
   git add .
   git commit -m "Add Azure deployment configuration"
   git push origin main
   ```

2. **Monitor Deployment**
   - Go to your GitHub repository → "Actions" tab
   - You should see a deployment workflow running
   - Click on it to monitor progress (takes 5-10 minutes)

3. **Check Azure Deployment**
   - In Azure App Service → "Deployment Center"
   - You should see the deployment status

### Step 7: Initialize Database

**Important Note**: Your project was originally built with SQLite. We're now migrating to MySQL on Azure.

1. **SSH into Azure App Service**
   - In App Service → "SSH" or "Advanced Tools" → "Go"
   - Run these commands one by one:
   
   ```bash
   cd /home/site/wwwroot
   
   # Test database connection first
   php artisan tinker --execute="DB::connection()->getPdo();"
   
   # Run fresh migrations (this will create all tables in MySQL)
   php artisan migrate:fresh --force
   
   # Seed the database with initial data
   php artisan db:seed --force
   
   # Create storage link
   php artisan storage:link
   
   # Clear all caches
   php artisan config:clear
   php artisan cache:clear
   php artisan view:clear
   ```

2. **If you want to migrate existing SQLite data** (optional):
   - You'll need to export data from your local SQLite database
   - Then import it into the MySQL database on Azure
   - See "Data Migration Section" below for details

2. **Test Your Application**
   - Visit: `https://festa-design-studio.azurewebsites.net`
   - The site should load!
   - Admin login: `/admin` with credentials from your seeder

---

## Troubleshooting

### Common Issues:

1. **Database Connection Error**
   - Verify MySQL server allows Azure connections
   - Check database credentials in App Service configuration

2. **Assets Not Loading**
   - Ensure GitHub Actions completed successfully
   - Check if `npm run build` completed in the workflow

3. **500 Error**
   - Check App Service logs: Go to "Log stream" in Azure
   - Verify all environment variables are set correctly

4. **Storage Issues**
   - Run `php artisan storage:link` in SSH console
   - Check file permissions

### Getting Logs:
- Azure Portal → Your App Service → "Log stream"
- Or SSH into the server and check `/home/LogFiles/`

---

## Data Migration from SQLite to MySQL (Optional)

If you want to migrate your existing SQLite data to the new MySQL database on Azure:

### Option 1: Use Laravel Seeders (Recommended)
Since your data is likely test/development data, it's easier to recreate it using seeders:

1. **Update your seeders** locally to include current data
2. **Run seeders on Azure** (as shown in Step 7 above)

### Option 2: Export/Import Data
If you have important data to migrate:

1. **Export SQLite data locally**:
   ```bash
   # In your local project directory
   php artisan tinker
   
   # Export users (example)
   $users = App\Models\User::all();
   file_put_contents('users_export.json', $users->toJson());
   
   # Export other models as needed
   $teamMembers = App\Models\TeamMember::all();
   file_put_contents('team_members_export.json', $teamMembers->toJson());
   
   # Export projects, testimonials, etc.
   ```

2. **Import to MySQL on Azure**:
   - Upload the JSON files to Azure via SSH
   - Create import scripts to insert the data
   - Or manually recreate important records through the admin panel

### Option 3: Database-Specific Migration Tools
For complex migrations, you could use tools like:
- MySQL Workbench with ODBC connection to SQLite
- Online converters (for small databases)
- Custom Laravel commands

---

## Important SQLite vs MySQL Differences

Your Laravel application should work seamlessly, but note these differences:

1. **Database Configuration**: Already handled in environment variables
2. **Data Types**: Laravel's migrations handle this automatically
3. **JSON Columns**: MySQL supports JSON natively (better than SQLite)
4. **Performance**: MySQL will be faster for your production app
5. **Backup/Recovery**: Azure provides automated backups for MySQL

---

## Next Steps After Successful Deployment:

1. **Custom Domain** (Optional)
   - App Service → "Custom domains"
   - Add your domain and configure DNS

2. **SSL Certificate** (Optional)
   - App Service → "TLS/SSL settings"
   - Upload or use App Service managed certificate

3. **Backup Strategy**
   - App Service → "Backups"
   - Configure automated backups

4. **Monitoring**
   - Set up Application Insights for monitoring

---

## Estimated Costs (Basic B1 Plan):
- App Service: ~$13/month
- MySQL Flexible Server (Basic): ~$25/month
- **Total**: ~$38/month

## Support:
If you encounter issues, check:
1. GitHub Actions logs
2. Azure App Service logs
3. This troubleshooting section

The deployment should be live at: `https://festa-design-studio.azurewebsites.net`