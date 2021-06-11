<?php get_header(); ?>
    <div class="sans-bkgd-pg" id="primary">
        <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( '/template-parts/content', 'post' ); ?>
        <?php endwhile; else : ?>
            <?php get_template_part( '/template-parts/content', 'none' ); ?>
        <?php endif; ?>
        <small>page.php</small>
    </div>
<?php get_footer(); ?>