<?php

class DB
{
    public function __construct(){
        mysql_connect('localhost','root','');
        mysql_select_db('photos');
    }

    public function DB_query($sql,$class = 'stdClass')
    {
        $res = mysql_query($sql);
        if(false === $res){
            return false;
        }
        $ret = [];
        while ($row = mysql_fetch_object($res,$class)) {
            $ret[] = $row;
        }
        return $ret;
    }

    public function DB_execute($sql)
    {
        mysql_query($sql);
    }
}