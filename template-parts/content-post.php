<?php 
    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    $page_header_image = get_theme_mod('posts_header_image');
?>

<main id="main" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="sans-page-head-img" 
        <?php if ($page_header_image != "") { ?>
            style="background: url('<?php echo($page_header_image);?>')"
        <?php } else { ?>
            style="background: url('<?php header_image(); ?>')"
        <?php } ?>  
        >
            <div class="sans-page-head-content lyt-cont-grid-all">
                <div class="lyt-col center">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </div>
            </div>
        </div>
        <div class="lyt-cont-grid-desktop lyt-pad-vert-med">
        <div class="lyt-col lyt-cont-flex lyt-gap-med lyt-flx-align-start">
        <?php if ($featured_image != "") { ?>
                <div style="flex: 0 1 <?php echo($featured_image[1])?>px">
                    <img src="<?php echo($featured_image[0])?>)" alt="<?php the_title() ?>" width="<?php echo($featured_image[1])?>"  height="<?php echo($featured_image[2])?>">
                </div>
                <div style="flex: 1 1 <?php echo($featured_image[1])?>px">
                    <?php the_content(); ?>
                    <p><?php esc_html_e( 'By ' ); ?> <?php the_author(); ?></p>
                </div>
            
        <?php } else { ?>
           
                <div class="lyt-col-lg">
                    <?php the_content(); ?>
                    <p><?php esc_html_e( 'By ' ); ?> <?php the_author(); ?></p>
                </div>
                <aside class="lyt-col-sm">
                    <?php
                    if ( is_active_sidebar( 'page-sidebar' ) ) {
                        dynamic_sidebar( 'page-sidebar' );
                    }
                    ?>
                </aside>
          
        <?php } ?>
        </div>

        </div>
    </article>
</main> 