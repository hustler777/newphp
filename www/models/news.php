<?php

require_once __DIR__ . '/../functions/db.php';

function news_getAll (){
    $sql = 'SELECT * FROM news ORDER BY date DESC';
    return db_query($sql);
}

function news_getOne ($id){
    $sql = 'SELECT * FROM news WHERE id =' . $id;
    return db_query($sql);
}

function news_add($title,$text){
    $sql = "INSERT INTO news (title,text) VALUES ('$title','$text')";
    db_execute($sql);
}