#!/bin/sh
apt-get update

apt-get -yq install \
    locales \
    language-pack-de \
    re2c \
    ccache \
    mysql-server \
    libaspell-dev \
    libbz2-dev \
    libcurl4-gnutls-dev \
    libenchant-dev \
    libfreetype6-dev \
    libgmp-dev \
    libicu-dev \
    libjpeg-dev \
    libkrb5-dev \
    libonig-dev \
    libpng-dev \
    libpq-dev \
    libpspell-dev \
    libsasl2-dev \
    libsqlite3-dev \
    libsodium-dev \
    libtidy-dev \
    libwebp-dev \
    libxml2-dev \
    libxpm-dev \
    libxslt1-dev \
    libzip-dev
