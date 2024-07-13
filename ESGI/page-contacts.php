<?php
/* Template Name: Contacts */
 get_header(); ?>

<main id="main-content" class="contact">

    <!-- title -->
    <h1><?php the_title(); ?></h1>

    <!-- featured image -->
    <div class="featured-image">
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail();
        } ?>
    </div>
    <?php
    the_content();
    ?>
</main>
<?php get_footer(); ?>
