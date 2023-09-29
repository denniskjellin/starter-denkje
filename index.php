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
      // Get the previous page URL
      $previous_page_url = wp_get_referer();

      if ($previous_page_url) {
        // Get the title of the previous page
        $previous_page_title = get_the_title(url_to_postid($previous_page_url));
        
        if ($previous_page_title) { ?>
    <div class="metabox metabox-position-up metabox-with-home-link">
        <p>
            <a class="metabox-blog-home-link" href="<?php echo esc_url($previous_page_url); ?>">
                Return to <?php echo esc_html($previous_page_title); ?>
                <span class="bi bi-arrow-left" aria-hidden="true"></span> <!-- Add your Bootstrap icon here -->
            </a>
            <span class="metabox-main"><?php the_title(); ?></span>
        </p>
    </div>
    <?php }
      }
    ?>
</div>

<div class="container pt-4">
    <div id="primary" class="content-area">
        <main id="main" class="site-main row" role="main">
            <div class="col-md-12">
                <?php the_content(); ?>
                <p>index.php</p>
            </div>
        </main>
    </div>
</div>

<?php get_footer();