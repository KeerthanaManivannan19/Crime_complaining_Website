<?php include('connection.php');?>

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
                    <td>Case id:</td>
                    <td><input type="number" name="caseid" placeholder="Only purpose for update and delete"></td>
                </tr>
                <tr>
                <tr>
                    <td>Case Type:</td>
                    <td><input type="text" name="case_type" ></td>
                </tr>
                <tr>
                    <td>Case Name:</td>
                    <td><input type="text" name="case_name" ></td>
                </tr>
                <tr>
                    <td>Register Date:</td>
                    <td><input type="date" name="register_date" ></td>
                </tr>
                <tr>
                    <td>Complaint ID:</td>
                    <td><input type="number" name="complaint_id"></td>
                </tr>
                <tr>
                    <td>Case Summary:</td>
                    <td><input type="text" name="summary" ></td>
                </tr>
                
                
                <tr>
                    <td colspan="2">
                    <td><input type="submit" name="submit" value="insert" class="btn-secondary"></td>
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
$register_date=$_POST["register_date"];
$caseid=$_POST["caseid"];



if(isset($_POST['update']))
{
    
    $sql=
    "update  cases set case_type='$case_type',case_name='$case_name',
    register_date='$register_date',summary='$summary',complaint_id='$complaint_id' where caseid='$caseid'";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
    
}


?>