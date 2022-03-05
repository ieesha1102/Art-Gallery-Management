<!DOCTYPE html>
<html>
<head>
	<title>INSERT ARTWORK</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="insert_artwork_db.php" method="post">
		<h2 >INSERT ARTWORK</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Art ID</label>
		<input type="number" name="art_id" placeholder="Art ID " ><br>

		<label>Artwork Name</label>
		<input type="text" name="name" placeholder="Artwork Name "><br>

		<label>Artwork Type</label>
		<input type="text" name="type" placeholder="Artwork Type " ><br>

		<label>Price</label>
		<input type="number" name="price" placeholder="Price " ><br>

		<label>Artist ID</label>
		<input type="number" name="artist_id" placeholder="Artist ID"><br>

		<label>Event ID</label>
		<input type="number" name="event_id" placeholder="Event ID"><br>

		<button type="submit"> Submit </button>
		<a href="logout.php"> Logout </a>
		<a href="home.php"> Return </a>

	</form>
</body>
</html>