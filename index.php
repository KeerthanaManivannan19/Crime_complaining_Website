<html>
<?php include('connection.php');?>
    <head>
    <title> Crime Complaining Website -Home page
       
    </title>
    <link rel="stylesheet" href="..\Css\admin.css">
    <?php
         error_reporting(0);
        if(isset($_SESSION['insert_user']))
        {
            echo $_SESSION['insert_user'];
            unset($_SESSION['insert_user']);
        }
        if(isset($_SESSION['insert_admin']))
        {
            echo $_SESSION['insert_admin'];
            unset($_SESSION['insert_admin']);
        }
        
        ?>
    </head>
    <body>
    <h1 style='text-align:center'><u>Crime Complaining Website</u></h1>
       
        <div class="complaints">
           <div class="wrapper">
           
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="<?php echo SITEURL;?> user_login2.php">User login</a></li>
                    <li><a href="<?php echo SITEURL;?> admin_login.php">Admin login</a></li>
                    
                    <li><a href="<?php echo SITEURL;?> create_user.php">Create User Account</a></li>
                    <li><a href="<?php echo SITEURL;?> create_admin.php">Create admin Account</a></li>
                    
                    
                   
                    
                    
                </ul>
                </div>
        </div>
    </body>
</html>