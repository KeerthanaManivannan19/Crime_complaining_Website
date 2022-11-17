<?php include('connection.php');?>
    <link rel="stylesheet" href="..\Css\admin.css">

<div class="main-content">
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

    <div class="wrapper">
        <h1 style='text-align:center'><u>Actions Taken Against Complaints</u></h1>
        <br>
        <br>
        
        
    <table cellpadding="pixels" cellspacing="pixels">
    <style>td{padding:0 15px;
        }</style>
      
        <tr>
            <th>Officer ID</th>
            <th>Officer Name</th>
            <th>Complaint Title Name</th>
            <th>Action against Complaint</th>
            <th>Action taken date</th>
            
        </tr>
        
        
        <?php
        error_reporting(0);
        $sql="select officer.name as name,complaint.complaint_title as title,officer.officer_id as id,action.actions as action,action.update_date as date from officer,complaint,action where complaint.complaint_id=action.complaint_id and officer.officer_id=action.officer_id"; 
        $res=mysqli_query($conn,$sql) or die(mysqli_error());
        if($res==true)
        {
            $count=mysqli_num_rows($res);
            if( $count>0)
            {
                while($rows=mysqli_fetch_assoc($res))
                {
                    $name=$rows['name'];
                    $title=$rows['title'];
                    $action=$rows['action'];
                    $date=$rows['date'];
                    $id=$rows['id'];
                    
                    ?>
                       
                       <tr>
                       <td><?php echo $id;?> </td>
                        <td><?php echo $name;?> </td>
                        <td><?php echo $title;?> </td>
                        <td><?php echo $action;?> </td>
                        
                        <td><?php echo $date;?> </td>
                        
                        
                       </tr>
                       
                    <?php
                }

            }
            
        }
        ?>
    </table>
</div>
</div>
