Тестовое задание для ИНЛАЙН

Задание

Имеются следующие ресурсы:
Список записей блога: https://jsonplaceholder.typicode.com/posts
Комментарии к записям: https://jsonplaceholder.typicode.com/comments

Требуется:

1. Создать схему БД для хранения записей и комментариев к ним. SQL-запросы для создания БД поместить в отдельный файл.

2. Создать PHP скрипт, который скачает список записей и комментариев к ним и загрузит их в БД. По завершению загрузки, вывести в консоль надпись: "Загружено Х записей и Y комментариев"

3. Создать HTML-форму поиска записей по тексту комментария (поле ввода и кнопка "Найти"). 
Пример: при вводе "laudanti" нужно вывести все записи, в комментариях к которым есть эта строка. (имеется в этой записи https://jsonplaceholder.typicode.com/posts/6/comments). 
Поиск должен работать при вводе минимум 3-х символов. В результатах поиска вывести заголовок записи и комментарий с искомой строкой.

При локальном запуске нужно ввести команду
Make start
Она создаст БД, после этого при заходе на страницу локалхост будут созданы таблицы

Страничка сайта по умолчанию
![Снимок экрана 2024-12-04 061710](https://github.com/user-attachments/assets/9535253e-ff9e-4fd7-8675-bff4d7e37a74)

Если попытаться скачать данные повторно, то высветится ошибка
![Снимок экрана 2024-12-04 061731](https://github.com/user-attachments/assets/815bcf40-365a-41e4-8b13-22d106159306)

Искать можно начиная от 3 символов
![Снимок экрана 2024-12-04 061741](https://github.com/user-attachments/assets/87ca0b47-0d7e-4e62-bc25-b2944362a541)

Результат поиска
![Снимок экрана 2024-12-04 062236](https://github.com/user-attachments/assets/1d850588-a7b3-4553-a986-ae65acd20adb)