<?php
/*
Template Name: 404 Page Template
Description: Custom template for the 404 error page.
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <article id="post-0" class="post error404 not-found">
            <header class="entry-header">
                <h1 class="entry-title"><?php esc_html_e('404: Not Found'); ?></h1>
            </header>

            <div class="entry-content">
                <?php echo get_theme_mod('404_page_content', ''); ?>
            </div>
        </article>

    </main>
</div>

<?php get_footer(); ?>
