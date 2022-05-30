# Yngling
> Русско - Английский словарь для запоминания слов

<p align="center">
<img src="https://thumbsnap.com/i/ncBQDaV3.jpg?0530">
</p>

          
## Функции 

- Загрузка файла словаря в систему
- Динамическое переключение слов
- Изменение направления перевода
- Управление словарями
- Управление личным аккаунтом
- Прикрепление картинки к слову

## Требования к серверу
>Фреймворк Laravel имеет несколько системных требований. Вы должны убедиться, что ваш веб-сервер имеет следующую минимальную версию PHP и расширения:

- PHP >= 7.3
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Конфигурация сервера Nginx (Пример)
>Пожалуйста, убедитесь, что, как и в приведенной ниже конфигурации, ваш веб-сервер направляет все запросы на сервер вашего приложения. public/index.php файл. Вы никогда не должны пытаться переместить index.php файл в корень вашего проекта, так как при обслуживании приложения из корня проекта многие конфиденциальные файлы конфигурации будут доступны для общего доступа в Интернет:

```server {
    listen 80;
    listen [::]:80;
    server_name example.com;
    root /srv/example.com/public;
 
    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";
 
    index index.php;
 
    charset utf-8;
 
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
 
    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }
 
    error_page 404 /index.php;
 
    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }
 
    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

## Установка

- `git clone https://github.com/nikolaevdev/yngling.git .` в папке, где будет расположено приложение
- Отредактируйте `.env` и задайте данные подключения к базе данных
- (При установке с помощью git clone или загрузки запустите "php artisan key:generate" и "php artisan jwt:secret")
- `php artisan migrate`
- `npm install`

## Использование

#### Development

```bash
npm run dev
```

#### Production

```bash
npm run build
```

## Changelog
Пожалуйста, ознакомьтесь с [CHANGELOG](CHANGELOG.md) для получения дополнительной информации о том, что изменилось в последнее время.

