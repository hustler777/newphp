<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <a href="/form.php">Добавить статью</a>
    <?php foreach($items as $item): ?>
        <h2><?php echo $item['title']; ?></h2>
        <p><?php echo $item['text']; ?></p>
        <a href="?id=<?php echo $item['id'];?>">Перейти к статье</a>
    <?php endforeach; ?>
</body>
</html>


