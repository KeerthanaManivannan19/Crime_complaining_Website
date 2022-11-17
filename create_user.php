<?php include('connection.php');?>

<link rel="stylesheet" href="..\Css\admin.css">
<div class="main-content">
    <div calss="wrapper">
        <h1>Create User Account</h1>
        <br>
        
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" placeholder="Enter your name"></td>
                </tr>
                <tr>
                    <td>NIC:</td>
                    <td><input type="text" name="nic" placeholder="Enter the true identity"></td>
                </tr>
                <tr>
                    <td>User name:</td>
                    <td><input type="text" name="user_id" placeholder="Enter valid user id"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Enter the strong password"></td>
                </tr>
                <tr>
                    <td>Occupation:</td>
                    <td><input type="text" name="occupation"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address" placeholder="Enter the true address"></td>
                </tr>
                <tr>
                    <td>Phone No:</td>
                    <td><input type="number" name="phoneno" placeholder="Enter the true no"></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <td><input type="submit" name="submit" value="create account" class="btn-secondary"></td>
                    </td>
                </tr>
                
            </table>
        </form>
    </div>
</div> 
<?php
error_reporting(0);


    $user_id=$_POST["user_id"];
$password=md5($_POST["password"]);
$name=$_POST["name"];

$occupation=$_POST["occupation"];
$address=$_POST["address"];
$phoneno=$_POST["phoneno"];
$nic=$_POST["nic"];




if(isset($_POST['submit']))
{
    
    $sql=
    "insert into user set user_id='$user_id',password='$password',
    name='$name',occupation='$occupation',address='$address',phoneno=$phoneno, nic= '$nic',type='clean'";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());

    if($res==true)
    {
        $_SESSION['insert_user']="Your user account is created";
        header('location:'.SITEURL.'index.php');
    }
    else{
        $_SESSION['insert_user']="Failed to create account";
        header('location:'.SITEURL.'index.php');
        
    }
    
}


?>