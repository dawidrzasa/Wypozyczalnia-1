<?php
	include_once('database.php');
	
	$zapytanie = "SELECT * FROM `movie` ";
	$idzapytania = mysql_query($zapytanie);
	
	while ($wiersz = mysql_fetch_row($idzapytania))
	{
		echo  "<li onclick='loadScene(\"showMovie.php?movie=".$wiersz[0]."\")'>".$wiersz[1]."</a></li>";
	}
?>