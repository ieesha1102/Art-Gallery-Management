<!DOCTYPE html>
<html>
<head>
	<title>INSERT CURATOR</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="insert_curator_db.php" method="post">
		<h2 >INSERT CURATOR</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Agent ID</label>
		<input type="number" name="agent_id" placeholder="Agent ID " required><br>

		<label>Name of the Agent</label>
		<input type="text" name="name_of_the_agent" placeholder="Name of the Agent " required><br>
		
		<label>Commission from Gallery</label>
		<input type="number" name="commission_from_gallery" placeholder="Commission from Gallery"><br>

		<label>Commission from Customer</label>
		<input type="number" name="commission_from_customer" placeholder="Commission from Customer"><br>

		<button type="submit"> Submit </button>
		<a href="logout.php"> Logout </a>
		<a href="home.php"> Return </a>

	</form>
</body>
</html>