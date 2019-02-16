<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
</head>
<body>
<h3><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h3>
<?php wp_nav_menu(array(
    'theme_location' => 'Header_menu'
))?>