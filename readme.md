# Тестовое задание Форма обратной связи (Requests Form Laravel 5.1)

## Задание

Основано на [задании](https://github.com/funkylen/beboss-test-assignments#%D0%B7%D0%B0%D0%B4%D0%B0%D0%BD%D0%B8%D0%B5-3-%D0%BD%D0%B5%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5), дополнено по собственному усмотрению.

Разработать сайт на Laravel. На сайте должны быть следующие страницы:
* Главная страница (www.example.com/) - представляет собой список пользователей
* Страница отправки заявки (www.example.com/request) - представляет собой форму со следующими полями:
    * выбор получателя из списка пользователей* контактные данные отправителя
    * текст заявки
* Страница пользователя (www/example.com/([a-zA-Z0-9]+)) - у каждого пользователя есть произвольный текстовый альяс (кроме request), по которому открывается его страница. На ней данные пользователя + форма заявки без выбора получателя
* Админка (CRUD) для управления пользователями и заявками

Для решения задачи необходимо использовать стандартные методы Laravel.

При отправке заявки из общей формы после выбора юзера подгружать с помощью Ajax и отображать сведения о нём.

Список пользователей и заявки хранить в БД, в таблицах persons и requests.

Пользователь:
* Имя
* Логин
* Почта

Заявка:
* Получатель
* Отправитель
* Текст заявки

## Инструкция по разворачиванию приложения
### Docker

Для Linux-систем: по умолчанию владельцем файлов, которые создаются при работе контейнера, является пользователь root. Если доступ к файлам будет осуществляться с хоста, то это может быть проблемой, т.к. файлы будут доступны только для чтения. Чтобы сделать файлы доступными для не-root пользователя, необходимо в конфиге вручную установить UID и GID пользователя. Чтобы определить uid и gid, можно воспользоваться соответственно командами id -u и id -g.

При использовании Windows данная проблема не появляется.

Пример значения:
~~~
user: 1000:1000
~~~

Создать и запустить контейнеры:
~~~
docker-compose up --build
~~~

Установить зависимости composer:
~~~
docker-compose exec app composer install --no-scripts
~~~

Cоздать .env-файл с конфигурацией приложения:
~~~
docker-compose exec app php -r "copy('.env.example', '.env');"
~~~

Сгенерировать Application key:
~~~
docker-compose exec app php artisan key:generate
~~~

Указать в .env конфигурацию БД:
~~~
DB_CONNECTION=sqlite
~~~

Создать файл БД (sqlite):
~~~
docker-compose exec app touch /app/database/database.sqlite
~~~

Выдать права на запись в директорию с БД и логами:
~~~
docker-compose exec app chown -R :www-data /app/database
docker-compose exec app chmod -R 775 /app/database
docker-compose exec app chown -R :www-data /app/storage
docker-compose exec app chmod -R 775 /app/storage
~~~

Применить миграции:
~~~
docker-compose exec app php artisan migrate
~~~

Установить зависимости node:
~~~
docker-compose exec node npm install
~~~

Сгенерировать ассеты:
~~~
docker-compose exec node gulp
~~~

Добавить в hosts связь IP-адреса с именем хоста:
~~~
127.0.0.1    requests-form-l51.loc
~~~

Например, с помощью команды:
~~~
echo '127.0.0.1 requests-form-l51.loc' | tee -a /etc/hosts
~~~

## Тесты

Запуск:
~~~
docker-compose exec app /app/vendor/bin/phpunit
~~~