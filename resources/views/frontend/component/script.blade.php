<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->

<!-- /nav -->
<script src="/assets/frontend/js/modernizr-2.6.2.min.js"></script>
<script src="/assets/frontend/js/classie.js"></script>
<script src="/assets/frontend/js/demo1.js"></script>
<!-- //nav -->
<!-- cart-js -->
<script src="/assets/frontend/js/minicart.js"></script>

<!-- //cart-js -->
<!--search-bar-->
<script src="/assets/frontend/js/search.js"></script>
<!--//search-bar-->
<script src="/assets/frontend/js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 1000,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
<!-- js for portfolio lightbox -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/assets/frontend/js/move-top.js"></script>
<script type="text/javascript" src="/assets/frontend/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smoth-scrolling -->

<script type="text/javascript" src="/assets/frontend/js/bootstrap-3.1.1.min.js"></script>

