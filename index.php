<?php get_header(); ?>
    <div class="sans-bkgd-pg" id="primary">
        <main id="main" role="main" class="sans-cont">
            <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( '/template-parts/content' ); ?>
            <?php endwhile; else : ?>
                <?php get_template_part( '/template-parts/content', 'none' ); ?>
            <?php endif; ?>       
        </main>  
        <small>index.php</small>  
    </div>
<?php get_footer(); ?>