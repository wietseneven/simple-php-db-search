<?php
$host = 'localhost';
$dbname = 'simplesearch';
$username = 'root';
$password = 'root';
try {
    $db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8',
        $username,
        $password);
}
catch(PDOException $e) {
    echo $e->getMessage();
}