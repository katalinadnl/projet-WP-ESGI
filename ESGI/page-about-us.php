<?php get_header(); ?>

<div class="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
    <?php endwhile; endif; ?>

    <?php
    $information_title1 = get_post_meta(get_the_ID(), '_information_title1', true);
    $information_content1 = get_post_meta(get_the_ID(), '_information_content1', true);
    $information_title2 = get_post_meta(get_the_ID(), '_information_title2', true);
    $information_content2 = get_post_meta(get_the_ID(), '_information_content2', true);
    $information_title3 = get_post_meta(get_the_ID(), '_information_title3', true);
    $information_content3 = get_post_meta(get_the_ID(), '_information_content3', true);
    ?>

    <div class="custom-sections">
        <?php if ($information_title1 || $information_content1) : ?>
            <div class="information-section">
                <?php if ($information_title1) : ?>
                    <h2><?php echo esc_html($information_title1); ?></h2>
                <?php endif; ?>
                <?php if ($information_content1) : ?>
                    <p><?php echo esc_html($information_content1); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($information_title2 || $information_content2) : ?>
            <div class="information-section">
                <?php if ($information_title2) : ?>
                    <h2><?php echo esc_html($information_title2); ?></h2>
                <?php endif; ?>
                <?php if ($information_content2) : ?>
                    <p><?php echo esc_html($information_content2); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($information_title3 || $information_content3) : ?>
            <div class="information-section">
                <?php if ($information_title3) : ?>
                    <h2><?php echo esc_html($information_title3); ?></h2>
                <?php endif; ?>
                <?php if ($information_content3) : ?>
                    <p><?php echo esc_html($information_content3); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
