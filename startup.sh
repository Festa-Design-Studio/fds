#!/bin/bash

# Azure App Service Startup Script for Laravel
echo "Starting Laravel application..."

# Change to the application directory
cd /home/site/wwwroot

# Ensure storage permissions
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Start PHP-FPM
echo "Starting PHP-FPM..."
php-fpm -D

# Start Nginx
echo "Starting Nginx..."
nginx -g "daemon off;"