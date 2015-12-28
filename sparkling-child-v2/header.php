<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?><!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri();?>/img/favicon/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="<?php echo get_stylesheet_directory_uri();?>/img/favicon/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="<?php echo get_stylesheet_directory_uri();?>/img/favicon/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="<?php echo get_stylesheet_directory_uri();?>/img/favicon/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="<?php echo get_stylesheet_directory_uri();?>/img/favicon/mstile-310x310.png" />
<meta name="google-translate-customization" content="df91bde63ecb4d3c-7202aa15cf35a49b-gfc1749ca37b3f1ff-15"></meta>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php wp_head(); ?>

<!-- ANALYTICS --> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42811101-3', 'auto');
  ga('send', 'pageview');

</script>
<script async src="<?php echo get_stylesheet_directory_uri()?>/inc/riveted.min.js"></script>

<!-- END OF ANALYTICS --> 
</head>

<body <?php body_class(); ?>>


<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div id="backgroundimage">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

			<?php 

			//get current month
			$currentMonth=DATE("m");
			 
			//retrieve season
			IF ($currentMonth>="03" && $currentMonth<="05")
			  $thumb = get_stylesheet_directory_uri()."/img/lente.jpg";
			ELSEIF ($currentMonth>="06" && $currentMonth<="08")
			  $thumb = get_stylesheet_directory_uri()."/img/lente.jpg";
			ELSEIF ($currentMonth>="09" && $currentMonth<="11")
			  $thumb = get_stylesheet_directory_uri()."/img/herfst.jpg";
			ELSE
			  $thumb = get_stylesheet_directory_uri()."/img/herfst.jpg";

			
			$url = $thumb;
		 	$image = array(
				'src' => $url,
				'alt' => ''
			);
		 	
			$formats = array(
				array("media"=>"" ,"query"=>"w400-p0","fallback"=>true),
				array("media"=>"(min-width:300px) and (min-device-pixel-ratio:2)" ,"query"=>"w800-q60-p1"),
				array("media"=>"(min-width:420px) and (max-width:767px)" ,"query"=>"w767-p1-q80"),
				array("media"=>"(min-width:420px) and and (max-width:767px) and (min-device-pixel-ratio:2)" ,"query"=>"w1534-p1-q80"),
				array("media"=>"(min-width:767px) and (max-width:991px)" ,"query"=>"w991-p1-q80"),
				array("media"=>"(min-width:767px) and (max-width:991px) and (min-device-pixel-ratio:2)","query"=>"w1982-p1-q80"),
				array("media"=>"(min-width:991px) and (max-width:1200px)","query"=>"w1200-p1-q80"),
				array("media"=>"(min-width:991px) and (max-width:1200px) and (min-device-pixel-ratio:2)","query"=>"w2400-p1-q80"),
				array("media"=>"(min-width:1200px)","query"=>"w2400-p1-q80"),
				array("media"=>"(min-width:1200px) and (min-device-pixel-ratio:2)","query"=>"w4800-p1-q80",),
			);
			
			echo RIP::get_picture($image,$formats);
		 	
		 	?>
			<!-- <img src="<?php echo get_stylesheet_directory_uri();?>/img/wattedoeninberlijn_logo.png"  height="400" width="400" alt="<?php bloginfo( 'name' ); ?>"/> -->
			
			</a>
        </div>	
    	<div id="logo" style="margin-top:-20vw">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

			<?php 
			$thumb = get_stylesheet_directory_uri()."/img/wattedoeninberlijn_logo.png";
			$url = $thumb;
		 	$image = array(
				'src' => $url,
				'alt' => ''
			);

			$formats = array(
				array("media"=>"" ,"query"=>"w400-p0","fallback"=>true),
				array("media"=>"(min-width:300px) and (min-device-pixel-ratio:2)" ,"query"=>"w100-q60-p1"),
				array("media"=>"(min-width:420px) and (max-width:767px)" ,"query"=>"w150-p1-q80"),
				array("media"=>"(min-width:420px) and and (max-width:767px) and (min-device-pixel-ratio:2)" ,"query"=>"w600-p1-q80"),
				array("media"=>"(min-width:767px) and (max-width:991px)" ,"query"=>"w192-p1-q80"),
				array("media"=>"(min-width:767px) and (max-width:991px) and (min-device-pixel-ratio:2)","query"=>"w767-p1-q80"),
				array("media"=>"(min-width:991px) and (max-width:1200px)","query"=>"w250-p1-q80"),
				array("media"=>"(min-width:991px) and (max-width:1200px) and (min-device-pixel-ratio:2)","query"=>"w1000-p1-q80"),
				array("media"=>"(min-width:1200px)","query"=>"w300-p1-q80"),
				array("media"=>"(min-width:1200px) and (min-device-pixel-ratio:2)","query"=>"w1200-p1-q80",),
			);

			echo RIP::get_picture($image,$formats);
		 	
		 	?>
			<!-- <img src="<?php echo get_stylesheet_directory_uri();?>/img/wattedoeninberlijn_logo.png"  height="400" width="400" alt="<?php bloginfo( 'name' ); ?>"/> -->
			
			</a>
        </div>
			<div class="menunavigation">
				<div class="container">
					
					<div class="row">

						<div class="main-content-inner col-sm-12 col-md-12">
							<nav>
					
				    		<?php if ( function_exists('max_mega_menu_is_enabled') ) : ?>
							 <?php wp_nav_menu( array( 'theme_location' => 'footer-links') ); ?>
							
							<?php endif; ?>
								
							
		
							</nav><!-- .site-navigation -->
						</div>
					</div>
				
				</div>
			</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
        
        <div class="top-section">
			
		</div>

		<div class="container main-content-area">
			
			<div class="row">

				<div class="main-content-inner <?php echo sparkling_main_content_bootstrap_classes(); ?> <?php echo of_get_option( 'site_layout' ); ?>">
					
				