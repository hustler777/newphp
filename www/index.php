<?php

require_once __DIR__ . '/models/DB.php';
if(empty($_GET)) {
    $items = DB_all();
}else{
    $items = DB_one($_GET['id']);
}
include __DIR__ . '/views/index.php';