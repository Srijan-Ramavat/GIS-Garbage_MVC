<!-- header -->
    <?php include_once("layout/header.php"); ?>
<!-- header is here -->
 </head>
  <body>
    <!-- navbar -->
    <?php include_once("layout/navbar.php"); ?>
    <!-- navbar is here -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                <p>Staff Members</p>
            </div>
            <div class="card-body">
                <?php if(isset($staff)){?>
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>username</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Complaint Assigned</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($staff as $val){ ?>
                                    <td><?php echo $val['id'];?></td>
                                    <td><?php echo $val['username'];?></td>
                                    <td><?php echo $val['email'];?></td>
                                    <td><?php echo $val['address'];?></td>
                                    <td><?php if($val['cpnt_asgn']==0){echo "NULL";}else{echo "Complaint No. ".$val['cpnt_asgn'];}?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>Admin/UpdateStaff?id=<?php echo $val['id'];?>" class="btn btn-sm btn-dark">Update</a>
                                        <a href="<?php echo base_url(); ?>Admin/RemoveStaff?id=<?php echo $val['id'];?>" class="btn btn-sm btn-danger">Remove</a>                                        
                                    </td>
                                </tr>
                        <?php }?>
                    </tbody>
                </table>
                <?php }else{
                    echo "No Staff Available!";
                } ?>
                <center>
                <a href="<?php echo base_url(); ?>Admin/addStaff" class="btn btn-lg btn-primary">Add Staff</a>
                
                </center>            
            </div>
        </div>
    </div>
<!-- footer -->
    <?php include_once("layout/footer.php"); ?>
<!-- footer is here -->