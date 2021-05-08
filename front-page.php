    <?php get_header('home'); ?>
    <main id="home-main" role="main">
        <section class="lyt-cont-grid-desktop sans-bg-blocks">
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
        <section id="announcements">
                <?php
                    $content = geoscape_announcements();
                    echo($content);
                ?>
        </section>
        <div class="sans-page-header"
        <?php if ( get_header_image()) : ?>
                style="background-image: url('<?php header_image(); ?>');"
            <?php endif; ?>
        >
        </div>
        <section id="home-section-three" class="lyt-cont-grid-desktop">
            <div class="lyt-cont-lg-1-2 sans-row-bg-1" id="primary-home">
                    <div class="lyt-col-lg lyt-pad-vert-lg">
                    <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>
                    
                        <?php get_template_part( '/template-parts/content', 'page' ); ?>

                    <?php endwhile; else : ?>

                        <?php get_template_part( '/template-parts/content', 'none' ); ?>

                    <?php endif; ?>
                    </div>
                </div>
                <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

            <div class="lyt-cont-sm-2-2 sans-home-head-img" style="background: url('<?php echo $featured_image[0]; ?>') no-repeat; ">
            </div>
        </section>
        <section class="lyt-cont-grid-desktop">
            <div id="site-outline-image" class="bg-1 lyt-cont-sm-1-2" style="background-image: url('<?php echo get_theme_mod('home_site_overview_image'); ?>');"></div>
            <div id="site-outline" class="lyt-cont-lg-2-2">
                <div class="lyt-col-lg lyt-pad-vert-sm">
                <?php
                        if ( is_active_sidebar( 'home-6' ) ) {
                            $widgets .= dynamic_sidebar( 'home-6' );
                        }
                    ?>
                    
                </div>
            </div>
        </section>

        <section class="lyt-cont-grid-desktop">
            <div id="featured-articles" class="bg-4 lyt-cont-lg-1-2">
                <div class="lyt-col-lg lyt-pad-vert-sm">
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
    </main>
       
    <?php get_footer(); ?>
                