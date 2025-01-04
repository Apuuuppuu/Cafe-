# Use the official PHP image with Apache
FROM php:8.1-apache

# Install necessary extensions
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy application files to the Apache web root
COPY . /var/www/html/

# Set permissions for the web root
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80 for HTTP
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
