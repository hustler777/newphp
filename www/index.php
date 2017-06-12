<?php

require_once __DIR__ . '/models/News.php';

if(empty($_GET)) {
    $items = News::getAll();
    include __DIR__ . '/views/all.php';
}else{
    $items = News::getOne($_GET['id']);
    include __DIR__ . '/views/one.php';
}
