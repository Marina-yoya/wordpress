<section id="services" class="services-section">
    <h1>Our Services</h1>
    <div class="container services-container">
        <?php
        $services_query = new WP_Query(
            array(
                'post_type' => 'post',
                'posts_per_page' => -1,
            )
        );

        if ($services_query->have_posts()):
            while ($services_query->have_posts()):
                $services_query->the_post();
                ?>
                <div class="service-card">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <?php if (has_post_thumbnail()): ?>
                        <div class="service-image">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="service-description">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else:

            ?>
            <p>No services available at the moment.</p>
        <?php endif; ?>
    </div>
</section>