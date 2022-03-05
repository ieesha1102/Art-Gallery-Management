<!DOCTYPE html>
<html>
<head>
	<title>DELETE MAINTENANCE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="delete_maintenance_db.php" method="post">
		<h2 >DELETE MAINTENANCE</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Year</label>
		<input type="number" name="year" placeholder="Year " ><br>

		<button type="submit"> Submit </button>
		<a href="logout.php"> Logout </a>
		<a href="home.php"> Return </a>

	</form>
</body>
</html>