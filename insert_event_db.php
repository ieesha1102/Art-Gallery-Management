<?php 
session_start(); 
include 'C:\xampp\htdocs\login-system\db_conn.php';

if (isset($_POST['event_id']) && isset($_POST['start_date']) && isset($_POST['end_date']) && isset($_POST['staff_id']) && isset($_POST['artist_id']) && isset($_POST['agent_id'])) 
{
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $did = validate($_POST['event_id']);
    $dsdate = validate($_POST['start_date']);
    $dedate = validate($_POST['end_date']);
    $dstaffid = validate($_POST['staff_id']);
    $dartistid = validate($_POST['artist_id']);
    $dagentid = validate($_POST['agent_id']);

    if(empty($did)) 
    {
        header("Location: insert_event.php?error=Event ID is required");
        exit();
    }
    if(empty($dsdate))
    {
        header("Location: insert_event.php?error=Start Date is required");
        exit();
    }
    if(empty($dedate)) 
    {
        header("Location: insert_event.php?error=End Date is required");
        exit();
    }
    if(empty($dstaffid))
    {
        header("Location: insert_event.php?error=Staff ID is required");
        exit();
    }
    if(empty($dartistid)) 
    {
        header("Location: insert_event.php?error=Artist ID is required");
        exit();
    }
    if(empty($dagentid)) 
    {
        header("Location: insert_event.php?error=Agent ID is required");
        exit();
    }
    else
    {
        $query = "INSERT INTO Event(EventID, Event_start_date, Event_end_date, StaffID, ArtistID, AgentID) VALUES('$did', '$dsdate', '$dedate', '$dstaffid', '$dartistid', '$dagentid')";
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