<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body class="<?php body_class(); ?>">
    <?php wp_body_open(); ?>
    <?php get_template_part("templates/navigation") ?>
    <div class="main mt-4">
    