# Инструкция по открытию проекта
1. Установить Composer
2. В терминале VS Code вводим команду 'composer update'.
3. Поменять имя env.example на .env
4. Ввести команду в консоли: php artisan key:generate
5. Ввести команду в консоли: php artisan migrate
6. Ввести команду в консоли: php artisan storage:link  
7. Ввести команду в консоли: php artisan serve

Данные по БД:

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=short_url
- DB_USERNAME=root
- DB_PASSWORD=

