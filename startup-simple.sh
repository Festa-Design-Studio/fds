#!/bin/bash

# Simple startup script for Azure App Service
echo "Starting Laravel with built-in server..."

# Kill any existing processes
pkill -f nginx || true
pkill -f php-fpm || true

# Change to app directory
cd /home/site/wwwroot || exit 1

# Check if Laravel files exist
if [ ! -f "artisan" ]; then
    echo "ERROR: Laravel files not found"
    ls -la
    exit 1
fi

# Set permissions
chmod -R 775 storage bootstrap/cache 2>/dev/null || true

# Create storage link if needed
if [ ! -L public/storage ]; then
    php artisan storage:link 2>/dev/null || true
fi

# Start Laravel's built-in server
echo "Starting PHP built-in server on port 8080..."
php artisan serve --host=0.0.0.0 --port=8080