</div>
</div>
<footer class="site-footer" role="contentinfo">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <!-- <h5 class="text-uppercase">Footer Content</h5> -->
                <h2 class="text-uppercase h5">
                    <?php echo the_field('heading', 'options') ?>
                </h2>
                <p>
                    <?php echo the_field('content', 'options') ?>
                </p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h3 class="text-uppercase h5">
                    <?php echo the_field('link_title', 'options'); ?></h3>
                <ul class="list-unstyled">
                    <?php
                    if (have_rows('link_item', 'options')) :
                        while (have_rows('link_item', 'options')) : the_row();
                            $list_item_url = get_sub_field('link_item_url', 'options');
                            $list_item_title = get_sub_field('link_item_title', 'options');
                    ?>
                    <li>
                        <a class="text-black-50 text-decoration-none"
                            href="<?php echo $list_item_url; ?>"><?php echo $list_item_title; ?></a>
                    </li>
                    <?php
                        endwhile;
                    endif;
                    ?>

                    <!-- <li>
                        <a href="#!" class="text-black-50 text-decoration-none">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-black-50 text-decoration-none">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-black-50 text-decoration-none">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-black-50 text-decoration-none">Link 1</a>
                    </li> -->
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5>Contact</h5>
                <ul class="list-unstyled mb-0">

                </ul>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
</footer>
</body>

</html>