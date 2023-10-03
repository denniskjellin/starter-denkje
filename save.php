<aside id="custom-post-sidebar">
    <h2>Search</h2>
    <?php get_search_form(); ?>

    <h2>News Posts</h2>
    <ul>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            'post_type' => 'post',
            'category_name' => 'news', // Replace 'news' with your actual category slug
            'posts_per_page' => 2, // Adjust the number of posts to display per page
            'paged' => $paged,
        );

        $news_posts = new WP_Query($args);

        if ($news_posts->have_posts()) :
            while ($news_posts->have_posts()) : $news_posts->the_post();
        ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php
            endwhile;

            // Add pagination links
            echo '<div class="pagination">';
            echo paginate_links(array(
                'total' => $news_posts->max_num_pages,
                'current' => max(1, $paged),
            ));
            echo '</div>';
        endif;

        // Restore the global post object
        wp_reset_postdata();
        ?>
    </ul>
</aside>