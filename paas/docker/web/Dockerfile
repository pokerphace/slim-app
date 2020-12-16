FROM ubuntu:groovy-20201125.2

WORKDIR /app

RUN apt update && apt install -y software-properties-common && add-apt-repository ppa:ondrej/php

ENV TZ=Europe/Lisbon
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt update && apt install -y php8.0-fpm php8.0-pgsql php8.0-gd php8.0-zip php8.0-dom php8.0-mbstring nginx libpcre3-dev unzip git curl

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

CMD /etc/init.d/php8.0-fpm start && nginx -g "daemon off;"