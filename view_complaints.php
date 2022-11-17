<?php include('connection.php');?>
    <link rel="stylesheet" href="..\Css\admin.css">

<div class="main-content">

    <div class="wrapper">
        <h1 style='text-align:center'><u>Complaints Details</u></h1>

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
        if(isset($_SESSION['make1']))
        {
            echo $_SESSION['make1'];
            unset($_SESSION['make1']);
        }
        if(isset($_SESSION['make2']))
        {
            echo $_SESSION['make2'];
            unset($_SESSION['make2']);
        }
        if(isset($_SESSION['insert_case']))
        {
            echo $_SESSION['insert_case'];
            unset($_SESSION['insert_case']);
        }
       
        ?>
        
    <table cellpadding="pixels" cellspacing="pixels">
    <style>td{padding:0 15px;
        }</style>
      
        <tr>
            <th>Complaint ID</th>
            <th>User Name</th>
            <th>Complaint Date</th>
            <th>Complaint Title</th>
            <th>Statement</th>
            <th>Type</th>
        </tr>
        
        
        <?php
        error_reporting(0);
        $sql="select * from complaint"; 
        $res=mysqli_query($conn,$sql) or die(mysqli_error());
        if($res==true)
        {
            $count=mysqli_num_rows($res);
            if( $count>0)
            {
                while($rows=mysqli_fetch_assoc($res))
                {
                    $complaint_id=$rows['complaint_id'];
                    $user_id=$rows['user_id'];
                    $complaint_date=$rows['complaint_date'];
                    $complaint_title=$rows['complaint_title'];
                    $statement=$rows['statement'];
                    $type=$rows['type'];


                    ?>
                       
                       <tr>
                        <td><?php echo $complaint_id;?> </td>
                        <td><?php echo $user_id;?> </td>
                        <td><?php echo $complaint_date;?> </td>
                        <td><?php echo $complaint_title;?> </td>
                        <td><?php echo $statement;?> </td>
                        <td><?php echo $type;?> </td>
                        <td>
                       
                        <td><a href="<?php echo SITEURL;?> make_fake.php?complaint_id=<?php echo $complaint_id;?>" class="btn btn-secondary">Update fake</a></td>
                        <td><a href="<?php echo SITEURL;?> make_truth.php?complaint_id=<?php echo $complaint_id;?>" class="btn-secondary">Update Truth</a></td>
                        <td><a  href="<?php echo SITEURL;?> insert_case.php?complaint_id=<?php echo $complaint_id;?>" class="btn-secondary">Insert case</a></td>
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
