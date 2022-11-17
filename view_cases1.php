<?php include('connection.php');?>
    <link rel="stylesheet" href="..\Css\admin.css">

<div class="main-content">

    <div class="wrapper">
        <h1 style='text-align:center'><u>Case Details</u></h1>
        <br>

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
        <br>
        <br>
        <?php
         error_reporting(0);
        if(isset($_SESSION['delete']))
        {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }
        if(isset($_SESSION['delete1']))
        {
            echo $_SESSION['delete1'];
            unset($_SESSION['delete1']);
        }
        if(isset($_SESSION['update_case']))
        {
            echo $_SESSION['update_case'];
            unset($_SESSION['update_case']);
        }
        if(isset($_SESSION['insert']))
        {
            echo $_SESSION['insert'];
            unset($_SESSION['insert']);
        }
        ?>
    <table cellpadding="pixels" cellspacing="pixels">
    <style>td{padding:0 15px;
        }</style>
      
        <tr>
            
             
            <th>Case id</th>
            <th>case type</th>
            <th>Case name</th>
            <th>Case Register Date</th>
            <th>Summary</th>
            <th>Complaint Id</th>
            <th>Case Status</th>
    </tr>
     <?php
     error_reporting(0);
     $sql="select * from cases";
     $res=mysqli_query($conn,$sql);
     if($res==true)
     {
        $rows=mysqli_num_rows($res);
        if($rows>0)
        {
            while($rows=mysqli_fetch_assoc($res))
            {
                    $caseid=$rows['caseid'];
                    $case_type=$rows['case_type'];
                    $case_name=$rows['case_name'];
                    $register_date=$rows['register_date'];
                    $summary=$rows['summary'];
                    $complaint_id=$rows['complaint_id'];
                    $case_status=$rows['case_status'];
                    ?>
                      <tr>
                        <td><?php echo $caseid;?> </td>
                        <td><?php echo $case_type;?> </td>
                        <td><?php echo $case_name;?> </td>
                        <td><?php echo $register_date;?> </td>
                        <td><?php echo $summary;?> </td>
                        <td><?php echo $complaint_id;?> </td>
                        <td><?php echo $case_status;?> </td>
                        <td>
                       
                        <td><a href="<?php echo SITEURL;?> delete_case1.php?caseid=<?php echo $caseid;?>" class="btn btn-secondary">Make old</a></td>
                        <td><a href="<?php echo SITEURL;?> delete_case2.php?caseid=<?php echo $caseid;?>" class="btn-secondary">Make reopen</a></td>
                        <td><a  href="<?php echo SITEURL;?> update_case2.php?caseid=<?php echo $caseid;?>" class="btn-secondary">Update</a></td>
                        <td><a  href="<?php echo SITEURL;?> finished_cases.php?caseid=<?php echo $caseid;?>" class="btn-secondary">Update to Finished</a></td>
                    </td>
                        
                       </tr>

                    <?php
            }
               
        }
        else{

        }
     }
     ?>

        
        
        
        
    </table>
</div>
</div>
