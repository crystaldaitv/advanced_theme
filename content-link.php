<?php
defined('ABSPATH') || die;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumbnail"> <?php advancedThemePostThumbnail(); ?> </div>
    <header class="entry-header">
        <?php
        /**
        * Store custom_files to variables
        *
        * @return void
        */
        $link = get_post_meta( $post->ID, 'format_link_url', true );
        $link_description = get_post_meta( $post->ID, 'format_link_description', true );

        /**
        * Show title
        *
        * @return void
        */
        if ( is_single() ) {
            printf( '<h1 class="entry-title"><a href="%1$s" target="blank">%2$s</a></h1>', $link, get_the_title());
        } else {
            printf( '<h2 class="entry-title"><a href="%1$s" target="blank">%2$s</a></h2>', $link, get_the_title());
        } ?>
    </header>
    <div class="entry-content">
        <?php printf( '<a href="%1$s" target="blank">%2$s</a>', $link, $link_description); ?>
        <?php ( is_single() ? advancedThemeEntryTag() : '' ); ?>
    </div>
</article>