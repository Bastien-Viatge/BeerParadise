<?php
	if($_SESSION['user_name']!=''){
?>

<div id="logged_part">
    <form action="services/logout_service.php" method="post">
	<p> Welcome <?php echo $_SESSION['user_name']; ?> !</p>
	<input id="logout_button" type="submit" value="Log out"/>
    </form>
</div>

<?php

	}else{
?>

<div id="login_part" >
<form action="services/login_service.php" method="post">
<p id="login_name_div">User name : <input type="text" name="login"></p>
<p id="login_pass_div">Password : <input type="password" name="pwd"></p>
<input id="login_button" type="submit" value="Log in"/><br/>
<p id="signIn_link" style="font-size:10pt;">You don't have an account ? <a href="./Inscription.php">Sign in !</a></p>
</form>

</div>

<?php
	}

?>

