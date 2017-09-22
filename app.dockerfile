FROM php:7.1-fpm

RUN apt-get update
RUN groupadd -r laravel && useradd --no-log-init -r -g laravel laravel

# Install PHP packages
RUN apt-get install -y --silent libmcrypt-dev \
    mysql-client libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install mcrypt pdo_mysql

# Install Composer
USER laravel
RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/bin/ --filename=composer
COPY composer.json ./
COPY composer.lock ./
#RUN chown -R laravel /home/laravel/.composer/cache/repo/https---packagist.org
#RUN chown -R laravel /home/laravel/.composer/cache/files/

# Install NPM
RUN curl --silent --location https://deb.nodesource.com/setup_6.x | bash -
COPY package.json ./
RUN apt-get install --yes nodejs

COPY . ./

# Run Composer
RUN composer dump-autoload --optimize --silent && \
	composer run-scripts post-install-cmd

# Run NPM
USER root
RUN npm install
