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
    <main id="main">
        <?php the_content(); ?>
    </main>
</div>
</div>

<?php get_footer(); ?>