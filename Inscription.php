<!DOCTYPE html>   

<head>
    <title> Beer paradise </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link href="css/Style.css" rel="stylesheet" type="text/css" />    <!-- lors du placement des fichiers dans les dossiers, nous avons du indiquer le chemin du fichier CSS -->
    <link href="css/header.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">

 <script language="javascript" src="js/verif.js" type="text/javascript"></script>


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
/*
$(function() {
  $( "#datepicker" ).datepicker();
  $( "#format" ).change(function() {
                        $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
                        });
  });

*/




</script>


 </head>

  <body>



<?php
require 'header.php';  //Inclusion du header
require 'js/verif.js';   // Inclusion du fichier.js contenant la fonction de vérification des champs
?>


<?php
// on se connecte à notre base
require 'connexion-DB.php';
?>

<FORM  id="myForm" nom="myForm" method="POST" action="ins.php">
<!-- création du formulaire par la méthode POST -->
    
<h2> Registration </h2>
<br/>

<!-- On choisie le pattern souhaité pour chaque champs à remplir -->
<p> The (*) fields are needed  </p>

<p>
    Name * : <input type="text" name="Name"/> <br/>
    Surname * : <input type="text" name="Surname"/> <br/>
    Password * : <input type="password" name="Password"/> <br/>
    Validation * : <input type="password" name="Validation"/> <br/>

    Birth Date * : <input type="text" id="datepicker" name="datepicker"/> <br/>

    Country * : <input type="text" name="Country"/> <br/>
    City * : <input type="text" name="City"/> <br/>
    Postal * : <input type="text" name="Postal"/> <br/>
    Address * : <input type="text" name="Address"/> <br/>

    Adresse email * : <input type="text" name="Mail"/> <br/>

</p>
	<input type="submit" value="Submit" name="submit" onClick="javascript: return verif();"/>   <br/>


<!-- Utilisamos una funcion Javascript para verificar que el usario completo todas las informaciones necesitadas del formulario -->

</FORM>


<?php
    require 'footer.php'; ?>




</body>



