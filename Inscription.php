<!DOCTYPE html>   

<head>
    <title> Beer paradise </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link href="css/Style.css" rel="stylesheet" type="text/css" /> 
    <link href="css/header.css" rel="stylesheet" type="text/css" />
    <link href="css/login.css" rel="stylesheet" type="text/css" />

<!-- <script language="javascript" src="js/verif.js" type="text/javascript"></script> -->


<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
    $(function() {
      $( "#datepicker" ).datepicker({
                changeMonth: true,
                yearRange: '-85:+0M',
                changeYear: true
    });
   });

</script>

 </head>

  <body>



<?php
require 'header.php';  //Inclusion du header
//require 'js/verif.js';   // Inclusion du fichier.js contenant la fonction de vérification des champs ?>



<?php
// on se connecte à notre base
require 'connexion-DB.php';
    
?>



<form id="monFormulaire" nom="monFormulaire" method="POST" action="ins.php">
<!-- création du formulaire par la méthode POST -->
    
<h2> Registration </h2>
<br/>

<!-- On choisie le pattern souhaité pour chaque champs à remplir -->
<p> The (*) fields are needed  </p>

<p>
    Name * : <input type="text" name="Name" pattern="[a-zA-Z]{2,8}"/> <br/>
    Surname * : <input type="text" name="Surname" pattern="[a-zA-Z]{2,8}"/> <br/>
    Password * : <input type="password" name="Password" pattern="[a-zA-Z]{2,8}"/> <br/>
    Validation * : <input type="password" name="Validation" pattern="[a-zA-Z]{2,8}"/> <br/>

    Birth Date * : <input type="text" id="datepicker"/> <br/>

    Country * : <input type="text" name="Country" pattern="[a-zA-Z]{2,8}"/> <br/>
    City * : <input type="text" name="City" pattern="[a-zA-Z]{2,8}"/> <br/>
    Postal * : <input type="text" name="Postal" pattern="[0-9]{2,8}"/> <br/>
    Address * : <input type="text" name="Address" pattern="[a-zA-Z]{2,8}"/> <br/>

    Adresse email * : <input type="text" name="Mail" pattern="[a-zA-Z0-9.-]+@[a-zA-Z0-9.-]+.[a-zA-Z]+"/> <br/>

<INPUT type="checkbox" name="NewsLetter" value="NewsLetter"> : Subscribe to our Newletter

</p>
	<input type="submit" value="Submit"/> /* name="envoyer" onClick="javascript: return verif();"*/  <br/>


<!-- Utilisamos una funcion Javascript para verificar que el usario completo todas las informaciones necesitadas del formulario -->

<form/>


<?php
    require 'footer.php'; ?>




</body>



