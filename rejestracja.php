<?php
session_start();
include_once('database.php');
if($_POST['login'] !== null && $_POST['password'] !== null && $_POST['login'] !== "" && $_POST['password'] !== "" )
{
	$zapytanie = "INSERT INTO `user` (`id`, `name`, `password`) VALUES ('', '".$_POST['login']."', '".$_POST['password']."');";

	if(mysql_query($zapytanie))
	{
		$_SESSION['userName'] = $_POST['login'];
	}
	header('Location: index.php');
}
?>
<form action="rejestracja.php" method="post">
	<div class="row">
		<div class="col-lg-2 menu">
			Login: <br/>
			Hasło: <br/>
		</div>
		<div class="col-lg-2 menu">
			<input type="text" name="login"/>
			<input type="password" name="password"/>
			<input type="submit" value="Rejestruj"/>
		</div>
	</div>
</form>