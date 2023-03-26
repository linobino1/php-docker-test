FROM webdevops/php-nginx

USER application

RUN sudo chown -R application:application /app