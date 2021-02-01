 
        <div class="sans-pg-fold-r2 sans-header-image sans-100vh"
            <?php if ( get_header_image() ) : ?>
                style="background-image: url('<?php header_image(); ?>');"
            <?php endif; ?>
            >
            <div class="sans-background-tint">
                <header id="masthead" role="banner">
                    <?php get_template_part( '/template-parts/header', 'nav' ); ?>
                    <div class="sans-top-brand-home">
                        <div class="sans-cont">
                            <?php
                                if ( function_exists( 'the_custom_logo' ) ) {
                                            the_custom_logo();
                                }
                            ?>
                        </div>
                    </div>
                </header>
            </div>
            <div id="home-site-intro">
                <div class="site-name sans-cont"><?php bloginfo( 'name' ); ?>
                </div>
                <div class="site-desc sans-cont"><?php bloginfo( 'description' ); ?>
                </div>   
                <a id="learn-more" href="#home-main">
                    Learn More<br>
                    <svg class="sans-tri-dwn"><use href="#sans-tri-down"></use></svg>
                </a>    
            </div>
        </div>