<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nr_theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@naterchrdsn">
		<meta name="twitter:title" content="Website of Nate Richardson">
		<meta name="twitter:description" content="Nate Richardson is a Web Developer and Photographer at Richardson Media House, based in the San Francisco Bay Area">
		<meta name="twitter:creator" content="@naterchrdsn">
		<meta name="twitter:image" content="http://richardsonmediahouse.com/assets/uploads/sites/7/2014/08/Refreshlogo.png">
		<meta property="og:title" content="Website of Nate Richardson" />
		<meta property="og:url" content="http://naterichardson.com/" />
		<meta property="og:image" content="http://richardsonmediahouse.com/assets/uploads/sites/7/2014/08/Refreshlogo.png" />
		<meta property="og:description" content="Nate Richardson is a Web Developer and Photographer at Richardson Media House, based in the San Francisco Bay Area" /> 
		<meta property="og:site_name" content="NateRichardson.com" />
  		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
	<noscript>
	    <style>
	      .row {
	        display: none;
	      }
	      footer {
	        display: none;
	      }
	    </style>
	    <div class="">
	        <h1>Hi there!</h1>
	        <h3>You need to enable javascript to view this site correctly!</h3>
	        <p>If your looking to grab some images off of the site, please simply <a href="mailto:contact@richardsonmediahouse.com">e-mail us</a> and we'll give you a higher resolution version!</p>
	    </div>
	</noscript>
	<header>
		<div class="container mobile-nav"><a href="#" data-activates="nav-mobile" class="button-collapse hide-on-large-only"><i class="mdi-navigation-menu small"></i></a></div>
		<ul id="nav-mobile" class="side-nav fixed table-of-contents">
			<li class="logo"><a id="logo-container" href="http://naterichardson.com/" class="brand-logo"><img src="http://richardsonmediahouse.com/assets/uploads/sites/7/2014/08/Refreshlogo.png" alt="Nate Richardson" /></a></li>
			<li class="bold"><a href="#about" class="waves-effect">About</a></li>
			<li class="bold"><a href="#projects" class="waves-effect">Projects</a></li>
			<li class="bold"><a href="#contact" class="waves-effect">Contact</a></li>
		</ul>
    </header>
	<div id="loaderWrap" class="center">
		<div class="preloader-wrapper big active">
	      <div class="spinner-layer spinner-blue">
	        <div class="circle-clipper left">
	          <div class="circle"></div>
	        </div><div class="gap-patch">
	          <div class="circle"></div>
	        </div><div class="circle-clipper right">
	          <div class="circle"></div>
	        </div>
	      </div>

	      <div class="spinner-layer spinner-red">
	        <div class="circle-clipper left">
	          <div class="circle"></div>
	        </div><div class="gap-patch">
	          <div class="circle"></div>
	        </div><div class="circle-clipper right">
	          <div class="circle"></div>
	        </div>
	      </div>

	      <div class="spinner-layer spinner-yellow">
	        <div class="circle-clipper left">
	          <div class="circle"></div>
	        </div><div class="gap-patch">
	          <div class="circle"></div>
	        </div><div class="circle-clipper right">
	          <div class="circle"></div>
	        </div>
	      </div>

	      <div class="spinner-layer spinner-green">
	        <div class="circle-clipper left">
	          <div class="circle"></div>
	        </div><div class="gap-patch">
	          <div class="circle"></div>
	        </div><div class="circle-clipper right">
	          <div class="circle"></div>
	        </div>
	      </div>
	    </div>
	</div>
	<main class="row">
