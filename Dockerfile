FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    curl

RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.3/install.sh | bash

ENV NVM_DIR=/root/.nvm
RUN . $NVM_DIR/nvm.sh
RUN nvm install 18
RUN nvm use 18

COPY . /var/www/html
WORKDIR /var/www/html

RUN npm install
RUN npm run build
