<div class="sans-header-image"   
            <?php if( has_post_thumbnail() ): ?>
            <?php $img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                style="background-image: url('<?php echo($img_url); ?>');"
            <?php else : ?>
                <?php if ( get_header_image() ) : ?>
                    style="background-image: url('<?php header_image(); ?>');"
                <?php endif; ?>
            <?php endif; ?>
        >
            <div class="sans-background-tint">
                <header id="masthead" role="banner">
                    <?php get_template_part( '/template-parts/header', 'nav' ); ?>
                    <div class="sans-top-brand">
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
        </div>