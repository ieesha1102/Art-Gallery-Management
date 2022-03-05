<!DOCTYPE html>
<html>
<head>Display Sales
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table border ="1">
        <tr>
            <th>Sales ID</th>
            <th>Date of Sale</th>
            <th>Art ID</th>
            <th>Staff ID</th>
        </tr>
        <?php
            
            include 'C:\xampp\htdocs\login-system\db_conn.php';
            error_reporting(0);
            $query = "select * from Sales";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            if($total != 0)
            {
                echo $result['SalesID']." ".$result['Date_of_Sale']." ".$result['ArtID']." ".$result['StaffID'];
                while($result = mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                    <td>".$result['SalesID']."</td>
                    <td>".$result['Date_of_Sale']."</td>
                    <td>".$result['ArtID']."</td>
                    <td>".$result['StaffID']."</td>
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