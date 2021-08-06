<?php get_header(); ?>
    
<?php 
    $page_header_image = get_theme_mod('page_background');
?>

    <main class="sans-bkgd-pg" id="primary">
        <div class="sans-pg-head-img-default" style="background: url('<?php echo($page_header_image);?>')">
            <div class="sans-pg-head-content-default lyt-cont-grid-all">
                <div class="lyt-col center">
                    <h1>Posts</h1>
                </div>
            </div>
        </div>     
        <div class="lyt-cont-grid-all lyt-pad-vert-med" id="main" role="main">
            <section class="lyt-col sans-article-cards">
            <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( '/template-parts/content', 'posts' ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( '/template-parts/content', 'none' ); ?>

            <?php endif; ?>
            </section>
            <div class="lyt-col lyt-pad-vert-med">
                <?php echo paginate_links(); ?>
            </div>
            </div>
        <small>home.php</small> 
    </main>
    
<?php get_footer(); ?>