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
            <th>summary</th>
            <th>case status</th>

        </tr>
        
        
        <?php
        error_reporting(0);
        $sql="select * from cases "; 
        $res=mysqli_query($conn,$sql) or die(mysqli_error());
        if($res==true)
        {
            $count=mysqli_num_rows($res);
            if( $count>0)
            {
                while($rows=mysqli_fetch_assoc($res))
                {
                    $caseid=$rows['caseid'];
                    $case_type=$rows['case_type'];
                    $case_name=$rows['case_name'];
                    $summary=$rows['summary'];
                    $case_status=$rows['case_status'];
                    ?>
                       
                       <tr>
                        <td><?php echo $caseid;?> </td>
                        <td><?php echo $case_type;?> </td>
                        <td><?php echo $case_name;?> </td>
                        <td><?php echo $summary;?> </td>
                        <td><?php echo $case_status;?> </td>
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
