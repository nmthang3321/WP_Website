FROM httpd:2.4.33-alpine

RUN apk update; \
    apk upgrade;

RUN echo "Include /usr/local/apache2/conf/apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf