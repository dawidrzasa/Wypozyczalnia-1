<?php 
session_start();
	echo "<li><a href='index.php'>Powrót na główną</a></li>";
if($_SESSION['userName'] !== null)
{
	echo "Witaj ".$_SESSION['userName'];
	echo "<li onclick='loadScene(\"zamowienia.php\")'>Zamowienia</li>";
	echo "<li><a href='wyloguj.php'>Wyloguj</a></li>";
}
else
{
		echo "<li onclick='loadScene(\"rejestracja.php\")'>Rejestracja</li>";
		echo "<li onclick='loadScene(\"logowanie.php\")'>Logowanie</li>";
}
?>