<?php

/**
 * The template for displaying a single page
 *
 * @author Dennis Kjellin
 * @package StarterTheme
 */

get_header(); ?>

<div class="container pt-5">
    <div id="primary" class="content-area">
        <main id="main" class="site-main row" role="main">
            <div class="col-md-12">
                <h1>Powered by single<?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </main>
    </div>
</div>

<?php get_footer();