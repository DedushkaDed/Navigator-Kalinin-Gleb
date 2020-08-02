# Заготовка для bitrix-проекта

### Структура

Файл ```./bootstrap.php``` подключаем как можно раньше, в идеале в ```./public/bitrix/php_interface/dbconn.php```, 
что бы переменные окружения из ```./.env``` были инициализированы прежде чем Bitrix начнёт коннект к БД.








@TODO: 

```php
Bitrix\Main\EventManager::getInstance()->addEventHandler('', 'OnBuildCLICommandsList', function (Bitrix\Main\Event $event) {
    return new Bitrix\Main\EventResult($event->getEventType(), [
        'name' => 'test-command-1',
        'command' => function () {
            return new TestCommand('test-command-1');
        },
    ]);
});
Bitrix\Main\EventManager::getInstance()->addEventHandler('', 'OnBuildCLICommandsList', function (Bitrix\Main\Event $event) {
    return new TestCommand('test-command-2');
});
IQDEV\App::logger()->info('123');
```

### Docker howto

@TODO: 


Как развернуть боевой

Клонируем репозиторий

по пути docker/nginx/conf копируем и переименовываем конфиги и меняем в них #SERVER_NAME#

Там же в конфигах удаляем временно все от битрикса, копируем/переименовываем init-letsencrypt.sh.dist

меняем в нем необходимое и запускаем

возвращаем в конфигах все про битрикс

восстанавливаем битрикс

в контейнере обновляем копмозер

пользуемся