<?php

/**
 * The main template file
 *
 * @author Dennis Kjellin
 */
get_header();



?>
<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main row" role="main">
            <div class="col-12">
                <h1>Powered by index <?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </main>
    </div>
</div>

<?php get_footer(); ?>