<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "rahan2003";
$dbName = "users_php_hw";

$pdo = new PDO("mysql: $serverName;port=8888; dbname=$dbName", $dbUsername, $dbPassword);