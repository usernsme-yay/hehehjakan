FROM php:8.2-apache

# Tell Apache to look for login.php as the homepage instead of index.php
RUN echo "DirectoryIndex login.php index.php index.html" >> /etc/apache2/apache2.conf

# Install the extensions needed to talk to a MySQL database
RUN docker-php-ext-install pdo pdo_mysql

# Copy your HTML, CSS, JS, and PHP files into the server's web root
COPY . /var/www/html/

# Expose port 80 so Render can direct internet traffic to your app
EXPOSE 80
