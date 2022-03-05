<!DOCTYPE html>
<html>
<head>
	<title>INSERT MAINTENANCE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="insert_maintenance_db.php" method="post">
		<h2 >INSERT MAINTENANCE</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Year</label>
		<input type="number" name="year" placeholder="Year "><br>

		<label>Electricity Bill</label>
		<input type="number" name="electricity_bill" placeholder="Electricity Bill "><br>

		<label>Staff Salary</label>
		<input type="number" name="staff_salary" placeholder="Staff Salary "><br>

		<label>Cleaning Supplies</label>
		<input type="number" name="cleaning_supplies" placeholder="Cleaning Supplies "><br>

		<button type="submit"> Submit </button>
		<a href="logout.php"> Logout </a>
		<a href="home.php"> Return </a>

	</form>
</body>
</html>