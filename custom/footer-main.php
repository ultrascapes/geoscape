
    <footer>
        <div class="sans-footer-nav-bar">
            <div class="lyt-cont-grid-all">
                <nav class="lyt-col lyt-pad-vert-sm main-navigation" role="navigation">
                        <?php 
                            $args = [
                                        'theme_location' => 'footer-main-menu'
                                    ];
                            wp_nav_menu( $args ); 
                        ?>
                </nav>
            </div>
        </div>
        <div class="lyt-cont-grid-tablet">
                <div class="lyt-cont-cols-3 lyt-pad-vert-med">
                    <div class="lyt-col-1 sans-flx-col sans-alg-it-ctr">
                    <?php 
                        if ( is_active_sidebar( 'footer-1' ) ) {
                                dynamic_sidebar( 'footer-1' );
                        }
                    ?>
                    </div>
                    <div class="lyt-col-2 sans-flx-col sans-alg-it-ctr">
                    <?php 
                        if ( is_active_sidebar( 'footer-2' ) ) {
                                dynamic_sidebar( 'footer-2' );
                        }
                    ?>                        
                    </div>
                    <div class="lyt-col-3 sans-flx-col sans-alg-it-ctr">
                    <?php 
                        if ( is_active_sidebar( 'footer-3' ) ) {
                                dynamic_sidebar( 'footer-3' );
                        }
                    ?>                        
                    </div>
                </div>
            </div>  
            <div class="sans-footer-bottom lyt-cont-grid-all"> 
                <div class="footer-copyright lyt-col">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?></div>
            </div>
        </footer>