FROM ubuntu:groovy-20201125.2

WORKDIR /app

RUN apt update && apt install -y software-properties-common && add-apt-repository ppa:ondrej/php
RUN apt update && apt install -y php8.0-fpm php8.0-pgsql php8.0-gd php8.0-zip nginx libpcre3-dev unzip

CMD /etc/init.d/php8.0-fpm start && nginx -g "daemon off;"