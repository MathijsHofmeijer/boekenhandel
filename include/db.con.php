<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "";

$conStr = "mysql:host=$host;dbname=$dbname";
$db = new PDO($conStr, $dbUsername, $dbPassword);
