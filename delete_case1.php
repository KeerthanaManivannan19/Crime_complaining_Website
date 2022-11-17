
<?php
include('connection.php');
 $caseid=$_GET['caseid'];
 
 $sql="update  cases set case_status='old' where caseid='$caseid'";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
    if($res==true)
    {
        $_SESSION['delete']="Case will become old case";
        header('location:'.SITEURL.'view_cases1.php');
    }
    else{
        $_SESSION['delete']="Failed to make case as old check wrong case id may be entered";
        header('location:'.SITEURL.'view_cases1.php');
        
    }

?>
