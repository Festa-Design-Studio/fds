#!/bin/bash

# Azure App Service Startup Script for Laravel
echo "Starting Laravel application..."

# Log environment for debugging
echo "Current directory: $(pwd)"
echo "Contents of /home/site/wwwroot:"
ls -la /home/site/wwwroot/

# Change to the application directory
cd /home/site/wwwroot || exit 1

# Check if Laravel files exist
if [ ! -f "artisan" ]; then
    echo "ERROR: Laravel files not found in /home/site/wwwroot"
    echo "Contents of current directory:"
    ls -la
    exit 1
fi

# Ensure storage permissions
echo "Setting permissions..."
chmod -R 775 storage bootstrap/cache 2>/dev/null || echo "Warning: Could not set permissions"

# Create storage link if needed
if [ ! -L public/storage ]; then
    echo "Creating storage link..."
    php artisan storage:link 2>/dev/null || echo "Warning: Could not create storage link"
fi

# Copy nginx config to proper location
cp -f nginx.conf /etc/nginx/sites-available/default 2>/dev/null || echo "Warning: Could not copy nginx config"

# Start PHP-FPM
echo "Starting PHP-FPM..."
php-fpm -D

# Start Nginx
echo "Starting Nginx..."
nginx -g "daemon off;"