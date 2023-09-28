<?php

/**
 * The template for displaying a page
 * @author Dennis Kjellin
 * @package Starter Denkje
 */

get_header(); 

/* Get the pager banner image if there is one */
pageBanner();

?>
<div class="container">
    <?php
      $theParent = wp_get_post_parent_id(get_the_ID());
      if ($theParent) { ?>
    <div class="metabox metabox-position-up metabox-with-home-link">
        <p><a class="metabox-blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="bi bi-house-door" aria-hidden="true"></i> Back
                to
                <?php echo get_the_title($theParent); ?></a> <span class="metabox-main"><?php the_title(); ?></span></p>
    </div>
    <?php }
    ?>
</div>
<div class="container pt-4">
    <div id="primary" class="content-area">
        <main id="main" class="site-main row" role="main">
            <div class="col-md-12">
                <?php the_content(); ?>
            </div>
        </main>
    </div>
</div>

<?php get_footer();