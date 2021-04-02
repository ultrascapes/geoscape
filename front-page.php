    <?php get_header('home'); ?>
    <main id="home-main" role="main" class="OFFsans-pg-fold-r2">
        <section class="Offsans-row-bg-1 lyt-cont-grid-desktop sans-bg-blocks">
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
        </section>
        <section id="offhome-section-two">
            <div class="offsans-cont">
                <?php
                    $content = geoscape_announcements();
                    echo($content);
                ?>
            </div>
        </section>
        <section>
                <?php
                if ( is_active_sidebar( 'home-4' ) ) {
                    $widgets .= dynamic_sidebar( 'home-4' );
                }
                ?>
        </section>
        <section id="home-section-three" class="lyt-cont-grid-tablet">
            <div class="lyt-cont-lg-1-2 sans-row-bg-1" id="primary-home">
                    <div class="lyt-col-lg">
                    <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>
                    
                        <?php get_template_part( '/template-parts/content', 'page' ); ?>

                    <?php endwhile; else : ?>

                        <?php get_template_part( '/template-parts/content', 'none' ); ?>

                    <?php endif; ?>
                    </div>
                </div>
                <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

            <div class="lyt-cont-sm-2-2" style="background: url('<?php echo $featured_image[0]; ?>') no-repeat; ">
            </div>
        </section>
        <section class="lyt-cont-grid-tablet">
            <div class="bg-1 lyt-cont-sm-1-2">
                    <?php
                        if ( is_active_sidebar( 'home-5' ) ) {
                            $widgets .= dynamic_sidebar( 'home-5' );
                        }
                    ?>
            </div>
            <div class="bg-2 lyt-cont-lg-2-2">
                <div class="lyt-col-lg">
                <?php
                        if ( is_active_sidebar( 'home-6' ) ) {
                            $widgets .= dynamic_sidebar( 'home-6' );
                        }
                    ?>
                </div>
            </div>
        </section>

        <section class="lyt-cont-grid-tablet">
            <div class="bg-4 lyt-cont-lg-1-2">
                <div class="lyt-col-lg">
                    <?php
                        $content = geoscape_featured();
                        echo($content);
                    ?>
                </div>
            </div>
            <div class="bg-6 lyt-cont-sm-2-2">
                    <?php
                        if ( is_active_sidebar( 'home-7' ) ) {
                            $widgets .= dynamic_sidebar( 'home-7' );
                        }
                    ?>
            </div>
        </section>

        <small>front-page.php</small>
    </main>
       
    <?php // get_footer(); ?>
                