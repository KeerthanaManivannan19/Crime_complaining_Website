<?php
include('connection.php');
 $witnessid=$_GET['witnessid'];
 
 $sql="update  witness set Trust='truth' where witnessid='$witnessid'";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
    if($res==true)
    {
        $_SESSION['truth']="witness is made as truth";
        header('location:'.SITEURL.'view_witness.php');
    }
    else{
        $_SESSION['truth']="Failed to make witness as truth";
        header('location:'.SITEURL.'view_witness.php');
        
    }

?>