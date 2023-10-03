<?php

/**
* Template Name: News Page
 *
 * @author Dennis Kjellin
 */
get_header();



?>
<div class="container pt-5">
    <main id="main" class="site-main row" role="main">
        <div class="col-12">
            <h1>Powered by page-news<?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </main>
</div>

<?php get_footer(); ?>