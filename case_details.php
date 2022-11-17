<?php include('connection.php');?>
    <link rel="stylesheet" href="..\Css\admin.css">
    

<div class="main-content">

    <div class="wrapper">
        <h1 style='text-align:center'><u>Case Details</u></h1>
        <div class="row" style="margin-top:1%">
    <a href="insert_case.php"><button class="btn btn-primary"> Insert
Record</button></a>


<a href="update_case.php"><button class="btn btn-primary"> Update
Record</button></a>
</div>

<a href="delete_case.php"><button class="btn btn-primary"> Delete
Record</button></a>
</div>
</div>
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

       
        
        
        <?php
        error_reporting(0);
        $sql="select * from cases where case_status='new'"; 
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
                    $register_date=$rows['register_date'];
                    $summary=$rows['summary'];
                    $complaint_id=$rows['complaint_id'];
                    ?>
                       
                       <tr>
                        <td><?php echo $caseid;?> </td>
                        <td><?php echo $case_type;?> </td>
                        <td><?php echo $case_name;?> </td>
                        <td><?php echo $register_date;?> </td>
                        <td><?php echo $summary;?> </td>
                        <td><?php echo $complaint_id;?> </td>
                       </tr>
                       
                    <?php
                }

            }
           
        }
        ?>
         
    </table>
</div>
</div>
