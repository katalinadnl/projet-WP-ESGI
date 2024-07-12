<section class="partners-section">
    <h2><?php _e('Our Partners', 'esgi'); ?></h2>
    <div class="partners-container">
        <?php
        $partners = esgi_get_partners();
        foreach ($partners as $index => $partner) {
            if ($partner['photo']) {
                ?>
                <div class="team-◊">
                    <?php if ($partner['photo']) { ?>
                        <img src="<?php echo esc_url($partner['photo']); ?>">
                    <?php } ?>
                </div>
                <?php
            }
        }
        ?>
    </div>
</section>
