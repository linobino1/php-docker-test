FROM webdevops/php-nginx:8.2-alpine

ENV WEB_DOCUMENT_ROOT=/app

WORKDIR /app

COPY . .

# Ensure all of our files are owned by the same user and group.
RUN chown -R application:application .