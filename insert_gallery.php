<!DOCTYPE html>
<html>
<head>
	<title>INSERT STAFF</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="insert_gallery_db.php" method="post">
		<h2 >INSERT STAFF</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Staff ID</label>
		<input type="number" name="staff_id" placeholder="Staff ID " ><br>

		<label>Staff Name</label>
		<input type="text" name="name" placeholder="Staff Name "><br>

		<label>Salary</label>
		<input type="number" name="salary" placeholder="Salary " ><br>

		<label>Role</label>
		<input type="text" name="role" placeholder="Role " ><br>

		<label>Shift</label>
		<input type="text" name="shift" placeholder="Shift " ><br>

		<label>Agent ID(Enter 100 if Agent ID is not applicable)</label>
		<input type="number" name="agent_id" placeholder="Agent ID"><br>

		<button type="submit"> Submit </button>
		<a href="logout.php"> Logout </a>
		<a href="home.php"> Return </a>

	</form>
</body>
</html>