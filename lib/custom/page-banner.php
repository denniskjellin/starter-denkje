<?php
add_image_size('pageBanner', 1500, 450, true);

// Page Banner
function pageBanner() {
    $pageBannerImage = get_field('page_banner_background_image');
    if (!$pageBannerImage) {
        $pageBannerImage = get_field('page_banner_background_image', 1);
        }

    ?>
<!-- page banner -->
<div class="page-banner">
    <div class="page-banner-bg-image" style="background-image: url(<?php echo $pageBannerImage['sizes']['pageBanner'] ?>);">
    </div>
    <div class="page-banner-intro">
        <div class="container">
            <h1><?php the_field('page_banner_title') ?></h1>
            <p><?php the_field('page_banner_subtitle') ?></p>
        </div>
    </div>
</div>
<!-- end of page banner -->
<?php
}