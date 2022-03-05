<!DOCTYPE html>
<html>
<head>
	<title>DELETE MAINTENANCE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="delete_curator_db.php" method="post">
		<h2 >DELETE CURATOR</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Agent ID</label>
		<input type="number" name="id" placeholder="Agent ID " ><br>

		<button type="submit"> Submit </button>
		<a href="logout.php"> Logout </a>
		<a href="home.php"> Return </a>

	</form>
</body>
</html>