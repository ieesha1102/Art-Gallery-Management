<!DOCTYPE html>
<html>
<head>Display Curators
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table border ="1">
        <tr>
            <th>Agent ID</th>
            <th>Name</th>
            <th>Commission from Gallery</th>
            <th>Commission from Customer</th>
        </tr>
        <?php
            
            include 'C:\xampp\htdocs\login-system\db_conn.php';
            error_reporting(0);
            $query = "select * from Curator";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            if($total != 0)
            {
                echo $result['AgentID']." ".$result['Name']." ".$result['Commission_from_gallery']." ".$result['Commission_from_customer'];
                while($result = mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                    <td>".$result['AgentID']."</td>
                    <td>".$result['Name']."</td>
                    <td>".$result['Commission_from_gallery']."</td>
                    <td>".$result['Commission_from_customer']."</td>
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