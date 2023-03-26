FROM webdevops/php-nginx

RUN sudo chown -R application:application /app

USER application