<?php
 include_once './mainitems/header.php';
?>


<?php
include "include/db.con.php"; 
?>



<section class="login-form">
<form action="include/action.php" method="POST">
<div class="login-form-form">
<div id="formitemscontact">
<h2>Contact formulier</h2>
  <input class="logininput" type="text" name="naam" placeholder="Voornaam:" Required>
  <br/>
  <input class="logininput" type="text" name="achternaam" placeholder="Achternaam:" Required>
  <br/>
  <input class="logininput" type="text" name="email" placeholder="Email:" Required>
  <br/>
  <textarea class="logininput" placeholder="Vraag" id="Vraag" name="vraag" rows="4" cols="50"></textarea> <br>
  <input id="contactknop-contact" type="submit" name="submit" value="Submit">
</div>
</div>
</form>
</section>

<?php
 if(isset($_GET["contactError"])){
    if($_GET["contactError"]== "emptyInput"){
     echo "<p> Please fill in all info.</p>";
 }

 if($_GET["contactError"] == "invalidName"){
    echo "<p> Invalid name. Probeer iets anders</p>";
}


if($_GET["contactError"] == "Invalidemail"){
    echo "<p> Invalid Email.</p>";
}

 }



 ?> 

</body>
</html>



<?php
 include_once './mainitems/footer.php';
?>