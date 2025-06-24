#!/bin/bash

# Azure App Service Post-Deployment Script for Laravel
echo "Running Azure post-deployment script..."

# Navigate to application directory
cd /home/site/wwwroot || exit 1

# Ensure proper permissions
echo "Setting permissions..."
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Run database migrations (if enabled)
if [[ "${RUN_MIGRATIONS}" == "true" ]]; then
    echo "Running database migrations..."
    php artisan migrate --force
fi

# Clear and rebuild caches
echo "Optimizing application..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create symbolic link for storage (if not exists)
if [ ! -L public/storage ]; then
    echo "Creating storage link..."
    php artisan storage:link
fi

echo "Post-deployment script completed successfully!"