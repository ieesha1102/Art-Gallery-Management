<?php 
session_start(); 
include 'C:\xampp\htdocs\login-system\db_conn.php';

if (isset($_POST['sales_id']) && isset($_POST['date_of_sale']) && isset($_POST['art_id']) && isset($_POST['staff_id'])) 
{
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $did = validate($_POST['sales_id']);
    $ddate = validate($_POST['date_of_sale']);
    $dartid = validate($_POST['art_id']);
    $dstaffid = validate($_POST['staff_id']);

    if(empty($did)) 
    {
        header("Location: insert_sales.php?error=Sales ID is required");
        exit();
    }
    if(empty($ddate))
    {
        header("Location: insert_sales.php?error=Date of Sale is required");
        exit();
    }
    if(empty($dartid)) 
    {
        header("Location: insert_sales.php?error=Art ID is required");
        exit();
    }
    if(empty($dstaffid))
    {
        header("Location: insert_sales.php?error=Staff ID is required");
        exit();
    }
    else
    {
        $query = "INSERT INTO Sales(SalesID, Date_of_Sale, ArtID, StaffID) VALUES('$did', '$ddate', '$dartid', '$dstaffid')";
        if (mysqli_query($conn, $query))
        {
            header("Location: insert_sales_succ.php?success=Record added successfully");
            exit();
        }
        else
        {
            header("Location: insert_sales.php?error=Not successfully inserted");
            exit();
        }
    }   
}
else
{
    header("Location: home.php");
    exit();
}