<?php
/*
Template Name: Blog Page
Description: Custom template for the blog page.
*/
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
    
        <h1 class="blog-heading">Top Tourist Attractions</h1>
        <div class="blog-container">
            <?php

            $blog_query = new WP_Query(
                array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'category_name' => 'sightseeing',
                )
            );

            if ($blog_query->have_posts()):
                while ($blog_query->have_posts()):
                    $blog_query->the_post();
                    ?>

                    <div class="blog">
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                        <?php if (has_post_thumbnail()): ?>
                            <div class="blog-image">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="blog-description">
                            <?php the_content(); ?>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>">Read more</a>
                        </div>
                    </div>
                    <?php
                endwhile;

                wp_reset_postdata();
            else:
                echo '<p>No posts found</p>';
            endif;
            ?>
        </div>
        
    </main>
</div>







<?php
get_footer();
?>