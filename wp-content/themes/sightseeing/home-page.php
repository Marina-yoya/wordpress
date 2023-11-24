<?php
/*
Template Name: Home Page Template
Description: Custom template for the home page with a full-page image and text overlay.
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php get_sidebar(); ?>

        <div id="fullpage-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bulgaria-1566785_1280.png" alt="Contact Image">
            <div class="text-overlay">
                <h1>Welcome to Bulgaria</h1>
                <p>A Country to explore</p>
            </div>
        </div>

    </main>
</div>

<?php
get_footer();
?>