<?php

/**
 * The template for displaying a single page
 *
 * @author Dennis Kjellin
 * @package Starter Denkje
 */

get_header(); 

/* Get the pager banner image if there is one */
if (get_field('page_banner_background_image')) 
{
pageBanner();
}
?>

<div class="container pt-5">
    <div id="primary" class="content-area">
        <main id="main" class="site-main row" role="main">
            <div class="col-md-12">
                <?php 
                /* Conditional check, if there is no page banner */
                    if (!get_field('page_banner_background_image')) 
                    {
                        ?>
                <h1><?php the_title(); ?></h1>
                <?php
                    }
                        ?>
                <?php the_content(); ?>
            </div>
        </main>
    </div>
</div>

<?php get_footer();