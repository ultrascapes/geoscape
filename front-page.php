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
        <section class="lyt-cont-grid-all">
            <div class="lyt-col center">
                <h3>Image widget</h3>
            </div>
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
                <div class="lyt-col-sm">
                    <h3>Image widget</h3>
                </div>
            </div>
            <div class="bg-2 lyt-cont-lg-2-2">
                <div class="lyt-col-lg">
                    <h3>Text widget</h3>
                    <p>Website or company summary</p>
                </div>
            </div>
        </section>

        <section class="lyt-cont-grid-tablet">
            <div class="bg-4 lyt-cont-lg-1-2">
                <div class="lyt-col-lg">
                    <h3>Feature blog posts</h3>
                    <p>Display featured posts</p>
                </div>
            </div>
            <div class="bg-6 lyt-cont-sm-2-2">
                <div class="lyt-col-sm">
                <h3>Image widget</h3>
                </div>
            </div>
        </section>

        <small>front-page.php</small>
    </main>
       
    <?php // get_footer(); ?>
                