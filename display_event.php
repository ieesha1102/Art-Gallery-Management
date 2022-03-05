<!DOCTYPE html>
<html>
<head>Display Event
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table border ="1">
        <tr>
            <th>Event ID</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Staff ID</th>
            <th>Artist ID</th>
            <th>Agent ID</th>
        </tr>
        <?php
            
            include 'C:\xampp\htdocs\login-system\db_conn.php';
            error_reporting(0);
            $query = "select * from Event";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            if($total != 0)
            {
                echo $result['EventID']." ".$result['Event_start_date']." ".$result['Event_end_date']." ".$result['StaffID']." ".$result['ArtistID']." ".$result['AgentID'];
                while($result = mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                    <td>".$result['EventID']."</td>
                    <td>".$result['Event_start_date']."</td>
                    <td>".$result['Event_end_date']."</td>
                    <td>".$result['StaffID']."</td>
                    <td>".$result['ArtistID']."</td>
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