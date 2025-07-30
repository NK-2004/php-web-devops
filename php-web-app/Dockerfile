FROM php:8.2-apache

# Install net-tools to use netstat
RUN apt-get update && apt-get install -y net-tools

COPY . /var/www/html/

EXPOSE 80
