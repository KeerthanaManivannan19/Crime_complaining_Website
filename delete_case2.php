<?php
include('connection.php');
 $caseid=$_GET['caseid'];
 
 $sql="update  cases set case_status='reopen' where caseid='$caseid'";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
    if($res==true)
    {
        $_SESSION['delete1']="Case will become new case";
        header('location:'.SITEURL.'view_cases1.php');
    }
    else{
        $_SESSION['delete1']="Failed to make case as new check wrong case id may be entered";
        header('location:'.SITEURL.'view_cases1.php');
        
    }

?>
