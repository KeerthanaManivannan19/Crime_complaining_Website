<?php
include('connection.php');
 $witnessid=$_GET['witnessid'];
 if(isset($_GET['witnessid']))
{
    
    
     $caseid=$_GET['caseid'];
     $sql1="select * from witness where witnessid=' $witnessid'";
     $res1=mysqli_query($conn,$sql1);
     $row1=mysqli_fetch_assoc($res1);
     $user_id=$row1['user_id'];
     $sql2="update user set type='block' where user_id='$user_id'";
     $res2=mysqli_query($conn,$sql2);
     
}
else{
    header('location:'.SITEURL.'view_witness.php');

}
 
 $sql="update  witness set Trust='fake' where witnessid='$witnessid'";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
    if($res==true)
    {
        $_SESSION['fake']="witness is made as fake and the response userid is blocked";
        header('location:'.SITEURL.'view_witness.php');

    }
    else{
        $_SESSION['fake']="Failed to make witness as truth";
        header('location:'.SITEURL.'view_witness.php');
        
    }

?>

