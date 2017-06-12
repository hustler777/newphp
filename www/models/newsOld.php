<?php

require_once __DIR__ . '/../classes/DB.php';

 function news_getAll(){
    $newsAll = new DB;
    $sql = 'SELECT * FROM news ORDER BY date DESC';
    return $newsAll->DB_query($sql);
}

function news_getOne($id){
    $newsOne = new DB;
    $sql = 'SELECT * FROM news WHERE id =' . $id;
    return $newsOne->DB_query($sql);
}

function news_add($title,$text){
    $newsAdd = new DB;
    $sql = "INSERT INTO news (title,text) VALUES ('$title','$text')";
    return $newsAdd->DB_execute($sql);
}