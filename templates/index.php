<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin-left: 200px;
        }
    </style>
</head>
<body>
    <h1 class="mt-5 mb-3">Поиск записей по тексту коментариев</h1>
    <form method = "GET" action="">
        <input type="hidden" name ="searchInput" value="searchInput">
        <input type = "text" name ="searchInput" placeholder="Введите,как минимум, 3 символа">
        <button type = "submit">Найти</button>
    </form>
    <form method = "GET" action="">
        <input type="hidden" name ="download" value="download">
        <button type = "submit">Загрузить данные в базу</button>
    </form>
    <?php if (isset($errors)):?>
        <div class="alert alert-danger">
            <?= $errors?>
        </div>
    <?php endif;?>
    <?php if (isset($data)):?>
    <h2>Результаты поиска:</h2>
    <?php $currentPost = null;?>
    <?php foreach ($data as $item):?>
        <?php if ($currentPost!= $item['title']):?>
            <?php if ($currentPost!== null):?>
                </ul>
            <?php endif;?>
            <strong >Пост:</strong>
            <h3><?= $item['title']?></h3>
            <ul>
            <?php $currentPost = $item['title'];?>
        <?php endif;?>
        <li>
            <strong>Комментарий:</strong>
            <p>postId = <?= $item['postid']?></p>
            <p>Id = <?= $item['id']?></p>
            <p>name = <?= $item['name']?></p>
            <p>email = <?= $item['email']?></p>
            <p>body = <?= $item['body']?></p>
        </li>
    <?php endforeach;?>
    </ul>
<?php endif;?>
</body>
</html>
