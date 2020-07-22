<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    
    $host = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    
    global $conn;
    $dsn = "mysql:host=$host;dbname=$db";
    
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\PDOException $e){
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
    