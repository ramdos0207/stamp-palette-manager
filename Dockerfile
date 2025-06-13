FROM php:8.4-apache
COPY ./ /var/www/html
RUN docker-php-ext-install pdo_mysql
EXPOSE 80