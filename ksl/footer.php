

<div class="footer_div" style="margin-top: 0px;">
<footer>
    <div  class="row footer_section">
            <div class="container">
                    <span class="text-left"><a href="#">CONTACT US</a></span>
                    <span style="float:right;">COPYRIGHT ©2012-18, ALL RIGHTS RESERVED WITH KSL MULTINATIONAL GROUP</span>
            </div>     
    </div>

</footer>
</div>

</main>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://sajedaiub.com/Development/ksl/demo/wp-content/themes/custom/js/jquery-3.2.1.min.js"></script>
<script src="http://sajedaiub.com/Development/ksl/demo/wp-content/themes/custom/js/bootstrap.min.js"></script>


<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 4000); // Change image every 2 seconds
    }

//    $(".nav-link").click(function () {
    //        $(this).parent().addClass("active").siblings().removeClass("active");
    //    });
    //    $(".dropdown-item").click(function () {
    //        $(this).parent()..parent().addClass("active").siblings().removeClass("active");
    //    });

</script>

<?php wp_footer(); ?>

</body>
</html>
