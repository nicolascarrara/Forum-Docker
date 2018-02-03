FROM php:7.0-apache

ENV DEBIAN_FRONTEND noninteractive

RUN a2enmod rewrite \
    && apt-get update \
    && echo 'ServerName localhost' >> /etc/apache2/apache2.conf \
    && apt-get install -y curl git zip unzip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo pdo_mysql

ADD 000-default.conf /etc/apache2/sites-available/000-default.conf

COPY application/ /var/www/html/application
COPY run.sh /run.sh
RUN chmod 0755 /run.sh

WORKDIR /var/www/html/application
RUN composer install
EXPOSE 80
CMD ["/run.sh"]
