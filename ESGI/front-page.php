<?php
get_header(); ?>

<main id="main-content">

    <h1><?php the_title(); ?></h1>

    <div class="featured-image">
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail();
        } ?>
    </div>

    <?php get_template_part('template-parts/custom-about-us'); ?>

    <?php if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>


    <?php get_template_part('template-parts/partners'); ?>


</main>

<?php get_footer(); ?>
