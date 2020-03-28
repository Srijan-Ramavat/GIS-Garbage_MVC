<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- component was here -->
	<?php include('layout/header.php');?>
	
</head>
<body>
	<div id="fh5co-wrap">
		<header id="fh5co-header">
			<div class="container">
				<nav class="fh5co-main-nav">
					<ul>
						<li class="fh5co-active"><a href="<?php echo base_url();?>Home"><span>Home</span></a></li>
						<li><a href="<?php echo base_url();?>Home/services"><span>Services</span></a></li>
						<li><a href="<?php echo base_url();?>Home/about"><span>About</span></a></li>
						<li><a href="<?php echo base_url();?>Home/contact"><span>Contact</span></a></li>
						<li><?php if(isset($_SESSION['username'])){?><a href="<?php echo base_url();?>Home/logout"><span><?php $user=$_SESSION['username']; echo $user; ?>, Logout</span></a> <?php }else{?><a href="<?php echo base_url();?>Home/login"><span>Login</span></a><?php } ?></li>
					</ul>
				</nav>
			</div>
		</header>

		<div class="fh5co-hero" style="background-image: url(<?php echo asset_url();?>images/2.png);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center" >Delivering the best waste management and recycling solutions</h1>
							<p>Clean City Grean City</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h2>Providing the industry-leading
						solutions you need.</h2>
						<p><h3>FOR YOUR RESIDENCE</h3>
						Finding the right residential waste and recycling solutions provider
						is an important decision. At Waste Management, we reward that decision 
						by providing a wide range of exceptional services and products.</p>

						<h3>FOR YOUR BUSINESS</h3>
						<p>
						Big and small, Waste Management helps businesses across Mumbai meet 
						their environmental goals - whether that’s collection and disposal or 
						industry leading recycling services. We’re ready to work with you, too.</p>
					</div>
					<div class="col-md-4">
						<img src="<?php echo asset_url();?>images/phone.png" alt="" height="450" width="250" class="img-responsive">
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-parallax" style="background-image: url(<?php echo asset_url();?>images/bins.jpg);" data-stellar-background-ratio="0.3">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1>Responsible Garbage Removal</h1>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-section">
			<div class="container">
				
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-strategy"></i>
							</div>
							<div class="fh5co-text">
								<h3>Strategy</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-telescope"></i>
							</div>
							<div class="fh5co-text">
								<h3>Explore</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-circle-compass"></i>
							</div>
							<div class="fh5co-text">
								<h3>Direction</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-tools"></i>
							</div>
							<div class="fh5co-text">
								<h3>Expertise</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>

		<!-- <div class="fh5co-section">
			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<h2>Made With Love</h2>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p>
					</div>
					<div class="col-md-6">
						<p>She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
					</div>
				</div>

			</div>
		</div> -->

	</div> <!-- END fh5co-wrap -->

<?php include('layout/footer.php') ?>