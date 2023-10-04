<?php

/**
 * The template for displaying a page
 * @author Dennis Kjellin
 * @package Starter Denkje
 */

get_header(); 

/* Get the pager banner image if there is one */
pageBanner();
metabox();
?>


<div class="container pt-4">
    <main id="main" class="site-main row" role="main">
        <div class="col-md-12">
            <?php the_content(); ?>
        </div>
    </main>
</div>

<?php get_footer();