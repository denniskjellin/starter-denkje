<?php

function metabox() {
    ?>
<div class="container">
    <?php
    // Get the homepage URL
    $home_page_url = home_url();

    // Get the previous page URL
    $previous_page_url = wp_get_referer();

    if ($previous_page_url) {
        // Get the title of the previous page
        $previous_page_title = get_the_title(url_to_postid($previous_page_url));

        if ($previous_page_title) { ?>
    <div class="metabox metabox-position-up metabox-with-home-link">
        <p>
            <a class="metabox-blog-home-link" href="<?php echo esc_url($home_page_url); ?>">
                Go back to home
                <!-- Change "Return to" to "Go back to home" here -->
                <span class="bi bi-arrow-left" aria-hidden="true"></span> <!-- Add your Bootstrap icon here -->
            </a>
            <span class="metabox-main"><?php the_title(); ?></span>
        </p>
    </div>
    <?php }
    }
    ?>
</div>
<?php
}