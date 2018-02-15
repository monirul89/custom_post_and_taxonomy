<div class="slider">
    <div class="slideshow-container">
        <?php
        $args = array(
            'post_type' => 'slider',
            'posts_per_page' => 3
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            $featured_img_url = get_the_post_thumbnail_url();
            ?>
            <div class="mySlides ">
                <div class="numbertext">1 / 3</div>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

        <?php endwhile; ?>

<!--        <div class="mySlides ">
            <div class="numbertext">1 / 3</div>
            <img src="http://sajedaiub.com/Development/ksl/demo/wp-content/themes/custom/images/1.jpg" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides ">
            <div class="numbertext">2 / 3</div>
            <img src="http://sajedaiub.com/Development/ksl/demo/wp-content/themes/custom/images/4.jpg" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides ">
            <div class="numbertext">3 / 3</div>
            <img src="http://sajedaiub.com/Development/ksl/demo/wp-content/themes/custom/images/2.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>-->

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</div>
