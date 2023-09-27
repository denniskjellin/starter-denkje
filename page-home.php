<?php

/**
 * The template for displaying all pages
 *
 * @author Dennis Kjellin
 * @package StarterTheme
 */

get_header(); ?>

<!-- hero image -->
<?php
    $hero_image = get_field('hero_image', 'option');
    $hero_headline = get_field('hero_headline', 'option');
    $hero_paragraph = get_field('hero_paragraph', 'option');
    $hero_button = get_field('hero_button', 'option');
    ?>
<div class="hero-container p-0">
    <img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>" />
    <div class="hero-text">
        <h1><?php echo $hero_headline; ?></h1>
        <p><?php echo $hero_paragraph; ?></p>
        <a href="<?php echo $hero_button['hero_button_url']['url'] ;?>" class="btn btn-primary" role="button"
            aria-label="<?php echo $hero_button['hero_button_text'] ;?>"><?php echo $hero_button['hero_button_text'] ;?></a>
    </div>
</div>



<div class="container">
    <div id="primary" class="content-area pt-5">
        <main id="main" class="site-main row" role="main">
            <div class="col-md-12">
                <h1>Powered by page<?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </main>
    </div>
</div>

<?php get_footer();