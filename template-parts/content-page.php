<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_title( '<h1>', '</h1>' ); ?>
    <div>
        <?php the_content(); ?>
    </div>
</article>