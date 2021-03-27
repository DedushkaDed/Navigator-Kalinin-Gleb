# Черновик проекта Навигатор для выполнения практического задания по PHP

## Развертывание

1. Установить php >=8 + Composer >=2
2. Установить Docker >=19
3. Форкнуть проект и склонировать репозиторий
4. Запуск проекта 

### Установка PHP + Composer >=2

#### Windows

Скачать архив https://windows.php.net/download#php-8.0-ts-vs16-x64
Распаковать на диск в папку C:\php8, добавить в переменную [PATH](https://stackoverflow.com/questions/44272416/how-to-add-a-folder-to-path-environment-variable-in-windows-10-with-screensho) путь C:\php8

Проверить работоспособность командой `php -v`

Установить composer https://getcomposer.org/doc/00-intro.md#using-the-installer



#### Linux

Выполнить команду в терминале:

```bash
sudo apt update  
sudo apt install php8.0
```

Установить composer https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos

1) скачать composer

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

2) переместить composer 
```bash
mv composer.phar /usr/local/bin/composer
```



### Установка Docker

#### Windows

https://docs.docker.com/docker-for-windows/install/

#### Linux

1) Установка Docker, выполнить Шаг 1 и 2
https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-20-04-ru

2) Установка Docker Compose Выполнить Шаг 1
https://www.digitalocean.com/community/tutorials/how-to-install-docker-compose-on-ubuntu-18-04-ru
   

### Фокнуть проект

Куратор должен создать проект с помощью телеграмм-бота @iqdevgitlab_bot, используя команду:  
`/createtestnavigator <email>` ,  
где `<email>` - почта стажера, стажер должен быть зарегистрирован в гитлабе
<details>
  <summary>Ручной способ</summary>

#### Стажер

1) Склонировать текущий репозиторий
2) Получить у куратора репозиторий для выполнения задачи
3) Выполнить инструкцию для существующего проекта:

```bash
cd existing_repo
git remote rename origin old-origin
git remote add origin <url you repository>
git push -u origin --all
git push -u origin --tags
```


#### Куратор

1) Пригласить стажера в текущий репозиторий как Reporter
2) Создать в группе [Стажеры](https://gitlab.iqdev.digital/stazher) репозиторий с произвольным именем, в описании указать разработчика. Добавить стажера в проект как разработчика

</details>


### Запуск проекта


1) скопировать файл .env.dist в корень проекта с названием .env
2) заполнить переменные:

```dotenv
PROJECT_NAME=navigator-test

DOCKER_PORT_MYSQL=3211 # внешний port для mysql
DOCKER_PORT_MEMCACHED=12123 # внешний port для memched
DOCKER_PORT_PHP=9001 # внешний port для php
DOCKER_PORT_HTTP=8081 # внешний port для nginx, доступ к сайту будет доступен по адресу localhost:8081

BX_MYSQL_HOST=navigator-test-mysql # хост mysql, формируется по шаблону %PROJECT_NAME%-mysql
BX_MYSQL_DATABASE=navigator-test # название таблицы mysql
BX_MYSQL_USER=user # логин для пользователя mysql
BX_MYSQL_PASSWORD=123456 # пароль для пользователя mysql

BX_CACHE_HOST=memcached # хост memcached

BX_DEBUG=1 # включение дебаг режима, установить 1 , для 

BX_CRYPTO_KEY=randstr # ключ шифрования, рандомная строка
```

3) запустить докер 
```composer docker:run```
   
4) очистить папку public, скачать файл bitrixsetup.php с сайта битрикса
5) перейти по адресу localhost:8001/bitrixsetup.php и выполнить установку битрикса
6) удалить лишние файлы, которые были сгенерированные в процессе установки
```git reset --hard && git clean -fd```
7) установить зависимости следующей командой
```composer dependencies:dev```
   
8) перейти по адресу http://localhost:8001/, если всё ок, то увидите сообщение об успешной установке

## Работа с composer

Работать с композером следует через окружение docker, есть два варианта 
1) подключиться к терминалу докера с помощью команды 
```bash 
docker exec -it <container_name> /bin/bash
```

где container_name - имя контейнера, которое формируется по следующему шаблону %PROJECT_NAME%-php, например navigator-test-php

Получив доступ к докеру, выполнять команды внутри него  
2) использовать скрипт проекта docker-shell.php, который в качестве аргумента принимает строку с командой, например команда для установки пакета rakit/validation
```bash
php docker-shell.php "composer require rakit/validation"
```