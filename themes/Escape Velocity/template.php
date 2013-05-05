<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GetSimple
* @Action:		Cardinal theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<html>
<head>

	<!-- Site Title -->
	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,900" rel="stylesheet" />
	<script src="<?php get_theme_url(); ?>/js/jquery-1.9.1.min.js"></script>
	<script src="<?php get_theme_url(); ?>/js/jquery.dropotron-1.3.js"></script>
	<script src="<?php get_theme_url(); ?>/js/config.js"></script>
	<script src="<?php get_theme_url(); ?>/js/skel.min.js"></script>
	<script src="<?php get_theme_url(); ?>/js/skel-ui.min.js"></script>
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/skel-noscript.css" />
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/style.css" />
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/style-desktop.css" />
	
	<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
</head>
<body id="<?php get_page_slug(); ?>" class="right-sidebar">

	<!-- Header Wrapper -->
	<div id="header-wrapper" class="wrapper">
		<div class="container">
			<div class="row">
				<div class="12u">

					<!-- Header -->
					<div id="header">

						<!-- Logo -->
						<div id="logo">
							<h1><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></h1>
							<span class="byline"><?php get_component('tagline'); ?></span>
						</div>
						<!-- /Logo -->

						<!-- Nav -->
						<nav id="nav">
							<ul>
								<?php get_navigation(return_page_slug()); ?>
							</ul>
						</nav>
						<!-- /Nav -->

					</div>
					<!-- /Header -->

				</div>
			</div>
		</div>
	</div>
	<!-- /Header Wrapper -->

	<!-- Main Wrapper -->
	<div class="wrapper wrapper-style2">
		<div class="title"><?php get_page_title(); ?></div>
		<div class="container">
			<div class="row">
				<div class="12u">

					<!-- Main -->
					<div id="main">
						<div>
							<div class="row">
								<div class="8u skel-cell-mainContent">

									<!-- Content -->
									<div id="content">
										<article class="is is-post">
											<?php get_page_content(); ?>
											<p class="page-meta">Published on &nbsp;<span><?php get_page_date('F jS, Y'); ?></span></p>
										</article>

									</div>
									<!-- /Content -->

								</div>

								<div class="4u">

									<!-- Sidebar -->
									<div id="sidebar">
										<section class="is">
											<?php get_component('sidebar');	?>
											<hr/>
											<p><?php echo date('Y'); ?> - <strong><?php get_site_name(); ?></strong></p>
											<p>
												Escape Velocity by <a href="http://html5up.net/" >html5up</a><br />
												<?php get_site_credits(); ?>
											</p>
										</section>
									</div>
									<!-- /Sidebar -->

								</div>
							</div>
						</div>
					</div>
					<!-- /Main -->

				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

</body>
</html>