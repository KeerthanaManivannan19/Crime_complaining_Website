<?php include('connection.php');?>

<link rel="stylesheet" href="..\Css\admin.css">
<div class="main-content">
    <div calss="wrapper">
        <h1>Actions Taken Against The Complaints</h1>
        <br>
        
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Complaint Id:</td>
                    <td><input type="number" name="complaint_id"></td>
                </tr>
                
                <tr>
                    <td>Officer ID:</td>
                    <td><input type="number" name="officer_id"></td>
                </tr>
                <tr>
                    <td>Taken action:</td>
                    <td>
                        <textarea name="actions" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>Latest Update Date:</td>
                    <td><input type="date" name="update_date"></td>
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

$complaint_id=$_POST["complaint_id)"];
$officer_id=$_POST["officer_id"];
$actions=$_POST["actions"];
$update_date=$_POST["update_date"];


if(isset($_POST['submit']))
{
    
    $sql=
    "update  action set action.actions='$actions',action.update_date='$update_date' where action.complaint_id='$complaint_id' and action.officer_id='$officer_id' ";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());

    if($res==true)
    {
        $_SESSION['update_action']="Action is updated";
        header('location:'.SITEURL.'complaint_action_details.php');
    }
    else{
        $_SESSION['update_action']="Failed to update action";
        header('location:'.SITEURL.'complaint_action_details.php');
        
    }     

    
}


?>