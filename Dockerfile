# Use official PHP + Apache image
FROM php:8.2-apache

# Enable Apache modules commonly needed
RUN a2enmod rewrite headers

# Set working dir
WORKDIR /var/www/html

# Copy site files into the container
COPY . /var/www/html

# Ensure proper permissions for Apache
RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && find /var/www/html -type f -exec chmod 644 {} \;

# Expose port 80 (Render will set PORT env and forward to 80 by default)
EXPOSE 80

# Start Apache in the foreground (official entrypoint handles it)
CMD ["apache2-foreground"]
