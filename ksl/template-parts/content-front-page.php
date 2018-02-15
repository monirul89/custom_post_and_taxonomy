
<div class="container">
    <!-- Example row of columns -->
    <div class="row service_section">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'ASC'
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            $featured_img_url = get_the_post_thumbnail_url();
            ?>
            <div class="col-md-4">
                <h5><?php the_title(); ?></h5>                    
                <p><?php the_excerpt(); ?></p>
                <p><a class="btn btn-danger" href="<?php echo the_permalink(); ?>" role="button">Click Here</a></p>
            </div>

        <?php endwhile; ?>

        <?php
        $args = array(
            'post_type' => 'servise',
            'posts_per_page' => 1
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            $featured_img_url = get_the_post_thumbnail_url();
            ?>
            <div class="col-md-4">
                <h5><?php the_title(); ?></h5>                    
                <p><?php the_excerpt(); ?></p>
                <p><a class="btn btn-danger" href="<?php echo the_permalink(); ?>" role="button">Click Here</a></p>
            </div>
        <?php endwhile; ?>
        <?php
        $args = array(
            'post_type' => 'strenth',
            'posts_per_page' => 1
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            $featured_img_url = get_the_post_thumbnail_url();
            ?>
            <div class="col-md-4">
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
                'posts_per_page' => 6
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                $featured_img_url = get_the_post_thumbnail_url();
                ?>
                
                <div class="col-sm-4"> 
                    <a href="<?php echo the_permalink(); ?>">
                    <img src="<?php echo $featured_img_url; ?>" class="img-responsive" width="100%" height="280" />
                   
                    </a>
                </div>

            <?php endwhile; ?>

        </div>

        <div class="divider text-center">

            <img src="http://sajedaiub.com/Development/ksl/demo/wp-content/themes/custom/images/divider.jpg" class="img-responsive">

        </div>

    </div>

</div>
<div class="contact_us">
        <div class="jumbotron jumbotron-sm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <h1 class="h1">
                            Contact us <small>Feel free to contact us</small></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="well well-sm">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email Address</label>
                                        <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">
                                            Subject</label>
                                        <select id="subject" name="subject" class="form-control" required="required">
                                            <option value="na" selected="">Choose One:</option>
                                            <option value="service">General Customer Service</option>
                                            <option value="suggestions">Suggestions</option>
                                            <option value="product">Product Support</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                                  placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn  btn_color pull-right" id="btnContactUs">
                                        Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <form>
                        <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                        <address>
                           
                          Road # 3, House # 257, 4th Floor, <br/>Baridhara DOHS, Dhaka 1206 <br/>Bangladesh.<br/>
                            <abbr title="Phone">
                                P:</abbr>
                            +88 (02) 8412814, 8415531,<br/>8413158 
                        </address>
                        <address>
                            <strong>Full Name</strong><br>
                            <a href="mailto:#">iftekhar@kleidersourcing.com </a>
                        </address>
                    </form>
                </div>
            </div>
        </div>

</div>
<div id="map" style="width:100%;height:400px;"></div>
<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(23.7991419, 90.4007376),
    zoom: 16,
    mapTypeId: google.maps.MapTypeId.ROADMAP
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTcdS2no0z_MolE6BqdHQoGug2bHqFo9I&callback=myMap"></script>
