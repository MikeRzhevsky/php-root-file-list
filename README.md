Написать простое веб-приложение, которое выводит таблицу со списком файлов в корневой директории хоста (DOCUMENT_ROOT).
Столбцы таблицы:
    • Название файла/папки;
    • Размер (для папок выводить [DIR]);
    • Тип (вывести расширение файла, для папок пустая строка);
    • Дата последней модификации.
При первом открытии страницы данные должны считываться и записываться в MYSQL таблицу. При последующих открытиях страницы данные должны выводиться из MYSQL таблицы игнорируя текущую ситуацию в корневой директории. Так называемый кэш в БД.
Внизу вывести ссылку “Обновить”, которая обновит данные о файлах в MYSQL таблице и на экране.


Реализация:
1) Распаковать архив в корневую директорию
2) Изменить параметры подключения в congif.php
3) запусить корневой файл index.php в браузере
4) enjoy
