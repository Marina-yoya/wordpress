<?php
/**
 * The template for displaying the footer.
 *
 * @package sightseeing
 */
?>

<footer id="colophon" class="site-footer">
    <div class="footer-content">
        <div class="footer-logo">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            if (has_custom_logo()) {
                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
            ?>
        </div>
        <div class="footer-text">
            <p><?php echo esc_html(get_theme_mod('footer_text', 'All Rights Reserved')); ?></p>
        </div>
        <div id="footer-widget-area" class="widget-area">
            <?php dynamic_sidebar('footer_widget_area'); ?>
        </div>
    </div>
</footer>
