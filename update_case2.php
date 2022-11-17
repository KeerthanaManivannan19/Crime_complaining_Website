<?php 
include('connection.php');

?>
<?php
if(isset($_GET['caseid']))
{
    
    
     $caseid=$_GET['caseid'];
     $sql1="select * from cases where caseid=' $caseid'";
     $res1=mysqli_query($conn,$sql1);
     $row1=mysqli_fetch_assoc($res1);
     $case_type=$row1['case_type'];
     $case_name=$row1['case_name'];
     $summary=$row1['summary'];
     $complaint_id=$row1['complaint_id'];

}
else{
    header('location:'.SITEURL.'view_cases1.php');

}
?>

<link rel="stylesheet" href="..\Css\admin.css">
<div class="main-content">
    <div calss="wrapper">
        
        <br>
        <div class="complaints">
           <div class="wrapper">
           
                <ul>
                    <li><a href="index.php">Home</a></li>
                    
                </ul>
                </div>
        </div>
<h1 style='text-align:center'>Updating Case Details</h1>
 
        
        <form action="" method="POST">
            <table class="tbl-30">
            
                <tr>
                <tr>
                    <td>Case Id:</td>
                    <td><input type="text" name="caseid" value="<?php echo $caseid?>"></td>
                    
                </tr>

                <tr>
                    <td>Case type:</td>
                    <td><input type="text" name="case_type" value="<?php echo $case_type?>"></td>
                </tr>
                <tr>
                    <td>Case Name:</td>
                    <td><input type="text" name="case_name" value="<?php echo $case_name?>" ></td>
                </tr>
                
                
                <tr>
                    <td>Complaint ID:</td>
                    <td><input type="number" name="complaint_id" value="<?php echo $complaint_id?>"></td>
                </tr>
                <tr>
                    <td>Case Summary:</td>
                    <td><input type="text" name="summary" value="<?php echo $summary?>" ></td>
                </tr>
                
                
                <tr>
                    <td colspan="2">
                    <td><input type="submit" name="submit" value="update" class="btn-secondary"></td>
                    </td>
                </tr>
                
                
            </table>
        </form>
    </div>
</div> 
<?php

error_reporting(0);


$case_type=$_POST["case_type"];


$case_name=$_POST["case_name"];
$complaint_id=$_POST["complaint_id"];

$summary=$_POST["summary"];

$caseid=$_POST["caseid"];
if(isset($_POST['submit']))
{

    
    $sql=
    "update  cases set case_type='$case_type',case_name='$case_name',
    summary='$summary',complaint_id='$complaint_id' where caseid='$caseid'";
  
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
    if($res==true)
    {
        $_SESSION['update_case']="Case will be updated";
        header('location:'.SITEURL.'view_cases1.php');
    }
    else{
        $_SESSION['update_case']="Failed to update the case";
        header('location:'.SITEURL.'view_cases1.php');
        
    }
    
}





?>