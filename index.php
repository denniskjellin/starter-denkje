<?php
/**
 * The template for displaying a page
 * @package Starter Denkje
 */

get_header();

/* Get the pager banner image if there is one */
pageBanner();
?>

<div class="container">
    <?php
    // Get the previous page URL
    $previous_page_url = wp_get_referer();

    if ($previous_page_url) {
        // Get the title of the previous page
        $previous_page_title = get_the_title(url_to_postid($previous_page_url));

        if ($previous_page_title) { ?>
    <div class="metabox metabox-position-up metabox-with-home-link">
        <p>
            <a class="metabox-blog-home-link" href="<?php echo esc_url($previous_page_url); ?>">
                Return to <?php echo esc_html($previous_page_title); ?>
                <span class="bi bi-arrow-left" aria-hidden="true"></span> <!-- Add your Bootstrap icon here -->
            </a>
            <span class="metabox-main"><?php the_title(); ?></span>
        </p>
    </div>
    <?php }
    }
    ?>
</div>

<div class="container pt-4">
    <main id="main" class="site-main" role="main">
        <section>
            <div class="row">
                <article class="col-md-8">
                    <?php
                        // Define a custom query to retrieve posts
                        $custom_query = new WP_Query(array(
                            'post_type' => 'post', // You can change this to another post type if needed
                            'posts_per_page' => -1 // Display all posts
                        ));

                        if ($custom_query->have_posts()) :
                            while ($custom_query->have_posts()) : $custom_query->the_post();
                        ?>

                    <article class="post-content">
                        <h2 class="post-title"><?php the_title(); ?></h2>
                        <?php 
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium');
                                }
                                 the_excerpt();
                            ?>
                        <a role="button" href="<?php the_permalink(); ?>" class="btn btn-readmore">Read more</a>
                    </article>
                    <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            echo 'No posts found';
                        endif;
                        ?>
                </article>
                <div class="col-md-4">
                    <!-- Sidebar content -->
                    <h2>Sidebar</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad corporis quae quasi nesciunt sed libero, expedita repellat hic
                        quis adipisci deleniti quas voluptatibus voluptas dolor facere, odio earum, quod ipsam.
                        Voluptatum esse ipsum officia nemo veritatis fugiat veniam molestiae, obcaecati atque fuga maxime qui, est nihil voluptate
                        at
                        nulla dolores doloremque, dolor incidunt exercitationem beatae corporis. Earum veritatis sapiente minus.</p>
                </div>
            </div><!-- .row -->
        </section><!-- .container -->
    </main>
</div>

<?php get_footer(); ?>