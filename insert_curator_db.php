<?php 
session_start(); 
include 'C:\xampp\htdocs\login-system\db_conn.php';

if (isset($_POST['agent_id']) && isset($_POST['name_of_the_agent'])) 
{
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $did = validate($_POST['agent_id']);
    $dname = validate($_POST['name_of_the_agent']);
    $dcgallery = validate($_POST['commission_from_gallery']);
    $dccustomer = validate($_POST['commission_from_customer']);

    if (empty($did)) 
    {
        header("Location: insert_curator.php?error=Agent ID is required");
        exit();
    }
    if(empty($dname))
    {
        header("Location: insert_curator.php?error=Name of the Agent is required");
        exit();
    }
    else
    {
        $query = "INSERT INTO Curator(AgentID, Name, Commission_from_gallery, Commission_from_customer) VALUES('$did', '$dname', '$dcgallery', '$dccustomer')";
        if (mysqli_query($conn, $query))
        {
            header("Location: insert_curator_succ.php?success=Record added successfully");
            exit();
        }
        else
        {
            header("Location: insert_curator.php?error=Not successfully inserted");
            exit();
        }
    }   
}
else
{
    header("Location: home.php");
    exit();
}