FROM php:7.1-fpm

RUN apt-get update
RUN groupadd -r laravel && useradd --no-log-init -m -r -g laravel laravel
RUN chown -Rf laravel .

# Install PHP packages
USER root
RUN apt-get install -y --silent libmcrypt-dev \
    zip unzip \
    mysql-client libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install mcrypt pdo_mysql

# Install Composer
USER root
RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/local/bin --filename=composer

# Install NPM
USER root
RUN curl -sL https://deb.nodesource.com/setup_8.x | bash -
RUN apt-get install --yes nodejs
#RUN npm install -g npm #bug: Error: Cannot find module 'npmlog'

# Run Composer
USER laravel
COPY composer.json ./
COPY composer.lock ./
COPY database/ ./database/
RUN ls -la .
RUN composer install --no-scripts --no-autoloader
#RUN composer dump-autoload --optimize \
#	&& composer run-scripts post-install-cmd

# Run NPM
USER laravel
COPY package.json ./
RUN npm install

#USER laravel
#COPY . ./
#CMD [ "npm", "run", "watch" ]
