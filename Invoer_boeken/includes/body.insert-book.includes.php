<?php

include "connectdb.php";

if(isset($_POST["submit"])) {
    $titel = empty($_POST["titel"]) ? "onbekend" : $_POST["titel"];
    $schrijver = empty($_POST["schrijver"]) ? "onbekend" : $_POST["schrijver"];
    $taal = empty($_POST["taal"]) ? "onbekend" : $_POST["taal"];
    $paginas = empty($_POST["paginas"]) ? "onbekend" : $_POST["paginas"];
    $cover = empty($_POST["cover"]) ? "onbekend" : $_POST["cover"];
    $uitgever = empty($_POST["uitgever"]) ? "onbekend" : $_POST["uitgever"];
    $genre = empty($_POST["genre"]) ? "onbekend" : $_POST["genre"];
    $releaseday = empty($_POST["releaseday"]) ? "onbekend" : $_POST["releaseday"];
    $image = empty($_POST["image"]) ? "onbekend" : $_POST["image"];
}
$sql = "INSERT INTO boeken (titel, schrijver, taal, paginas, cover, uitgever, genre, releaseday, image) 
VALUES (:titel, :schrijver, :taal, :paginas, :cover, :uitgever, :genre, :releaseday, :image)";

$params = array(":titel" => "$titel", 
                ":schrijver" => "$schrijver", 
                ":taal" => "$taal", 
                ":paginas" => "$paginas", 
                ":cover" => "$cover", 
                ":uitgever" => "$uitgever", 
                ":genre" => "$genre", 
                ":releaseday" => "$releaseday", 
                ":image" => "$image"
            );

$sth = $db->prepare($sql);
$sth->execute($params);

$sql = "SELECT * FROM boeken";
$sth = $db->prepare($sql);
$sth->execute();

Echo 'succes';

header("Location: http://localhost/p3/boekenhandel/Invoer_boeken/");