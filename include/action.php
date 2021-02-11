<?php

require_once("db.con.php");
    $naam = $_POST["naam"];
    $achternaam = $_POST["achternaam"];
    $email = $_POST["email"];
    $vraag = $_POST["vraag"];
    $pattern = "/^[a-zA-Z0-9]*$/";

     if(empty($naam) || empty($achternaam) || empty($vraag) || empty($email)){
        header('Location: ../Contact.php?contactError=emptyInput');
        exit;
     }
     if(!preg_match($pattern, $naam) || !preg_match($pattern, $achternaam)){
        header('Location: ../Contact.php?contactError=invalidName');
        exit;
     }
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header('Location: ../Contact.php?contactError=Invalidemail');
        exit;
     }
 
     
else{
    $sql = "INSERT INTO contact (naam, achternaam, email, vraag) VALUES
    (:voornaamTemplate, :achternaamTemplate, :EmailTemplate, :VraagTemplate)";
    $params = array(":voornaamTemplate" => "$naam", ":achternaamTemplate" => " $achternaam", ":EmailTemplate" => " $email", ":VraagTemplate" => "$vraag");
    
    $sth = $db->prepare($sql);
    $sth->execute($params);
    
    $con = null;
    header("Location: ../contact.php");
}