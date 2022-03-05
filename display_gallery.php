<!DOCTYPE html>
<html>
<head>Display Staff
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table border ="1">
        <tr>
            <th>Staff ID</th>
            <th>Staff Name</th>
            <th>Salary</th>
            <th>Role</th>
            <th>Shift</th>
            <th>Agent ID</th>
        </tr>
        <?php
            
            include 'C:\xampp\htdocs\login-system\db_conn.php';
            error_reporting(0);
            $query = "select * from Gallery";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            if($total != 0)
            {
                echo $result['StaffID']." ".$result['StaffName']." ".$result['Salary']." ".$result['Role']." ".$result['Shift']." ".$result['AgentID'];
                while($result = mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                    <td>".$result['StaffID']."</td>
                    <td>".$result['StaffName']."</td>
                    <td>".$result['Salary']."</td>
                    <td>".$result['Role']."</td>
                    <td>".$result['Shift']."</td>
                    <td>".$result['AgentID']."</td>
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