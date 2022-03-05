<!DOCTYPE html>
<html>
<head>
	<title>DELETE ARTIST</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="delete_artist_db.php" method="post">
		<h2 >DELETE ARTIST</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Artist ID</label>
		<input type="number" name="id" placeholder="Artist ID " ><br>

		<button type="submit"> Submit </button>
		<a href="logout.php"> Logout </a>
		<a href="home.php"> Return </a>

	</form>
</body>
</html>