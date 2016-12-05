<!DOCTYPE html>

<html>
    <head>

        <title></title>

        <!-- Metas -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Links -->
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrap/css/bootstrap-social.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>

        <!-- Js -->
        <script src="../js/jquery-1.12.3.min.js" type="text/javascript"></script>
        <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                            $(this).toggleClass('open');
                        }
                );
            });

            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide"
                });
            });

        </script>


    </head>
    <body>

        <header> 
            <div id="barra_superior" class="container"> 
                <div class="row">                   
                    <div class="col-md-8 col-sm-6 text-right">
                        <ul class="nav nav-pills navbar-right">
                            <li role="presentation"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Localiza tu tienda</a></li>
                            <li role="presentation"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>Contacto</a></li>
                            <li role="presentation"><a href="#"><i class="fa fa-lock" aria-hidden="true"></i>Mi cuenta</a></li>
                        </ul>

                    </div>                     
                </div>
            </div>

            <div id="barra_logo" class="container"> 
                <div class="row">
                    <div class="col-md-2 col-xs-12">
                        <img class="img-responsive" src="../images/logoVet.png" alt=""/>
                    </div>   
                    <div class="col-md-4">
                        
                        <form id="search_mini_form" class="input-group">
                            <input id="search" type="text" name="q" value="" placeholder="Buscar..." class="form-control" maxlength="250" />
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </form>
                    </div>              
                    <div class="col-md-2 col-xs-12">
                        <div class="dropdown text-right" style="margin-top: 0.5em">
                            <div>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                Atn. y venta                                                 
                                <p>915 123 134 </p> 
                            </div>  
                        </div>
                    </div>    
                    <div class="col-md-2 col-xs-12">
                        <div class="dropdown text-right" style="margin-top: 0.5em">
                            <div>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                Envío Gratis                                               
                                <p>desde 39€</p> 
                            </div>  
                        </div>
                    </div> 
                    <div class="col-md-2 col-xs-12">
                        <div class="dropdown text-right" style="margin-top: 0.5em">
                            <button class="btn btn-primary dropdown-menu-right" type="button" data-toggle="dropdown">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> s/.0.00
                                <span class="caret"></span></button>
                            
                        </div>
                    </div> 
                </div>
            </div>

        </header>

        <nav>
            <div class="container">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">My Store</a>
                    </div>

                    <div class="collapse navbar-collapse js-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <span class="caret"></span></a>				
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Men Collection</li>                            
                                            <div id="menCollection" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                                        <h4><small>Summer dress floral prints</small></h4>                                        
                                                        <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                                    </div><!-- End Item -->
                                                    <div class="item">
                                                        <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                                        <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                                        <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                                    </div><!-- End Item -->
                                                    <div class="item">
                                                        <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                                        <h4><small>Denin jacket stamped</small></h4>                                        
                                                        <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                                    </div><!-- End Item -->                                
                                                </div><!-- End Carousel Inner -->
                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div><!-- /.carousel -->
                                            <li class="divider"></li>
                                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Features</li>
                                            <li><a href="#">Auto Carousel</a></li>
                                            <li><a href="#">Carousel Control</a></li>
                                            <li><a href="#">Left & Right Navigation</a></li>
                                            <li><a href="#">Four Columns Grid</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Fonts</li>
                                            <li><a href="#">Glyphicon</a></li>
                                            <li><a href="#">Google Fonts</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Plus</li>
                                            <li><a href="#">Navbar Inverse</a></li>
                                            <li><a href="#">Pull Right Elements</a></li>
                                            <li><a href="#">Coloured Headers</a></li>                            
                                            <li><a href="#">Primary Buttons & Default</a></li>							
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Much more</li>
                                            <li><a href="#">Easy to Customize</a></li>
                                            <li><a href="#">Calls to action</a></li>
                                            <li><a href="#">Custom Fonts</a></li>
                                            <li><a href="#">Slide down on Hover</a></li>                         
                                        </ul>
                                    </li>
                                </ul>				
                            </li>
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <span class="caret"></span></a>				
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Features</li>
                                            <li><a href="#">Auto Carousel</a></li>
                                            <li><a href="#">Carousel Control</a></li>
                                            <li><a href="#">Left & Right Navigation</a></li>
                                            <li><a href="#">Four Columns Grid</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Fonts</li>
                                            <li><a href="#">Glyphicon</a></li>
                                            <li><a href="#">Google Fonts</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Plus</li>
                                            <li><a href="#">Navbar Inverse</a></li>
                                            <li><a href="#">Pull Right Elements</a></li>
                                            <li><a href="#">Coloured Headers</a></li>                            
                                            <li><a href="#">Primary Buttons & Default</a></li>							
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Much more</li>
                                            <li><a href="#">Easy to Customize</a></li>
                                            <li><a href="#">Calls to action</a></li>
                                            <li><a href="#">Custom Fonts</a></li>
                                            <li><a href="#">Slide down on Hover</a></li>                         
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Women Collection</li>                            
                                            <div id="womenCollection" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                                        <h4><small>Summer dress floral prints</small></h4>                                        
                                                        <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                                    </div><!-- End Item -->
                                                    <div class="item">
                                                        <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                                        <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                                        <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                                    </div><!-- End Item -->
                                                    <div class="item">
                                                        <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                                        <h4><small>Denin jacket stamped</small></h4>                                        
                                                        <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                                    </div><!-- End Item -->                                
                                                </div><!-- End Carousel Inner -->
                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div><!-- /.carousel -->
                                            <li class="divider"></li>
                                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                                        </ul>
                                    </li>
                                </ul>				
                            </li>
                            <li><a href="#">Store locator</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">My cart (0) items</a></li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </nav>
            </div>
        </nav>

        <div id="main" class="container">
            <div id="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="../images/slider/slider1.jpg" />
                        </li>
                        <li>
                            <img src="../images/slider/slider2.jpg" />
                        </li>
                        <li>
                            <img src="../images/slider/slider3.jpg" />
                        </li>
                        <li>
                            <img src="../images/slider/slider4.jpg" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="col-md-9" style="padding: 0">
                <div id="nuevos_productos">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="../images/productos/AMD A4-5300 DUAL CORE 3.40GHZ.jpg" alt="...">
                                <div class="caption">
                                    <h3>AMD A4-5300</h3>
                                    <p>S/. 450.00</p>
                                    <p><a href="#" class="btn btn-primary" role="button">Detalles</a> 
                                        <a href="#" class="btn btn-default" role="button">Añadir</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="../images/productos/ASROCK H61M-VS S_V_R DDR3 LGA 1155.jpg" alt="...">
                                <div class="caption">
                                    <h3>AMD A4-5300</h3>
                                    <p>S/. 450.00</p>
                                    <p><a href="#" class="btn btn-primary" role="button">Detalles</a> 
                                        <a href="#" class="btn btn-default" role="button">Añadir</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="../images/productos/ASROCK H61M-VS S_V_R DDR3 LGA 1155.jpg" alt="...">
                                <div class="caption">
                                    <h3>AMD A4-5300</h3>
                                    <p>S/. 450.00</p>
                                    <p><a href="#" class="btn btn-primary" role="button">Detalles</a> 
                                        <a href="#" class="btn btn-default" role="button">Añadir</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="../images/productos/ASROCK H61M-VS S_V_R DDR3 LGA 1155.jpg" alt="...">
                                <div class="caption">
                                    <h3>AMD A4-5300</h3>
                                    <p>S/. 450.00</p>
                                    <p><a href="#" class="btn btn-primary" role="button">Detalles</a> 
                                        <a href="#" class="btn btn-default" role="button">Añadir</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="productos_destacados">

                </div>
            </div>

            <div class="col-md-3" style="padding: 0"> 
                <div class="suscribete">
                    <h3 style="padding: 0;margin: 0;">  <i class="fa fa-paper-plane-o" aria-hidden="true"></i>SUSCRIBETE</h3>
                    <h4>A nuestras ofertas</h4>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Buscar">
                        </div>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-search" aria-hidden="true"></i> Suscribirse</button>
                    </form>                    
                </div>

                <div>
                    <img src="../images/paga-efectivo.jpg" alt=""/>
                </div>


            </div>

        </div>




        <footer>

        </footer>

        <!-- slider -->
        <link href="../css/flexslider.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.flexslider.js" type="text/javascript"></script>

    </body>
</html>
