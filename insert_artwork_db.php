<?php 
session_start(); 
include 'C:\xampp\htdocs\login-system\db_conn.php';

if (isset($_POST['art_id']) && isset($_POST['name']) && isset($_POST['type']) && isset($_POST['price']) && isset($_POST['artist_id']) && isset($_POST['event_id'])) 
{
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $did = validate($_POST['art_id']);
    $dname = validate($_POST['name']);
    $dtype= validate($_POST['type']);
    $dprice = validate($_POST['price']);
    $dartistid = validate($_POST['artist_id']);
    $deventid = validate($_POST['event_id']);

    if(empty($did)) 
    {
        header("Location: insert_artwork.php?error=Artwork ID is required");
        exit();
    }
    if(empty($dname))
    {
        header("Location: insert_artwork.php?error=Name is required");
        exit();
    }
    if(empty($dtype)) 
    {
        header("Location: insert_artwork.php?error=Type is required");
        exit();
    }
    if(empty($dprice))
    {
        header("Location: insert_artwork.php?error=Price is required");
        exit();
    }
    if(empty($dartistid)) 
    {
        header("Location: insert_artist.php?error=Artist ID is required");
        exit();
    }
    if(empty($deventid)) 
    {
        header("Location: insert_artist.php?error=Event ID is required");
        exit();
    }
    else
    {
        $query = "INSERT INTO Art_work(ArtID, Art_work_Name, Art_work_Type, Price, ArtistID, EventID) VALUES('$did', '$dname', '$dtype', '$dprice', '$dartistid', '$deventid')";
        if (mysqli_query($conn, $query))
        {
            header("Location: insert_artwork_succ.php?success=Record added successfully");
            exit();
        }
        else
        {
            header("Location: insert_artwork.php?error=Not successfully inserted");
            exit();
        }
    }   
}
else
{
    header("Location: home.php");
    exit();
}