 
        <div class="sans-pg-fold-r2 sans-header-image sans-100vh"
            <?php if ( get_header_image() && false) : ?>
                style="background-image: url('<?php header_image(); ?>');"
            <?php endif; ?>
            >
            <?php
                    $video_poster = get_theme_mod('home_header_poster');
                    $video_id = get_theme_mod('home_header_video');
                    $video_url = wp_get_attachment_url($video_id);
                ?>
               
                <video id="home-video-header" poster="<?php echo($video_poster); ?>" autoplay muted loop>
                    <source src="<?php echo($video_url); ?>" type="video/mp4">
                </video>
              
            <div class="sans-background-tint">
                <header id="masthead" role="banner">
                    <?php get_template_part( '/template-parts/header', 'nav' ); ?>
                    <div class="sans-top-brand-home lyt-cont-grid-all">
                        <div class="lyt-col">
                            <?php
                                if ( function_exists( 'the_custom_logo' ) ) {
                                            the_custom_logo();
                                }
                            ?>
                        </div>
                    </div>
                </header>
            </div>
            <div class="lyt-cont-grid-all" id="home-site-intro">
                <div class="lyt-col site-name"><h1><?php bloginfo( 'name' ); ?></h1></div>
                <div class="lyt-col site-desc"><?php bloginfo( 'description' ); ?></div>  
                <a class="lyt-col" id="learn-more" href="#home-main">Learn More</a>
            </div>
        </div>