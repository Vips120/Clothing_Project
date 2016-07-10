<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>The Clothing Pallete</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
       <link href="css/index.css" rel="stylesheet">
       <link href="css/ihover.min.css" rel="stylesheet">
       <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <!--header-->
    <div class="header">
        <div class="container">
        <div class="row" align="center">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <h1>
                <a href="index.php">
                The Clothing
                    <span>
                        Pallete
                    </span>
                </a>
              </h1>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                	<div class="cart box_1">
						<a href="checkout.html">
						<h3>
						<div class="total">
							<span class="simpleCart_total">0.00</span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
					</div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs3">
                   <div class="help">
                	<span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
					<p>Call me</p>
                </div>
				</div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                   <div class="search">
                	<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
                </div>
            </div>
            </div>
            </div>
        </div>
        </div>
    </div>
   <!--end header-->
    <!-----navbar-->
   <div class="navbar navbar-default" role="navigation" >
     <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
             <span class="sr-only">Navigation Toggle</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"></a>
        </div>
        <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
           <li><a href="#">Home</a></li>
           <li><a href="#">About Us</a></li>
			<li class="dropdown mega-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Collection <span class="glyphicon glyphicon-chevron-down pull-center"></span></a>

				<ul class="dropdown-menu mega-dropdown-menu row">
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">New in Stores</li>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="images/Ittehad-Textiles-Spring-Summer-Lawn-2015-by-HSY-1440x564_c.jpg" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>
                                    <button class="btn btn-primary" type="button">Rs 2000</button> <button href="#" class="btn btn-primary" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="images/punjabi_suit.jpg" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Punjabi Suit</small></h4>
                                    <button class="btn btn-primary" type="button">Rs9,99 </button> <button href="#" class="btn btn-primary" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="images/punjabi_suits-1.jpg" class="img-responsive" alt="product 3"></a>
                                    <h4><small></small></h4>
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-primary" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                </div><!-- End Item -->
                              </div><!-- End Carousel Inner -->
                            </div><!-- /.carousel -->
                          <li class="divider"></li>
                    <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
				<li class="dropdown-header">Dresses</li>
				<li><a href="#">Punjabi Dress Material</a></li>
				<li><a href="#">Cotton Dress Material</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Kurtis</li>
							<li><a href="#">Designer Kurtis</a></li>
							<li><a href="#">Embroidery Kurtis</a></li>
							<li><a href="#">Printed Kurtis</a></li>
							<li><a href="#">Long Kurtas</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
					<!--
						<ul>

							<li class="dropdown-header">Accessories</li>
							<li><a href="#">Default Navbar</a></li>
							<li><a href="#">Lovely Fonts</a></li>
							<li><a href="#">Responsive Dropdown </a></li>
							<li class="divider"></li>
                            <li class="dropdown-header">Newsletter</li>
                            <form class="form" role="form">
                              <div class="form-group">
                                <label class="sr-only" for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                              </div>
                              <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </form>
						</ul>
-->
					</li>
                </ul>
</li>
			<li><a href="#">Jewellery</a></li>
			<li><a href="#">Sign In</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
        </div>
     </div>
   </div>

   <!--banner-->

   <div class="banner">
   	<div class="matter-banner">
   	 	<div class="slider">
   	    	<div class="callbacks_container">
   	      		<ul class="rslides" id="slider">
   	        		<li>
   	          			<img src="images/bg_slider/1.jpg" alt="">
   						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
   							<h2>MEN & WOMEN</h2>
   							<h3>Trousers & Chinos</h3>
   							<h4>UPTO 50%</h4>
   							<p>OFFER</p>
   						</div>
   	       			 </li>
   			 		 <li>
   	          			<img src="images/bg_slider/3.jpg" alt="">
   						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
   							<h2>Pakistani & Kurtas </h2>
   							<h3>Trousers & Chinos</h3>
   							<h4>UPTO 50%</h4>
   							<p>OFFER</p>
   						</div>
   	       			 </li>
   					 <li>
   	          			<img src="images/bg_slider/2.jpg" alt="">
   						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
   							<h2>Lehanga & Choli</h2>
   							<h3>Trousers & Chinos</h3>
   							<h4>UPTO 50%</h4>
   							<p>OFFER</p>
   						</div>
   	        		</li>
   	      		</ul>
   	 	 	</div>
   		</div>
   	</div>
  </div>
   	<div class="clearfix"> </div>
   <!--//banner-->

  <!--=======Content===============-->
     <div class="asset">
    <div class="container">
     <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 " align="center">
      <div class="kurti">
     <a href="#">
    <img src="images/pi2.png" class="img-responsive">
       </a>
       <h3><a href="#">Kurtas</a></h3>
        <div class="price">
        <h5 class="item-price">Rs 1200</h5>
        <a href="#" class="btn  btn-primary btn-md"><h5>Add To Cart</h5></a>
              <div class="clearfix"></div>
        </div>
      </div>
    </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
         <div class="kurti">
       <a href="#">
      <img src="images/pi3.png" class="img-responsive">
         </a>
         <h3><a href="#">Kurtas</a></h3>
          <div class="price">
          <h5 class="item-price">Rs 1200</h5>
          <a href="#" class="btn  btn-primary btn-md"><h5>Add To Cart</h5></a>
          </div>
        </div>
      </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
            <div class="kurti">
         <a href="#">
        <img src="images/pi4.png" class="img-responsive">
           </a>
           <h3><a href="#">Kurtas</a></h3>
            <div class="price">
            <h5 class="item-price">Rs 1200</h5>
            <a href="#" class="btn  btn-primary btn-md"><h5>Add To Cart</h5></a>
            </div>
          </div>
        </div>
      </div>

      <div class=" asset1 row">
     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 " align="center">
       <div class="kurti">
      <a href="#">
     <img src="images/pi2.png" class="img-responsive">
        </a>
        <h3><a href="#">Kurtas</a></h3>
         <div class="price">
         <h5 class="item-price">Rs 1200</h5>
         <a href="#" class="btn  btn-primary btn-md"><h5>Add To Cart</h5></a>
               <div class="clearfix"></div>
         </div>
       </div>
     </div>
       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
          <div class="kurti">
        <a href="#">
       <img src="images/pi3.png" class="img-responsive">
          </a>
          <h3><a href="#">Kurtas</a></h3>
           <div class="price">
           <h5 class="item-price">Rs 1200</h5>
           <a href="#" class="btn  btn-primary btn-md"><h5>Add To Cart</h5></a>
           </div>
         </div>
       </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
             <div class="kurti">
          <a href="#">
         <img src="images/pi4.png" class="img-responsive">
            </a>
            <h3><a href="#">Kurtas</a></h3>
             <div class="price">
             <h5 class="item-price">Rs 1200</h5>
             <a href="#" class="btn  btn-primary btn-md"><h5>Add To Cart</h5></a>
             </div>
           </div>
         </div>
       </div>
    </div>
      </div>


      <!-- From top and bottom-->
      <div class="menus">
      <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <!-- normal -->
          <div class="ih-item square effect6 from_top_and_bottom"><a href="#">
              <div class="img"><img src="images/6.jpg" alt="img"></div>
              <div class="info">
                <h3>Heading here</h3>
                <p>Description goes here</p>
              </div></a></div>
          <!-- end normal -->
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <!-- colored -->
          <div class="ih-item square colored effect6 from_top_and_bottom"><a href="#">
              <div class="img"><img src="images/9.jpg" alt="img"></div>
              <div class="info">
                <h3>Heading here</h3>
                <p>Description goes here</p>
              </div></a></div>
          <!-- end colored -->
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <!-- normal -->
          <div class="ih-item square effect6 from_left_and_right"><a href="#">
              <div class="img"><img src="images/10.jpg" alt="img"></div>
              <div class="info">
                <h3>Heading here</h3>
                <p>Description goes here</p>
              </div></a></div>
          <!-- end normal -->
        </div>
      </div>
      <!-- end From top and bottom-->
      <!-- From left and right-->
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

          <!-- colored -->
          <div class="ih-item square colored effect6 from_left_and_right"><a href="#">
              <div class="img"><img src="images/12.jpg" alt="img"></div>
              <div class="info">
                <h3>Heading here</h3>
                <p>Description goes here</p>
              </div></a></div>
          <!-- end colored -->
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <!-- normal -->
          <div class="ih-item square effect6 top_to_bottom"><a href="#">
              <div class="img"><img src="images/13.jpg" alt="img"></div>
              <div class="info">
                <h3>Heading here</h3>
                <p>Description goes here</p>
              </div></a></div>
          <!-- end normal -->
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

          <!-- colored -->
          <div class="ih-item square colored effect6 top_to_bottom"><a href="#">
              <div class="img"><img src="images/14.jpg" alt="img"></div>
              <div class="info">
                <h3>Heading here</h3>
                <p>Description goes here</p>
              </div></a>
            </div>
          <!-- end colored -->
        </div>
      </div>
      <!-- end From left and right-->

      <!-- Bottom to top-->
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <!-- normal -->
          <div class="ih-item square effect6 bottom_to_top"><a href="#">
              <div class="img"><img src="images/9.jpg" alt="img"></div>
              <div class="info">
                <h3>Heading here</h3>
                <p>Description goes here</p>
              </div></a></div>
          <!-- end normal -->

        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

          <!-- colored -->
          <div class="ih-item square colored effect6 bottom_to_top"><a href="#">
              <div class="img"><img src="images/6.jpg" alt="img"></div>
              <div class="info">
                <h3>Heading here</h3>
                <p>Description goes here</p>
              </div></a></div>
          <!-- end colored -->
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <!-- normal -->
          <div class="ih-item square effect6 bottom_to_top"><a href="#">
              <div class="img"><img src="images/9.jpg" alt="img"></div>
              <div class="info">
                <h3>Heading here</h3>
                <p>Description goes here</p>
              </div></a></div>
          <!-- end normal -->

        </div>
      </div>
    </div>
  </div>
      <!-- end Bottom to top-->

      <div class="asset">
      <div class="container">
      <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 " align="center">
       <div class="kurti">
      <a href="#">
      <img src="images/pi2.png" class="img-responsive">
        </a>
        <h3><a href="#">Kurtas</a></h3>
         <div class="price">
         <h5 class="item-price">Rs 1200</h5>
         <a href="#" class="btn  btn-primary btn-md"><h5>Add To Cart</h5></a>
               <div class="clearfix"></div>
         </div>
       </div>
      </div>
       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
          <div class="kurti">
        <a href="#">
       <img src="images/pi3.png" class="img-responsive">
          </a>
          <h3><a href="#">Kurtas</a></h3>
           <div class="price">
           <h5 class="item-price">Rs 1200</h5>
           <a href="#" class="btn  btn-primary btn-md"><h5>Add To Cart</h5></a>
           </div>
         </div>
       </div>
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
             <div class="kurti">
          <a href="#">
         <img src="images/pi4.png" class="img-responsive">
            </a>
            <h3><a href="#">Kurtas</a></h3>
             <div class="price">
             <h5 class="item-price">Rs 1200</h5>
             <a href="#" class="btn  btn-primary btn-md"><h5>Add To Cart</h5></a>
             </div>
           </div>
         </div>
       </div>

       <div class=" asset1 row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 " align="center">
        <div class="kurti">
       <a href="#">
      <img src="images/pi2.png" class="img-responsive">
         </a>
         <h3><a href="#">Kurtas</a></h3>
          <div class="price">
          <h5 class="item-price">Rs 1200</h5>
          <a href="#" class="btn  btn-primary btn-md"><h5>Add To Cart</h5></a>
                <div class="clearfix"></div>
          </div>
        </div>
      </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
           <div class="kurti">
         <a href="#">
        <img src="images/pi3.png" class="img-responsive">
           </a>
           <h3><a href="#">Kurtas</a></h3>
            <div class="price">
            <h5 class="item-price">Rs 1200</h5>
            <a href="#" class="btn  btn-primary btn-md"><h5>Add To Cart</h5></a>
            </div>
          </div>
        </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
              <div class="kurti">
           <a href="#">
          <img src="images/pi4.png" class="img-responsive">
             </a>
             <h3><a href="#">Kurtas</a></h3>
              <div class="price">
              <h5 class="item-price">Rs 1200</h5>
              <a href="#" class="btn  btn-primary btn-md"><h5>Add To Cart</h5></a>
              </div>
            </div>
          </div>
        </div>
      </div>
       </div>

  <!----footer---->
  <div class="footer">
   <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <h3>Follow Us On</h3>
    <div class="social-icons">
      <ul class="social">
        <li><a href="#"><i></i></a> </li>
      <li><a href="#"><i class="facebook"></i></a></li>
      <li><a href="#"><i class="google"></i> </a></li>
      <li><a href="#"><i class="linked"></i> </a></li>
  					</ul>
     </div>
    </div>
     </div>
   </div>
 </div>
 <div class="footer_asset">
   <div class="container">
     <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
         <h3>Categories</h3>
         <ul>
       <li><a href="#">Punjabi Dress Material</a></li>
        <li><a href="#">Cotton Dress Material</a></li>
        <li><a href="#">Designer Kurtis</a></li>
        <li><a href="#">Embroidery Kurtis</a></li>
        <li><a href="#">Printed Kurtis</a></li>
        <li><a href="#">Long Kurtas</a></li>
         </ul>
       </div>
       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <h3>Feature Products</h3>
          <ul>
        <li><a href="#">Punjabi Dress Material</a></li>
         <li><a href="#">Cotton Dress Material</a></li>
         <li><a href="#">Designer Kurtis</a></li>
         <li><a href="#">Embroidery Kurtis</a></li>
         <li><a href="#">Printed Kurtis</a></li>
         <li><a href="#">Long Kurtas</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
           <h3>Top Brands</h3>
           <ul>
         <li><a href="#">Punjabi Dress Material</a></li>
          <li><a href="#">Cotton Dress Material</a></li>
          <li><a href="#">Designer Kurtis</a></li>
          <li><a href="#">Embroidery Kurtis</a></li>
          <li><a href="#">Printed Kurtis</a></li>
          <li><a href="#">Long Kurtas</a></li>
           </ul>
         </div>


         <div class="right-foot col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <h3>Our Address</h3>
            <ul>
              <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address: 12th Avenue, 5th block, <span>Sydney.</span></li>
      						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true" style="padding-left:5px;"></i>  Email :<a href="mailto:info@example.com">info@example.com</a></li>
      						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true" style="padding-left:5px;"></i>   Phone : +1234 567 567</li>
            </ul>
          </div>
    </div>
    <div class="row">
  <p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> © 2016 The Clothing Pallete. </p>
     </div>
  </div>
</div>
    </div>
  <!--end footer---->










    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
     <script>
    $(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "Previous",   // String: Text for the "previous" button
  nextText: "Next",       // String: Text for the "next" button
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});
  </script>
  </body>
</html>
