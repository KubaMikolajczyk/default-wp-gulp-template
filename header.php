<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="FluenceDev team">
    <meta name="generator" content="Wordpress">
    <link rel="shortcut icon" type="image/x-icon" href="<?php get_site_icon_url($size = 32); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="theme-color" content="#ffcc33">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <![endif]-->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php get_template_part('_partials/header'); ?>
<main class="page">
    <?php if(!is_front_page()): ?>
    <section class="top-page">
        <?php custom_breadcrumbs(); ?>
    </section>
<?php endif; ?>