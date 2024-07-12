<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <div class="container">
            <div class="container-header">
                <?= get_custom_logo() ?>
                <div class="open-menu">
                    <a href="#main-menu" class="open-menu-button">
                        <?= esgi_get_icon('menu'); ?>
                    </a>
                </div>
                <!-- <nav class="main-menu" id="main-menu">
                    <a href="" class="close-menu-button">x</a>
                    <?php
                    if (has_nav_menu('primary_menu')) {
                        wp_nav_menu([
                            'menu' => 'primary_menu',
                            'container' => 'nav',
                        ]);
                    }
                    ?>
                </nav> -->
            </div>
        </div>
    </header>
