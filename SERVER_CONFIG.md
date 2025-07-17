# Server Configuration for Blog Content Management

This document provides instructions for configuring your server to handle large blog content uploads.

## Development Server (Laravel Serve)

When using `php artisan serve`, the server doesn't read `.htaccess` files. Use the provided `php.ini` file:

```bash
# Start the development server with custom PHP configuration
php -c php.ini artisan serve
```

Or alternatively, you can use the composer script:

```bash
composer dev
```

## Production Server Configuration

### Apache Configuration

Add the following to your `.htaccess` file (already done in `public/.htaccess`):

```apache
# PHP Upload and POST Size Configuration
<IfModule mod_php.c>
    php_value post_max_size 100M
    php_value upload_max_filesize 50M
    php_value max_input_time 300
    php_value max_execution_time 300
    php_value memory_limit 256M
</IfModule>

# For PHP-FPM/FastCGI (if mod_php is not available)
<IfModule !mod_php.c>
    <IfModule mod_fcgid.c>
        FcgidMaxRequestLen 104857600
    </IfModule>
</IfModule>
```

### Nginx Configuration

Add the following to your Nginx server block:

```nginx
# Increase client body size for large uploads
client_max_body_size 100M;

# PHP-FPM settings (add to your location ~ \.php$ block)
location ~ \.php$ {
    fastcgi_read_timeout 300;
    fastcgi_send_timeout 300;
    fastcgi_connect_timeout 300;
    # ... other PHP settings
}
```

### PHP-FPM Configuration

Edit your `php.ini` file:

```ini
upload_max_filesize = 50M
post_max_size = 100M
max_execution_time = 300
max_input_time = 300
memory_limit = 256M
max_input_vars = 3000
```

## Laravel Configuration

The application includes a custom `ValidatePostSize` middleware that:
- Allows up to 100MB POST data by default
- Respects your PHP configuration if set higher
- Provides better error handling for large uploads

## Troubleshooting

### Common Issues

1. **PostTooLargeException**: 
   - Check your PHP configuration limits
   - Ensure web server limits are set appropriately
   - Verify Laravel's custom middleware is active

2. **Timeout Issues**:
   - Increase `max_execution_time` and `max_input_time`
   - For Nginx, increase `fastcgi_read_timeout`

3. **Memory Issues**:
   - Increase `memory_limit` in PHP configuration
   - Consider optimizing images before upload

### Testing Configuration

Use the following PHP script to test your configuration:

```php
<?php
echo "upload_max_filesize: " . ini_get('upload_max_filesize') . "\n";
echo "post_max_size: " . ini_get('post_max_size') . "\n";
echo "max_execution_time: " . ini_get('max_execution_time') . "\n";
echo "memory_limit: " . ini_get('memory_limit') . "\n";
?>
```

## Environment-Specific Notes

- **Development**: Use `php -c php.ini artisan serve`
- **Docker**: Mount the `php.ini` file to your container
- **Shared Hosting**: Contact your hosting provider for PHP limit increases
- **Cloud Platforms**: Check platform-specific documentation for PHP configuration