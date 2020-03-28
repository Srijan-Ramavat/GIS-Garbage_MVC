<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('layout/header.php')?>
	
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
						<li class="fh5co-active"><a href="<?php echo base_url();?>Home/contact"><span>Contact</span></a></li>
						<li><?php if(isset($_SESSION['username'])){?><a href="<?php echo base_url();?>Home/logout"><span><?php $user=$_SESSION['username']; echo $user; ?>, Logout</span></a> <?php }else{?><a href="<?php echo base_url();?>Home/login"><span>Login</span></a><?php } ?></li>
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
							<h1 class="text-center">Contact us</h1>
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
					<div class="col-md-5">
						<h2>Contact Info</h2>
						<p>For More Details and Information you can reach us at </p>

						<p>198 West 21th Street, Kurla West <br> Mumbai , 400070</p>
						<p><a href="#">info@cleanitup.com</a></p>
						<p><a href="#">+9876543210</a></p>
					</div>
					<div class="col-md-6 col-md-push-1">
						<form action="putcontact" method="POST">
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Name" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Message" required></textarea>
							</div>
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary btn-md">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.6021656644007!2d72.88600441447754!3d19.08122148708493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c886123664f7%3A0xfe019a058f59193b!2sDBIT!5e0!3m2!1sen!2sin!4v1520366256694" width="1340" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		
	</div> <!-- END fh5co-wrap -->
	<!-- <script src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.6021656644007!2d72.88600441447754!3d19.08122148708493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c886123664f7%3A0xfe019a058f59193b!2sDBIT!5e0!3m2!1sen!2sin!4v1520366256694"></script> -->
	<script src="<?php echo asset_url();?>js/google_map.js"></script>
	
<?php include('layout/footer.php') ?>