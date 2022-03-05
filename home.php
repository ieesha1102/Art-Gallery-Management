<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name']))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1>Hello, <?php echo $_SESSION['name']; ?></h1>
		<h2>Please Choose The Action You Want To Perform</h2>
		<a href="insert.php"> Insert Record </a>
		<a href="display.php"> Display Record </a>
		<a href="delete.php"> Delete Record </a>
		<a href="logout.php"> Logout </a>
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