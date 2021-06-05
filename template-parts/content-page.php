<?php 
    $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); 
?>

<main id="main" role="main">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="sans-page-head-img" 
    <?php if ($featured_image != "") { ?>
        style="background: url('<?php echo($featured_image[0])?>')"
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
    <div class="lyt-cont-grid-all">
        <div class="lyt-col">
            <?php the_content(); ?>
        </div>
    </div>
</article>
</main> 