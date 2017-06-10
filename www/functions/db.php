<?php

function db_connect(){
    mysql_connect('localhost','root','');
    mysql_select_db('photos');
}

function db_query($sql)
{
    db_connect();
    $res = mysql_query($sql);
    if(false === $res){
        return false;
    }
    $ret = [];
    while ($row = mysql_fetch_assoc($res)) {
        $ret[] = $row;
    }
    return $ret;
}

function db_execute($sql){
    db_connect();
    mysql_query($sql);
}
