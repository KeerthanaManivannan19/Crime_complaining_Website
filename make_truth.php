<?php
include('connection.php');
 $complaint_id=$_GET['complaint_id'];
 
 $sql="update  complaint set type='truth' where complaint_id='$complaint_id'";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
    if($res==true)
    {
        $_SESSION['make2']="Complaint type is updated";
        header('location:'.SITEURL.'view_complaints.php');
    }
    else{
        $_SESSION['make2']="Failed to update the complaint type";
        header('location:'.SITEURL.'view_complaints.php');
        
    }

?>