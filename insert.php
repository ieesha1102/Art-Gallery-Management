<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name']))
{
?>

<!DOCTYPE html>
<html>
<head>
	<title>INSERT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<h1>Select The Table In Which You Want To Insert The Record</h1> 
	<a href="insert_artist.php"> Artist </a>
	<a href="insert_curator.php"> Curator </a>
	<a href="insert_customer.php"> Customer </a>
	<a href="insert_artwork.php"> Artwork </a>
	<a href="insert_event.php"> Event </a>
	<a href="insert_gallery.php"> Staff </a>
	<a href="insert_maintenance.php"> Maintenance </a>
	<a href="insert_sales.php"> Sales </a>
	<h2> If You Want To Logout Click Below </h2>
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