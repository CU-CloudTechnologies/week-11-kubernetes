FROM ubuntu:16.04
USER root

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get -y update && \
  apt-get install -y nginx php php-fpm php-mysql && \
  rm -rf /var/lib/apt/lists/* && \
  echo "\ndaemon off;" >> /etc/nginx/nginx.conf && \
  chown -R www-data:www-data /var/lib/nginx 

WORKDIR /etc/nginx
ADD ./web/html /var/www/html
ADD ./web/default sites-enabled/default
EXPOSE 80

#RUN service php7.2-fpm start

#CMD ["nginx"]
#ENTRYPOINT ["/usr/sbin/nginx"]

ENTRYPOINT service php7.0-fpm start && nginx
