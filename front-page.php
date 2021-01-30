    <?php get_header('home'); ?>
    <main id="home-main" role="main" class="sans-pg-fold-r2">
        <section class="sans-row-bg-1">
            <div class="sans-cont sans-grd-cont">
                <?php
                if ( is_active_sidebar( 'home-one' ) ) {
                    $widgets .= dynamic_sidebar( 'home-one' );
                }
                ?>
            </div>
        </section>
        <section class="sans-bkgd-pg">
        <div class="sans-cont sans-pad-top-20" id="primary-home">
                
                <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>
                
                    <?php get_template_part( '/template-parts/content', 'page' ); ?>

                <?php endwhile; else : ?>

                    <?php get_template_part( '/template-parts/content', 'none' ); ?>

                <?php endif; ?>           
        </div>
            <small>front-page.php</small>
        </section>
    </main>
    
    <?php get_footer(); ?>