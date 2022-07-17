<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
   
    <a href="<?php echo esc_url(home_url('/')); ?>"><h1><?php bloginfo('name') ?></h1></a>
    <h5><?php bloginfo('description') ?></h5>

    <nav class="site-nav">
        <?php
        $args=array(
            'theme_location'=>'primary'

        );
        ?>
     <?php wp_nav_menu($args); ?>
    </nav>
    


</header>