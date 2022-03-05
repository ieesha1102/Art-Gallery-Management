<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name']))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Artist Insertion Successful</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1>Artist Inserted Successfully</h1>
		<h2>To Logout Click Below</h2>
		<a href="logout.php"> Logout </a>
		<h2>To Perform Another Action Click Below</h2>
		<a href="home.php"> Return </a>
	</div>
</body>
</html>

<?php
}
else
{
	header("Location: index.php");
	exit();
}
?>