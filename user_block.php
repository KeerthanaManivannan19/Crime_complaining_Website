<?php
include('connection.php');
 $user_id=$_GET['user_id'];
 
 $sql="update  user set type='block' where user_id='$user_id'";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
    if($res==true)
    {
        $_SESSION['block']="User is blocked";
        header('location:'.SITEURL.'view_users.php');
    }
    else{
        $_SESSION['block']="Failed to block user";
        header('location:'.SITEURL.'view_users.php');
        
    }

?>