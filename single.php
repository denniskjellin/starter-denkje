<?php

/**
 * The template for displaying a single page
 * @author Dennis Kjellin
 * @package Starter Denkje
 */

get_header(); 

/* Get the pager banner image if there is one */
pageBanner();

?>

<div class="container pt-5">
    <div id="primary" class="content-area">
        <main id="main" class="site-main row" role="main">
            <div class="col-md-12">
                <?php 
                /* Conditional check
                If there is no page banner and no page banner title, then display the page title as an h1
                else display the page title as an h2
                */
                if ((!get_field('page_banner_title'))) 
                    {
                        ?>
                <h1 class="h1"><?php the_title(); ?></h1>
                <?php
                    } else {
                        ?>
                <h2 class="h1"><?php the_title(); ?></h2>
                <?php 
                }        
                        ?>
                <?php the_content(); ?>
            </div>
        </main>
    </div>
</div>

<?php get_footer();