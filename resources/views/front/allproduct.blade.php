<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ass/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ass/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ass/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ass/ico/favicon.png">
    <title>SN</title>
    <!-- Bootstrap core CSS -->
    <link href="ass/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- styles needed by swiper slider -->
    <link href="ass/plugins/swiper-master/css/swiper.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="ass/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="ass/js/pace.min.js"></script>
    <!-- add theme styles for this template -->
    <link id="pagestyle" rel="stylesheet" type="text/css" href="ass/css/skin-1.css">


    <link rel="stylesheet" href="ass/styles/reset.min.css" />
    <link rel="stylesheet" href="ass/styles/style.css" />
    <link rel="stylesheet" href="ass/styles/header-1.css" />
</head>

<body>
<header class="site-header">
      <div class="wrapper site-header__wrapper">
      <a href="{{route('home')}}"><img src="images/logo.png" alt="#" /></a>
        <nav class="nav">
          <button class="nav__toggle" aria-expanded="false" type="button">
            menu
          </button>
          <ul class="nav__wrapper">
            <li class="nav__item"><a href="{{route('home')}}">Home</a></li>
            <li class="nav__item"><a href="#contact">Contact</a></li>
            <li class="nav__item"><a href="#" >Cart</a></li>
            <li class="nav__item"><a href="{{route('login')}}">login</a></li>
          </ul>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 
</div>
        </nav>
      </div>
    </header>
    <script src="js/header-1.js"></script>


    <script type="text/javascript">
        function swapStyleSheet(sheet) {
            document.getElementById('pagestyle').setAttribute('href', sheet);
        }
    </script>











      
    <!--/.banner style1-->




    <div class="container main-container">

        <!-- Main component call to action -->

        <div class="morePost row featuredPostContainer style2 globalPaddingTop ">
            <h3 class="section-title style2 text-center"><span>ALL PRODUCT</span></h3>
            
            <div class="container">
            <?php $i=0 ?>
          @foreach ($test as $value)
                <div class="row xsResponse">
                
                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    
                        <div class="product">
                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="{{($value->image)}}" alt="img"
                                                                class="img-responsive" style=" width:250px;height:300px;"></a>

                                <div class="promotion"><span class="new-product"> NEW</div>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">{{$value->name}}</a></h4>

                                <p>{{$value->about}}</p>
                                
                            <div class="price"><span>{{$value->price}}৳</span> <span class="old-price"></span></div>
                            <div class="action-control"><a href="#" class="btn btn-primary"> <span class="add2cart"><i
                                class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>
                   
                    <!--/.item-->
                    
                </div> @endforeach
                <!-- /.row -->

                
            </div>
            <!--/.container-->
        </div>

    </div>
    


    <div class="modal fade" id="productSetailsModalAjax" tabindex="-1" role="dialog" aria-labelledby="productSetailsModalAjaxLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- End Modal -->



    <!-- Le javascript
================================================== -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="ass/js/jquery/jquery-1.10.1.min.js"></script>
    <script src="ass/bootstrap/js/bootstrap.min.js"></script>
    <script src="ass/plugins/swiper-master/js/swiper.jquery.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            nextButton: '.nextControl',
            prevButton: '.prevControl',
            keyboardControl: true,
            paginationClickable: true,
            slidesPerView: 'auto',
            autoResize: true,
            resizeReInit: true,
            spaceBetween: 0,
            freeMode: true
        });
    </script>

    <!-- include jqueryCycle plugin -->
    <script src="ass/js/jquery.cycle2.min.js"></script>

    <!-- include easing plugin -->
    <script src="ass/js/jquery.easing.1.3.js"></script>

    <!-- include  parallax plugin -->
    <script type="text/javascript" src="ass/js/jquery.parallax-1.1.js"></script>

    <!-- optionally include helper plugins -->
    <script type="text/javascript" src="ass/js/helper-plugins/jquery.mousewheel.min.js"></script>

    <!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

    <script type="text/javascript" src="ass/js/jquery.mCustomScrollbar.js"></script>

    <!-- include icheck plugin // customized checkboxes and radio buttons   -->
    <script type="text/javascript" src="ass/plugins/icheck-1.x/icheck.min.js"></script>

    <!-- include grid.js // for equal Div height  -->
    <script src="ass/plugins/jquery-match-height-master/dist/jquery.matchHeight-min.js"></script>
    <script src="ass/js/grids.js"></script>

    <!-- include carousel slider plugin  -->
    <script src="ass/js/owl.carousel.min.js"></script>

    <!-- jQuery select2 // custom select   -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    <!-- include touchspin.js // touch friendly input spinner component   -->
    <script src="assets/js/bootstrap.touchspin.js"></script>

    <!-- include custom script for only homepage  -->
    <script src="ass/js/home.js"></script>

    <!-- include custom script for site  -->
    <script src="ass/js/script.js"></script>
    <!-- Product Details Modal  -->
    <!-- Modal -->
    
</body>

</html>