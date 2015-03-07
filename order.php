<?php
	session_start();
	include_once('database.php');
	if($_SESSION['userName'] === null)
	{
		header('Location: rejestracja.php');
	}
	echo "Film zostanie wypozyczony po dokonaniu platnosci.";
	echo "<span onclick='loadScene(\"zamow.php?movie=".$_GET['movie']."\")'>Akceptuj</span>"
?>