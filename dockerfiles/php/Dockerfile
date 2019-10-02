FROM php:5.6-apache
RUN docker-php-source extract \
    # do important things \
    && docker-php-source delete

COPY . ./local

RUN DEBIAN_FRONTEND=noninteractive && \
  apt-get update && \
  apt-get -y install alien

RUN alien --scripts -i local/oracle-instantclient19.3-basiclite-19.3.0.0.0-1.x86_64.rpm


