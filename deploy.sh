#!/bin/bash

# Navigate to the project directory
cd /var/www/sahem

# Pull the latest changes from the repository
git pull origin prod

# Install/update Composer dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader

# Install/update Node.js dependencies
npm install

# Build frontend assets
npm run build

# Run database migrations
php artisan migrate --force

# Clear and cache config/routes/views
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Restart PHP-FPM (or whichever service is necessary to reload the application)
sudo systemctl restart php8.3-fpm

echo "Deployment completed successfully."
