FROM php:5.6-apache
RUN docker-php-source extract \
    # do important things \
    && docker-php-source delete

COPY ./packages ./packages

RUN DEBIAN_FRONTEND=noninteractive && \
  apt-get update && \
  apt-get -y install alien libaio1/oldstable

RUN alien --scripts -i packages/oracle-instantclient19.3-basiclite-19.3.0.0.0-1.x86_64.rpm
RUN alien --scripts -i packages/oracle-instantclient19.3-sqlplus-19.3.0.0.0-1.x86_64.rpm
RUN alien --scripts -i packages/oracle-instantclient19.3-devel-19.3.0.0.0-1.x86_64.rpm

RUN pecl install oci8-2.0.12


