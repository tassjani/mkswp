	<!DOCTYPE html>
	<html <?php language_attributes(); ?> >
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<!-- Site Title -->

	
		<title><?php bloginfo('MKS Learning'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
		
		<?php wp_head(); ?>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php bloginfo('css/linearicons.css');?>" >
			<link rel="stylesheet" href="<?php bloginfo('css/font-awesome.min.css');?>" >
			<link rel="stylesheet" href="<?php bloginfo('css/bootstrap.css');?>" >
			<link rel="stylesheet" href="<?php bloginfo('css/magnific-popup.css');?>" >
			<link rel="stylesheet" href="<?php bloginfo('css/nice-select.css');?>" >					
			<link rel="stylesheet" href="<?php bloginfo('css/animate.min.css');?>" >
			<link rel="stylesheet" href="<?php bloginfo('css/owl.carousel.css');?>" >
			<link rel="stylesheet" href="<?php bloginfo('css/keyframes.css');?>" >
			<link rel="stylesheet" href="<?php bloginfo('https://use.fontawesome.com/releases/v5.6.3/css/all.css');?>"  integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
			<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
			<link rel="icon" href="favicon.ico" type="image/x-icon">
			<link rel="stylesheet" href="<?php bloginfo('css/main.css');?>" >
			<link rel="stylesheet" href="<?php bloginfo('css/responsive.css');?>" >
		</head>
		<body <?php body_class(); ?> >
			  <header id="header" id="home">
			    <div class="container">
			    	<div class="site-header row header-top align-items-center">
			    		<div class="site-logo">
							<a href="index.html">
								<img class="img-fluid" src="img/logo-white.png" alt="MKS Learning">	
							</a>			    			
			    		</div>
			    	</div>
			    </div>
			    <div class="container">	
			    	<div class="row align-items-center justify-content-center d-flex">
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="index.html">Home</a></li>
				          <li><a href="about.html">About</a></li>
						  <li class="menu-has-children"><a href="services.html">Services</a>
							<ul>
								<li><a href="">Psychotherapy Counseling</a></li>
								<li><a href="">Life Coaching</a></li>
								<li><a href="">Wellness Training</a></li>
								<li><a href="">Facilitative Session</a></li>
							</ul>
						  </li>		          
				          <li><a href="">Gallery</a></li>
				          <li class="menu-has-children"><a href="">Blog</a>
				            <ul>
				              <li><a href="">Blog Home</a></li>
				              <li><a href="">Blog Single</a></li>
				            </ul>
				          </li>	
				          <li><a href="contact.html">Contact</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
			  <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>