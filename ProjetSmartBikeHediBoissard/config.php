<?php

define('DB_SERVER', 'mysql');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Hs12hs12.');
define('DB_NAME', 'smartbike');

try{
    $pdo = new PDO("mysql:host=" . DS_SERVER . ";db_name" .DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e){
    die("ERROR: Could not connect." . $e->getMessage());

}
?>