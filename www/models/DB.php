<?php

require_once __DIR__ . '/../functions/db.php';

function DB_all (){
    $sql = 'SELECT * FROM news ORDER BY date DESC';
    return db_query($sql);
}

function DB_one ($id){
    $sql = 'SELECT * FROM news WHERE id =' . $id;
    return db_query($sql);
}

function DB_add($title,$text){
    $sql = "INSERT INTO news (title,text) VALUES ('$title','$text')";
    db_execute($sql);
}