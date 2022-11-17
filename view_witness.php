<?php include('connection.php');?>
    <link rel="stylesheet" href="..\Css\admin.css">

<div class="main-content">

    <div class="wrapper">
        <h1 style='text-align:center'><u>Witness Details</u></h1>
        <div class="complaints">
           <div class="wrapper">
           
                <ul>
                    
                    <li><a href="admin_login.php">logout</a></li>
                    <li><a href="view_cases1.php">Case Details</a></li>
                    <li><a href="complaint_action_details.php">Complaint Action Details</a></li>
                    <li><a href="view_complaints.php">View Complaints</a></li>
                    <li><a href="view_witness.php">View Witness</a></li>
                    <li><a href="view_users.php">View Users</a></li>
                   
                    
                </ul>
                </div>
        </div>
        <?php
         error_reporting(0);
        if(isset($_SESSION['truth']))
        {
            echo $_SESSION['truth'];
            unset($_SESSION['truth']);
        }
        if(isset($_SESSION['fake']))
        {
            echo $_SESSION['fake'];
            unset($_SESSION['fake']);
        }
       
       
        ?>
        
    <table cellpadding="pixels" cellspacing="pixels">
    <style>td{padding:0 15px;
        }</style>
      
        <tr>
            <th>Witness ID</th>
            <th>User Name</th>
            <th>Case id</th>
            <th>Statement</th>
            <th>Date</th>
            <th>Type</th>
        </tr>
        
        
        <?php
        error_reporting(0);
        $sql="select * from witness"; 
        $res=mysqli_query($conn,$sql) or die(mysqli_error());
        if($res==true)
        {
            $count=mysqli_num_rows($res);
            if( $count>0)
            {
                while($rows=mysqli_fetch_assoc($res))
                {
                    $witnessid=$rows['witnessid'];
                    $user_id=$rows['user_id'];
                    $date=$rows['date'];
                    $case_id=$rows['case_id'];
                    $statement=$rows['statement'];
                    $Trust=$rows['Trust'];

                    ?>
                       
                       <tr>
                        <td><?php echo $witnessid;?> </td>
                        <td><?php echo $user_id;?> </td>
                        <td><?php echo $case_id;?> </td>
                        
                        <td><?php echo $statement;?> </td>
                        <td><?php echo $date;?> </td>
                        <td><?php echo $Trust;?> </td>

                        <td>
                       
                        <td><a href="<?php echo SITEURL;?> update_fake.php?witnessid=<?php echo $witnessid;?>" class="btn btn-secondary">Update fake</a></td>
                        <td><a href="<?php echo SITEURL;?> update_truth.php?witnessid=<?php echo $witnessid;?>" class="btn-secondary">Update truth</a></td>
                        
                    </td>
                        
                       </tr>
                       
                    <?php
                }

            }
            
        }
        ?>
    </table>
</div>
</div>
