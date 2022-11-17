<?php include('connection.php');?>

<link rel="stylesheet" href="..\Css\admin.css">
<div class="main-content">
    <div calss="wrapper">
        <h1>Create Admin Account</h1>
        <br>
        
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
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
                    <td>Phone no:</td>
                    <td><input type="number" name="phone_no" placeholder="Enter your official phone number"></td>
                </tr>
                <tr>
                    <td>Post:</td>
                    <td><input type="text" name="post" placeholder="Enter the strong posting in your department"></td>
                </tr>
                <tr>
                    <td>Secret Code:</td>
                    <td><input type="password" name="secret_code" placeholder="Enter your secret code"></td>
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

$post=$_POST["post"];
$phone_no=$_POST["phone_no"];
$secret_code=$_POST["secret_code"];

if(isset($_POST['submit'])&&$secret_code=='1234')
{
    
    $sql=
    "insert into officer set name='$name',post='$post',
    user_id='$user_id',password='$password',phone_no=$phone_no";
    $res=mysqli_query($conn,$sql) or die(mysqli_error());

    if($res==true)
    {
        $_SESSION['insert_admin']="Your admin account is created";
        header('location:'.SITEURL.'index.php');
    }
    else{
        echo "<h1></h1>Check your details></h1>";
        $_SESSION['insert_admin']="Failed to create account";
        header('location:'.SITEURL.'index.php');

        
    }
    
}



?>