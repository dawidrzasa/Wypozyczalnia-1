<?php
session_start();
include_once('database.php');

	$zapytanie = "SELECT * FROM `user` WHERE `name` = '".$_SESSION['userName']."'";
	$idzapytania = mysql_query($zapytanie);
	$userId = mysql_fetch_row($idzapytania)[0];

	$zapytanie = "SELECT * FROM `orders` WHERE `userId`='".$userId."'";
	$idzapytania = mysql_query($zapytanie);
	
	$movies = array();
	
	while ($wiersz = mysql_fetch_row($idzapytania))
	{
		$zapytanie = "SELECT * FROM `movie` WHERE `id`='".$wiersz[2]."'";
		$idzapytania = mysql_query($zapytanie);
		
		array_push($movies, mysql_fetch_row($idzapytania));
	}
	echo "<div class=\"row\">
	Zamówienia:";
	
	foreach ($movies as $movie)
	{
			echo  "<li onclick='loadScene(\"showMovie.php?movie=".$movie[0]."\")'>".$movie[1]."</a> Cena: ".$movie[2]."</li>";
	}				
					
	echo "</div>";

?>