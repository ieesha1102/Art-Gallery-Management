<?php 
session_start(); 
include 'C:\xampp\htdocs\login-system\db_conn.php';

if (isset($_POST['year'])) 
{
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $dyear = validate($_POST['year']);

    if(empty($dyear)) 
    {
        header("Location: delete_maintenance.php?error=Year is required");
        exit();
    }
    else
    {
        $query = "DELETE FROM Maintenance Where Year = '$dyear'";
        if (mysqli_query($conn, $query))
        {
            header("Location: delete_succ.php?success=Record deleted successfully");
            exit();
        }
        else
        {
            header("Location: delete_maintenance.php?error=Not successfully deleted");
            exit();
        }
    }   
}
else
{
    header("Location: home.php");
    exit();
}