<?php
include('connection.php');
 $caseid=$_GET['caseid'];
 
 $sql="update  cases set case_status='finished' where caseid='$caseid'";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
    if($res==true)
    {
        $_SESSION['finish']="Case is updated as finished";
        header('location:'.SITEURL.'view_cases1.php');
    }
    else{
        $_SESSION['finish']="Failed to make case is finished";
        header('location:'.SITEURL.'view_cases1.php');
        
    }

?>