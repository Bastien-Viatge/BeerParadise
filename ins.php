
<?php
require 'header.php';  //Inclusion du header afin de pouvoir revenir sur la page principale du site après l'inscription du client
    echo 'helo';
    ?>

<?php
    
    

	$Name=$_POST['Name']; // On récupère chaque champs rentré par l'utilisateur par la méthode POST en les mettant dans des variables associées.
	$Surname=$_POST['Surname'];
	$BirthDate=$_POST['datepicker'];
	$Mail=$_POST['Mail'];
    $Password=$_POST['Password'];
    $Country=$_POST['Country'];
    $City=$_POST['City'];
    $Address=$_POST['Address'];
    $Postal=$_POST['Postal'];
    $CompletAddress = $Address . $Postal . $City . $Country;
    
    echo $CompletAddress;
    
        // on se connecte à notre base
    require 'connexion-DB.php';
    
    
	
    $sth = $connection->prepare('INSERT INTO user_list (user_name, user_surname, password, birth_date, Address, Mail ) VALUES (:Name, :Surname, :Password, :BirthDate, :CompletAddress , :Mail)');
    //Confection de la requète préparer pour inserer chaque paramètre dans la BD
    //On affecte les variables saisies aux différents champs de la BD
    $sth->bindParam(':Name',$Name;
    $sth->bindParam(':Surname',$Surname);
    $sth->bindParam(':Password',$Password);
    $sth->bindParam(':BirthDate',$BirthDate,PDO::PARAM_INT);
    $sth->bindParam(':CompletAddress',$CompletAddress);
    $sth->bindParam(':Mail',$Mail);
    $sth->execute(); // Ici on ecécute la requète préparé juste au dessus.
    
    echo 'Bonjour Monssieur ',$Surname,'<br/>';
    echo 'votre enregistrement a été pris en compte';
    
?>

