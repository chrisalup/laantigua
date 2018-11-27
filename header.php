<!DOCTYPE html>
<html lang="en">
	<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77097852-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '225249594508974');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=225249594508974&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
		<meta charset="<?php bloginfo('charset'); ?>"/>
		<title>
			<?php bloginfo('name'); ?>
			<?php if ( is_single() ) { ?>
			&raquo; Blog Archive
			<?php } ?>
			<?php wp_title(); ?>
		</title>
		
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <![endif]-->
		
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon"/>
		
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          
		<script type="text/javascript">
                if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                var msViewportStyle = document.createElement('style')
                msViewportStyle.appendChild(
                    document.createTextNode('@-ms-viewport{width:auto!important}'))
                document.querySelector('head').appendChild(msViewportStyle)
                }
        </script>
		<script>
		  new WOW().init();
		</script>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css"/>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

	</head>
	
	<body <?php body_class( $class ); ?>>
	<!-- START HEADER -->
	<header>
		<div class="container">
			<div class="row">
					<a class="navbar-brand" href="<?php echo get_option('home'); ?>"><img alt="<?php bloginfo('name'); ?>" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="la antigua cocina" class="img-responsive wow bounceInDown" data-wow-delay="1s"></a>
					<nav class="navbar navbar-default">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>

						<div class="collapse navbar-collapse wow slideInRight" id="menu">
						<?php 
							/* Primary navigation */
							wp_nav_menu( array(
							'menu' => 'main-menu',
							'depth' => 3,
							'container' => false,
							'menu_class' => 'nav navbar-nav',
							'walker' => new wp_bootstrap_navwalker()));
						?>
						</div><!-- /.navbar-collapse -->
					</nav>
			</div>
			<?php if (is_active_sidebar('header_top_social')):?>
			<ul class="social wow fadeInUpBig" data-wow-delay="1.4s">
				<?php dynamic_sidebar('header_top_social'); ?>
			</ul>
			<?php endif;?>
		</div>
		
	</header>	
	<!-- END HEADER -->		

