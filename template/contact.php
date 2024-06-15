<?php
defined('ABSPATH') || die;

/*
Template Name: Contact
*/
?>
     
<?php get_header(); ?>

<div class="content">
    <section id="main-content">
        <div class="contact-info">
            <h4><?php echo esc_html__('Address:', 'advanced-theme'); ?></h4>
            <p><?php echo esc_html__('090 456 765', 'advanced-theme'); ?></p>
        </div>
        <div class="contact-form">
            <?php echo do_shortcode('[CONTACT FORM]'); ?>
        </div>
    </section>

    <section id="sidebar">
        <?php get_sidebar(); ?>
    </section>
</div>

<?php get_footer(); ?>

