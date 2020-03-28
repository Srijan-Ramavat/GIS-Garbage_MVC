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
    <div class="card card-body">
        <h3>Garbage Image</h3>
        <form action="upload" method="post" enctype='multipart/form-data'>
            <div class="form-group">
            <label for="image">Select Image</label>
            <input type="file" name="image" class="form-control" required />
            </div>
            <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" name="address" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
    crossorigin="anonymous"></script>
      </body>
</html>