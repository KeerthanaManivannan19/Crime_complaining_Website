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
                        <textarea name="action" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>Latest Update Date:</td>
                    <td><input type="date" name="update_date"></td>
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

$complaint_id=$_POST["complaint_id)"];
$officer_id=$_POST["officer_id"];
$action=$_POST["action"];
$update_date=$_POST["update_date"];


if(isset($_POST['submit']))
{
    
    $sql=
    "INSERT INTO action (complaint_id, officer_id, actions, update_date) VALUES ('$complaint_id', '$officer_id', '$action', '$update_date')";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());

    if($res==true)
    {
        $_SESSION['insert_action']="Action is inserted";
        header('location:'.SITEURL.'complaint_action_details.php');
    }
    

    
}


?>