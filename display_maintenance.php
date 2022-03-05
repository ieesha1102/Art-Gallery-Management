<!DOCTYPE html>
<html>
<head>Display Maintenance
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table border ="1">
        <tr>
            <th>Year</th>
            <th>Electricty Bill</th>
            <th>Staff Salary</th>
            <th>Cleaning Supplies</th>
        </tr>
        <?php
            
            include 'C:\xampp\htdocs\login-system\db_conn.php';
            error_reporting(0);
            $query = "select * from Maintenance";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            if($total != 0)
            {
                echo $result['Year']." ".$result['Electricity_Bill']." ".$result['Staff_Salary']." ".$result['Cleaning_Supplies'];
                while($result = mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                    <td>".$result['Year']."</td>
                    <td>".$result['Electricity_Bill']."</td>
                    <td>".$result['Staff_Salary']."</td>
                    <td>".$result['Cleaning_Supplies']."</td>
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