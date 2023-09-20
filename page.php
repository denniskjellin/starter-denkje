<?php

/**
 * The template for displaying all pages
 *
 * @author Dennis Kjellin
 * @package StarterTheme
 */

get_header(); ?>

<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main row" role="main">
            <div class="col-md-12">
                <h1>Powered by page<?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </main>
    </div>
</div>

<?php get_footer();
