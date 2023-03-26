FROM php:8.0-apache

# enable required apache modules
RUN a2enmod rewrite

# update
RUN apt-get update && apt-get upgrade -y

