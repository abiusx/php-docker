FROM php:7.0-apache

RUN apt-get update -y

RUN apt-get install -y \
  wget curl \
  supervisor \
  libmemcached-dev libpng-dev libcurl4-openssl-dev libmcrypt-dev zlib1g-dev libicu-dev

RUN docker-php-ext-install \
  pdo pdo_mysql gd curl mcrypt intl opcache json mbstring 

RUN pecl install memcached
RUN pecl install redis

RUN curl 'https://getcomposer.org/installer' | php -- --install-dir=/usr/bin --filename=composer

# Apache HTTPS support
RUN a2enmod ssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/ssl-cert-snakeoil.key -out /etc/ssl/certs/ssl-cert-snakeoil.pem -subj "/C=US/ST=Virginia/L=Charlottesville/O=localhost/OU=localhost/CN=localhost"

RUN a2enmod rewrite
RUN a2enmod proxy
RUN a2enmod proxy_http
RUN a2enmod proxy_connect
RUN service apache2 stop

COPY conf/httpd.conf /etc/apache2/sites-available/000-default.conf
COPY conf/supervisord.conf /etc/supervisor/conf.d/

VOLUME ["/var/www"]

EXPOSE 80 443 9000

ENTRYPOINT ["/usr/bin/supervisord"]