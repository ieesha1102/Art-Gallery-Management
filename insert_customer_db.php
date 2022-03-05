<?php 
session_start(); 
include 'C:\xampp\htdocs\login-system\db_conn.php';

if (isset($_POST['customer_id']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['agent_id']) && isset($_POST['nationality'])) 
{
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $did = validate($_POST['customer_id']);
    $dname = validate($_POST['name']);
    $dphone= validate($_POST['phone']);
    $demail = validate($_POST['email']);
    $daddress = validate($_POST['address']);
    $dagentid = validate($_POST['agent_id']);
    $dnationality= validate($_POST['nationality']);

    if(empty($did)) 
    {
        header("Location: insert_customer.php?error=Customer ID is required");
        exit();
    }
    if(empty($dname))
    {
        header("Location: insert_artist.php?error=Name is required");
        exit();
    }
    if(empty($dphone)) 
    {
        header("Location: insert_artist.php?error=Phone is required");
        exit();
    }
    if(empty($demail))
    {
        header("Location: insert_artist.php?error=Email is required");
        exit();
    }
    if(empty($daddress)) 
    {
        header("Location: insert_artist.php?error=Address is required");
        exit();
    }
    if(empty($dagentid))
    {
        header("Location: insert_artist.php?error=Agent ID is required");
        exit();
    }
    if(empty($dnationality)) 
    {
        header("Location: insert_artist.php?error=Nationality is required");
        exit();
    }
    else
    {
        $query = "INSERT INTO Customer(CustomerID, Name, Phone, Email, Address, AgentID, Nationality) VALUES('$did', '$dname', '$dphone', '$demail', '$daddress', '$dagentid', '$dnationality')";
        if (mysqli_query($conn, $query))
        {
            header("Location: insert_customer_succ.php?success=Record added successfully");
            exit();
        }
        else
        {
            header("Location: insert_customer.php?error=Not successfully inserted");
            exit();
        }
    }   
}
else
{
    header("Location: home.php");
    exit();
}