<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-js">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="La Boutique HTML v1.0" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title> <?php echo $titulo;?> </title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/fonts/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="css/flexslider.css" />
        <link rel="stylesheet" type="text/css" href="css/alizarin.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
         
    </head>
 	<body>

        <div class="wrapper">

            <!-- Header -->
			<div class="header">
			    <!-- Top bar -->
			    <div class="top">
			        <div class="container">
			            <div class="row">
			                <div class="span6">
			                    <p>
			                        
			                    </p>
			                </div>
			                <div class="span6 hidden-phone">
			                    <ul class="inline pull-right">
			                        <li>
			                            <a href="login_register.php" title="Login / Register">Login / Register</a>									
			                        </li>
			                    </ul>
			                </div>
			            </div>
			        </div>
			    </div>
			    <!-- End class="top" -->

			   <!-- Logo & Search bar -->
                <div class="bottom">
                    <div class="container">
                        <div class="row">
                            <div class="span8">							
                                <div class="logo">
                                    <a href="" title="&larr; Back home">
                                        <img src="img/logo.png" alt="La Boutique" />
                                    </a>
                                </div>
                            </div>

                            <div class="span4">
                                <div class="row-fluid">
                                    <div class="span10">
                                        
                                        <!-- Search -->
                                        <div class="search">
                                            <div class="qs_s">

                                                <form method="post" action="search.html" />
                                                    <input type="text" name="query" id="query" placeholder="Search&hellip;" autocomplete="off" value="" />
                                                </form>

                                                <!-- Autocomplete results -->
                                               <!--  <div id="autocomplete-results" style="display: none;">	
                                                    <ul>
                                                        <li>
                                                            <a title="Lisette Dress" href="product.html">
                                                                <div class="image">
                                                                    <img src="img/thumbnails/db_file_img_48_60x60.jpg" alt="" />
                                                                </div>
                                                                <h6>Lisette Dress</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a title="Malta Dress" href="product.html">
                                                                <div class="image">
                                                                    <img src="img/thumbnails/db_file_img_137_60x60.jpg" alt="" />
                                                                </div>
                                                                <h6>Malta Dress</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a title="Marais Dress" href="product.html">
                                                                <div class="image">
                                                                    <img src="img/thumbnails/db_file_img_42_60x60.jpg" alt="" />
                                                                </div>
                                                                <h6>Marais Dress</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a title="Millay Dress" href="product.html">
                                                                <div class="image">
                                                                    <img src="img/thumbnails/db_file_img_107_60x60.jpg" alt="" />
                                                                </div>
                                                                <h6>Millay Dress</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a title="Momoko Dress" href="product.html">
                                                                <div class="image">
                                                                    <img src="img/thumbnails/db_file_img_132_60x60.jpg" alt="" />
                                                                </div>
                                                                <h6>Momoko Dress</h6>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                                <!-- End id="autocomplete-results" -->
                                                
                                                
                                                
                                            </div>
                                        </div>
                                        <!-- End class="search"-->
                                        
                                    </div>

                                    <div class="span2">
                                        
                                        <!-- Mini cart -->
                                        <div class="mini-cart">
                                            <a href="cart.php" title="Go to cart &rarr;">
                                                <img src="img/cart.png" alt="" />
                                                <span>3</span>
                                            </a>									
                                        </div>
                                        <!-- End class="mini-cart" -->
                                        
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- End class="bottom" -->
                
            </div>
            <!-- End class="header" --> 

                <!-- Navigation -->
                <nav class="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="span9">
                                <div class="hidden-phone">
                                    <!-- Main menu (desktop) -->
                                    <ul class="main-menu">
                                        <li>
                                            <a href="home.php" title="Home" class="title">Home</a>
                                        </li>
                                        <li>
                                            <a href="perfumes.php" title="perfumes" class="title">Perfumes</a>
                                            <ul class="span2">
                                                <li>
                                                    <a href="category.html" title="Accesories" class="title">Accesories</a>
                                                </li>
                                                <li>
                                                    <a href="category.html" title="Jackets" class="title">Jackets</a>
                                                </li>
                                                <li>
                                                    <a href="category.html" title="Jumpers" class="title">Jumpers</a>
                                                </li>
                                                <li>
                                                    <a href="category.html" title="Shirts" class="title">Shirts</a>
                                                </li>
                                                <li>
                                                    <a href="category.html" title="Shoes" class="title">Shoes</a>
                                                </li>
                                                <li>
                                                    <a href="category.html" title="T-Shirts" class="title">T-Shirts</a>
                                                </li>
                                            </ul>
                                        </li>
                                       <!--  <li>
                                            <a href="category.html" title="Womens" class="title">Womens</a>
                                            <ul class="span2">
                                                <li>
                                                    <a href="category.html" title="Accessories" class="title">Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="category.html" title="Bags" class="title">Bags</a>
                                                </li>
                                                <li>
                                                    <a href="category.html" title="Dresses" class="title">Dresses</a>
                                                </li>
                                                <li>
                                                    <a href="category.html" title="Shoes" class="title">Shoes</a>
                                                </li>
                                                <li>
                                                    <a href="category.html" title="Tops" class="title">Tops</a>
                                                </li>
                                                <li>
                                                    <a href="category.html" title="Trousers" class="title">Trousers</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" title="Features" class="title">Features</a>
                                            <ul class="span2">
                                                <li>
                                                    <a href="typography.html" title="Typography" class="title">Typography</a>
                                                </li>
                                                <li>
                                                    <a href="retina-ready-icons.html" title="Retina-ready icons" class="title">Retina-ready icons</a>
                                                </li>
                                                <li>
                                                    <a href="buttons.html" title="Buttons" class="title">Buttons</a>
                                                </li>
                                                <li>
                                                    <a href="elements.html" title="Elements" class="title">Elements</a>
                                                </li>
                                                <li>
                                                    <a href="grids.html" title="Grids" class="title">Grids</a>
                                                </li>
                                                <li>
                                                    <a href="404.html" title="404" class="title">404</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about-us.html" title="About us" class="title">About us</a>
                                        </li>
                                        <li>
                                            <a href="store-locator.html" title="Store locator" class="title">Store locator</a>
                                        </li>
                                        <li>
                                            <a href="blog.html" title="Blog" class="title">Blog</a>
                                        </li> -->
                                        <li>
                                            <a href="contact.php" title="Contact us" class="title">Contact</a>
                                        </li>					
                                    </ul>
                                    <!-- End class="main-menu" -->
                                </div>
                                <div class="visible-phone">
                                <!-- Main menu (mobile) -->
                                    <select class="mobile-nav">
                                        <option value="" selected="selected" />Go to&hellip;
                                        <option value="home.php" />Home
                                        <option value="category.html" />Mens
                                        <option value="category.html" />Accesories
                                        <option value="category.html" />Jackets
                                        <option value="category.html" />Jumpers
                                        <option value="category.html" />Shirts
                                        <option value="category.html" />Shoes
                                        <option value="category.html" />T-Shirts
                                        <option value="category.html" />Womens
                                        <option value="category.html" />Accessories
                                        <option value="category.html" />Bags
                                        <option value="category.html" />Dresses
                                        <option value="category.html" />Shoes
                                        <option value="category.html" />Tops
                                        <option value="category.html" />Trousers
                                        <option value="#" />Features
                                        <option value="typography.html" />Typography
                                        <option value="retina-ready-icons.html" />Retina-ready icons
                                        <option value="buttons.html" />Buttons
                                        <option value="elements.html" />Elements
                                        <option value="grids.html" />Grids
                                        <option value="404.html" />404
                                        <option value="about-us.html" />About us
                                        <option value="store-locator.html" />Store locator
                                        <option value="blog.html" />Blog
                                        <option value="contact-us.html" />Contact us                    
                                    </select>
                            </div>
							 </div>

                            <div class="span3 visible-desktop">
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- End class="navigation" -->