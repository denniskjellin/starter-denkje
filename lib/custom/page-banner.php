<?php
add_image_size('pageBanner', 1500, 450, true);

// Page Banner
function pageBanner() {
    // Check if this is the posts page
    if (is_home()) {
        $pageTitle = get_the_title(get_option('page_for_posts')); // Get the title set for the posts page
    } else {
        $pageTitle = get_the_title(); // Get the title for regular pages
    }

    $pageBannerImage = get_field('page_banner_background_image');

    // Check if the page_banner_background_image field is empty or not set
    if (!$pageBannerImage) {
        // Provide a hardcoded fallback image path
        $pageBannerImage = get_theme_file_uri('/images/alpdawn.jpg');
    } else if (array($pageBannerImage) && !empty($pageBannerImage['sizes']['pageBanner'])) {
        // Get the image URL from the ACF field
        $pageBannerImage = $pageBannerImage['sizes']['pageBanner'];
    }

    ?>
<!-- page banner -->
<div class="page-banner">
    <div class="page-banner-bg-image" style="background-image: url(<?php echo esc_url($pageBannerImage); ?>);">
    </div>
    <div class="page-banner-intro">
        <div class="container">
            <h1 class="h1"><?php echo esc_html($pageTitle); ?></h1>
            <p><?php the_field('page_banner_subtitle') ?></p>
        </div>
    </div>
</div>
<!-- end of page banner -->
<?php
}