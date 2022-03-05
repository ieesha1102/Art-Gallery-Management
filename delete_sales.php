<!DOCTYPE html>
<html>
<head>
	<title>DELETE SALE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="delete_sales_db.php" method="post">
		<h2 >DELETE SALE</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Sales ID</label>
		<input type="number" name="id" placeholder="Sales ID " ><br>

		<button type="submit"> Submit </button>
		<a href="logout.php"> Logout </a>
		<a href="home.php"> Return </a>

	</form>
</body>
</html>