FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    curl \
    zip \
    unzip

RUN curl -sSL https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions -o - | sh -s \
    curl gd intl mbstring mysqli odbc pdo pdo_mysql soap sockets xml zip xdebug exif sqlite3 gettext bcmath csv event imap inotify mcrypt redis

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.3/install.sh | bash

ENV NVM_DIR=/root/.nvm
ENV PATH="${NVM_DIR}/versions/node/v18.x.x/bin:${PATH}"
RUN . "$NVM_DIR/nvm.sh" && \
    nvm install 18 && \
    nvm use 18 && \
    nvm alias default 18

COPY . /var/www/html
WORKDIR /var/www/html

RUN mkdir -p /var/www/html/storage/app/ssh/keys && \
    chmod -R 755 /var/www/html/storage

RUN composer install

RUN . "$NVM_DIR/nvm.sh" && npm install
RUN . "$NVM_DIR/nvm.sh" && npm run build
