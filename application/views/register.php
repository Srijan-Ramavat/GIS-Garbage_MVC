<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <?php include('layout/header.php'); ?>

	</head>
	<body>
	
	<div id="fh5co-wrap">
		<header id="fh5co-header">
			<div class="container">
				<nav class="fh5co-main-nav">
					<ul>
						<li><a href="<?php echo base_url();?>Home"><span>Home</span></a></li>
						<li><a href="<?php echo base_url();?>Home/services"><span>Services</span></a></li>
						<li><a href="<?php echo base_url();?>Home/about"><span>About</span></a></li>
						<li><a href="<?php echo base_url();?>Home/contact"><span>Contact</span></a></li>
            <li class="fh5co-active"><a href="<?php echo base_url();?>Home/login"><span>Register</span></a></li>
          </ul>
				</nav>
			</div>
		</header>

		<div class="fh5co-hero" style="background-image: url(<?php echo asset_url();?>images/hero_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">Register</h1>
              <p>Clean City Grean City</p>
							<!-- <p>Made with love by the fine folks at <a href="http://freehtml5.co">FreeHTML5.co</a></p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-section">
			<div class="container">
				<div class="row">
					  <!-- form body here -->
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <h1><center><strong>Register</strong></center></h1>
              <form action="getRegister" method="post">
                <div class="form-group">
                  <label for="Username">Username</label>
                  <input type="text" name="username" id="Username" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="password2">Confirm Password</label>
                  <input type="password" name="password2" id="password2" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="number">Mobile Number</label>
                  <input type="text" name="number" id="number" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" id="address" class="form-control" required>
                </div>
                <div class="form-group">
                  <input type="submit" name="register" value="Register" id="register" class="form-control">
                </div>
              </form>
              <!-- <a href="<?php echo base_url();?>Home/register"><input type="button" value="Click here to Register" class="form-control"></a> -->
            </div>
            <div class="col-md-4"></div>
				</div>
			</div>
		</div>
		<!-- <div id="map"></div> -->

	</div> <!-- END fh5co-wrap -->
<!-- 
  <script type="text/javascript">
    $(document).ready(function(){
      $('#register').click(function(){
        var username = $('#Username').val();
        var password = $('#password').val();
        var password2 = $('#password2').val();
        var number =$('#number').val();
        var address =$('#address').val();
        if(username=='' !! password=='' !! password2=='' !! number=='' !! address==''){
            alert('Any field should not be empty');
        }
        else{
          $.ajax({
            url:"<?php echo base_url();?>Home/getRegister",
            method:"POST",
            data:{username:username, password:password, password2:password2, number:number, address:address}
            success:function(data){

            }
          });
        }
      });
    });
  </script> -->

<?php include('layout/footer.php') ?>

