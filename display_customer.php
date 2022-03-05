<!DOCTYPE html>
<html>
<head>Display Customers
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table border ="1">
        <tr>
            <th>Customer ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Agent ID</th>
            <th>Nationality</th>
        </tr>
        <?php
            
            include 'C:\xampp\htdocs\login-system\db_conn.php';
            error_reporting(0);
            $query = "select * from Customer";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            if($total != 0)
            {
                echo $result['CustomerID']." ".$result['Name']." ".$result['Phone']." ".$result['Email']." ".$result['Address']." ".$result['AgentID']." ".$result['Nationality'];
                while($result = mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                    <td>".$result['CustomerID']."</td>
                    <td>".$result['Name']."</td>
                    <td>".$result['Phone']."</td>
                    <td>".$result['Email']."</td>
                    <td>".$result['Address']."</td>
                    <td>".$result['AgentID']."</td>
                    <td>".$result['Nationality']."</td>
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