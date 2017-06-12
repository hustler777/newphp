<?php

require_once __DIR__ . '/../classes/DB.php';

class news
{
    public $id;
    public $title;
    public $text;

    public static function getAll(){
        $db = new DB;
        return $db->DB_query('SELECT * FROM news ORDER BY date DESC', 'news');
    }

    public static function getOne($id){
        $db = new DB;
        return $db->DB_query('SELECT * FROM news WHERE id =' . $id, 'news');
    }

    public static function add($title,$text){
        $db = new DB;
        return $db->DB_execute("INSERT INTO news (title,text) VALUES ('$title','$text')", 'news');
    }
}