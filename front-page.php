    <?php get_header('home'); ?>
    <main id="home-main" role="main" class="OFFsans-pg-fold-r2">
        <section class="sans-row-bg-1">
            <div class="sans-cont sans-grd-cont sans-bg-blocks">
                <?php
                if ( is_active_sidebar( 'home-one' ) ) {
                    $widgets .= dynamic_sidebar( 'home-one' );
                }
                if ( is_active_sidebar( 'home-two' ) ) {
                    $widgets .= dynamic_sidebar( 'home-two' );
                }
                if ( is_active_sidebar( 'home-three' ) ) {
                    $widgets .= dynamic_sidebar( 'home-three' );
                }
                ?>
            </div>
        </section>
        <section id="home-section-two">
            <div class="sans-cont">
                <?php
                    $content = geoscape_announcements();
                    echo($content);
                ?>
            </div>
        </section>
        <section id="home-section-one" class="sans-pg-fold-r1">
            <div class="sans-cont">
                <h2>Section Title</h2>
                <p>Section content goes here</p>
            </div>
        </section>
        <section id="home-section-three" class="sans-bkgd-pg">
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