# Финальное ДЗ (profit PHP-2)
## Фан-сайт музыкальной группы.
**Framework Laravel 5.4**

Реализовано
* Главная страница с описанием группы
* Просмотр альбомамов и песен
* Просмотр статей (используется пагинация)
* Админ - панель

Миграции
* [Миграции для всех таблиц + возможность заполнить таблицы первоначальными данными](https://github.com/skiphog/kino/tree/master/database/migrations)

Модели
* [Album (Использует связь - один ко многим)](https://github.com/skiphog/kino/blob/master/app/Album.php)
* [Song (Связанная модель)](https://github.com/skiphog/kino/blob/master/app/Song.php)
* [Article](https://github.com/skiphog/kino/blob/master/app/Article.php)
* User (из коробки)

Контроллеры
* [Контроллеры для работы](https://github.com/skiphog/kino/tree/master/app/Http/Controllers)
* [Валидация request для статей](https://github.com/skiphog/kino/blob/master/app/Http/Requests/ArticleRequest.php)

Шаблоны
* [Шаблоны для работы (Blade)](https://github.com/skiphog/kino/tree/master/resources/views)

Админ-панель
* [Доступ только авторизованному пользователю](https://github.com/skiphog/kino/blob/master/app/Http/Controllers/Admin/Admin.php#L16)
* [Возможность (добавлять / редактировать / удалять) статьи](https://github.com/skiphog/kino/blob/master/app/Http/Controllers/Admin/ArticleController.php)