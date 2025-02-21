# Use the official PHP image with Apache
FROM php:8.1-apache

# Install necessary extensions for WordPress
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mbstring zip mysqli

# Enable Apache mod_rewrite
RUN a2enmod rewrite
# COPY /wp-admin /var/www/html/blog
# COPY /wp-content /var/www/html/blog
# COPY /wp-includes /var/www/html/blog
# Copy WordPress files into the container
COPY . /var/www/html/blog

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html/blog \
    && chmod -R 755 /var/www/html/blog
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
# Set the working directory
WORKDIR /var/www/html/blog
RUN echo "ServerName propvr.ai/blog" >> /etc/apache2/apache2.conf
# Expose port 80 for Cloud Run
EXPOSE 80

# Define the entry point
CMD ["apache2-foreground"]
