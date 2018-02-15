
<div class="container">
    <!-- Example row of columns -->
    <div class="row service_section">
        <?php
        $args = array(
            'post_type' => 'mens',
            'posts_per_page' => 10
        );
        
        $loop = new WP_Query($args);
        
        while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="col-md-4">
            <img src="<?php the_post_thumbnail_url('medium') ?>">
            <h4><?php echo the_title(); ?></h4>
            <p><a class="btn btn-danger" href="<?php echo the_permalink(); ?>" role="button">Click Here</a></p>
        
        </div>
        <?php endwhile; ?>

    </div>
</div> <!-- /container -->

