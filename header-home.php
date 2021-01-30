<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_template_part( '/template-parts/content', 'icons' ); ?>
    <?php get_template_part( '/custom/header', 'home' ); ?>

