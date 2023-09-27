<?php

/**
 * The template for displaying all pages
 *
 * @author Dennis Kjellin
 * @package StarterTheme
 */

get_header(); 

/* Get the hero image if there is one */
if (get_field('hero_image', 'option')) 
{
    heroImage();
}
?>

<div class="container">
    <div id="primary" class="content-area pt-5">
        <main id="main" class="site-main row" role="main">
            <div class="col-md-12">
                <?php 
                    if (!get_field('hero_image', 'option')) {
                        ?>
                <h1><?php the_title(); ?></h1>
                <?php
                    } else {
                        ?>
                <h2><?php the_title(); ?></h2>
                <?php
                    }
                ?>
                <?php the_content(); ?>
            </div>
        </main>
    </div>
</div>

<?php get_footer();