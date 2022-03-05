<!DOCTYPE html>
<html>
<head>
	<title>INSERT ARTIST</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="insert_artist_db.php" method="post">
		<h2 >INSERT ARTIST</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Artist ID</label>
		<input type="number" name="artist_id" placeholder="Artist ID "><br>

		<label>Name of the Artist</label>
		<input type="text" name="name_of_the_artist" placeholder="Name of the Artist "><br>

		<label>Age</label>
		<input type="number" name="age" placeholder="Age "><br>

		<label>Gender</label>
		<input type="text" name="gender" placeholder="Gender "><br>

		<label>Phone</label>
		<input type="number" name="phone" placeholder="Phone" pattern="[0-9]{10}"><br>

		<label>Website</label>
		<input type="text" name="website" placeholder="Website "><br>

		<label>Nationality</label>
		<input type="text" name="nationality" placeholder="Nationality "><br>

		<label>Experience</label>
		<input type="number" name="experience" placeholder="Experience "><br>

		<label>Email</label>
		<input type="email" name="email" placeholder="Email "><br>

		<label>Agent ID</label>
		<input type="number" name="agent_id" placeholder="Agent ID "><br>

		<button type="submit"> Submit </button>
		<a href="logout.php"> Logout </a>
		<a href="home.php"> Return </a>

	</form>
</body>
</html>