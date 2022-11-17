<?php include('connection.php');?>
    <link rel="stylesheet" href="..\Css\admin.css">

<div class="main-content">

    <div class="wrapper">
        <h1 style='text-align:center'><u>Action against complaint Details</u></h1>
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
        <br>
        <br>
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
       
        
       if(isset($_SESSION['insert_action']))
       {
           echo $_SESSION['insert_action'];
           unset($_SESSION['insert_action']);
       }
       if(isset($_SESSION['update_action']))
       {
           echo $_SESSION['update_action'];
           unset($_SESSION['update_action']);
       }
       
       
       
       
       
        ?>
         <td><a href="<?php echo SITEURL;?> complaint_action.php" class="btn btn-secondary">Insert action details</a></td>

        <br>
        <br>
                        
        
    <table cellpadding="pixels" cellspacing="pixels">
    <style>td{padding:0 15px;
        }</style>
      
        <tr>
            <th>Complaint ID</th>
            <th>Complaint Title</th></th>
            <th>Officer id</th>
            <th>Officer name</th>
            <th>Latest action</th>
            <th>Date</th>
        </tr>
        
        
        <?php
        error_reporting(0);
        $sql="select officer.name as name,complaint.complaint_id as comid,complaint.complaint_title as title,officer.officer_id as id,action.actions as actions,action.update_date as date from officer,complaint,action where complaint.complaint_id=action.complaint_id and officer.officer_id=action.officer_id"; ; 
        $res=mysqli_query($conn,$sql) or die(mysqli_error());
        if($res==true)
        {
            $count=mysqli_num_rows($res);
            if( $count>0)
            {
                while($rows=mysqli_fetch_assoc($res))
                {
                    $comid=$rows['comid'];
                    $title=$rows['title'];
                    
                    $id=$rows['id'];
                    $name=$rows['name'];
                    $actions=$rows['actions'];
                    $date=$rows['date'];
                    
                    ?>
                       
                       <tr>
                        <td><?php echo $comid;?> </td>
                        <td><?php echo $title;?> </td>
                        <td><?php echo $id;?> </td>
                        
                        <td><?php echo $name;?> </td>
                        <td><?php echo $actions;?> </td>
                        <td><?php echo $date;?> </td>

                        <td>
                       
                        <td><a href="<?php echo SITEURL;?> update_action.php?comid=<?php echo $complaint_id;?>" class="btn btn-secondary">Update action details</a></td>
                        
                        
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
