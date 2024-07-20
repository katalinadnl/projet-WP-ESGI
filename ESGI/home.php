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

            // Custom query to fetch blog posts limited to 6
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => 6,
                'paged' => $paged
            );
            $custom_query = new WP_Query($args);

            if ($custom_query->have_posts()) : ?>
                <div class="articles">
                    <?php
                    while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
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
                // Custom Pagination
                $big = 999999999; // need an unlikely integer
                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $custom_query->max_num_pages,
                    'prev_text' =>"",
                    'next_text' =>"",
                    'class' => 'custom-pagination'
                ));
                wp_reset_postdata(); // Reset the global $post object
            else :
                echo '<p>Aucun article trouvé.</p>';
            endif;
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
