</div>
</div>
<footer class="site-footer" role="contentinfo">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h2>
                    <?php echo the_field('heading', 'options') ?>
                </h2>
                <p>
                    <?php echo the_field('content', 'options') ?>
                </p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h3>
                    <?php echo the_field('link_title', 'options'); ?></h3>
                <ul>
                    <?php
                    if (have_rows('link_item', 'options')) :
                        while (have_rows('link_item', 'options')) : the_row();
                            $list_item_url = get_sub_field('link_item_url', 'options');
                            $list_item_title = get_sub_field('link_item_title', 'options');
                    ?>
                    <li>
                        <a href="<?php echo $list_item_url; ?>"><?php echo $list_item_title; ?></a>
                    </li>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3><?php echo the_field('link_title_secondary', 'options'); ?></h3>
                <ul>
                    <?php
                    if (have_rows('link_item_secondary', 'options')) :
                        while (have_rows('link_item_secondary', 'options')) : the_row();
                            $list_item_url_secondary = get_sub_field('link_item_secondary_url', 'options');
                            $list_item_title_secondary = get_sub_field('link_item_secondary_title', 'options');
                            
                    ?>
                    <li>
                        <a href="<?php echo $list_item_url_secondary; ?>"><?php echo $list_item_title_secondary; ?></a>
                    </li>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
</footer>
</body>

</html>