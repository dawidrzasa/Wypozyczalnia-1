<?php
session_start();
include_once('database.php');

$zapytanie = "SELECT * FROM `user` WHERE `name` = '".$_SESSION['userName']."'";
$idzapytania = mysql_query($zapytanie);
$userId = mysql_fetch_row($idzapytania)[0];

$zapytanie = "INSERT INTO `orders` (`id`, `userId`, `movieId`) VALUES ('', '".$userId."', '".$_GET['movie']."');";

mysql_query($zapytanie);

header('Location: zamowienia.php');

?>