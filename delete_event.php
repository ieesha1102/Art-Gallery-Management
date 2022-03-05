<!DOCTYPE html>
<html>
<head>
	<title>DELETE EVENT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="delete_event_db.php" method="post">
		<h2 >DELETE EVENT</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Event ID</label>
		<input type="number" name="id" placeholder="Event ID " ><br>

		<button type="submit"> Submit </button>
		<a href="logout.php"> Logout </a>
		<a href="home.php"> Return </a>

	</form>
</body>
</html>