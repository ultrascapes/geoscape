<div class="sans-top-bar lyt-cont-grid-all">
    <div class="lyt-cont-cols-2">
        <div class="lyt-col-1">
            <nav class="sans-top-menu" role="navigation">
                <?php 
                    $args = [
                        'theme_location' => 'top-menu'
                        ];
                    wp_nav_menu( $args ); 
                ?>
            </nav>
        </div>
        <div class="lyt-col-2 sans-main-menu">
            <span onclick="OpenMenu();" id="sans-menu-toggle" class="dashicons dashicons-menu-alt3"></span>
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