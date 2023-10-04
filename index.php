<?php
/**
 * The template for displaying a page
 * @package Starter Denkje
 */

get_header();

/* Get the pager banner image if there is one */
pageBanner();
metabox();
?>




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
                    <?php get_sidebar('news'); ?>
                </div>
            </div><!-- .row -->
        </section><!-- .container -->
    </main>
</div>

<?php get_footer(); ?>