<html>
<?php include('connection.php');?>
    <head>
    <title> Crime Complaining User site -Home page
       
    </title>
    <link rel="stylesheet" href="..\Css\admin.css">
    </head>
    <body>
    <?php
         error_reporting(0);
       
        if(isset($_SESSION['insert_complaint']))
        {
            echo $_SESSION['insert_complaint'];
            unset($_SESSION['insert_complaint']);
        }

        if(isset($_SESSION['insert_witness']))
        {
            echo $_SESSION['insert_witness'];
            unset($_SESSION['insert_witness']);
        }
        ?>
    <h1 style='text-align:center'>User Side</h1>
       
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
    </body>
</html>