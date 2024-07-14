<footer id="site-footer">
    <div class="container">
        <div class="container-footer">
            <a href="/">
                <?= esgi_get_icon('logo'); ?>
            </a>
            <div class="contact-footer">
                <?php
                $team = esgi_get_team();

                // Sort the team members
                usort($team, function($a, $b) {
                    $order = ['Manager' => 1, 'CEO' => 2];
                    return $order[$a['position']] <=> $order[$b['position']];
                });

                foreach ($team as $member):
                    if ($member['position'] == 'Manager' || $member['position'] == 'CEO'):
                        ?>
                        <div class="contact-footer-item">
                            <h5 class="contact-title"><?php echo esc_html($member['position']); ?></h5>
                            <p><?php echo esc_html($member['number']); ?></p>
                            <p><a href="mailto:<?php echo esc_html($member['email']); ?>"><?php echo esc_html($member['email']); ?></a></p>
                        </div>
                    <?php
                    endif;
                endforeach;
                ?>
            </div>
        </div>
        <div class="container-footer-footer">
            <div class="legal">
                © <?= date('Y') ?> Figma Template by ESGI
            </div>
            <div class="rs">
                <ul>
                    <li>
                        <a href="#">
                            <?= esgi_get_icon('linkedin'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <?= esgi_get_icon('facebook'); ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>
</html>
