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
						<li class="fh5co-active"><a href="<?php echo base_url();?>Home/about"><span>About</span></a></li>
						<li><a href="<?php echo base_url();?>Home/contact"><span>Contact</span></a></li>
						<li><?php if(isset($_SESSION['username'])){?><a href="<?php echo base_url();?>Home/logout"><span><?php $user=$_SESSION['username']; echo $user; ?>, Logout</span></a> <?php }else{?><a href="<?php echo base_url();?>Home/login"><span>Login</span></a><?php } ?></li>
					</ul>
				</nav>
			</div>
		</header>

		<div class="fh5co-hero" style="background-image: url(<?php echo asset_url();?>images/hero_4.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">About us</h1>
							<p>Clean City Grean City</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h2>Our History</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quisquam vitae accusamus nisi dolorem blanditiis voluptas natus itaque, quibusdam ex. Eligendi, quia deserunt quasi tenetur a doloribus sapiente dolores possimus.</p>
					</div>
					<div class="col-md-7">
						<img src="<?php echo asset_url();?>images/hero_1.jpg" alt="Free HTML5 by FreeHTML5.co" class="img-responsive">
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-parallax" style="background-image: url(images/hero_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">Why choose Waste Management?</h1>
							<p>For starters, we have an amazing
							99.9% accuracy that Complaint will reach to BMC authority.
							We are also a leading provider of integrated environmental solutions in Mumbai.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo asset_url();?>images/person3.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Srijan Ramavat</h3>
						<h4>Co-Founder, CEO & CTO</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur fugit porro, eius voluptates doloremque deserunt dolores nobis obcaecati sapiente modi consectetur enim impedit? Nam obcaecati quasi natus debitis iste voluptatem.</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo asset_url();?>images/person2.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Glady Dannyson</h3>
						<h4>Co-Founder, HR</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quia sapiente repudiandae voluptate? Voluptatibus consequuntur architecto enim magnam, est molestias reiciendis inventore voluptates, doloremque exercitationem unde quam odit quibusdam incidunt!</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo asset_url();?>images/person4.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Raj Tiwary</h3>
						<h4>Co-Founder, Publicity Head</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum expedita, molestiae possimus sit laudantium veniam aliquam vel rem officiis iusto, sapiente eum culpa facere, voluptas quis asperiores eveniet adipisci atque.</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>


		<!-- <div class="fh5co-parallax" style="background-image: url(<?php //echo asset_url();?>images/hero_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">Keep it simple</h1>
							<p>Made with love by the fine folks at <a href="http://freehtml5.co">FreeHTML5.co</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-section">
			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<h2>Start A Project With Us Now!</h2>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p>
						
					</div>
					<div class="col-md-6">
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						<p><a href="#" class="btn btn-primary">Get started now!</a></p>
					</div>
				</div>

			</div>
		</div> -->

	</div> <!-- END fh5co-wrap -->


<?php include('layout/footer.php') ?>

