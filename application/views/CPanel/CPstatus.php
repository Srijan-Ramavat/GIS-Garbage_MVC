<!-- header -->
    <?php include_once("layout/header.php"); ?>
<!-- header is here -->
 </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-info mb-3">
    <div class="container">
        <a class="navbar-brand" href="#">CleanItUp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>Customer">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>Customer/status">Status</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdownMenuLink"><?php if(isset($_SESSION['username'])){ $user=$_SESSION['username']; echo $user;}?>'s Profile</a>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Change Password</a>
                <a href="<?php echo base_url()?>/Home/logout" class="dropdown-item">Logout</a>
            </div>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="container">
        <?php $i=0; if(isset($complaint)){  
            foreach($complaint as $val){ 
                $img = $val['solve']; $i+=1;?>
            
            <div class="jumbotron text-center" style="background-color:<?php if($val['status']==0){ echo '#ff4444';}elseif($val['status']==1){ echo '#0099CC'; }elseif($val['status']==2){ echo '#007E33';} ?>;">
                <h3>Complaint No. <?php echo $i.' On '.$val['timestamp'];?></h3>
                <p class="lead">If button Colour : Red (No Action Taken) . If button Colour : blue (Under Progress). If button Colour : Green (Completed) <br> </p>
                Address : <?php echo $val['address'];?>
                <img src="<?php echo asset_url();?>images/uploads/<?php echo $img; ?>" alt="<?php echo $img; ?>" height="200" width="400"><br><br>
                <!-- <center><a href="#" class="btn btn-<?php if($val['status']==0){ echo 'danger';}elseif($val['status']==1){ echo 'info'; }elseif($val['status']==2){ echo 'success';} ?> btn-lg">Status</a></center> -->
            </div>

        <?php }
        }else{?>
            <div class="jumbotron text-center">
                <h1 class="display-3">No Complaints From Your Side</h1>
                <p class="lead">To add complaint into the system!</p>
                <a href="<?php echo base_url()?>Customer/uploadPage" class="btn btn-dark btn-lg">Click Here</a>
            </div>
        <?php 
        } ?>
    </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
    crossorigin="anonymous"></script>
      </body>
</html>