<section class="team-section">
    <h2><?php _e('Our Team', 'esgi'); ?></h2>
    <div class="team-members-container">
        <?php
        $team = esgi_get_team();
        foreach ($team as $index => $member) {
            if ($member['photo'] || $member['email'] || $member['name'] || $member['position'] || $member['number']) {
                ?>
                <div class="team-member">
                    <?php if ($member['photo']) { ?>
                        <img src="<?php echo esc_url($member['photo']); ?>" alt="<?php echo esc_attr($member['name']); ?>">
                    <?php } ?>
                    <?php if ($member['position']) { ?>
                        <h4><?php echo esc_html($member['position']); ?></h4>
                    <?php } ?>
                    <?php if ($member['number']) { ?>
                        <p><?php echo esc_html($member['number']); ?><br/>
                    <?php } ?>
                    <?php if ($member['email']) { ?>
                        <?php echo esc_html($member['email']); ?></p>
                    <?php } ?>

                </div>
                <?php
            }
        }
        ?>
    </div>
</section>
