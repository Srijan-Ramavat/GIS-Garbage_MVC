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
              <a class="nav-link" href="<?php echo base_url()?>Admin">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>Admin/status">Status</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>Admin/schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>Admin/staff">Staff</a>
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