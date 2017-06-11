<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<a href="/">На главную</a>
<?php foreach($items as $item): ?>
    <h2><?php echo $item['title']; ?></h2>
    <p><?php echo $item['text']; ?></p>
<?php endforeach; ?>
</body>
</html>


