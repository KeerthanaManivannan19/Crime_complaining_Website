<?php include('connection.php');?>

<link rel="stylesheet" href="..\Css\admin.css">
<div class="main-content">
    <div calss="wrapper">
    <div class="complaints">
           <div class="wrapper">
           
                <ul>
                    
                    <li><a href="user_login2.php">logout</a></li>
                    <li><a href="complaint.php">Make complaints</a></li>
                    <li><a href="Viewcase.php">View present cases</a></li>
                    <li><a href="viewaction.php">View Actions against Complaints</a></li>
                    <li><a href="witness.php">Witness</a></li>
                    <li><a href="officer_details.php">Contact</a></li>
                    
                </ul>
                </div>
        </div>
        <br>
        <br>
    <h1 style='text-align:center'><u>Complaints</u></h1>
    <h2><u></u>Instructions</u></h1>
    <h4><u></u>Enter the truth event otherwise your user account will be blocked</u></h4>
    
        <br>
        <br>
        
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Complaint Title:</td>
                    <td><input type="text" name="complaint_title" placeholder="Enter suitable title"></td>
                </tr>
                
                <tr>
                    <td>User name:</td>
                    <td><input type="text" name="user_id" placeholder="Enter valid user id"></td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td><input type="date" name="complaint_date" placeholder="Enter the truth"></td>
                </tr>
                <tr>
                    <td>Statement:</td>
                    <td>
                        <textarea name="statement" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                
               
                
                <tr>
                    <td colspan="2">
                    <td><input type="submit" name="submit" value="insert complaint" class="btn-secondary"></td>
                    </td>
                </tr>
                
            </table>
        </form>
    </div>
</div> 
<?php
error_reporting(0);

$user_id=$_POST["user_id"];
$complaint_title=$_POST["complaint_title"];
$statement=$_POST["statement"];

$complaint_date=$_POST["complaint_date"];

if(isset($_POST['submit']))
{
    
    $sql=
    "insert into complaint set user_id='$user_id',complaint_date='$complaint_date',
    complaint_title='$complaint_title',statement='$statement',type='new'";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());

    if($res==true)
    {
        $_SESSION['insert_complaint']="Your complaint will be added";
        header('location:'.SITEURL.'user_side.php');
    }
    else{
        $_SESSION['insert_complaint']="Failed to insert complaint";
        header('location:'.SITEURL.'view_cases1.php');
        
    }
    
}


?>