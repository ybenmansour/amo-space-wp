<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> amo space </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href=" <?php echo get_template_directory_uri(); ?>  /img/logo/favicon.ico">

	<?php wp_head(); ?>
    
</head>

<body>

   <!-- Start Preloader -->
   <div class="pre-loader">
        <div class="container-fluid load-con">
        	<div class="row no-margin">
        		<div class="col-xs-4 col-sm-1">
        			<img src="<?php echo get_template_directory_uri(); ?> /img/logo/1x1.jpg" class="img-responsive animated rotateInDownLeft img-responsive1" alt="top-left">
        		</div>
        		<div class="col-xs-4 col-sm-1">
        			<img src="<?php echo get_template_directory_uri(); ?> /img/logo/1x2.jpg" class="img-responsive animated rotateInDownRight img-responsive2" alt="top-right">
        		</div>
        	</div>	
        	<div class="row no-margin">
        		<div class="col-xs-4 col-sm-1">
        			<img src="<?php echo get_template_directory_uri(); ?> /img/logo/2x1.jpg" class="img-responsive animated rotateInUpLeft img-responsive3" alt="bottom-left">
        		</div>
        		<div class="col-xs-4 col-sm-1">
        			<img src="<?php echo get_template_directory_uri(); ?> /img/logo/2x2.jpg" class="img-responsive animated rotateInUpRight img-responsive4" alt="bottom-right">
        		</div>
        	</div>	
        </div>
    </div>    
   <!--  End Preloader -->
    
    <!-- Start Go Down arrow -->
    <div class="go-down">
        <a href="#whoWeAre">
            <i class="fa fa-angle-down fa-3x"></i>
        </a>
    </div>
    <!-- End Go Down arrow -->
    
    <!-- Wrap all page content here -->
    <div id="wrap" class="home">
        <header class="masthead">
        	<nav id="nav" class="top-bar overlay-bar" role="navigation">
                <div id="nav-container" class="container animated slideInDown">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?> /img/logo/logo-amo-space.png" alt="logo-amo-space">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#wrap">Aceuill</a>
                            </li>
                            <li><a href="#about">Qui Sommes Nous?</a>
                            </li>
                            <li><a href="#services">Nos Missions</a>
                            </li>
                            <li><a href="#team">Notre Équipe</a>
                            </li>
                            <li><a href="#portfolio">our work</a>
                            </li>
                            <li><a href="#get-in-touch">Contact</a>
                            </li>
                            <!-- <li class="social-nav visible-lg">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </header>