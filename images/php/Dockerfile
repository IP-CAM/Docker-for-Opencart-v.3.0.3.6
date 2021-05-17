
    FROM php:7.4-fpm-alpine
    
    # ... Other instructions ...
    
    # Setup GD extension
    RUN apk add --no-cache \
          freetype \
          libjpeg-turbo \
          libpng \
          freetype-dev \
          libjpeg-turbo-dev \
          libpng-dev \
        && docker-php-ext-configure gd \
          --with-freetype=/usr/include/ \
          # --with-png=/usr/include/ \ # No longer necessary as of 7.4; https://github.com/docker-library/php/pull/910#issuecomment-559383597
          --with-jpeg=/usr/include/ \
        && docker-php-ext-install -j$(nproc) gd \
        && docker-php-ext-enable gd \
        && apk del --no-cache \
          freetype-dev \
          libjpeg-turbo-dev \
          libpng-dev \
        && rm -rf /tmp/*

    RUN apk add --no-cache zip libzip-dev
    RUN docker-php-ext-configure zip
    RUN docker-php-ext-install zip
    RUN docker-php-ext-install pdo pdo_mysql

    # RUN mysql -uroot -proot < ./www/w-shop.test/sql/transmet.sql
    
    ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini
    
    WORKDIR /var/www
    
    CMD ["php-fpm"]
