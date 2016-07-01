<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="maincontentcontainer">
 *
 * @package Quark
 * @since Quark 1.0
 */
?><!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <meta http-equiv="cleartype" content="on">

		<!-- Responsive and mobile friendly stuff -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="<?=get_template_directory_uri();?>/favicon.png" type="image/png"/>
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?=get_template_directory_uri();?>/css/normalize.css">
        <link rel="stylesheet" href="<?=get_template_directory_uri();?>/css/main.css">
        <link rel="stylesheet" href="<?=get_template_directory_uri();?>/css/plugins.css">
        <link rel="stylesheet" href="<?=get_template_directory_uri();?>/css/media-queries.css">
        <script src="<?=get_template_directory_uri();?>/js/vendor/modernizr-2.8.3.min.js"></script>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class('loading'); ?>>
        <div id="loading" class="transitions"></div>
    	<!--[if lt IE 8]>
            <div class="browser-upgrade"></div>
        <![endif]-->
        <header id="header"></header>
        <section id="main">