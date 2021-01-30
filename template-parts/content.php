<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php the_title( '<h1>', '</h1>' ); ?>

        <div>
            <?php esc_html_e( 'Author: ' ); ?> <?php the_author(); ?>

        </div>

    <div>
        <?php the_content(); ?>
    </div>
</article>
<div>
    <?php if( comments_open() ) : ?>
    <?php comments_template(); ?>
    <?php endif; ?>
</div>