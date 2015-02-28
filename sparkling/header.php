<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900" rel="stylesheet" type="text/css"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- favicon -->

<?php 
/*
if ( of_get_option( 'custom_favicon' ) ) { ?>
<link rel="icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" />
} 
*/
?>
<meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri() ?>/inc/images/windows-tile-70x70.png">
<meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri() ?>/inc/images/windows-tile-150x150.png">
<meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri() ?>/inc/images/windows-tile-310x310.png">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/inc/images/windows-tile-144x144.png">
<meta name="msapplication-TileColor" content="#8E3750">
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri() ?>/inc/images/apple-touch-icon-152x152-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri() ?>/inc/images/apple-touch-icon-120x120-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_template_directory_uri() ?>/inc/images/apple-touch-icon-76x76-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_template_directory_uri() ?>/inc/images/apple-touch-icon-60x60-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/inc/images/apple-touch-icon-144x144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/inc/images/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/inc/images/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() ?>/inc/images/apple-touch-icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/inc/images/favicon.ico">
<link rel="icon" type="image/png" sizes="64x64" href="<?php echo get_template_directory_uri() ?>/inc/images/favicon.png">

<!--[if IE]><?php if ( of_get_option( 'custom_favicon' ) ) { ?><link rel="shortcut icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" /><?php } ?><![endif]-->

<!-- googleanalytics -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46019584-3', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header>
	  <div class="navbar">
	    <div class="header"><a data-toggle="collapse" data-target=".navbar-collapse" href="#" class="navbar-toggle"><i class="fa fa-align-justify fa-2x"></i></a>
	      <!-- Logo--><a href="http://nanopay.net"><img src="<?php echo get_template_directory_uri() ?>/inc/images/logo.svg" alt="" class="navbar-brand"/></a>
	      <!-- Collapse-->
	      <div class="collapse navbar-collapse">
	        <!-- MENU-->
	        <ul class="nav navbar-nav pull-right">
						<li><a id="nav-merchants" href="http://nanopay.net/merchants.html">Merchants</a></li>
	          <li><a id="nav-consumers" href="http://nanopay.net/callcenters.html">Call Centers</a></li>
	          <li><a id="nav-developers" href="http://nanopay.net/developers.html">Developers</a></li>
	          <li><a id="nav-about" href="http://nanopay.net/about.html">About</a></li>
	          <li><a id="nav-blog" href="/">Blog</a></li>
	        </ul>
	      </div>
	    </div>
	  </div>
	</header>


	<div class="site-content">

			<div class="top-section">
				<?php sparkling_featured_slider(); ?>
				<?php sparkling_call_for_action(); ?>
			</div>

		<div class="container main-content-area">
			<div class="row">
				<div id="content" class="main-content-inner col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">