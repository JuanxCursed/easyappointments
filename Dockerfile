FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    curl \
    zip \
    unzip

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

RUN composer install

RUN . "$NVM_DIR/nvm.sh" && npm install
RUN . "$NVM_DIR/nvm.sh" && npm run build
