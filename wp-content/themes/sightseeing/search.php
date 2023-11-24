<?php
/*
Template Name: Custom Search Template
Description: A custom template for displaying search results.
*/
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-search">

        <header class="page-header">
            <h1 class="page-title"><?php printf(__('Search Results for: %s', ''), get_search_query()); ?></h1>
        </header>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                    </header>

                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>

                    <footer class="entry-footer">
                        <?php echo '<a href="' . esc_url(get_permalink()) . '" class="read-more">' . __('Read more', '') . '</a>'; ?>
                    </footer>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <?php echo '<p>' . __('No results found.', '') . '</p>'; ?>
        <?php endif; ?>

    </main>
</div>

<?php get_footer(); ?>