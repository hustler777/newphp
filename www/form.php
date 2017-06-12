<?php

include __DIR__ . '/views/form.php';

require_once __DIR__ . '/models/News.php';

if(empty($_POST['title']) && empty($_POST['text'])) {
    echo 'Заполните все поля';
    die;
}else if(empty($_POST['title']) || empty($_POST['text'])) {
    echo 'Заполните все поля';
    die;
}else {
    News::add($_POST['title'], $_POST['text']);
}
