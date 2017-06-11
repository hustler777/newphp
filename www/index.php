<?php

require_once __DIR__ . '/models/news.php';

if(empty($_GET)) {
    $items = news_getAll();
    include __DIR__ . '/views/all.php';
}else{
    $items = news_getOne($_GET['id']);
    include __DIR__ . '/views/one.php';
}
