<h1>Инструкция по установке. </h1>
1) Скачать архив<br />
2) Запустить команду docker compose up --build<br />
   Или docker compose up --build -d (для запуска контейнера в фоновом режиме)<br />
3) Подготовить проект  <br/>
md .\bootstrap\cache <br/>
md .\public\resources
3) Скачать зависимости composer update
4) Настроить файл env (настройки mysql находятся в файле docker-compose.yml)
4) Запустить миграции: docker compose exec php-cli bash<br />
php artisan migrate
5) Готово! Проверить работу можно открыв URL localhost:8080 в браузере
