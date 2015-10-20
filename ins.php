
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>	
<?php
require 'header.php';  //Inclusion du header afin de pouvoir revenir sur la page principale du site après l'inscription du client
    ?>

<?php
    
    /*
    $a = isset($_POST['Name'], $_POST['Surname'],$_POST['Password'],$_POST['Validation'],$_POST['datepicker'],$_POST['Country'],$_POST['City'],$_POST['Postal'],$_POST['Address'],$_POST['Mail']);
    
    */
    
    
	$Name=$_POST['Name']; // On récupère chaque champs rentré par l'utilisateur par la méthode POST en les mettant dans des variables associées.
	$Surname=$_POST['Surname'];
	$Mail=$_POST['Mail'];
    $Password=$_POST['Password'];
    $Country=$_POST['Country'];
    $City=$_POST['City'];
    $Address=$_POST['Address'];
    $Postal=$_POST['Postal'];
    $CompletAddress = $Address ." ". $Postal ." ". $City ." ". $Country;
    
    $Date =$_POST['datepicker'];
    $datefr = DateTime::createFromFormat('d/m/Y', $Date);
    $goodformatdate = $datefr ? $datefr->format('Y-m-d') : date('d/m/Y');
 
    
        // on se connecte à notre base
    require 'connexion-DB.php';
    
    
    $sth = $connection->prepare('INSERT INTO user_list (user_name, user_surname, password, Address, Mail, birth_date ) VALUES (:Name, :Surname, :Password, :Address , :Mail, :datepicker)');
    //Confection de la requète préparer pour inserer chaque paramètre dans la BD
    //On affecte les variables saisies aux différents champs de la BD
    
    
    $sth->bindParam(':Name',$Name);
    $sth->bindParam(':Surname',$Surname);
    $sth->bindParam(':Password',$Password);
    $sth->bindParam(':datepicker',$goodformatdate);
    $sth->bindParam(':Address',$CompletAddress);
    $sth->bindParam(':Mail',$Mail);
    $sth->execute(); // Ici on ecécute la requète préparé juste au dessus.
    
    echo 'Bonjour Monssieur ',$Surname,'<br/>';
    echo 'votre enregistrement a ete pris en compte';
    
    
?>
<?php require 'footer.php'; ?>
