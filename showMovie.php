<?php
	session_start();
	include_once('database.php');
	
	$zapytanie = "SELECT * FROM `movie` WHERE `id`='".$_GET['movie']."'";
	$idzapytania = mysql_query($zapytanie);
	
	$film = mysql_fetch_row($idzapytania);

	echo "<div class=\"row\">
		Tytuł: ".$film[1]."
	</div>
	<div class=\"row\">
		Opis: ".$film[3]."
	</div>
	<div class=\"row\">
		Cena: ".$film[2]."
	</div>";
	
	$zapytanie = "SELECT * FROM `review` WHERE `movieId`='".$_GET['movie']."'";
	$idzapytania = mysql_query($zapytanie);
	
	echo "<div class=\"row\">
	Recenzje:";
	
	while ($wiersz = mysql_fetch_row($idzapytania))
	{
		echo "<div class=\"row\">
			<div class=\"col-lg-2\">".$wiersz[1].": </div>
			<div class=\"col-lg-2\">".$wiersz[3]."</div>
		</div>";
	}				
					
	echo "</div>";
	
	if($_SESSION['userName'] !== null)
	{
		echo "<div class=\"row\">
				<span onclick='loadScene(\"recenzja.php?movie=".$film[0]."\")'>Dodaj Recenzje</span>
		</div>";
	}
	echo "<div class=\"row\">
				<span onclick='loadScene(\"order.php?movie=".$film[0]."\")'>Zamów</span>
		</div>";
?>