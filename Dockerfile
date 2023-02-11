# Use the official PHP 7 image as the base image
FROM php:7.0-apache

# Copy the contents of the web application to the Apache document root directory
COPY . /var/www/html/

# Set the Apache document root directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Expose port 80 to allow external connections to the web application
EXPOSE 80

# Start the Apache service
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
