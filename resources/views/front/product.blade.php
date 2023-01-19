<div id="preloader" class="site-preloader">
    <div class="d-flex align-items-center">
        <div class="spinner-border" role="status"></div><span class="d-block ms-3 text-muted">Loading...</span>
    </div>
</div>
<!--pre-loader-->
<!--back to top-->
<a href="#"
    class="toTop btn btn-secondary me-3 mb-3 p-0 flex-center size-40 rounded-3 position-fixed end-0 bottom-0 z-index-fixed"><i
        class="fas fa-chevron-up small"></i></a>
<!--back to top end-->

<!--===========================start Featured products===========================-->


<section class="position-relative overflow-hidden">
    <div class="container py-7">
        <h2 class="text-center mb-5 display-5" data-aos="zoom-in-up" data-aos-delay="150">Products Catagory</h2>

        <div class="row">
<?php $i=0 ?>
                @foreach ($test as $value)
            <div class="col-sm-6 col-md-3">
                
                <div class="product-box">
                    <div class="product-thumb">

                        <img src="{{($value->image)}}" alt="" class="img-fluid"
                            style="margin:auto; width:240px;height:260px">
                        <div class="product-overlay">
                            <span>

                                <a class="btn btn-primary" href="{{route('catagory_product',$value->id)}}">view all product</a>
                            </span>
                        </div>
                    </div>
                    <!--/product-thumb-->
                    <div class="product-desc">

                        <h5 class="product-name" align="center"><a href="#">{{$value->name}}</a></h5>
                    </div>
                    <!--/product-desc-->

                </div>
            </div>@endforeach
            <!--/col-->

            <!--/col-->
        </div>
        <!--/row-->
        <div class="text-center pt-6">
            <a href="{{route('productlist')}}" class="btn btn-outline-secondary btn-lg">View all Products</a>
        </div>
    </div>
</section>

<!--===========================end Featured products===========================-->

<!--Common plugins-->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/theme.bundle.js"></script>

<!--page template scripts-->
<script src="assets/vendor/node_modules/js/jquery.min.js"></script>
<script src="assets/vendor/masterslider/masterslider.min.js"></script>
<script>
    (function ($) {
        "use strict";
        var slider = new MasterSlider();
        // adds Arrows navigation control to the slider.

        slider.control('timebar', {
            insertTo: '#masterslider'
        });
        slider.control('bullets');

        slider.setup('masterslider', {
            width: 1170, // slider standard width
            height: 580, // slider standard height
            space: 0,
            layout: 'fullwidth',
            loop: true,
            preload: 0,
            instantStartLayers: true,
            autoplay: true
        });
    })(jQuery);

</script>
