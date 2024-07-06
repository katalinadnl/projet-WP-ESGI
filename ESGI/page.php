<?php get_header(); ?>

<main>
<h1>Main</h1>
<p>Page</p>
<?php

if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
    endwhile;
endif;

?>

</main>

<?php get_footer(); ?>
