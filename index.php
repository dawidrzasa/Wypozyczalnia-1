<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Wypozyczalnia</title>
		<link href="/~s170222/favicon.ico" type="image/x-icon" rel="icon">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/>
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script>
			function loadScene(file)
			{
				$.ajax({
						url: file,
						success: function( data ) {
							$(".scene").html(data);
						}
					});
			}
		</script>
	</head>
	<body>
		<div class="container">
			<div class="col-lg-2 menu">
				<?php include_once('menu.php'); ?>
			</div>
			<div class="col-lg-10 scene">
				<?php include_once('movies.php'); ?>
			</div>
		</div>
	</body>
</html>