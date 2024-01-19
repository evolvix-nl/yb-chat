FROM dunglas/frankenphp

RUN install-php-extensions \
    redis \
    zip \
    pdo_mysql \
    pcntl

RUN mkdir -p /.composer/ /.config/psysh/ && \
    chown -R 1000:1000 /.composer && \
    chown -R 1000:1000 /.config/psysh

COPY --from=composer /usr/bin/composer /usr/bin/composer
