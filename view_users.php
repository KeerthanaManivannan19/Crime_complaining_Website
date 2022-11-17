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
        if(isset($_SESSION['block']))
        {
            echo $_SESSION['block'];
            unset($_SESSION['block']);
        }
        if(isset($_SESSION['unblock']))
        {
            echo $_SESSION['unblock'];
            unset($_SESSION['unblock']);
        }
       
       
        ?>
        
    <table cellpadding="pixels" cellspacing="pixels">
    <style>td{padding:0 15px;
        }</style>
      
        <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>Occupation</th>
            <th>Address</th>
            <th>Phone no</th>
            <th>NIC</th>
            <th>Block details</th>

        </tr>
        
        
        <?php
        error_reporting(0);
        $sql="select * from user"; 
        $res=mysqli_query($conn,$sql) or die(mysqli_error());
        if($res==true)
        {
            $count=mysqli_num_rows($res);
            if( $count>0)
            {
                while($rows=mysqli_fetch_assoc($res))
                {
                    $user_id=$rows['user_id'];
                    $name=$rows['name'];
                    $occupation=$rows['occupation'];
                    $address=$rows['address'];
                    $phoneno=$rows['phoneno'];
                    $nic=$rows['nic'];
                    $type=$rows['type'];

                    ?>
                       
                       <tr>
                        <td><?php echo $user_id;?> </td>
                        <td><?php echo $name;?> </td>
                        <td><?php echo $occupation;?> </td>
                        
                        <td><?php echo $address;?> </td>
                        <td><?php echo $phoneno;?> </td>
                        <td><?php echo $nic;?> </td>
                        <td><?php echo $type;?> </td>

                        <td>
                       
                        <td><a href="<?php echo SITEURL;?> user_block.php?user_id=<?php echo $user_id;?>" class="btn btn-secondary">Block</a></td>
                        <td><a href="<?php echo SITEURL;?> user_unblock.php?user_id=<?php echo $user_id;?>" class="btn-secondary">Unblock</a></td>
                        
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
