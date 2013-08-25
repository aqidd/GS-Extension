<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GetSimple
* @Action:		Flatweb theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<html>
<head>

	<!-- Site Title -->
	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="format-detection" content="telephone=no"/>
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
  <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
  <link rel="dns-prefetch" href="http://ajax.googleapis.com/">
  <link rel="dns-prefetch" href="http://html5shim.googlecode.com/">
  <link rel="shortcut icon" href="<?php get_theme_url(); ?>/img/favicon.ico">
  <link rel="apple-touch-icon" href="<?php get_theme_url(); ?>/img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php get_theme_url(); ?>/img/apple-touch-icon-72x72-ipad.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php get_theme_url(); ?>/img/apple-touch-icon-114x114-retina.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php get_theme_url(); ?>/img/apple-touch-icon-144x144-retina.png">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700,400italic">
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/styles/styles.css">
  <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/styles/typeplate.css">
  <!--[if IE]><link href="http://www.3818.com.ar/styles/fix-old-ie.css" media="all" type="text/css" rel="stylesheet">
<![endif]-->
  <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
<!--[if IE]>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
    <style>.chromeFrameInstallDefaultStyle { width: 100%; border: 5px solid #ffa700; }</style><div id="prompt"></div>
    <script>window.attachEvent("onload", function() {CFInstall.check({mode: "overlay", node: "prompt"});});</script>
<![endif]-->

<div id="top">
  <nav>
    <div class="logo clearfix"><a href="#"><?php get_site_name(); ?></a></div>
    <ul id="menu">
      <?php get_navigation(return_page_slug()); ?>
    </ul>
    <a href="#menu-footer" class="menu-btn">&#9776; Menu</a>
  </nav>
</div>    
<header>
  <div class="wrapper">
    <div class="content">
      <hgroup>
        <h1><?php get_site_name(); ?></h1>
        <h2><?php get_page_title(); ?></h2>
      </hgroup> 
      <div class="clear"></div>
    </div>
  </div>
</header>
<div class="pagecontent"> 
<p class="drop-cap">
    <?php get_page_content(); ?>
</p>
<br/>
<cite>
  <p class="page-meta"><small>Published on &nbsp;<span><?php get_page_date('F jS, Y'); ?></span></small></p>
</cite>
</div>

<div class="sectionblue">
<footer id="footer">
  <div class="wrapper">
    <div class="left-content">
      <a id="menu-footer"></a>
      <nav class="menu-footer">
        <ul>
          <?php get_navigation(return_page_slug()); ?>
        </ul>
      </nav>
      
    </div>
    <div class="right-content">
        FlatWeb Theme by <a href="http://www.egrappler.com/make-your-own-website-with-flatweb-a-single-page-responsive-free-website-html-template/" >Egrappler</a><br />
        <?php get_site_credits(); ?>
    </div>
  </div>
</footer>
</div>


  <script src="<?php get_theme_url(); ?>/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php get_theme_url(); ?>/js/modernizr.custom.js" type="text/javascript"></script>
  <script src="<?php get_theme_url(); ?>/js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="<?php get_theme_url(); ?>/js/jquery.flip.js" type="text/javascript"></script>
  <script src="<?php get_theme_url(); ?>/js/jquery.localscroll-1.2.7.js" type="text/javascript"></script>
  <script src="<?php get_theme_url(); ?>/js/jquery.scrollTo-1.4.3.1.js" type="text/javascript"></script>
  <script src="<?php get_theme_url(); ?>/js/jquery.carouFredSel-6.2.0.js" type="text/javascript"></script>
  <script src="<?php get_theme_url(); ?>/js/custom.js" type="text/javascript"></script>

  </body>
  </html>