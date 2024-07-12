<?php get_header(); ?>

<main>

    <!-- title -->
    <h1><?php the_title(); ?></h1>

    <!-- featured image -->
    <div class="featured-image">
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail();
        } ?>
    </div>

    <?php get_template_part('template-parts/custom-about-us'); ?>
    <?php get_template_part('template-parts/partners'); ?>

    <?php
    // Debugging output
    echo '<!-- Debug: Checking if image paths are correct -->';
    $img1 = get_template_directory_uri() . '/assets/images/svg/partner-1.svg';
    $img2 = get_template_directory_uri() . '/assets/images/svg/partner-2.svg';
    echo '<!-- Debug: img1 = ' . $img1 . ' -->';
    echo '<!-- Debug: img2 = ' . $img2 . ' -->';
    ?>

    <img src="<?php echo $img1; ?>" alt="Partner 1 Logo" class="esgi-logo"/>
    <img src="<?php echo $img2; ?>" alt="Partner 2 Logo" class="esgi-logo"/>
</main>

<?php get_footer(); ?>
