<?php
	if(isset($_SESSION['user_name'])){
?>

<div id="logged_part">
	<p> Welcome <?php echo $_SESSION['user_name']; ?> !</p>
	<button>Log out</button>
</div>

<?php

	}else{
?>

<div id="login_part" >
	<p id="login_name_div">User name :  <input id="login_name"></p><br>
	<p id="login_pass_div">Password :  <input type="password" id="login_pass"></p><br/><br/>
	<button id="login_button">Log in</button><br/><br/>
	<p id="newsletter_link" style="font-size:10pt;">You don't have an account ? <a href="./Inscription.php">Sign in !</a></p><br/>
</div>

<?php
	}

?>

