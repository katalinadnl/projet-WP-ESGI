<?php
get_header(); ?>
<main id="main-content" class="home">
    <div class="content-area">
        <?php
        if (is_home() && !is_front_page()) {
            $home_page_id = get_option('page_for_posts');
            echo '<h1 class="page-title">' . get_the_title($home_page_id) . '</h1>';
            $home_page = get_post($home_page_id);
            if ($home_page) {
                echo '<div class="page-content">' . apply_filters('the_content', $home_page->post_content) . '</div>';
            }
        }
        ?>
        <div class="site-main">
            <?php
            if (get_theme_mod('has_sidebar')) {
                get_sidebar();
            }

            // Custom query to fetch blog posts
            if (have_posts()) : ?>
                <div class="articles">
                    <?php
                    while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumbnail', ['class' => 'featured-image']);
                                }
                                the_title('<h4 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h4>');
                                ?>
                            </header><!-- .entry-header -->
                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                            </div><!-- .entry-content -->
                        </article><!-- #post-## -->
                    <?php endwhile; ?>
                </div>
                <?php
                // Pagination
                the_posts_pagination(array(
                    'prev_text' => '',
                    'next_text' => '',
                    'before_page_number' => '',
                    'after_page_number' => '',
                    'screen_reader_text' => __('Pagination'),
                ));
            else :
                echo '<p>Aucun article trouvé.</p>';
            endif;
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
