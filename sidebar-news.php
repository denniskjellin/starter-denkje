<aside class="news-sidebar">
    <h3>News sidebar</h3>
    <?php
    // Define the custom query to get news posts
    $args = array(
        'post_type' => 'post', 
        'posts_per_page' => 10, 
    );

    // Save the main query object
    $temp_query = $wp_query;

    // Create a custom query
    $custom_query = new WP_Query($args);

    // Loop through the news posts
    if ($custom_query->have_posts()) :
    ?>
    <ul>
        <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <?php endwhile; ?>
    </ul>


    <div class="archive-list">
        <h4>Archives</h4>
        <ul>
            <?php
            // Create a list of monthly archives
            wp_get_archives(array(
                'type' => 'monthly',
            ));
            ?>
        </ul>
    </div>


    <?php endif;

    // Restore the main query
    $wp_query = $temp_query;
    wp_reset_postdata();
    ?>

</aside>