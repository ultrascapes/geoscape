    <footer>
            <div class="sans-cont sans-grd-cont">
                <?php
                    if ( is_active_sidebar( 'footer-top' ) ) {
                    $widgets .= dynamic_sidebar( 'footer-top' );
                    }
                ?>
            </div>
            <div class="sans-footer-middle">
                <div class="sans-cont sans-grd-cont">
                    <?php 
                        if ( is_active_sidebar( 'footer-main' ) ) {
                                dynamic_sidebar( 'footer-main' );
                        }
                    ?>
                </div>
                <nav class="sans-cont main-navigation" role="navigation">
                    <?php 
                        $args = [
                                    'theme_location' => 'footer-main-menu'
                                ];
                        wp_nav_menu( $args ); 
                    ?>
                </nav>
            </div>  
            <div class="sans-footer-bottom"> 
                <div class="footer-copyright">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?></div>
            </div>
        </footer>