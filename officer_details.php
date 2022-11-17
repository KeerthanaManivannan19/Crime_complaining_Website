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
        <h1 style='text-align:center'><u>Officers Contact Details</u></h1>
       
    <table cellpadding="pixels" cellspacing="pixels">
    <style>td{padding:0 15px;
        }</style>
      
        <tr>
            <th>Officer ID</th>
            <th>Name</th>
            <th>Post</th>
            <th>Phone no</th>
        </tr>
        
        
        <?php
        error_reporting(0);
        $sql="select officer_id,name,post,phone_no from officer"; 
        $res=mysqli_query($conn,$sql) or die(mysqli_error());
        if($res==true)
        {
            $count=mysqli_num_rows($res);
            if( $count>0)
            {
                while($rows=mysqli_fetch_assoc($res))
                {
                    $name=$rows['name'];
                    $post=$rows['post'];
                    $phone_no=$rows['phone_no'];
                    $officer_id=$rows['officer_id'];

                    ?>
                       
                       <tr>
                        <td><?php echo $officer_id;?> </td>
                        <td><?php echo $name;?> </td>
                        <td><?php echo $post;?> </td>
                        <td><?php echo $phone_no;?> </td>
                        
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
