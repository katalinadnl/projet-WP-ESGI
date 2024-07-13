<section class="contact-section">
    <h2><?php _e('Contacts', 'esgi'); ?></h2>
    <div class="contact-container">
        <?php
        $location = esgi_get_location();
        if ($location[0]['street'] || $location[0]['code']) {
            ?>
            <div class="location">
                <?php if ($location[0]['street']) { ?>
                    <p><?php echo esc_html($location[0]['street']); ?></p>
                <?php } ?>
                <?php if ($location[0]['code']) { ?>
                    <p><?php echo esc_html($location[0]['code']); ?></p>
                <?php } ?>
            </div>
            <?php
        }

        $team = esgi_get_team();
        foreach ($team as $index => $member) {
            if (($index == 3 || $index == 4) && ($member['email'] || $member['name'] || $member['position'] || $member['number'])) {
                ?>
                <div class="team-member">
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
