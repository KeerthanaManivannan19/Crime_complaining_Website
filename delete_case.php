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
                    <td colspan="2">
                    <td><input type="submit" name="delete" value="delete" class="btn-secondary"></td>
                    </td>
                </tr>
                
            </table>
        </form>
    </div>
</div> 
<?php

error_reporting(0);

$caseid=$_POST["caseid"];


if(isset($_POST['delete']))
{
    
    $sql=
    "delete from cases where caseid='$caseid'";
    echo "Data is deleted";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
    
}



?>