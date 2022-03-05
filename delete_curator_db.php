<?php 
session_start(); 
include 'C:\xampp\htdocs\login-system\db_conn.php';

if (isset($_POST['id'])) 
{
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $did = validate($_POST['id']);

    if(empty($did)) 
    {
        header("Location: delete_curator.php?error=Agent ID is required");
        exit();
    }
    else
    {
        $query = "DELETE FROM Curator Where AgentID = '$did'";
        if (mysqli_query($conn, $query))
        {
            header("Location: delete_succ.php?success=Record deleted successfully");
            exit();
        }
        else
        {
            header("Location: delete_curator.php?error=Not successfully deleted");
            exit();
        }
    }   
}
else
{
    header("Location: home.php");
    exit();
}