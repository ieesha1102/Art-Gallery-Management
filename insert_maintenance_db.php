<?php 
session_start(); 
include 'C:\xampp\htdocs\login-system\db_conn.php';

if (isset($_POST['year']) && isset($_POST['electricity_bill']) && isset($_POST['staff_salary']) && isset($_POST['cleaning_supplies']))
{
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $dyear = validate($_POST['year']);
    $debill = validate($_POST['electricity_bill']);
    $dssalary = validate($_POST['staff_salary']);
    $dcleansupp = validate($_POST['cleaning_supplies']);

    if (empty($dyear)) 
    {
        header("Location: insert_maintenance.php?error=Year is required");
        exit();
    }
    if(empty($debill))
    {
        header("Location: insert_maintenance.php?error=Electricity Bill is required");
        exit();
    }
    if (empty($dssalary)) 
    {
        header("Location: insert_maintenance.php?error=Staff Salary is required");
        exit();
    }
    if(empty($dcleansupp))
    {
        header("Location: insert_maintenance.php?error=Staff Salary is required");
        exit();
    }
    else
    {
    
        $query = "INSERT INTO Maintenance(Year, Electricity_Bill, Staff_Salary, Cleaning_Supplies) VALUES('$dyear', '$debill', '$dssalary' ,'$dcleansupp')";
        if (mysqli_query($conn, $query))
        {
            header("Location: insert_maintenance_succ.php?success=Record added successfully");
            exit();
        }
        else
        {
            header("Location: insert_maintenance.php?error=Not successfully inserted");
            exit();
        }
    }   
}
else
{
    header("Location: home.php");
    exit();
}