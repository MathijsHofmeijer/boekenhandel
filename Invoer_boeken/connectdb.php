<?php

$host = 'localhost';
$dbname = 'boeken';
$username = 'root';
$password = '';

$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';

$db = new PDO($connectStr, $username, $password);
