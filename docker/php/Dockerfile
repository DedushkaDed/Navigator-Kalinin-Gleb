FROM bitrixdock/php71-fpm:latest

ADD ./php.ini /etc/php/7.1/fpm/conf.d/90-php.ini
ADD ./php.ini /etc/php/7.1/cli/conf.d/90-php.ini

RUN usermod -u 1000 www-data

RUN curl -sL https://deb.nodesource.com/setup_10.x | bash - && apt -y install nodejs

RUN npm install --global yarn

RUN composer self-update

WORKDIR "/var/www/bitrix"

EXPOSE 9000