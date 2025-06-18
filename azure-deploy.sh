#!/bin/bash

# Azure App Service Deployment Script for Laravel
echo "Starting Azure deployment for Laravel application..."

# Install dependencies
echo "Installing Composer dependencies..."
composer install --optimize-autoloader --no-dev

echo "Installing Node.js dependencies..."
npm ci

# Build assets
echo "Building frontend assets..."
npm run build

# Laravel optimizations for production
echo "Optimizing Laravel for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage link
echo "Creating storage link..."
php artisan storage:link

# Run database migrations
echo "Running database migrations..."
php artisan migrate --force

# Set correct permissions
echo "Setting correct permissions..."
chmod -R 755 storage
chmod -R 755 bootstrap/cache

echo "Deployment completed successfully!"