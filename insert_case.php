<?php include('connection.php');?>
<?php
if(isset($_GET['complaint_id']))
{
    
    
     $complaint_id=$_GET['complaint_id'];
     $sql1="select * from complaint where complaint_id='$complaint_id'";
     $res1=mysqli_query($conn,$sql1);
     $row1=mysqli_fetch_assoc($res1);
     $complaint_title=$row1['complaint_title'];
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
<h1 style='text-align:center'>Crime Complaining Website Case Details</h1>

        
        <form action="" method="POST">
            <table class="tbl-30">
            
                <tr>
                <tr>
                    <td>Case Type:</td>
                    <td><input type="text" name="case_type" ></td>
                </tr>
                <tr>
                    <td>Case Name:</td>
                    <td><input type="text" name="case_name"  value="<?php echo $complaint_title?>" ></td>
                </tr>
                
                <tr>
                    <td>Register Date:</td>
                    <td><input type="date" name="register_date" ></td>
                </tr>
                <tr>
                    <td>Complaint ID:</td>
                    <td><input type="number" name="complaint_id" value=<?php echo $complaint_id?> ></td>
                </tr>
                <tr>
                    <td>Case Summary:</td>
                    <td>
                        <textarea name="summary" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                
                
                <tr>
                    <td colspan="2">
                    <td><input type="submit" name="insert" value="insert" class="btn-secondary"></td>
                    </td>
                </tr>
                
                
            </table>
        </form>
    </div>
</div> 
<?php

error_reporting(0);
$case_type=$_POST["case_type"];
$case_status=$_POST["case_status"];

$case_name=$_POST["case_name"];
$complaint_id=$_POST["complaint_id"];

$summary=$_POST["summary"];
$register_date=$_POST["register_date"];
$caseid=$_POST["caseid"];
if(isset($_POST['insert']))
{

    
    $sql=
    "insert into cases set case_type='$case_type',case_name='$case_name',
    register_date='$register_date',summary='$summary',complaint_id='$complaint_id',case_status='new'";
    
  
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
    if($res==true)
    {
        $_SESSION['insert_case']="Case will become new case";
        header('location:'.SITEURL.'view_complaints.php');
    }
    else{
        $_SESSION['insert_case']="Failed to make case as new check wrong case id may be entered";
        header('location:'.SITEURL.'view_complaints.php');
        
    }
    
    
}






?>