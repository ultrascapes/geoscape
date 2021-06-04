<div class="sans-top-bar lyt-cont-grid-all">
    <div class="lyt-col sans-top-menus-cont">
        <div class="top-left-menu-cont">
            <nav class="sans-top-left-menu" role="navigation">
                <?php 
                    $args = [
                        'theme_location' => 'top-menu'
                        ];
                    wp_nav_menu( $args ); 
                ?>
            </nav>
        </div>
        <div class="sans-main-menu sans-menu-no-js">
            <span id="sans-menu-toggle">Menu</span>
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