<?php get_header(); ?>
    
    <div class="sans-bkgd-pg" id="primary">
        <main id="main" role="main" class="sans-cont">
            <section>
            <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( '/template-parts/content' ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( '/template-parts/content', 'none' ); ?>

            <?php endif; ?>   
            </section>
            <section class="sans-row-bg-1 sans-widgets-page-end">
                <div class="sans-cont sans-grd-cont">
                    <?php
                    if ( is_active_sidebar( 'posts-sidebar' ) ) {
                        $widgets .= dynamic_sidebar( 'posts-sidebar' );
                    }
                    ?>
                </div>
            </section>

        </main> 
        <small>single.php</small>   
    </div>

<?php get_footer(); ?>