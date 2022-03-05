<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name']))
{
?>

<!DOCTYPE html>
<html>
<head>
	<title>DISPLAY</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<h1>Select The Table For Which You Want To Display Records</h1> 
	<a href="display_artist.php"> Artist </a>
	<a href="display_curator.php"> Curator </a>
	<a href="display_customer.php"> Customer </a>
	<a href="display_artwork.php"> Artwork </a>
	<a href="display_event.php"> Event </a>
	<a href="display_gallery.php"> Staff </a>
	<a href="display_maintenance.php"> Maintenance </a>
	<a href="display_sales.php"> Sales </a>
	<h2 color="white"> If You Want To Logout Click Below </h2>
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