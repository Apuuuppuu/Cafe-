# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Install any required dependencies
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy your PHP files into the container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html

# Expose port 80 to access the app
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
