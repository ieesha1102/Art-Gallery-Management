<!DOCTYPE html>
<html>
<head>
	<title>INSERT EVENT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="insert_event_db.php" method="post">
		<h2 >INSERT EVENT</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Event ID</label>
		<input type="number" name="event_id" placeholder="Event ID " ><br>

		<label>Start Date(YYYY-MM-DD)</label>
		<input type="text" name="start_date" placeholder="Start Date "><br>

		<label>Event Date(YYYY-MM-DD)</label>
		<input type="text" name="end_date" placeholder="End Date " ><br>

		<label>Staff ID</label>
		<input type="number" name="staff_id" placeholder="Staff ID " ><br>

		<label>Artist ID</label>
		<input type="number" name="artist_id" placeholder="Artist ID " ><br>

		<label>Agent ID</label>
		<input type="number" name="agent_id" placeholder="Agent ID"><br>

		<button type="submit"> Submit </button>
		<a href="logout.php"> Logout </a>
		<a href="home.php"> Return </a>

	</form>
</body>
</html>