<?php

// Hero Image
function heroImage() {
    $hero_image = get_field('hero_image', 'option');
    $hero_headline = get_field('hero_headline', 'option');
    $hero_paragraph = get_field('hero_paragraph', 'option');
    $hero_button = get_field('hero_button', 'option');
    ?>
<div class="hero-container">
    <div class="hero-bg-image" style="background-image: url(<?php echo esc_url($hero_image['url']); ?>)">
        <div class="hero-intro-wraper">
            <h1><?php echo $hero_headline; ?></h1>
            <p><?php echo $hero_paragraph; ?></p>
            <a href="<?php echo $hero_button['hero_button_url']['url'] ;?>" class="hero-btn"
                role="button"><?php echo $hero_button['hero_button_text'] ;?></a>
        </div>
    </div>
</div>
<?php
}