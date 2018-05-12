FROM ubuntu:16.04

# Install Nginx.
RUN \
  apt-get update -y && \
  apt-get install -y nginx && \
  apt-get install software-properties-common -y && \
  export LANG=C.UTF-8 && \
  add-apt-repository ppa:ondrej/php 

RUN  apt-get update -y && \
  apt-get install vim iputils-ping net-tools -y && \
  apt install php7.0-fpm php7.0-common php7.0-mongodb php-pear php7.0-dev -y && \
  pecl install mongodb -y && \
  echo "extension=mongodb.so" >> /etc/php/7.0/fpm/php.ini && \
  echo "extension=mongodb.so" >> /etc/php/7.0/cli/php.ini && \
  rm -rf /var/lib/apt/lists/* && \
  echo "\ndaemon off;" >> /etc/nginx/nginx.conf && \
  chown -R www-data:www-data /var/lib/nginx

# Define mountable directories.

# Define working directory.
WORKDIR /etc/nginx
# Define default command.
# Expose ports.
EXPOSE 80

COPY nginx_default.conf sites-available/default
COPY cloudtech.php /var/www/html/
COPY cloudtech_insert.php /var/www/html/

ENTRYPOINT service php7.0-fpm start && nginx
