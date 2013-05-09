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
	<meta name="robots" content="index, follow, width=device-width" />
	<meta charset="utf-8">

  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet" />
 <!-- <script src="<?php get_theme_url(); ?>/js/jquery-1.9.1.min.js"></script>
  <script src="<?php get_theme_url(); ?>/js/config.js"></script>
  <script src="<?php get_theme_url(); ?>/js/skel.min.js"></script>
  <script src="<?php get_theme_url(); ?>/js/skel-ui.min.js"></script>
-->
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/skel-noscript.css" />
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/style.css" />
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/style-desktop.css" />
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/style-wide.css" />
  
  <!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
  <!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
  <!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->

</head>
<body id="<?php get_page_slug(); ?>" class="left-sidebar">
  <!--
    Note: Set the body element's class to "left-sidebar" to position the sidebar on the left.
    Set it to "right-sidebar" to, you guessed it, position it on the right.
  -->

    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Content -->
      <div id="content">
        <div id="content-inner">

          <!-- Post -->
          <article class="is-post is-post-excerpt">
            <header>
              <h2><a href="#"><?php get_page_title(); ?></a></h2>

            </header>

            <?php get_page_content(); ?>
            <p class="page-meta">Published on &nbsp;<span><?php get_page_date('F jS, Y'); ?></span></p>
          </article>

        </div>
      </div>

      <!-- Sidebar -->
      <div id="sidebar" class="right-sidebar">

        <!-- Logo -->
        <div id="logo">
          <h1><?php get_site_name(); ?></h1>
        </div>

        <!-- Nav -->
        <nav id="nav">
          <ul>
            <?php get_navigation(return_page_slug()); ?>
          </ul>
        </nav>

        <!-- Sidebar -->
        <section class="is-text-style1">
          <div class="inner">
            <p>
              <?php get_component('sidebar'); ?>
            </p>
          </div>
        </section>

        <!-- Copyright -->
        <div id="copyright">
          <p>
            <?php get_site_credits(); ?>
            &copy; <?php get_site_name(); ?><br />
            Images: <a href="http://iconify.it">Iconify.it</a>
            Design: <a href="http://html5up.net/">HTML5 UP</a>
          </p>
        </div>

      </div>

    </div>

  </body>
  </html>