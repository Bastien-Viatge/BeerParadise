<header id="header">
	
	<h1 id="header_title"> Welcome to Beer Paradise </h1>
	<div id="login_part" >
		<form action="services/login_service.php" method="post">
			<p id="login_name_div">User name : <input type="text" name="login"></p>
			<p id="login_pass_div">Password : <input type="password" name="pwd"></p>
			<input id="login_button" type="submit" value="Log in"/><br/>
			<p id="signIn_link" style="font-size:10pt;">You don't have an account ? <a href="./Inscription.php">Sign in !</a></p>
		</form>

	</div>
	
	<div class="sel">
		<a href="index.php"> About Us </a>
		<a href="Products.php"> Products </a> 
		<a href="Inscription.php"> Inscription </a>
        <a href="panier.php"> Panier </a>
	</div>
	
</header>