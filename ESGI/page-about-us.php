<?php
/* Template Name: About Us */
get_header();

?>

<main>
<?php

if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
    endwhile;
endif;

?>
    <?php
        get_template_part('template-parts/team-members');
    ?>
</main>

<?php
get_footer();
?>
