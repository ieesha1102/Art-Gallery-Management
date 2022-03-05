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
	<h1>Select The Table In Which You Want To Delete The Record</h1> 
	<a href="delete_artist.php"> Artist </a>
	<a href="delete_curator.php"> Curator </a>
	<a href="delete_customer.php"> Customer </a>
	<a href="delete_artwork.php"> Artwork </a>
	<a href="delete_event.php"> Event </a>
	<a href="delete_gallery.php"> Staff </a>
	<a href="delete_maintenance.php"> Maintenance </a>
	<a href="delete_sales.php"> Sales </a>
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