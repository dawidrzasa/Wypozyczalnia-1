<?php
session_start();
include_once('database.php');
if($_POST['login'] !== null && $_POST['password'] !== null && $_POST['login'] !== "" && $_POST['password'] !== "" )
{
	$zapytanie = "SELECT `name`,`password` FROM `user` WHERE `name` = '".$_POST['login']."' AND `password` = '".$_POST['password']."'";
	$idzapytania = mysql_query($zapytanie);
	
	if(mysql_fetch_row($idzapytania)[0] !== null)
	{
		$_SESSION['userName'] = $_POST['login'];
	}
	header('Location: index.php');
}
?>
<form action="logowanie.php" method="post">
	<div class="row">
		<div class="col-lg-2 menu">
			Login: <br/>
			Hasło: <br/>
		</div>
		<div class="col-lg-2 menu">
			<input type="text" name="login"/>
			<input type="password" name="password"/>
			<input type="submit" value="Zaloguj"/>
		</div>
	</div>
</form>