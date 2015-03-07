<?php
session_start();
include_once('database.php');
if($_POST['movie'] !== null && $_POST['description'] !== null && $_POST['movie'] !== "" && $_POST['description'] !== "" )
{
	$zapytanie = "INSERT INTO `review` (`id`, `userName`, `movieId`, `description`) VALUES ('', '".$_SESSION['userName']."', '".$_POST['movie']."', '".$_POST['description']."');";

	mysql_query($zapytanie);

	header('Location: showMovie.php?movie='.$_POST['movie']);
}
?>
<form action="recenzja.php" method="post">
	<div class="row">
		<div class="col-lg-2 menu">
			Opis: <br/>
		</div>
		<div class="col-lg-2 menu">
			<textarea name="description"></textarea>
			<input type="hidden" name="movie" value="<?php echo $_GET['movie']; ?>"/>
			<input type="submit" value="Dodaj"/>
		</div>
	</div>
</form>