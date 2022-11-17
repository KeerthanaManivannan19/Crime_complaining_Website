<?php
include('connection.php');
 $complaint_id=$_GET['complaint_id'];
 if(isset($_GET['complaint_id']))
 {
     
     
      $complaint_id=$_GET['complaint_id'];
      $sql1="select * from complaint where complaint_id=' $complaint_id'";
      $res1=mysqli_query($conn,$sql1);
      $row1=mysqli_fetch_assoc($res1);
      $user_id=$row1['user_id'];
      $sql2="update user set type='block' where user_id='$user_id'";
      $res2=mysqli_query($conn,$sql2);
      
 }
 else{
     header('location:'.SITEURL.'view_witness.php');
 
 }
 
 $sql="update  complaint set type='fake' where complaint_id='$complaint_id'";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
    if($res==true)
    {
        $_SESSION['make1']="Responsible user id for making fake complaint is blocked";
        header('location:'.SITEURL.'view_complaints.php');
    }
    else{
        $_SESSION['make1']="Failed to block whoose responsible user id for making fake complaint";
        header('location:'.SITEURL.'view_complaints.php');
        
    }

?>
