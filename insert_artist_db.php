<?php 
session_start(); 
include 'C:\xampp\htdocs\login-system\db_conn.php';

if (isset($_POST['artist_id']) && isset($_POST['name_of_the_artist']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['phone']) && isset($_POST['website']) && isset($_POST['nationality']) && isset($_POST['experience']) && isset($_POST['email']) && isset($_POST['agent_id'])) 
{
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $did = validate($_POST['artist_id']);
    $dname = validate($_POST['name_of_the_artist']);
    $dage= validate($_POST['age']);
    $dgender = validate($_POST['gender']);
    $dphone = validate($_POST['phone']);
    $dwebsite = validate($_POST['website']);
    $dnationality= validate($_POST['nationality']);
    $dexperience = validate($_POST['experience']);
    $demail= validate($_POST['email']);
    $dagentid = validate($_POST['agent_id']);

    if(empty($did)) 
    {
        header("Location: insert_artist.php?error=Artist ID is required");
        exit();
    }
    if(empty($dname))
    {
        header("Location: insert_artist.php?error=Name of the Artist is required");
        exit();
    }
    if(empty($dage)) 
    {
        header("Location: insert_artist.php?error=Age is required");
        exit();
    }
    if(empty($dgender))
    {
        header("Location: insert_artist.php?error=Gender is required");
        exit();
    }
    if(empty($dphone)) 
    {
        header("Location: insert_artist.php?error=Phone is required");
        exit();
    }
    if(empty($dwebsite))
    {
        header("Location: insert_artist.php?error=Website is required");
        exit();
    }
    if(empty($dnationality)) 
    {
        header("Location: insert_artist.php?error=Nationality is required");
        exit();
    }
    if(empty($dexperience))
    {
        header("Location: insert_artist.php?error=Experience is required");
        exit();
    }
    if(empty($demail)) 
    {
        header("Location: insert_artist.php?error=Email is required");
        exit();
    }
    if(empty($dagentid))
    {
        header("Location: insert_artist.php?error=Agent ID is required");
        exit();
    }
    else
    {
        $query = "INSERT INTO Artist(ArtistID, Name, Age, Gender, Phone, Website, Nationality, Email, Experience, AgentID) VALUES('$did', '$dname', '$dage', '$dgender', '$dphone', '$dwebsite', '$dnationality', '$demail', '$dexperience', '$dagentid')";
        if (mysqli_query($conn, $query))
        {
            header("Location: insert_artist_succ.php?success=Record added successfully");
            exit();
        }
        else
        {
            header("Location: insert_artist.php?error=Not successfully inserted");
            exit();
        }
    }   
}
else
{
    header("Location: home.php");
    exit();
}