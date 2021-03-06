<div class="sans-top-bar">
                <div class="sans-cont sans-flx sans-alg-it-ctr">
                    <nav class="sans-top-menu" role="navigation">
                            <?php 
                                $args = [
                                    'theme_location' => 'top-menu'
                                ];
                            wp_nav_menu( $args ); 
                            ?>
                    </nav>
                    <div class="sans-main-menu">
                    <span onclick="OpenMenu();" id="sans-menu-toggle" class="dashicons dashicons-menu-alt3"></span>
                        <!--<svg onclick="OpenMenu();" id="sans-menu-toggle"><use href="#sans-menu-open"></use></svg>-->
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <?php 
                                $args = [
                                    'theme_location' => 'main-menu'
                                ];
                            wp_nav_menu( $args ); 
                            ?>
                        </nav>
                    </div>
                </div>
            </div>