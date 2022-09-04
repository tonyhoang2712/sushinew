<div class="setsashimi-replace">
<?php
    $args = array(
        'posts_per_page' => 5,
        'post_type' => 'product',
        'post_status'    => 'publish',
        'paged' => 1,
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'set-sashimi',
            )
        )
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) {
        $i = 0;
        while ($query->have_posts()) {
            $query->the_post();
            if($i == 4) {
                get_template_part( 'template-parts/content', 'sushisashimi-style-2' );
            } else {
                get_template_part( 'template-parts/content', 'sushisashimi-style-1' );
            }
            $i++;
        }

        $total = $query->max_num_pages;
    } else {
        // no content
    }
    wp_reset_postdata();
    ?>
    </div>
    <?php if($total > 0) { ?>
    <nav class="main-pagination setsashimi">
        <ul class="pagination">
            <li class="page-item setsashimi-page-item" index="1">
                <a class="page-link page-previuos" href="javascript:void(0)">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/next.png" class="previous">
                </a>
            </li>

            <?php for($i = 0; $i < $total; $i++) { ?>
            <li class="page-item setsashimi-page-item setsashimi-page-item-<?php echo $i + 1 ?> <?php if($i==0) {echo "active";} ?>"
                index="<?php echo $i + 1 ?>">
                <a class="page-link" href="javascript:void(0)"><?php echo $i+1 ?></a></li>
            <?php } ?>

            <li class="page-item setsashimi-page-item" 
            index="<?php echo $total ?>">
            <a class="page-link page-next" href="javascript:void(0)">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/next.png" class="next"></a>
            </li>
        </ul>
    </nav>
<?php } ?>

