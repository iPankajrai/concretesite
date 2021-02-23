<!DOCTYPE html>
<html lang="en">
<head>
	<?php Loader::element('header_required') ?>

	<!-- <meta charset="utf-8"> -->
	<!-- <title>Digital Team HTML5 Layout - Tooplate</title> -->
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=Edge"> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<!-- <meta name="keywords" content=""> -->
	<!-- <meta name="description" content=""> -->
<!--

Template 2075 Digital Team

http://www.tooplate.com/view/2075-digital-team

-->
	<link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/animate.min.css">
	<link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/et-line-font.css">
	<link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/nivo-lightbox.css">
	<link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
</head>


<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50" >
	<div class="<?= $c->getPageWrapperClass() ?>">

<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-circle">
       <div class="sk-circle1 sk-circle"></div>
       <div class="sk-circle2 sk-circle"></div>
       <div class="sk-circle3 sk-circle"></div>
       <div class="sk-circle4 sk-circle"></div>
       <div class="sk-circle5 sk-circle"></div>
       <div class="sk-circle6 sk-circle"></div>
       <div class="sk-circle7 sk-circle"></div>
       <div class="sk-circle8 sk-circle"></div>
       <div class="sk-circle9 sk-circle"></div>
       <div class="sk-circle10 sk-circle"></div>
       <div class="sk-circle11 sk-circle"></div>
       <div class="sk-circle12 sk-circle"></div>
    </div>
</div>

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation" style="margin-top: 40px">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Digital Team</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="smoothScroll">HOME</a></li>
				<li><a href="#work" class="smoothScroll">WORK</a></li>
				<li><a href="#about" class="smoothScroll">ABOUT</a></li>
				<li><a href="#team" class="smoothScroll">TEAM</a></li>
				<li><a href="#portfolio" class="smoothScroll">PORTFOLIO</a></li>
				<li><a href="#pricing" class="smoothScroll">PRICING</a></li>
				<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
			</ul>
		</div>
	</div>
</section>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<!-- <h3>WEB DESIGN / WEB DEVELOPMENT / SOCIAL MEDIA</h3> -->
				<?php
				    $a = new Area('Banner title');
				    $a->display($c);
				?>
				<h1>DIGITAL TEAM</h1>
				<hr>
				<a href="#work" class="smoothScroll btn btn-danger">What we do</a>
				<a href="#contact" class="smoothScroll btn btn-default">Talk to us</a>
			</div>
		</div>
	</div>		
</section>

<!-- work section -->
<section id="work">
	<div class="container">
		
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>01</strong>
					<h1 class="heading bold">WHAT WE DO</h1>
					<hr>
				</div>
			</div>

			<div>
			<?php

			    $a = new Area('Work Image Slider');
			    $a->display($c);
			?>
			</div>
			
			
		</div>
	</div>
</section>

<!-- about section -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<strong>02</strong>
					<h1 class="heading bold">OUR AGENCY</h1>
					<hr>
				</div>
			</div>

			
			<div class="col-md-6 col-sm-12">
				<?php

				    $a = new Area('our agency image');
				    $a->display($c);
				?>
				<!-- <img src="<?= $view->getThemePath() ?>/images/about-img.jpg" class="img-responsive" alt="about img"> -->
			</div>
			<div class="col-md-6 col-sm-12">
				<!-- <h3 class="bold">DIGITAL TEAM</h3>
				<h1 class="heading bold">Best Design Agency from California</h1> -->

				<div>
				<?php

				    $a = new Area('our agency Tab title');
				    $a->display($c);
				?>
				</div><div>
				<?php

				    $a = new Area('our agency Tabs');
				    $a->display($c);
				?>
				</div>

				<!-- Nav tabs -->
				<!-- <ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#design" aria-controls="design" role="tab" data-toggle="tab">DESIGN</a></li>
					<li><a href="#mobile" aria-controls="mobile" role="tab" data-toggle="tab">MOBILE</a></li>
					<li><a href="#social" aria-controls="social" role="tab" data-toggle="tab">SOCIAL</a></li>
				</ul> -->
				<!-- tab panes -->
				<!-- <div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="design">
						<p>Duis aute irure dolor in <a href="#">reprehenderit</a> in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Sed id est tincidunt, iaculis nulla vel, sodales metus. Morbi interdum accumsan augue, in accumsan neque lacinia sed. Fusce cursus eu ligula ut gravida.</p>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
					</div>
					<div role="tabpanel" class="tab-pane" id="mobile">
						<p>Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
						<p><a href="#">Duis aute irure dolor</a> in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					</div>
					<div role="tabpanel" class="tab-pane" id="social">
						<p>Pellentesque elementum, lacus sit amet <a href="#">hendrerit</a> posuere, quam quam tristique nisi, nec ornare ligula magna id nisl. Donec blandit enim ac semper facilisis. Curabitur eu laoreet mauris, eget fermentum velit.</p>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
					</div>

				</div> -->
			</div>
		</div>
	</div>
</section>

<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>03</strong>
					<h1 class="heading bold">TALENTED TEAM</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<?php

					    $a = new Area('team1');
					    $a->display($c);
					?>

					<!-- <img src="<?= $view->getThemePath() ?>/images/team1.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Cindy</h4>
							<h3>Senior Designer</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div> -->
				</div>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.3s">
				<div class="team-wrapper">
					<?php

					    $a = new Area('team2');
					    $a->display($c);
					?>
					<!-- <img src="<?= $view->getThemePath() ?>/images/team2.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Mary</h4>
							<h3>Core Developer</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div> -->
				</div>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<?php

					    $a = new Area('team3');
					    $a->display($c);
					?>
					<!-- <img src="<?= $view->getThemePath() ?>/images/team3.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Linda</h4>
							<h3>Manager</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div> -->
				</div>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<?php

					    $a = new Area('team4');
					    $a->display($c);
					?>
					<!-- <img src="<?= $view->getThemePath() ?>/images/team4.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Sandar</h4>
							<h3>Accountant</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div> -->
				</div>
			</div>
		</div>
	</div>
</section>

<!-- portfolio section -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>04</strong>
					<h1 class="heading bold">OUR PORTFOLIO</h1>
					<hr>
				</div>
				<!-- ISO section -->
				<div class="iso-section">
					<ul class="filter-wrapper clearfix">
                   		 <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                   		 <li><a href="#" class="opc-main-bg" data-filter=".html">HTML</a></li>
                   		 <li><a href="#" class="opc-main-bg" data-filter=".photoshop">Photoshop</a></li>
                    	 <li><a href="#" class="opc-main-bg" data-filter=".wordpress">Wordpress</a></li>
                    	 <li><a href="#" class="opc-main-bg" data-filter=".mobile">Mobile</a></li>
               		</ul>
               		<div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
               			<div class="iso-box-wrapper col4-iso-box">

               				 <div class="iso-box html wordpress mobile col-lg-4 col-md-4 col-sm-6">
               				 	<a href="<?= $view->getThemePath() ?>/images/portfolio-img1.jpg" data-lightbox-gallery="portfolio-gallery"><img src="<?= $view->getThemePath() ?>/images/portfolio-img1.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6">
               				 	<a href="<?= $view->getThemePath() ?>/images/portfolio-img2.jpg" data-lightbox-gallery="portfolio-gallery"><img src="<?= $view->getThemePath() ?>/images/portfolio-img2.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box html mobile col-lg-4 col-md-4 col-sm-6">
               				 	<a href="<?= $view->getThemePath() ?>/images/portfolio-img3.jpg" data-lightbox-gallery="portfolio-gallery"><img src="<?= $view->getThemePath() ?>/images/portfolio-img3.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6">
               				 	<a href="<?= $view->getThemePath() ?>/images/portfolio-img4.jpg" data-lightbox-gallery="portfolio-gallery"><img src="<?= $view->getThemePath() ?>/images/portfolio-img4.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box html photoshop col-lg-4 col-md-4 col-sm-6">
               				 	<a href="<?= $view->getThemePath() ?>/images/portfolio-img5.jpg" data-lightbox-gallery="portfolio-gallery"><img src="<?= $view->getThemePath() ?>/images/portfolio-img5.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6">
               				 	<a href="<?= $view->getThemePath() ?>/images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery"><img src="<?= $view->getThemePath() ?>/images/portfolio-img6.jpg" alt="portfolio img"></a>
               				 </div>

               			</div>
               		</div>

				</div>
			</div>
		</div>
	</div>
</div>		

<!-- pricing section -->
<section id="pricing">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<strong>05</strong>
					<h1 class="heading bold">OUR PRICING</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="plan plan-one wow bounceIn" data-wow-delay="0.3s">
					<div class="plan_title">
						<i class="icon-mobile medium-icon"></i>
						<h3>BASIC</h3>
						<h2>$150 <span>per year</span></h2>
					</div>
					<ul>
                    	<li>100 GB Cloud Storage</li>
						<li>5 Pro Websites</li>
						<li>10 Secured Emails</li>
                        <li>24-hour Support</li>
					</ul>
					<button class="btn btn-warning">Get it now</button>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="plan plan-two wow bounceIn" data-wow-delay="0.3s">
					<div class="plan_title">
						<i class="icon-desktop medium-icon"></i>
						<h3>BUSINESS</h3>
						<h2>$260 <span>per year</span></h2>
					</div>
					<ul>
						<li>200 GB Cloud Storage</li>
						<li>10 Pro Websites</li>
						<li>20 Secured Emails</li>
                        <li>30-Minute Support</li>
					</ul>
					<button class="btn btn-warning">Take this!</button>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="plan plan-three wow bounceIn" data-wow-delay="0.3s">
					<div class="plan_title">
						<i class="icon-cloud medium-icon"></i>
						<h3>PROFESSIONAL</h3>
						<h2>$380 <span>per year</span></h2>
					</div>
					<ul>
						<li>500 GB Cloud Storage</li>
						<li>20 Pro Websites</li>
						<li>40 Secured Emails</li>
                        <li>Live Support</li>
					</ul>
					<button class="btn btn-warning">Buy Now</button>
				</div>
			</div>
		</div>
	</div>		
</section>

<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<strong>06</strong>
					<h1 class="heading bold">CONTACT US</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 contact-info">
				<h2 class="heading bold">CONTACT INFO</h2>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt mollit anim id.</p>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
					<p>hello@company.com</p>
				</div>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> PHONES</h3>
					<p>010-020-0340 | 090-080-0760</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">

				<!-- <form action="#" method="get" class="wow fadeInUp" data-wow-delay="0.6s">
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" placeholder="Name" name="name">
					</div>
					<div class="col-md-6 col-sm-6">
						<input type="email" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="Message" rows="7" name="message"></textarea>
					</div>
					<div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
						<input type="submit" class="form-control" value="SEND MESSAGE">
					</div>
				</form> -->
				<div>
				<?php

				    $a = new Area('contact us');
				    $a->display($c);
				?>
				</div>
			</div>
		</div>
	</div>

	<?php

			    $a = new Area('contactFormEntry');
			    $a->display($c);
			?>

</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Copyright © Digital Team HTML5 Template | Design: <a href="http://www.tooplate.com" target="_parent">Tooplate</a></p>
				<hr>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="0.9s"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<script src="<?= $view->getThemePath() ?>/js/jquery.js"></script>
<script src="<?= $view->getThemePath() ?>/js/bootstrap.min.js"></script>
<script src="<?= $view->getThemePath() ?>/js/smoothscroll.js"></script>
<script src="<?= $view->getThemePath() ?>/js/isotope.js"></script>
<script src="<?= $view->getThemePath() ?>/js/imagesloaded.min.js"></script>
<script src="<?= $view->getThemePath() ?>/js/nivo-lightbox.min.js"></script>
<script src="<?= $view->getThemePath() ?>/js/jquery.backstretch.min.js"></script>
<script src="<?= $view->getThemePath() ?>/js/wow.min.js"></script>

<script>
var Img_path1 = "<?php echo $view->getThemePath(); ?>/images/home-bg-slideshow1.jpg";
var Img_path2 = "<?php echo $view->getThemePath(); ?>/images/home-bg-slideshow2.jpg";
</script>
<script src="<?= $view->getThemePath() ?>/js/custom.js"></script>

<!-- script for the contact us form data to fetch -->
<!-- write a jquery ajax call on submit button to go to controllers route to get the $_POST data. -->
<script type="text/javascript">
	// jQuery ajax form submit example, runs when form is submitted
	$("#contactusform").submit(function(e) {
	    e.preventDefault(); // prevent actual form submit
	    var form = $(this);
	    var url = form.attr('action'); //get submit url [replace url here if desired]
	    var form_data = $(this).serialize();
	    $.ajax({
	         type: "POST",
	         url: url,
	         data: form_data, // serializes form input
	         success: function(data){
	            	 console.log(data);
	         }
	         
	    });
	});

// 	$(function() {
//   $('form#contactusform').submit(function(event) {
//     event.preventDefault(); // Prevent the form from submitting via the browser
//     var form = $(this);
//     $.ajax({
//       type: form.attr('method'),
//       url: form.attr('action'),
//       data: form.serialize()
//     }).done(function(data) {
//       // Optionally alert the user of success here...
//       console.log(data);
//     }).fail(function(data) {
//       // Optionally alert the user of an error here...
//       console.log(err);
//     });
//   });
// });
</script>



</div>

<?php Loader::element('footer_required') ?>

</body>
</html>