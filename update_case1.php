<?php include('connection.php');?>
<?php
// include database connection file

if(isset($_POST['update']))
{
// Get the row id


$caseid=$_POST['caseid'];
$case_type=$_POST['case_type'];
$case_name=$_POST['case_name'];
$register_date=$_POST['register_date'];
$summary=$_POST['summary'];
$complaint_id=$_POST['complaint_id'];
$case_status=$_POST['case_status'];

// Store  Procedure for Updation
$sql=
    "update  cases set case_type='$case_type',case_name='$case_name',
    register_date='$register_date',summary='$summary',complaint_id='$complaint_id',case_status='$case_status' where caseid='$caseid'";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='index.php'</script>"; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP CURD Operation using Stored Procedure </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="row">
<div class="col-md-12">
<h3>Update Record | PHP CRUD Operations using Stored Procedure</h3>
<hr />
</div>
</div>

<?php 
// Get the userid
$userid=intval($_GET['id']);
$sql =mysqli_query($con, "call sp_readarow('$userid')");
while ($result=mysqli_fetch_array($sql)) {                 
?>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>First Name</b>
<input type="text" name="firstname" value="<?php echo htmlentities($result['FirstName']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Last Name</b>
<input type="text" name="lastname" value="<?php echo htmlentities($result['LastName']);?>" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Email id</b>
<input type="email" name="emailid" value="<?php echo htmlentities($result['EmailId']);?>" class="form-control" required>
</div>
<div class="row">
<div class="col-md-4"><b>Contact no </b>
<input type="text" name="contactno" value="<?php echo htmlentities($result['ContactNumber']);?>" class="form-control"  required>
</div>
</div>  



<div class="row">
<div class="col-md-8"><b>Address</b>
<textarea class="form-control" name="address" required><?php echo htmlentities($result['Address']);?></textarea>
</div>
</div>  
<?php } ?>

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">
</div>
</div> 
     </form>
</div>
</div>

</body>
</html>