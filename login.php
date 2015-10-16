<?php
	if(isset()){
?>

<div id="logged_part">
	<p> Welcome <?php echo $_SESSION['user_name']; ?> !</p>
	<button>Log out</button>
</div>

<?php

	}else{
?>

<div id="login_part" >

	<div id="login_name"> 
		<p>User name :  <input style="float:right;"></p>
	</div>
	<div id="login_pass">
		<p>Password :  <input type="password" style="float:right;"></p>
	</div>
	<button>Log in</button><br/>
	<p>You don't have an account ? <a href="">Sign in !</a></p>
</div>

<?php
	}

?>

