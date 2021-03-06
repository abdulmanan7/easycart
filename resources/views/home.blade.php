<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>E-commerece</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootsnav.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/my_style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnifier.css')}}">


    <style>
        
    </style>
    
  </head>
  <body>
    <!-- Start Navigation -->
    <nav class="navbar navbar-default bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">            
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge">3</span>
                        </a>
                        <ul class="dropdown-menu cart-list">
                            <li>
                                <a href="#" class="photo"><img src="assets/images/thumb/thumb01.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Delica omtantur </a></h6>
                                <p>2x - <span class="price">$99.99</span></p>
                            </li>
                            <li>
                                <a href="#" class="photo"><img src="assets/images/thumb/thumb02.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Omnes ocurreret</a></h6>
                                <p>1x - <span class="price">$33.33</span></p>
                            </li>
                            <li>
                                <a href="#" class="photo"><img src="assets/images/thumb/thumb03.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Agam facilisis</a></h6>
                                <p>2x - <span class="price">$99.99</span></p>
                            </li>
                            <li class="total">
                                <span class="pull-right"><strong>Total</strong>: $0.00</span>
                                <a href="#" class="btn btn-default btn-cart">Cart</a>
                            </li>
                        </ul>
                    </li>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#brand"><img src="assets/images/brand/logo-black.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Megamenu</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu One</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu Two</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu Three</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                        </div>
                                    </div>    
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Title Menu Four</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                                <li><a href="#">Custom Menu</a></li>
                                            </ul>
                                            
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Dropdowns</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sub Menu</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sub Menu</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>   

        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <div class="widget">
                <h6 class="title">Custom Pages</h6>
                <ul class="link">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="widget">
                <h6 class="title">Additional Links</h6>
                <ul class="link">
                    <li><a href="#">Retina Homepage</a></li>
                    <li><a href="#">New Page Examples</a></li>
                    <li><a href="#">Parallax Sections</a></li>
                    <li><a href="#">Shortcode Central</a></li>
                    <li><a href="#">Ultimate Font Collection</a></li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->

    <div class="clearfix"></div>
        <div class="col-md-3 sidebar"><br>
            <ul class="cart-list">
                <li>
                    <a href="#" class="photo"><img src="assets/images/thumb/thumb01.jpg" class="cart-thumb" alt="" /></a>
                    <h6><a href="#">Delica omtantur </a></h6>
                    <p>2x - <span class="price">$99.99</span></p>
                </li>
                <li>
                    <a href="#" class="photo"><img src="assets/images/thumb/thumb02.jpg" class="cart-thumb" alt="" /></a>
                    <h6><a href="#">Omnes ocurreret</a></h6>
                    <p>1x - <span class="price">$33.33</span></p>
                </li>
                <li>
                    <a href="#" class="photo"><img src="assets/images/thumb/thumb03.jpg" class="cart-thumb" alt="" /></a>
                    <h6><a href="#">Agam facilisis</a></h6>
                    <p>2x - <span class="price">$99.99</span></p>
                </li>
                <li class="total">
                    <span class="pull-right"><strong>Total</strong>: $0.00</span>
                    <button class="btn btn-success">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Checkout
                    </button>
                </li>
            </ul>
        </div>

     <!-- Start Content -->
    <div class="section">
        <div class="container">
            <div class="row scroll">
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail img-holder">
                  <img src="assets/images/products/cam-gogls.jpg" alt="...">
                  <span class="img-label">$5000</span>
                  <div class="caption">
                    <h5>Thumbnail label</h5>
                    <p>Lorem ipsum dolor sit amet</p>
                        <p>
                            <button class="btn btn-danger no-radius" id="add_to_cart">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i> Cart
                            </button>
                            <a data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-default btn-bg">
                                <i class="fa fa-info-circle" aria-hidden="true"></i> Details
                            </a>
                        </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail img-holder">
                  <img src="assets/images/products/cam.jpg" alt="...">
                  <span class="img-label">$5000</span>

                  <div class="caption">
                    <h5>Thumbnail label</h5>
                    <p>Lorem ipsum dolor sit amet</p>
                    <p>
                        <button class="btn btn-danger no-radius">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i> Cart
                        </button>
                        <a href="#" class="btn btn-default btn-bg" role="button">
                            <i class="fa fa-info-circle" aria-hidden="true"></i> Details
                        </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail img-holder">
                  <img src="assets/images/products/pars.jpg" alt="...">
                  <span class="img-label">$5000</span>

                  <div class="caption">
                    <h5>Thumbnail label</h5>
                    <p>Lorem ipsum dolor sit amet</p>
                    <p>
                        <button class="btn btn-danger no-radius">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i> Cart
                        </button>
                        <a href="#" class="btn btn-default btn-bg" role="button">
                            <i class="fa fa-info-circle" aria-hidden="true"></i> Details
                        </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail img-holder">
                  <img src="assets/images/products/mbile.jpg" alt="...">
                  <span class="img-label">$5000</span>

                  <div class="caption">
                    <h5>Thumbnail label</h5>
                    <p>Lorem ipsum dolor sit amet</p>
                    <p>
                        <button class="btn btn-danger no-radius">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i> Cart
                        </button>
                        <a href="#" class="btn btn-default btn-bg" role="button">
                            <i class="fa fa-info-circle" aria-hidden="true"></i> Details
                        </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail img-holder">
                  <img src="assets/images/products/nice-shit.jpg" alt="...">
                  <span class="img-label">$5000</span>

                  <div class="caption">
                    <h5>Thumbnail label</h5>
                    <p>Lorem ipsum dolor sit amet</p>
                    <p>
                        <button class="btn btn-danger no-radius">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i> Cart
                        </button>
                        <a href="#" class="btn btn-default btn-bg" role="button">
                            <i class="fa fa-info-circle" aria-hidden="true"></i> Details
                        </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail img-holder">
                  <img src="assets/images/products/shirt.jpg" alt="...">
                  <span class="img-label">$5000</span>

                  <div class="caption">
                    <h5>Thumbnail label</h5>
                    <p>Lorem ipsum dolor sit amet</p>
                    <p>
                        <button class="btn btn-danger no-radius">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i> Cart
                        </button>
                        <a href="#" class="btn btn-default btn-bg" role="button">
                            <i class="fa fa-info-circle" aria-hidden="true"></i> Details
                        </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>    
    </div>
    <!-- End Content -->


<!-- Modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Product Details</h3>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-4" style="margin-left: 20px">
                <a class="magnifier-thumb-wrapper" href="assets/images/products/cam-gogls.jpg">
                    <img id="thumb" src="assets/images/products/cam-gogls.jpg"
                    data-large-img-url="assets/images/products/cam-gogls.jpg"
                    data-large-img-wrapper="preview">
                </a>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <div class="magnifier-preview" id="preview" style="width: 100%; height:215px">
                   <h5>Delica omtantur</h5>
                    <h6>Rs/ 1900</h6>
                    <h6>Product Code : bg 2</h6>
                    <h6>Availability : 1000</h6>
                    <p>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        0 reviews / Write a review
                    </p>
                    <div class="row">
                        <div class="col-xs-2"">
                            <h5><b>Qty</b></h5>
                        </div>
                        <div class="col-xs-4">
                          <input type="number" class="form-control input-sm">
                        </div>
                        <div class="col-xs-4">
                          <button class="btn btn-danger no-radius">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i> Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <ul class="nav nav-tabs nav-justified">
          <li role="presentation" class="active"><a href="#">Reviews</a></li>
          <li role="presentation"><a href="#">Description</a></li>
          <li role="presentation"><a href="#">Related Products</a></li>
        </ul>
      </div>
    </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Bootsnavs -->
    <script src="assets/js/bootsnav.js"></script>

    <!-- Image Zoomer -->
    <script type="text/javascript" src="assets/js/Event.js"></script>
    <script type="text/javascript" src="assets/js/Magnifier.js"></script>

<script type="text/javascript">
jQuery(document).ready(function() 
{
    $("body").on("mouseover","#thumb",function(event) {

    /* Act on the event */
    var evt = new Event(),
    m = new Magnifier(evt);
    m.attach({
    thumb: '#thumb',
    large: 'assets/images/products/cam-gogls.jpg',
    largeWrapper: 'preview'
    });
    m.attach({thumb: '#thumb'});
    });
    
});

</script>
  </body>
</html>

<script>
    jQuery(document).ready(function() 
    {
        $("body").on('click', '#add_to_cart', function(event) {
            event.preventDefault();
            /* Act on the event */
            var cart = $("#add_to_cart").parents();
            console.log(cart);
        });   
    });
</script>