<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_title( '<h2><a href="'.esc_url(get_permalink()).'">', '</a></h2>' ); ?>

        <div>
            <?php esc_html_e( 'Author: ' ); ?> <?php the_author(); ?>
            <br>
            <?php esc_html_e( 'Author: ' ); ?> <?php the_author_posts_link(); ?>
        </div>
    <div>
        <?php the_excerpt(); ?>
    </div>
</article>