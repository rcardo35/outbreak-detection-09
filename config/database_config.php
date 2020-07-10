<?php
    $host = "us-cdbr-east-02.cleardb.com";
    $db = "heroku_c224005b36bf596";
    $user = "ba1b3bebb866bc";
    $password ="bc392e11";
    $charset = "";
    
    global $conn;
    $dsn = "mysql:host=$host;dbname=$db";
    
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\PDOException $e){
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
    