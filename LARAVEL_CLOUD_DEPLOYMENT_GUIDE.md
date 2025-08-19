# 📚 Laravel Cloud Deployment Guide for Festa Design Studio

> **For Beginners**: This guide assumes you have never deployed a Laravel application before. Follow each step carefully, and don't skip any checks!

## 📋 Table of Contents

1. [Before You Start - Local Testing](#before-you-start---local-testing)
2. [GitHub Preparation](#github-preparation)
3. [Laravel Cloud Account Setup](#laravel-cloud-account-setup)
4. [Creating Your Application](#creating-your-application)
5. [Environment Configuration](#environment-configuration)
6. [Database Setup](#database-setup)
7. [Deployment Process](#deployment-process)
8. [Post-Deployment Verification](#post-deployment-verification)
9. [Troubleshooting Common Issues](#troubleshooting-common-issues)
10. [Maintenance & Updates](#maintenance--updates)

---

## 🏁 Before You Start - Local Testing

### Step 1: Verify Your Local Setup Works

Before deploying, make sure everything works locally:

```bash
# 1. Install PHP dependencies
composer install

# 2. Install JavaScript dependencies
npm install

# 3. Copy environment file (if not already done)
cp .env.example .env

# 4. Generate application key
php artisan key:generate

# 5. Create database file (for local SQLite)
touch database/database.sqlite

# 6. Run migrations
php artisan migrate:fresh --seed

# 7. Create storage link
php artisan storage:link

# 8. Build frontend assets
npm run build

# 9. Test the application
php artisan serve
```

✅ **Check**: Visit `http://localhost:8000` and verify:
- Homepage loads
- Blog page works
- Admin panel accessible at `/admin`
- Images display correctly

If everything works locally, proceed to deployment!

---

## 📦 GitHub Preparation

### Step 2: Prepare Your Repository

1. **Check your Git status**:
```bash
git status
```

2. **Make sure .env is NOT tracked** (it should be in .gitignore):
```bash
# This should return nothing or say "not found"
git ls-files .env
```

3. **Commit all your latest changes**:
```bash
git add .
git commit -m "Prepare for Laravel Cloud deployment"
```

4. **Push to GitHub**:
```bash
git push origin main
```

⚠️ **Important**: Make sure your repository is PUBLIC or you have given Laravel Cloud access to private repos.

---

## 🚀 Laravel Cloud Account Setup

### Step 3: Create Laravel Cloud Account

1. **Go to**: https://cloud.laravel.com

2. **Click**: "Get Started" or "Sign Up"

3. **Choose sign-up method**:
   - Sign up with GitHub (Recommended ✅)
   - Or use email/password

4. **Select a plan**:
   - **Sandbox** (Free) - Good for testing
   - **Production** ($20/month) - For live website

5. **Verify your email** if required

---

## 🎯 Creating Your Application

### Step 4: Connect Your Repository

1. **In Laravel Cloud Dashboard**, click: **"+ New Application"**

2. **Connect Git Provider**:
   - Click "Connect GitHub"
   - Authorize Laravel Cloud to access your repositories
   - You'll see a list of your repositories

3. **Select Your Repository**:
   - Find and click on your "fds" or "festa-design-studio" repository
   - If you don't see it, check if it's private and grant access

4. **Configure Application**:
   ```
   Application Name: festa-design-studio
   Region: Choose the closest to your users
   - US East (Virginia) - for US East Coast
   - US West (Oregon) - for US West Coast  
   - Europe (Frankfurt) - for European users
   - Asia Pacific (Singapore) - for Asian users
   ```

5. **Click**: "Create Application"

---

## ⚙️ Environment Configuration

### Step 5: Configure Environment Variables

After creating the application, you need to set up environment variables.

1. **Navigate to**: Your application → Settings → Environment

2. **Add these variables** (click "Add Variable" for each):

#### Basic Application Settings
```
APP_NAME="Festa Design Studio"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app-name.laravel.cloud
```
> 📝 Note: Replace `your-app-name` with your actual Laravel Cloud subdomain

#### Database Configuration (Laravel Cloud will provide these)
```
DB_CONNECTION=mysql
DB_HOST=[Will be provided by Laravel Cloud]
DB_PORT=3306
DB_DATABASE=[Will be provided by Laravel Cloud]
DB_USERNAME=[Will be provided by Laravel Cloud]
DB_PASSWORD=[Will be provided by Laravel Cloud]
```

#### Session & Cache
```
SESSION_DRIVER=database
SESSION_LIFETIME=120
CACHE_STORE=database
QUEUE_CONNECTION=database
```

#### Email Configuration (for contact forms)
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-specific-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=hello@festastudio.com
MAIL_FROM_NAME="Festa Design Studio"
```

> 📧 **Email Setup Tips**:
> - For Gmail: Use an "App Password" not your regular password
> - Go to: Google Account → Security → 2-Step Verification → App passwords
> - Alternative: Use services like Mailgun, SendGrid, or Postmark

#### Newsletter Configuration (if using Mailchimp)
```
MAILCHIMP_API_KEY=your-mailchimp-api-key
MAILCHIMP_LIST_ID=your-audience-list-id
```

> 🔑 **Getting Mailchimp Credentials**:
> 1. Log into Mailchimp
> 2. Go to Account → Extras → API keys
> 3. Create a new API key
> 4. For List ID: Go to Audience → Settings → Audience name and defaults

---

## 🗄️ Database Setup

### Step 6: Provision a Database

1. **In Laravel Cloud**, go to: Your Application → Databases

2. **Click**: "Create Database"

3. **Choose Database Type**:
   - **MySQL 8.0** (Recommended for most cases)
   - **PostgreSQL 15** (If you prefer PostgreSQL)

4. **Select Size**:
   - **Sandbox**: 1 GB storage (free tier)
   - **Production**: Choose based on needs

5. **Click**: "Create Database"

6. **Wait** for database to be provisioned (takes 2-3 minutes)

7. **Laravel Cloud will automatically**:
   - Add database credentials to your environment
   - Configure the connection

⚠️ **Important**: Your local SQLite database will NOT be migrated. Laravel Cloud will run fresh migrations.

---

## 🚢 Deployment Process

### Step 7: Deploy Your Application

1. **Go to**: Your Application → Deployments

2. **Click**: "Deploy" button

3. **Laravel Cloud will automatically**:
   ```
   ✅ Pull your code from GitHub
   ✅ Install Composer dependencies
   ✅ Install NPM packages
   ✅ Build frontend assets (npm run build)
   ✅ Run optimizations (config:cache, route:cache)
   ✅ Run database migrations
   ✅ Create storage symlink
   ✅ Start your application
   ```

4. **Monitor the deployment**:
   - You'll see real-time logs
   - Green checkmarks = success
   - Red X = error (check logs)

5. **Deployment typically takes**: 3-5 minutes

---

## ✅ Post-Deployment Verification

### Step 8: Verify Everything Works

Once deployment is complete:

1. **Visit your application URL**:
   ```
   https://your-app-name.laravel.cloud
   ```

2. **Check these pages**:
   - [ ] Homepage loads with images
   - [ ] `/services` - Services page
   - [ ] `/work` - Portfolio page
   - [ ] `/about` - About page
   - [ ] `/resources` - Resources/toolkit page
   - [ ] `/articles` - Blog page
   - [ ] `/contact` - Contact form

3. **Test Admin Panel**:
   - [ ] Go to `/admin`
   - [ ] Register a new admin account
   - [ ] Login and verify dashboard loads
   - [ ] Try creating a test blog post

4. **Test Features**:
   - [ ] Newsletter signup (if configured)
   - [ ] Contact form submission
   - [ ] Blog article ratings
   - [ ] Search/filter functionality

---

## 🔧 Troubleshooting Common Issues

### Issue 1: 500 Server Error

**Solution**:
1. Check APP_KEY is set in environment variables
2. Verify database credentials are correct
3. Check deployment logs for specific errors

### Issue 2: Assets Not Loading (CSS/JS broken)

**Solution**:
1. Make sure `npm run build` ran during deployment
2. Check APP_URL matches your actual URL
3. Clear browser cache

### Issue 3: Images Not Showing

**Solution**:
1. Verify storage link was created
2. Check if images exist in `storage/app/public`
3. Re-run: `php artisan storage:link` via SSH

### Issue 4: Database Connection Error

**Solution**:
1. Verify DB_ environment variables are set
2. Check database is provisioned and running
3. Ensure DB_CONNECTION matches your database type

### Issue 5: Mail Not Sending

**Solution**:
1. Verify MAIL_ configuration is correct
2. Check email provider credentials
3. Look for mail errors in Laravel logs

### Viewing Logs

To view application logs:
1. Go to your application in Laravel Cloud
2. Click on "Logs" tab
3. Filter by type: Application, Web Server, or Database

---

## 🔄 Maintenance & Updates

### Updating Your Application

When you make changes to your code:

1. **Make changes locally** and test

2. **Commit and push to GitHub**:
```bash
git add .
git commit -m "Update: description of changes"
git push origin main
```

3. **In Laravel Cloud**:
   - Go to Deployments
   - Click "Deploy" again
   - Or enable "Auto-deploy" for automatic updates

### Running Artisan Commands

If you need to run artisan commands:

1. Go to your application
2. Click "Commands" tab
3. Enter command (e.g., `php artisan cache:clear`)
4. Click "Run"

### Database Migrations for Updates

For new migrations after deployment:
1. Push migration files to GitHub
2. Deploy the update
3. Laravel Cloud auto-runs `php artisan migrate`

---

## 📞 Getting Help

### Laravel Cloud Support
- Documentation: https://cloud.laravel.com/docs
- Support: support@laravel.cloud
- Status Page: https://status.laravel.cloud

### Common Resources
- Laravel Documentation: https://laravel.com/docs
- Laravel Cloud Discord: Join for community help
- Stack Overflow: Tag with `laravel-cloud`

---

## 🎉 Congratulations!

You've successfully deployed your Festa Design Studio website! 

### Next Steps:
1. **Custom Domain**: Add your own domain (e.g., festastudio.com)
2. **SSL Certificate**: Automatically provided by Laravel Cloud
3. **Monitoring**: Set up application monitoring
4. **Backups**: Configure automatic backups
5. **Scaling**: Upgrade plan as your traffic grows

---

## 📝 Quick Reference Checklist

Before deploying, ensure:
- [ ] Local application works perfectly
- [ ] All changes committed to GitHub
- [ ] .env file is NOT in repository
- [ ] Database migrations are up to date
- [ ] Frontend assets build successfully
- [ ] No hardcoded sensitive data in code

During deployment:
- [ ] Environment variables configured
- [ ] Database provisioned
- [ ] Deployment logs show success
- [ ] Application URL is accessible

After deployment:
- [ ] All pages load correctly
- [ ] Admin panel accessible
- [ ] Forms work (contact, newsletter)
- [ ] Images display properly
- [ ] No console errors in browser

---

**Remember**: Deployment might seem complex the first time, but Laravel Cloud handles most of the heavy lifting. Take it step by step, and you'll have your site live in no time! 🚀