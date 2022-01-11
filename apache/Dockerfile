#FROM php:7.4-apache
FROM ubuntu/apache2:2.4-20.04_beta

WORKDIR /opt/sites/

COPY ./apache2.conf.default /etc/apache2/apache2.conf

COPY ./apache2.conf.default /etc/apache2/apache2.conf

RUN apt-get update && apt-get install -y \
    curl zip unzip libapache2-mod-php7.4 php7.4 php7.4-cli php7.4-intl php7.4-mbstring php7.4-mysql php7.4-sqlite -y \  
    && apt-get purge --auto-remove -y \
    && rm -rf /var/lib/apt/lists/*

RUN curl http://getcomposer.org/installer | php \
    && apt-get update \
    && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite php7.4
#RUN a2enmod php7.4

RUN usermod -u 1000 www-data
RUN php --ini
#RUN composer require phpmailer/phpmailer:5.2.4

#RUN chmod +x myproject/bin/cake

RUN php composer.phar create-project --prefer-dist --ignore-platform-reqs cakephp/app:4.* cake4

CMD echo "127.0.0.1 cake-local.br ${hostname}" >> /etc/hosts 
CMD echo "${IPAddress} cake-local.br ${hostname}" >> /etc/hosts 

EXPOSE 80
