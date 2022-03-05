<!DOCTYPE html>
<html>
<head>
	<title>INSERT SALES</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="insert_sales_db.php" method="post">
		<h2 >INSERT SALES</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Sales ID</label>
		<input type="number" name="sales_id" placeholder="Sales ID " ><br>

		<label>Date of Sale(YYYY-MM-DD)</label>
		<input type="text" name="date_of_sale" placeholder="Date of Sale "><br>

		<label>Art ID</label>
		<input type="number" name="art_id" placeholder="Art ID " ><br>

		<label>Staff ID</label>
		<input type="number" name="staff_id" placeholder="Staff ID " ><br>

		<button type="submit"> Submit </button>
		<a href="logout.php"> Logout </a>
		<a href="home.php"> Return </a>

	</form>
</body>
</html>