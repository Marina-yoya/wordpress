<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Village Vet</title>
</head>

<body>

    <header class="site-header">

        <div class="header-left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="Village Vet Logo"
                class="site-logo">
            <div class="site-title-container">
                <h1 class="site-title">Village Vet</h1>
                <small>Special vets for special pets</small>
            </div>
        </div>
        <nav class="site-navigation">
            <ul>
                <li><a href="#landing">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>

    </header>


    <div id="content" class="site-content">