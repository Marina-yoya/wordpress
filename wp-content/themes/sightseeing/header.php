<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Sightseeing</title>
</head>
<body style="margin: 0;">

<header id="site-header">
   

    
    <nav id="site-navigation">
        <?php
        $selected_menu = get_theme_mod('sightseeing_primary_menu', '');
        wp_nav_menu(array(
            'theme_location' => 'primary-menu', 
            'menu_class' => 'main-menu',
            'menu' => $selected_menu,
        ));
        ?>
     
    </nav>

   
    <div id="search-form">
        <?php get_search_form(); ?>
    </div>

</header>

