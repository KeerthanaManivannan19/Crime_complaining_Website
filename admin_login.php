<?php include('connection.php');?>
<?php
error_reporting(0);
// include database connection file
$user_id=$_POST["user_id"];
$password=md5($_POST["password"]);
if(isset($_POST['submit']))
{
    
    $sql=
    "select * from officer where user_id='$user_id' and password='$password'";
    $res=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);
    


if($count==1)
{
// Message for successfull insertion
echo "<script>alert('login successfully');</script>";
echo "<script>window.location.href='admin_side.php'</script>"; 
}
else 
{
// Message for unsuccessfull insertion
echo "<script>alert('Check your user name or password');</script>";
echo "<script>window.location.href='admin_login.php'</script>"; 
}
}

?>

<html>
    <head>
    <title> Administration login 
       
       </title>
    <link rel="stylesheet" href="..\Css\admin.css">

    </head>
    <body>
    <div class="complaints">
           <div class="wrapper">
           
                <ul>
                    
                    <li><a href="index.php">Home</a></li>
                    
                   
                    
                </ul>
                </div>
        </div>
        <div class="login">
            
           <form action="" method="POST">
          <h1 class="text-center">Admin Login</h1><br>
        
            User name:<br><br>
            <input  type="text" name="user_id"><br>
            Password:<br><br>
            <input type="password" name="password" >
            <br>
            <br>
            <input type="submit" name="submit" value="login" class="btn-secondary">
           </form>
        </div>
    </body>
</html>