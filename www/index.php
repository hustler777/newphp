<?php

require_once __DIR__ . '/models/news.php';

if(empty($_GET)) {
    $items = news::getAll();
    include __DIR__ . '/views/all.php';
}else{
    $items = news::getOne($_GET['id']);
    include __DIR__ . '/views/one.php';
}
