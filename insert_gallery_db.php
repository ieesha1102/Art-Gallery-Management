<?php 
session_start(); 
include 'C:\xampp\htdocs\login-system\db_conn.php';

if (isset($_POST['staff_id']) && isset($_POST['name']) && isset($_POST['salary']) && isset($_POST['role']) && isset($_POST['shift']) && isset($_POST['agent_id'])) 
{
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $did = validate($_POST['staff_id']);
    $dname = validate($_POST['name']);
    $dsalary= validate($_POST['salary']);
    $drole = validate($_POST['role']);
    $dshift = validate($_POST['shift']);
    $dagentid = validate($_POST['agent_id']);

    if(empty($did)) 
    {
        header("Location: insert_gallery.php?error=Staff ID is required");
        exit();
    }
    if(empty($dname))
    {
        header("Location: insert_gallery.php?error=Staff name is required");
        exit();
    }
    if(empty($dsalary)) 
    {
        header("Location: insert_gallery.php?error=Salary is required");
        exit();
    }
    if(empty($drole))
    {
        header("Location: insert_gallery.php?error=Role is required");
        exit();
    }
    if(empty($dshift)) 
    {
        header("Location: insert_gallery.php?error=Shift is required");
        exit();
    }
    if(empty($dagentid)) 
    {
        header("Location: insert_gallery.php?error=Agent ID is required");
        exit();
    }
    else
    {
        $query = "INSERT INTO Gallery(StaffID, StaffName, Salary, Role, Shift, AgentID) VALUES('$did', '$dname', '$dsalary', '$drole', '$dshift', '$dagentid')";
        if (mysqli_query($conn, $query))
        {
            header("Location: insert_gallery_succ.php?success=Record added successfully");
            exit();
        }
        else
        {
            header("Location: insert_gallery.php?error=Not successfully inserted");
            exit();
        }
    }   
}
else
{
    header("Location: home.php");
    exit();
}