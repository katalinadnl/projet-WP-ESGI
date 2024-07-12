<?php get_header(); ?>

<main>
    <h1><?php the_title(); ?></h1>

    <div class="featured-image">
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail();
            }
        ?>
    </div>

    <div class="information-section">

        <?php
            $page_description = get_post_meta(get_the_ID(), '_custom_page_description', true);
            $page_slogan = get_post_meta(get_the_ID(), '_custom_page_slogan', true);
            if ($page_description || $page_slogan) : ?>
                <div class="page-description">
                    <?php if ($page_slogan) : ?>
                        <h2><?php echo esc_html($page_slogan); ?></h2>
                    <?php endif; ?>
                    <?php if ($page_description) : ?>
                        <p><?php echo esc_html($page_description); ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
    </div>

        <?php
        $information_title1 = get_post_meta(get_the_ID(), '_information_title1', true);
        $information_content1 = get_post_meta(get_the_ID(), '_information_content1', true);
        $information_title2 = get_post_meta(get_the_ID(), '_information_title2', true);
        $information_content2 = get_post_meta(get_the_ID(), '_information_content2', true);
        $information_title3 = get_post_meta(get_the_ID(), '_information_title3', true);
        $information_content3 = get_post_meta(get_the_ID(), '_information_content3', true);
        $information_photo = get_post_meta(get_the_ID(), '_information_photo', true);
        ?>
        <div class="section-custom">
            <?php if ($information_photo) : ?>
                <img src="<?php echo esc_url($information_photo); ?>" alt="<?php _e('Information Photo', 'textdomain'); ?>" style="max-width: 100%; height: auto;" />
            <?php endif; ?>
            <div class="custom-informations">
                <?php if ($information_title1 || $information_content1) : ?>
                    <div class="information-section">
                        <?php if ($information_title1) : ?>
                            <h3><?php echo esc_html($information_title1); ?></h3>
                        <?php endif; ?>
                        <?php if ($information_content1) : ?>
                            <p><?php echo esc_html($information_content1); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ($information_title2 || $information_content2) : ?>
                    <div class="information-section">
                        <?php if ($information_title2) : ?>
                            <h3><?php echo esc_html($information_title2); ?></h3>
                        <?php endif; ?>
                        <?php if ($information_content2) : ?>
                            <p><?php echo esc_html($information_content2); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ($information_title3 || $information_content3) : ?>
                    <div class="information-section">
                        <?php if ($information_title3) : ?>
                            <h3><?php echo esc_html($information_title3); ?></h3>
                        <?php endif; ?>
                        <?php if ($information_content3) : ?>
                            <p><?php echo esc_html($information_content3); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php get_template_part('template-parts/team-members'); ?>
</main>
<?php get_footer(); ?>
