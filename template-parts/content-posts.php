<?php
$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php the_title( '<h2><a href="'.esc_url(get_permalink()).'">', '</a></h2>' ); ?>
<?php if ($featured_image != "") { ?>
<div class="sans-article-preview-img" style="background: url('<?php echo($featured_image[0]);?>')">
</div>
<?php } ?>

    <?php the_excerpt(); ?>
    <a href="'.esc_url(get_permalink()).'" class="read-more">Read More</a>
</article>