<?php include('connection.php');?>
    <link rel="stylesheet" href="..\Css\admin.css">

<div class="main-content">

    <div class="wrapper">
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
        <h1 style='text-align:center'><u>Case Details</u></h1>
    <table cellpadding="pixels" cellspacing="pixels">
    <style>td{padding:0 15px;
        }</style>
      
        <tr>
            
            <th>Case id</th>
            <th>Case Type</th>
            <th>Case Name</th>
            <th>Case registered date</th>
            <th>summary</th>
            <th>complainant name </th>
            <th>Finished date</th>
            <th>Action</th>
            <th>Officer name</th>
           

        </tr>
        
        
        <?php
        error_reporting(0);
        $sql="select cases.caseid,cases.case_type,cases.case_name,cases.summary,cases.register_date,cases.finished_date,officer.name,action.actions,user.name from cases,complaint,officer,user,action where case_status='finished' and cases.complaint_id=action.complaint_id  and complaint.complaint_id=cases.complaint_id and complaint.user_id=user.user_id"; 
        $res=mysqli_query($conn,$sql) or die(mysqli_error());
        if($res==true)
        {
            $count=mysqli_num_rows($res);
            if( $count>0)
            {
                while($rows=mysqli_fetch_assoc($res))
                {
                    $caseid=$rows['cases.caseid'];
                    $case_type=$rows['cases.case_type'];
                    $case_name=$rows['cases.case_name'];
                    $register_date=$rows['cases.register_date'];
                    $summary=$rows['cases.summary'];
                    $comname=$rows['user.name'];
                    $finished_date=$rows['cases.finished_date'];
                    $action=$rows['actions.action'];
                    $off_name=$rows['officer.name'];
                    ?>
                       
                       <tr>
                        <td><?php echo $caseid;?> </td>
                        <td><?php echo $case_type;?> </td>
                        <td><?php echo $case_name;?> </td>
                        <td><?php echo $register_date;?> </td>
                        <td><?php echo $summary;?> </td>
                        <td><?php echo $comname;?> </td>
                        <td><?php echo $finished_date;?> </td>
                        <td><?php echo  $action;?> </td>
                        <td><?php echo $off_name;?> </td>

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
