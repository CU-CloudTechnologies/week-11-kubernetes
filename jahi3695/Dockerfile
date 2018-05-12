FROM ubuntu:16.04

RUN apt-get -y update && \
  apt-get install -y nginx php php-fpm php-mysql && \
  rm -rf /var/lib/apt/lists/* && \
  echo "\ndaemon off;" >> /etc/nginx/nginx.conf && \
  chown -R www-data:www-data /var/lib/nginx 

WORKDIR /etc/nginx

COPY nginx_default.conf sites-available/default
COPY app.php /var/www/html/

EXPOSE 80

ENTRYPOINT service php7.0-fpm start && nginx
