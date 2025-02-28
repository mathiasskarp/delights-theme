<?php get_header(); ?>

<main>
    <?php 
    // Inkludera våra block. Blocken placeras i mappen template-parts nedan.
    get_template_part( 'template-parts/hero' );
    get_template_part( 'template-parts/om-oss' );
    get_template_part( 'template-parts/food-images' );
    ?>
</main>

<?php get_footer(); ?>