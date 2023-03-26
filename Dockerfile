FROM webdevops/php-nginx

RUN chown -R application:application /app

USER application