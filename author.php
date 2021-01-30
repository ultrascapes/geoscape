<?php get_header(); ?>
    
    <div class="sans-bkgd-pg" id="primary">
        <main id="main" role="main" class="sans-cont">
            <div>
                <h1><?php the_archive_title(); ?></h1>
                <p>
                    <?php echo the_author_meta( '', $post->post_author ) ?>
                </p>
            </div>
            <?php if ( have_posts()  ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( '/template-parts/content', 'posts' ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( '/template-parts/content', 'none' ); ?>

            <?php endif; ?>

            <?php echo paginate_links(); ?>        
        </main>    
    </div>

    <small>author.php</small>
<?php get_footer(); ?>