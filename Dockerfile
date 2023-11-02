# ================
#Base Stage
#================
FROM serversideup/php:8.2-fpm-nginx as base

ENV AUTORUN_ENABLED=false
ENV SSL_MODE=mixed
ENV PHP_MAX_EXECUTION_TIME=3600
ENV PHP_MEMORY_LIMIT=3060M
ENV PHP_POST_MAX_SIZE=3060M
ENV PHP_PM_MAX_SPARE_SERVERS=10
ENV PHP_PM_START_SERVERS=5
ENV PHP_PM_MIN_SPARE_SERVERS=5
ENV PHP_PM_MAX_CHILDREN=15

# ================
# Production Stage
# ================
FROM base as production

RUN apt-get update && \
    apt-get install -y \
    php8.2-imagick \
    php8.2-bcmath \
    php8.2-gd \
    php8.2-cli \
    php8.2-pgsql \
    php8.2-mbstring \
    php8.2-xml \
    php8.2-zip \
    php8.2-curl \
    php8.2-calendar \
    php8.2-exif \
    php8.2-ftp \
    php8.2-intl \
    php8.2-mysql \
    php8.2-soap \
    php8.2-sockets \
    php8.2-apcu \
    php8.2-opcache \
    php8.2-excimer \
    php8.2-redis
    #rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install phpredis extension
# RUN pecl install redis &&
# docker-php-ext-enable redis

USER $PUID:$PGID

#Copy contents.
#- To ignore files or folders, use .dockerignore
COPY --chown=$PUID:$PGID . .

RUN composer install --optimize-autoloader --no-dev --no-interaction --no-progress --ansi

#artisan commands
#RUN php ./artisan optimize:clear

# php ./artisan route:cache && \
#     php ./artisan view:cache

USER root:root
