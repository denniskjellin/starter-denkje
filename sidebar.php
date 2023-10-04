<aside class="sidebar">
    <h3>Categories</h3>
    <ul>
        <?php
        // List categories
        wp_list_categories(array(
            'title_li' => '',
        ));
        ?>
    </ul>

    <h3>Archive</h3>
    <ul>
        <?php
        // List archive months
        wp_get_archives(array(
            'type' => 'monthly',
            'show_post_count' => true,
        ));
        ?>
    </ul>

    <h3>Recent Posts</h3>
    <ul>
        <?php
        // List recent posts
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5, // Adjust the number of recent posts to display
        );

        $recent_posts = new WP_Query($args);

        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) : $recent_posts->the_post();
        ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php
            endwhile;
            wp_reset_postdata(); // Restore the global post object
        else :
            // No recent posts found
            echo '<li>No recent posts found.</li>';
        endif;
        ?>
    </ul>
</aside>