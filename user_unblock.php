<?php
include('connection.php');
 $user_id=$_GET['user_id'];
 
 $sql="update  user set type='unblock' where user_id='$user_id'";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
    if($res==true)
    {
        $_SESSION['unblock']="User is unblocked";
        header('location:'.SITEURL.'view_users.php');
    }
    else{
        $_SESSION['unblock']="Failed to unblock user";
        header('location:'.SITEURL.'view_users.php');
        
    }

?>