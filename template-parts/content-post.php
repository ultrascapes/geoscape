<?php 
    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    $page_header_image = get_theme_mod('page_background');
?>

<main id="main" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="sans-pg-head-img-default" style="background: url('<?php echo($page_header_image);?>')">
            <div class="sans-pg-head-content-default lyt-cont-grid-all">
                <div class="lyt-col-narrow">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                    <?php if ($featured_image != "") { ?>
                       
                            <img src="<?php echo($featured_image[0])?>)" alt="<?php the_title() ?>" width="<?php echo($featured_image[1])?>"  height="<?php echo($featured_image[2])?>">
                        
                    <?php } ?>
                    <p><?php esc_html_e( 'By ' ); ?> <?php the_author_posts_link(); ?> | <?php the_time('M j, Y'); ?> | <?php the_category(', ');?></p>
                </div>
            </div>
        </div>
        <div class="lyt-cont-grid-all">
            <div class="lyt-col-narrow">
                <?php the_content(); ?>
            </div>
        </div>
    </article>
</main> 