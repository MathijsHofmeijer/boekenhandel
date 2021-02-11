<?php

include "connectdb.php";

if(isset($_POST["submit"])) {
    $voornaam = empty($_POST["voornaam"]) ? "onbekend" : $_POST["voornaam"];
    $achternaam = empty($_POST["achternaam"]) ? "onbekend" : $_POST["achternaam"];
}
$sql = "INSERT INTO student (voornaam, achternaam) 
VALUES (:voornaam, :achternaam)";
$params = array(":voornaam" => "$voornaam", ":achternaam" => "$achternaam");

$sth = $db->prepare($sql);
$sth->execute($params);

$sql = "SELECT * FROM student";
$sth = $db->prepare($sql);
$sth->execute();

Echo 'succes';

header("Location: http://localhost/basiccrud/basic-crud-Duncan145235/");