<!-- header -->
    <?php include("layout/header.php"); ?>
<!-- header is here -->
 </head>
  <body>
    <!-- navbar -->
    <?php include("layout/navbar.php"); ?>
    <!-- navbar is here -->
    <div class="container">
        <div class="jumbotron text-center">
        <h1 class="display-3">Hello Admin</h1>
        <p class="lead">Check Status of Work</p>
        <a href="<?php echo base_url()?>Admin/status" class="btn btn-dark btn-lg">Click Here</a>
        </div>
    </div>
<!-- footer -->
    <?php include("layout/footer.php"); ?>
<!-- footer is here -->