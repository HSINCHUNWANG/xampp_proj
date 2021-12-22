<?php

$db_host = 'localhost';
$db_name = 'mfee23';
$db_user = 'shinder';
$db_pass = 'admin';

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";

$pdo = new PDO($dsn, $db_user, $db_pass);

