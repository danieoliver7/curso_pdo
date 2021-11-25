<?php

namespace app\models;

class Connection{

    public static function connect(){

        $pdo =  new PDO("mysql:dbname=curso-pdo", "root", "");
    }
    
}