FROM registry.redhat.io/ubi10/httpd-24:10.0

ADD files /var/www/html

CMD run-httpd