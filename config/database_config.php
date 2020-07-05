<?php
    $host = "us-cdbr-east-02.cleardb.com";
    $db = "heroku_c224005b36bf596";
    $user = "ba1b3bebb866bc";
    $password ="bc392e11";
    $charset = "";
    
    $dsn = "mysql:host=$host;dbname=$db";
    
    try {
        $covid_pdo = new PDO($dsn, $user, $password);
    } catch (\PDOException $e){
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
    