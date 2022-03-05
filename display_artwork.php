<!DOCTYPE html>
<html>
<head>Display Artwork
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table border ="1">
        <tr>
            <th>Art ID</th>
            <th>Artwork Name</th>
            <th>Artwork Type</th>
            <th>Price</th>
            <th>Artist ID</th>
            <th>Event ID</th>
        </tr>
        <?php
            
            include 'C:\xampp\htdocs\login-system\db_conn.php';
            error_reporting(0);
            $query = "select * from Art_work";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            if($total != 0)
            {
                echo $result['ArtID']." ".$result['Art_work_Name']." ".$result['Art_work_Type']." ".$result['Price']." ".$result['ArtistID']." ".$result['EventID'];
                while($result = mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                    <td>".$result['ArtID']."</td>
                    <td>".$result['Art_work_Name']."</td>
                    <td>".$result['Art_work_Type']."</td>
                    <td>".$result['Price']."</td>
                    <td>".$result['ArtistID']."</td>
                    <td>".$result['EventID']."</td>
                    </tr>
                    ";
                }
            }
            else
            {
                echo "No records found";
            }
        ?>
    </table>
    <h2>To Logout Click Below</h2>
    <a href="logout.php"> Logout </a>
    <h2>To Perform Another Action Click Below</h2>
    <a href="home.php"> Return </a>
</body>
</html>