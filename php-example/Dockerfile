FROM php:8.2-apache

ENV UID=1001 GID=1001

RUN addgroup --system --gid $GID grupo-itlf \
    && adduser --system --uid $UID --no-create-home --ingroup grupo-itlf user



WORKDIR /var/www/html

COPY . .

RUN chown -R user:grupo-itlf /var/www/html/

USER user

COPY apache-ports.conf /etc/apache2/ports.conf
COPY apache-vhost.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 8080

