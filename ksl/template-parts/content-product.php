
<div class="container">
    <!-- Example row of columns -->
    <div class="row service_section">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'ASC'
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            $featured_img_url = get_the_post_thumbnail_url();
            ?>
            <div class="col-md-4">
                <img src="<?php echo $featured_img_url ?>" alt="Image" />
                <h5><?php the_title(); ?></h5>                    
                <p><?php the_excerpt(); ?></p>
                <p><a class="btn btn-danger" href="<?php echo the_permalink(); ?>" role="button">Click Here</a></p>
            </div>

        <?php endwhile; ?>

    </div>
</div> <!-- /container -->

<div class="row review">
    <div class="container  text-center ">
        <div class="col-md-4"><h1>982345</h1><p>Click</p></div>
        <div class="col-md-4"><h1>231515</h1><p>Review</p></div>
        <div class="col-md-4"><h1>325648</h1><p>Impression</p></div>

    </div>
</div>

<div class="row latest_product">
    <div class="container">

        <h3 class="text-center">OUR LATEST PRODUCT</h3>
        <p class="text-center">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada </p>


        <div class="image_gallery row col-sm-12">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                $featured_img_url = get_the_post_thumbnail_url();
                ?>
                
                <div class="col-sm-4"> 
                    <a href="<?php echo the_permalink(); ?>">
                    <img src="<?php echo $featured_img_url; ?>" class="img-responsive" width="100%" height="280" />
                    <h5><?php echo the_title(); ?></h5>
                    </a>
                </div>

            <?php endwhile; ?>

        </div>

        <div class="divider text-center">

            <img src="http://sajedaiub.com/Development/ksl/demo/wp-content/themes/custom/images/divider.jpg" class="img-responsive">

        </div>

    </div>

</div>


