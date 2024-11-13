FROM php:8.2-fpm-alpine3.20

RUN app-get update && app-get install -y \
  git \
  curl \
  zip \
  vim \
  uzip 

WORKDIR /var/www