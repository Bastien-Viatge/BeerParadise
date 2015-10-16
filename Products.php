<?php 
session_start();
?>

<!DOCTYPE html>   
<!-- http://www.grafikart.fr/tutoriels/php/panier-php-session-309 -->
<head>
<title> Beer paradise </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link href="Style.css" rel="stylesheet" type="text/css" />  
<link href="header.css" rel="stylesheet" type="text/css" /> 

</head>


<body>


 
<?php
	require 'header.php';
	require 'connexion-DB.php';

		$select = $connection->query("SELECT * FROM beer_list");
		$select->setFetchMode(PDO::FETCH_OBJ);
		
	while( $enregistrement = $select->fetch() )
	{
		$k = $k + 1;
		echo '<div id="prod">';
		echo '<div class="ima">','<img src="data:image/png;base64,',$enregistrement->imagebase64,'" />','</div>';
		echo '<div class="tit">',$enregistrement->title ,'</div>';
        echo '<div class="pri">','Prix : ',$enregistrement->price,' euros','</div>';
    
    
		echo '<div class="des">','Description: <br/>',$enregistrement->description,'</div>';
        echo '<br/>';
		echo '<div class="num">','Nombre : ',$enregistrement->quantity,'</div>';



        ?>
<div class="bouton">

<a href="products-quantite.php?i=<?php echo $enregistrement->id; ?>&p=<?php echo $enregistrement->price; ?>&action=quantite" class="nounderline"> <input type="submit" value="ajouter au panier" name="ajouter-quantite"/> </a>
</div>
<?php
    		echo '</div>','<br/>';
	}
	 
	
?>


<?php require 'footer.php'; ?>

</body>
</html>
