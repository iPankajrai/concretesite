<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <?php Loader::element('header_required') ?>
    <!-- <title>Genius - HTML5 Website Template</title> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    < -->meta name="description" content="">
<!--
Genius Template
http://www.templatemo.com/tm-402-genius
-->
    <!-- <meta name="author" content="templatemo">
    <m -->eta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    
    <!-- CSS Bootstrap & Custom -->
    <link href="<?= $view->getThemePath() ?>/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?= $view->getThemePath() ?>/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/templatemo_misc.css">
    <link rel="stylesheet" href="<?= $view->getThemePath() ?>/css/animate.css">
    <link href="<?= $view->getThemePath() ?>/css/templatemo_style.css" rel="stylesheet" media="screen">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?= $view->getThemePath() ?>/images/ico/favicon.ico">
    
    <!-- JavaScripts -->
    <script src="<?= $view->getThemePath() ?>/js/jquery-1.10.2.min.js"></script>
    <script src="<?= $view->getThemePath() ?>/js/modernizr.js"></script>
    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
</head>
<body>
    <div class="<?= $c->getPageWrapperClass() ?>">
    
    
    <div class="bg-image"></div>
    <div class="overlay-bg"></div>

    
    <div class="container language-select visible-md visible-lg">
        <div class="row">
            <div class="col-md-12">
                <select name="cat2" id="cat2" class="postform">
                    <option value="0">-- Language Selection --</option>
                    <option class="level-0" value="1">English</option>
                    <option class="level-0" value="2">Myanmar</option>
                </select>
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.language-select -->

    <!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars fa-2x"></i>
        </a>
        <div class="responsive_menu">
            <ul class="main_menu">
                <li><a class="show-1 homebutton" href="#"><i class="fa fa-home"></i>Homepage</a></li>
                <li><a class="show-2" href="#"><i class="fa fa-group"></i>About Us</a></li>
                <li><a class="show-3" href="#"><i class="fa fa-briefcase"></i>Our Gallery</a></li>
                <li><a class="show-4" href="#"><i class="fa fa-cogs"></i>Services</a></li>
                <li><a class="show-5" href="#"><i class="fa fa-globe"></i>Contact Us</a></li>
            </ul> <!-- /.main_menu -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->

    <div class="main-content">
        <div class="container">
            <div class="row">

                <!-- Static Menu -->
                <div class="col-md-2 visible-md visible-lg">
                    <div class="main_menu">
                        <ul class="menu">
                            <li><a class="show-1 homebutton" href="#" data-toggle="tooltip" data-original-title="Homepage"><i class="fa fa-home"></i></a></li>
                            <li><a class="show-2" href="#" data-toggle="tooltip" data-original-title="About Us"><i class="fa fa-user"></i></a></li>
                            <li><a class="show-3" href="#" data-toggle="tooltip" data-original-title="Our Gallery"><i class="fa fa-briefcase"></i></a></li>
                            <li><a class="show-4" href="#" data-toggle="tooltip" data-original-title="Services"><i class="fa fa-cog"></i></a></li>
                            <li><a class="show-5" href="#" data-toggle="tooltip" data-original-title="Stay In Touch"><i class="fa fa-globe"></i></a></li>
                        </ul>
                    </div> <!-- /.main-menu -->
                </div> <!-- /.col-md-2 -->

                <!-- Begin Content -->
                <div class="col-md-10">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="templatemo_logo">
                                <a href="#">
                                    <img src="<?= $view->getThemePath() ?>/images/templatemo_logo.png" alt="Genius">
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->


                    <div id="menu-container">
                        
                        <div id="menu-1" class="homepage">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="<?= $view->getThemePath() ?>/images/gallery/p1.jpg" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="<?= $view->getThemePath() ?>/images/gallery/p1.jpg" alt="Image 1">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="<?= $view->getThemePath() ?>/images/gallery/p2.jpg" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="<?= $view->getThemePath() ?>/images/gallery/p2.jpg" alt="Image 2">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="<?= $view->getThemePath() ?>/images/gallery/p3.jpg" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="<?= $view->getThemePath() ?>/images/gallery/p3.jpg" alt="Image 3">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="<?= $view->getThemePath() ?>/images/gallery/p4.jpg" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="<?= $view->getThemePath() ?>/images/gallery/p4.jpg" alt="Image 4">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="<?= $view->getThemePath() ?>/images/gallery/p5.jpg" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="<?= $view->getThemePath() ?>/images/gallery/p5.jpg" alt="Image 5">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="<?= $view->getThemePath() ?>/images/gallery/p6.jpg" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="<?= $view->getThemePath() ?>/images/gallery/p6.jpg" alt="Image 6">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="<?= $view->getThemePath() ?>/images/gallery/p7.jpg" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="<?= $view->getThemePath() ?>/images/gallery/p7.jpg" alt="Image 7">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="<?= $view->getThemePath() ?>/images/gallery/p8.jpg" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="<?= $view->getThemePath() ?>/images/gallery/p8.jpg" alt="Image 8">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="<?= $view->getThemePath() ?>/images/gallery/p9.jpg" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="<?= $view->getThemePath() ?>/images/gallery/p9.jpg" alt="Image 9">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                            </div> <!-- /.row -->
                        </div> <!-- /.homepage -->

                        <div id="menu-2" class="content about-us">
                            <div class="page-header">
                                <h2 class="page-title">About Us</h2>
                            </div> <!-- /.page-header -->
                            <div class="content-inner">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3 class="widget-title">What is our goal?</h3>
                                        <p>Our goal is to give you free website templates that you can use for any purpose. Genius is free HTML5 CSS3 template from <span class="blue">template</span><span class="green">mo</span>. This template can be viewed in tablets and mobile devices.</p>
                                        <p>Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for background images used in this template. This layout is based on <a rel="nofollow" href="http://getbootstrap.com">Bootstrap</a> responsive framework. Home and Gallery pages are integrated with <a rel="nofollow" href="https://github.com/duncanmcdougall/Responsive-Lightbox">Responsive Lightbox</a> for images.</p>
                                    </div> <!-- /.col-md-7 -->
                                    <div class="col-md-5">
                                        <h3 class="widget-title">Our Skills</h3>
                                        <ul class="progess-bars">
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">Photoshop 90%</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">HTML 75%</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">WordPress 68%</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">Marketing 95%</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> <!-- /.col-md-5 -->
                                </div> <!-- /.row -->
                                <div class="our-team">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="widget-title">Meet Our Team</h3>
                                        </div> <!-- /.col-md-12 -->
                                    </div> <!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="team-member">
                                                <div class="member-thumb">
                                                    <img src="<?= $view->getThemePath() ?>/images/team1.jpg" alt="">
                                                </div>
                                                <div class="member-infos">
                                                    <h4 class="member-name">George</h4>
                                                    <span class="member-role">Web Designer</span>
                                                    <p class="member-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    <ul class="member-social">
                                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6">
                                            <div class="team-member">
                                                <div class="member-thumb">
                                                    <img src="<?= $view->getThemePath() ?>/images/team2.jpg" alt="">
                                                </div>
                                                <div class="member-infos">
                                                    <h4 class="member-name">Michael</h4>
                                                    <span class="member-role">Web Developer</span>
                                                    <p class="member-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    <ul class="member-social">
                                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6">
                                            <div class="team-member">
                                                <div class="member-thumb">
                                                    <img src="<?= $view->getThemePath() ?>/images/team3.jpg" alt="">
                                                </div>
                                                <div class="member-infos">
                                                    <h4 class="member-name">Johnny</h4>
                                                    <span class="member-role">Marketing Manager</span>
                                                    <p class="member-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                    <ul class="member-social">
                                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> <!-- /.col-md-4 -->
                                    </div> <!-- /.row -->
                                </div> <!-- /.our-team -->
                            </div> <!-- /.content-inner -->
                        </div> <!-- /.about-us -->

                        <div id="menu-3" class="content our-gallery">
                            <div class="page-header">
                                <h2 class="page-title">Our Gallery</h2>
                            </div> <!-- /.page-header -->
                            <div class="content-inner">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="widget-title">Our Latest Projects</h3>
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="filter-work pull-right">
                                            <a href="#nogo" class="toggle-filter">Category Filter</a>
                                            <ul class="filter-controls controls">
                                                <li class="filter" data-filter="all">Show All</li>
                                                <li class="filter" data-filter="branding">Branding</li>
                                                <li class="filter" data-filter="graphic">Graphic Design</li>
                                                <li class="filter" data-filter="nature">Nature</li>
                                            </ul>
                                        </div> <!-- /.filter-work -->
                                    </div> <!-- /.col-md-6 -->
                                </div> <!-- /.row -->
                                <div class="row">
                                    <div id="Grid">
                                        <div class="col-md-4 col-sm-6 mix graphic">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="<?= $view->getThemePath() ?>/images/gallery/p1.jpg" alt="">
                                                    <div class="overlay-g">
                                                        <a href="<?= $view->getThemePath() ?>/images/gallery/p1.jpg" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">Project Title One</h4>    
                                                    <span class="gallery-category">Graphic Design</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix branding">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="<?= $view->getThemePath() ?>/images/gallery/p2.jpg" alt="">
                                                    <div class="overlay-g">
                                                        <a href="<?= $view->getThemePath() ?>/images/gallery/p2.jpg" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">Project Title Two</h4>    
                                                    <span class="gallery-category">Branding</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix nature">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="<?= $view->getThemePath() ?>/images/gallery/p3.jpg" alt="">
                                                    <div class="overlay-g">
                                                        <a href="<?= $view->getThemePath() ?>/images/gallery/p3.jpg" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">Project Title Three</h4>    
                                                    <span class="gallery-category">Nature</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix branding">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="<?= $view->getThemePath() ?>/images/gallery/p4.jpg" alt="">
                                                    <div class="overlay-g">
                                                        <a href="<?= $view->getThemePath() ?>/images/gallery/p4.jpg" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">Project Title Four</h4>    
                                                    <span class="gallery-category">Branding</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix graphic">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="<?= $view->getThemePath() ?>/images/gallery/p5.jpg" alt="">
                                                    <div class="overlay-g">
                                                        <a href="<?= $view->getThemePath() ?>/images/gallery/p5.jpg" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">Project Title Five</h4>    
                                                    <span class="gallery-category">Graphic Design</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix nature">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="<?= $view->getThemePath() ?>/images/gallery/p6.jpg" alt="">
                                                    <div class="overlay-g">
                                                        <a href="<?= $view->getThemePath() ?>/images/gallery/p6.jpg" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">Project Title Six</h4>    
                                                    <span class="gallery-category">Nature</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                    </div> <!-- /#Grid -->
                                </div> <!-- /.row -->
                            </div> <!-- /.content-inner -->

                        </div> <!-- /.our-gallery -->

                        <div id="menu-4" class="content">
                            <div class="page-header">
                                <h2 class="page-title">Our Services</h2>
                            </div> <!-- /.page-header -->
                            <div class="content-inner">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="widget-title">Web Design and Development</h3>
                                    </div> <!-- /.col-md-12 -->
                                </div> <!-- /.row -->
                                <div class="row services">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="service">
                                            <div class="header">
                                                <div class="header-bg"></div>
                                                <div class="service-header">
                                                    <div class="icon">
                                                        <i class="fa fa-heart-o"></i>
                                                    </div>
                                                    <h4 class="service-title">HTML5 CSS3</h4>
                                                </div>
                                            </div>
                                            <div class="body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer magna felis, laoreet sed pulvinar mattis, aliquet non mauris.</div>
                                        </div>
                                    </div> <!-- /.col-md-4 -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="service">
                                            <div class="header">
                                                <div class="header-bg"></div>
                                                <div class="service-header">
                                                    <div class="icon">
                                                        <i class="fa fa-flask"></i>
                                                    </div>
                                                    <h4 class="service-title">Web Marketing</h4>
                                                </div>
                                            </div>
                                            <div class="body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer magna felis, laoreet sed pulvinar mattis, aliquet non mauris.</div>
                                        </div>
                                    </div> <!-- /.col-md-4 -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="service">
                                            <div class="header">
                                                <div class="header-bg"></div>
                                                <div class="service-header">
                                                    <div class="icon">
                                                        <i class="fa fa-money"></i>
                                                    </div>
                                                    <h4 class="service-title">Cost Effective</h4>
                                                </div>
                                            </div>
                                            <div class="body">Download free <a rel="nofollow" href="http://www.tooplate.com">templates</a> for your websites. Nullam viverra dolor fermentum erat ullamcorper, sit amet mattis nibh tempus.</div>
                                        </div>
                                    </div> <!-- /.col-md-4 -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="service">
                                            <div class="header">
                                                <div class="header-bg"></div>
                                                <div class="service-header">
                                                    <div class="icon">
                                                        <i class="fa fa-eye"></i>
                                                    </div>
                                                    <h4 class="service-title">Retina Ready</h4>
                                                </div>
                                            </div>
                                            <div class="body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer magna felis, laoreet sed pulvinar mattis, aliquet non mauris.</div>
                                        </div>
                                    </div> <!-- /.col-md-4 -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="service">
                                            <div class="header">
                                                <div class="header-bg"></div>
                                                <div class="service-header">
                                                    <div class="icon">
                                                        <i class="fa fa-mobile-phone"></i>
                                                    </div>
                                                    <h4 class="service-title">Responsive</h4>
                                                </div>
                                            </div>
                                            <div class="body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer magna felis, laoreet sed pulvinar mattis, aliquet non mauris.</div>
                                        </div>
                                    </div> <!-- /.col-md-4 -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="service">
                                            <div class="header">
                                                <div class="header-bg"></div>
                                                <div class="service-header">
                                                    <div class="icon">
                                                        <i class="fa fa-cogs"></i>
                                                    </div>
                                                    <h4 class="service-title">Settings</h4>
                                                </div>
                                            </div>
                                            <div class="body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer magna felis, laoreet sed pulvinar mattis, aliquet non mauris.</div>
                                        </div>
                                    </div> <!-- /.col-md-4 -->
                                </div> <!-- /.row -->
                            </div> <!-- /.content-inner -->

                        </div> <!-- /.services -->

                        <div id="menu-5" class="content">
                            <div class="page-header">
                                <h2 class="page-title">Stay In Touch</h2>
                            </div> <!-- /.page-header -->
                            <div class="content-inner">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3 class="widget-title">Send a message</h3>
                                        <p>Feel free to send us a message regarding this Genius HTML5 template. Pellentesque pulvinar, orci vel scelerisque suscipit, libero justo laoreet felis, ac consectetur est nisi quis ligula. Maecenas nec felis elit.</p>
                                        <div class="row contact-form">
                                            <div class="col-md-4">
                                                <label for="name-id">Your Name:</label>
                                                <input name="name-id" type="text" id="name-id" maxlength="40">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="email-id">E-mail:</label>
                                                <input name="email-id" type="text" id="email-id" maxlength="40">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="subject-id">Subject:</label>
                                                <input name="subject-id" type="text" id="subject-id" maxlength="60">
                                            </div>
                                        </div> <!-- /.contact-form -->
                                        <p class="full-row">
                                            <label for="message">Message:</label>
                                            <textarea name="message" id="message" rows="6"></textarea>
                                        </p>
                                        <input class="mainBtn" type="submit" name="" value="Send Message">
                                    </div> <!-- /.col-md-8 -->
                                    <div class="col-md-4">
                                        <div class="information">
                                            <h3 class="widget-title">Information</h3>
                                            <ul class="our-location">
                                                <li><span><i class="fa fa-map-marker"></i>Address:</span>120 Nullam viverra dolor</li>
                                                <li><span><i class="fa fa-map-marker"></i>Phone:</span>010-020-0210</li>
                                                <li><span><i class="fa fa-map-marker"></i>Email:</span><a href="mailto:info@company.com">info@company.com</a></li>
                                            </ul>
                                        </div> <!-- /.information -->
                                        <div class="google-map">
                                            <h3 class="widget-title">Our Location</h3>
                                            <div class="contact-map">
                                                <div class="google-map-canvas" id="map-canvas" style="height: 200px;">
                                                </div>
                                            </div> <!-- /.contact-map -->
                                        </div> <!-- /.google-map -->
                                    </div> <!-- /.col-md-4 -->
                                </div> <!-- /.row -->
                            </div> <!-- /.content-inner -->

                        </div> <!-- /.stay-in-touch -->
                        
                        <div class="site-footer">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="copyright-text">Copyright &copy; 2084 Company Name 
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="social-icons-footer">
                                        <ul>
                                            <li><a target="_parent" href="http://www.facebook.com/templatemo" class="fa fa-facebook"></a></li>
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-linkedin"></a></li>
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                            <li><a href="#" class="fa fa-rss"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.site-footer -->

                    </div> <!-- /.content-holder -->
                
                </div> <!-- /.col-md-10 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.main-content -->

    <script src="<?= $view->getThemePath() ?>/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?= $view->getThemePath() ?>/js/jquery.mixitup.min.js"></script>
    <script src="<?= $view->getThemePath() ?>/js/jquery.nicescroll.min.js"></script>
    <script src="<?= $view->getThemePath() ?>/js/jquery.lightbox.js"></script>
    <script src="<?= $view->getThemePath() ?>/js/templatemo_custom.js"></script>
    <script>
        function initialize() {
          var mapOptions = {
            zoom: 15,
            center: new google.maps.LatLng(16.832179,96.134976)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

    </script>
<!-- templatemo 402 genius -->
    </div>

<?php Loader::element('footer_required') ?>
</body>
</html>