<!-- header -->
    <?php include_once("layout/header.php"); ?>
<!-- header is here -->
 </head>
  <body>
    <!-- navbar -->
    <?php include_once("layout/navbar.php"); ?>
    <!-- navbar is here -->
    <div class="container">
        <?php $i=0; if(isset($complaint)){  
            foreach($complaint as $val){ 
                $img = $val['image'];$solve = $val['solve']; $i+=1;?>

            <div class="card" style="color:white;">
                <div class="card-header" style="background-color:<?php if($val['status']==0){ echo '#ff4444';}elseif($val['status']==1){ echo '#0099CC'; }elseif($val['status']==2){ echo '#007E33';} ?>;">Complaint No. <?php echo $val['id'].' On '.$val['timestamp'];?></div>
                <div class="card-body" style="background-color: <?php if($val['status']==0){ echo '#ff4444';}elseif($val['status']==1){ echo '#0099CC'; }elseif($val['status']==2){ echo '#007E33';} ?>;">
                    <p> Address : <?php echo $val['address'];?>. <br> 
                    <img src="<?php echo asset_url();?>images/uploads/<?php echo $img; ?>" alt="<?php echo $img; ?>" height="200" width="400" />
                    Progress: <?php if($val['status']==0){ echo 'No Action Taken';}elseif($val['status']==1){ echo 'Work in Progress'; }elseif($val['status']==2){ echo 'Completed';} ?>
                    <img src="<?php echo asset_url();?>images/uploads/<?php echo $solve; ?>" alt="<?php echo $img; ?>" height="200" width="400" />
                    <!-- </p><center><a href="<?php //echo base_url()?>Admin/updateStatus?id=<?php //echo $val['id'];?>" class="btn btn-<?php //if($val['status']==0){ echo 'danger';}elseif($val['status']==1){ echo 'info'; }elseif($val['status']==2){ echo 'success';} ?> btn-lg">Status</a> -->
                    <!-- <a href="<?php //echo base_url()?>Admin/revertStatus?id=<?php //echo $val['id'];?>" class="btn btn-dark btn-lg">Revert</a></center> -->
                </div>
            </div>
                <br>
        <?php }
        }else{?>
            <div class="jumbotron text-center">
                <h1 class="display-3">No Complaints To Process</h1>
                <p class="lead">To Schedule complaints!</p>
                <a href="<?php echo base_url()?>Admin/scheduleTask" class="btn btn-dark btn-lg">Click Here</a>
            </div>
        <?php 
        } ?>
    </div>
<!-- footer -->
    <?php include_once("layout/footer.php"); ?>
<!-- footer is here -->