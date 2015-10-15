<?php
    // on se connecte à notre base
    try {
        $dns = 'mysql:host=localhost;dbname=beer_db';
        $utilisateur = 'root';
        $motDePasse = 'root';
        $connection = new PDO( $dns, $utilisateur, $motDePasse, array (PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8' ,PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ));
    } catch (Exception $e)
    {
        echo 'problème!!';
    }
    
    
    ?>