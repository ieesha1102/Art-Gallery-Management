<!DOCTYPE html>
<html>
<head>
	<title>INSERT CUSTOMER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="insert_customer_db.php" method="post">
		<h2 >INSERT CUSTOMER</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Customer ID</label>
		<input type="number" name="customer_id" placeholder="Customer ID " ><br>

		<label>Name</label>
		<input type="text" name="name" placeholder="Name "><br>

		<label>Phone</label>
		<input type="number" name="phone" placeholder="Phone " ><br>

		<label>Email</label>
		<input type="email" name="email" placeholder="Email " ><br>

		<label>Address</label>
		<input type="text" name="address" placeholder="Address"><br>

		<label>Agent ID</label>
		<input type="number" name="agent_id" placeholder="Agent ID "><br>

		<label>Nationality</label>
		<input type="text" name="nationality" placeholder="Nationality "><br>

		<button type="submit"> Submit </button>
		<a href="logout.php"> Logout </a>
		<a href="home.php"> Return </a>

	</form>
</body>
</html>