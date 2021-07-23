<?php 
    $footer_image = get_theme_mod('page_background');
?>
<div class="sans-footer-top-img"
<?php if ($footer_image != "") { ?>
            style="background: url('<?php echo($footer_image);?>')"
        <?php } ?>
>
    <div class="sans-footer-top"></div>
</div>
<?php wp_footer(); ?>
<?php get_template_part( '/custom/footer', 'main' ); ?>
</body>
</html>