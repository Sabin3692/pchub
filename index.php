<?php
session_start(); 
if(!isset($_SESSION['username'])){
    header('location: register.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>pcHub</title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/flexslider.css" rel="stylesheet" type="text/css">
        <link href="icons/css/ionicons.min.css" rel="stylesheet" type="text/css">
        <link href="icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
       
        <!--revolution slider setting css-->
        <link href="rs-plugin/css/settings.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="80">


        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-fixed-top before-color">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand alo" href="index.html">PC Hub</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right scroll-to">
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#work">Work</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="post-single.html">Blog Post</a></li>                      
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="typography.html">About us</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                        <li class='fas fa-user-circle' style="font-size: 25px;text-align:left;background-color: skyblue;border-radius: 14px;padding: 10px;height: 45px;color: black; position:relative; left: 16px;">
                        
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" style="text-align:right;color: black;padding-left:20px;position: relative;bottom: 36px;left: 10px;font-size: 15px;"> <?php echo $_SESSION['username']; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="logout.php"  style="background-color: skyblue;border-radius: 5px;font-family: sans-serif;font-size: 23px;cursor: pointer;width: 154px;">Log Out</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>


        <div class="fullwidthbanner" id="home">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE 1 -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="images/bg-1.jpg" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption slider-title" data-x="center" data-y="center"  data-voffset="-30" data-speed="500" data-start="1200" data-easing="Power4.easeInOut">
                            welcome to <span>Pc hub</span>
                        </div> <!-- /tp-caption -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption slider-caption" data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on">
                            Build your pc,Wherever you are !
                        </div> <!-- /tp-caption -->

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption slider-button scroll-to" data-x="center" data-y="center" data-voffset="120" data-speed="500" data-start="2400" data-easing="Power4.easeInOut" data-captionhidden="on">
                            <a class="btn btn-white" href="#about">See more</a>
                        </div> <!-- /tp-caption -->
                    </li>
                    <!-- SLIDE 2 -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="images/bg-3.jpg" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption slider-title" data-x="center" data-y="center"  data-voffset="-30" data-speed="500" data-start="1200" data-easing="Power4.easeInOut">
                            New things <span>New Way</span>
                        </div> <!-- /tp-caption -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption slider-caption" data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on">
                            Have old pc ? Rent it,Don't throw Away !
                        </div> <!-- /tp-caption -->

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption slider-button scroll-to" data-x="center" data-y="center" data-voffset="120" data-speed="500" data-start="2400" data-easing="Power4.easeInOut" data-captionhidden="on">
                            <a class="btn btn-white" href="#about">See more</a>
                        </div> <!-- /tp-caption -->
                    </li>
                    <!-- SLIDE 3 -->
                </ul>
            </div>
        </div><!--full width banner-->





        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="section-title">
                            <h1>Online  <span class="alo">PC Purchase</span></h1> 
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                                we are a Online pc purchasing site located in <span class="colored-text">Chitwan,Nepal.</span> You can even rent your pc to those who need it and get paid  monthly or annually.
                            </p>
                        </div>
                    </div>
                </div><!-- title row end-->

                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-lightbulb-outline front-icon"></i>
                                <i class="ion-ios-lightbulb-outline back-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Buy a pc</h3>                         
                                <p>
                                    You can buy your PC here,you can even select the parts that are going to be used in your PC,Full customization and support !
                                </p>
                            </div>
                        </div><!--features icon wrap-->
                    </div><!--features col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-gear-outline front-icon"></i>
                                <i class="ion-ios-gear-outline back-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Great support</h3>                         
                                <p>
                                    If you got any problem in your old pc you can contact the Repair center and get support in minutes !
                                </p>
                            </div>
                        </div><!--features icon wrap-->
                    </div><!--features col-->
                </div><!--row-->
                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                                <i class="ion-iphone front-icon"></i>
                                <i class="ion-iphone back-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Found in all devices</h3>                         
                                <p>
                                   Our website can be used in any device,It's fully responsive and it's mobile version is also coming soon !
                                </p>
                            </div>
                        </div><!--features icon wrap-->
                    </div><!--features col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-people-outline front-icon"></i>
                                <i class="ion-ios-people-outline back-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Make a team,rent</h3>                         
                                <p>
                                    You can contact different people,Make your groups and rent your PC too !
                                </p>
                            </div>
                        </div><!--features icon wrap-->
                    </div><!--features col-->
                </div><!--row-->
            </div><!--container-->      
        </section><!--about section end-->

        <div class="funfacts parallax-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 margin-bottom30 text-center">
                        <div class="fact-box">
                            <h2>Many</h2>                          
                            <h5>Happy Clients</h5>
                            <span class="border-line"></span>
                        </div>
                    </div><!--fact cols-->
                    <div class="col-sm-3 margin-bottom30 text-center">
                        <div class="fact-box">
                            <h2>0</h2>                          
                            <h5>Pc sold</h5>
                            <span class="border-line"></span>
                        </div>
                    </div><!--fact cols-->
                    <div class="col-sm-3 margin-bottom30 text-center">
                        <div class="fact-box">
                            <h2>0</h2>                          
                            <h5>Pc in rent</h5>
                            <span class="border-line"></span>
                        </div>
                    </div><!--fact cols-->
                    <div class="col-sm-3 margin-bottom30 text-center">
                        <div class="fact-box">
                            <h2>0</h2>                          
                            <h5>Shops available</h5>
                            <span class="border-line"></span>
                        </div>
                    </div><!--fact cols-->

                </div>
            </div>
        </div>
       
        <section id="services" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="section-title">
                            <h1>Our <span class="colored-text">Services</span></h1> 
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                                Why you choose <span class="colored-text">Pc Hub</span>
                            </p>
                        </div>
                    </div>
                </div><!-- title row end-->
                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-paperplane-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Marketing</h3>                         
                                <p>
                                    You can open your shop here and deliver services from anywhere,We will also help you market your Place
                                </p>
                            </div>
                        </div>
                    </div><!--services col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-browsers-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Shop design</h3>                         
                                <p>
                                    You can get your shop's site to be displayed,As you want,You can contact our team for more information
                                </p>
                            </div>
                        </div>
                    </div><!--services col-->
                </div><!--services row-->
                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-world-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Social Media</h3>                         
                                <p>
                                    You can add your social media here to make your following large and better contact with your users too ! 
                                </p>
                            </div>
                        </div>
                    </div><!--services col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-color-wand-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Your own ideas</h3>                         
                                <p>
                                   You can give us your ideas about how our site can be improved and made better ! 
                                </p>
                            </div>
                        </div>
                    </div><!--services col-->
                </div><!--services row-->
                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-crop front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Responsive Design</h3>                         
                                <p>
                                    Our Website is very responsive you can find us in even mobile devices easily
                                </p>
                            </div>
                        </div>
                    </div><!--services col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-people-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Customer Support</h3>                         
                                <p>
                                   You can contact Our Team anytime if you got bug in our site, we will be there to fix ASAP !
                                </p>
                            </div>
                        </div>
                    </div><!--services col-->
                </div><!--services row-->
            </div>
        </section><!--services section end-->
        <div class="testimonials parallax-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="flexslider testislider">
                            <ul class="slides">
                                <li>
                                    <div class="slide-items">
                                        <img src="images/team-1.jpg" alt="">
                                        <p>
                                            Do you have old PC ? Sell it to the one who need or Rent it
                                        </p>
                                        <h5>We are there to help you ! </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="slide-items">
                                        <img src="images/team-2.jpg" alt="">
                                        <p>
                                           You want to sell your products from your shop  online,You can do it ! 
                                        </p>
                                        <h5>We will help you there too</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="slide-items">
                                        <img src="images/team-3.jpg" alt="">
                                        <p>
                                            And you all good users,You want the higest performing pc at your price,You can get it here !
                                        </p>
                                        <h5>We will help you get your dream PC at affordable price </h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--testimonials-->
        <div class="price-tables section-padding">
            <div class="container">
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="section-title">
                            <h1>Our <span class="colored-text">Pricing</span></h1> 
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                                 You can start selling at a affordable price.
                            </p>
                        </div>
                    </div>
                </div><!-- title row end-->
                <div class="row">
                    <div class="col-sm-4 margin-bottom30">
                        <div class="price-box text-center">
                            <div class="header ">
                                <h3>Rent your pc</h3>
                                <div class="price">
                                    <h2>Freeeee</h2>
                                    <span>Start price / month</span>
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <li></li>
                                <li>Sell your PC</li>
                                <li>Give it for rent</li>
                                <li>Get paid through any banking  app</li>
                                <li>Connect with costumers</li>
                            </ul>
                            <div class="price-footer">
                                <h4><a href="#" class="btn btn-border-black">Buy Now</a></h4>
                            </div>
                        </div>
                    </div><!--price col-->
                     <div class="col-sm-4 margin-bottom30">
                        <div class="price-box text-center">
                            <div class="header active">
                                <h3>Best One</h3>
                                <div class="price">
                                    <h2>$1.99</h2>
                                    <span>Start price / month</span>
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <li>Your own page</li>
                                <li>Have a talk with your buyer</li>
                                <li>Update anytime</li>
                                <li>24 hr service</li>
                                <li>Create Ad for your Shop</li>
                            </ul>
                            <div class="price-footer">
                                <h4><a href="#" class="btn btn-border-theme">Buy Now</a></h4>
                            </div>
                        </div>
                    </div><!--price col-->
                     <div class="col-sm-4 margin-bottom30">
                        <div class="price-box text-center">
                            <div class="header">
                                <h3>Biggestt</h3>
                                <div class="price">
                                    <h2>$3.99</h2>
                                    <span>Start price / month</span>
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <li>Your own page,custom design</li>
                                <li>let user select their parts</li>
                                <li>Connect with your Buyers</li>
                                <li>get service anytime</li>
                                <li>Get rating and make your shop standout !</li>
                            </ul>
                            <div class="price-footer">
                                <h4><a href="#" class="btn btn-border-black">Buy Now</a></h4>
                            </div>
                        </div>
                    </div><!--price col-->
                </div>
            </div>
        </div><!--pricing-->
        <div class="cta cta-bg">
            <div class="container text-center scroll-to">
                <h1>WE'VE GOT PLENTY MORE TO SAY</h1>
                <a href="#contact" class="btn btn-white btn-radius btn-lg">Let's talk</a>
            </div>
        </div><!--call to action-->

        <section id="work" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section-title text-center">
                            <h1> <span class="alo">Let's </span> Buy our PC</h1> 
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                                Select your price and get your PC
                            </p>
                        </div>
                    </div>
                </div><!--heading row-->


                <div class="row">
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-1.jpg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-1.jpg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>30K-75K NRS</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-2.jpg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-2.jpg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>75K-100K NRS
                                    </h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-3.jpg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-3.jpg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>100K-175K NRS</h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                </div><!--work row-->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-4.jpg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-4.jpg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>175K-200K NRS </h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-5.jpg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-5.jpg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>200K-350K NRS </h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-6.jpg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-6.jpg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>350K-500K NRS </h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                </div><!--work row-->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-7.jpg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-7.jpg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>500K-10Lakhs NRS </h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-8.jpg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-8.jpg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>10 lakhs-15 lakhs NRS </h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                    <div class="col-sm-4">
                        <div class="entry-thumb portfolio-thumb">
                            <div class="imgoverlay text-light">
                                <a href="images/work-9.jpg" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                    <img src="images/work-9.jpg" class="img-responsive" alt="">
                                    <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>15 lakh-20 lakh NRS </h6></div></div>
                                </a>
                            </div>
                        </div>
                    </div><!--work col-->
                </div><!--work row-->
            </div>
        </section><!--work section end-->


        <section id="blog" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section-title text-center">
                            <h1> <span class="alo">Our </span> News</h1> 
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                                Get news about our site.
                            </p>
                        </div>
                    </div>
                </div><!--heading row-->
            </div><!--container-->

            <div class="news-wrapper  container-fluid">
                <div class='row'>
                <div class="col-sm-6 text-center no-padding">
                    <a class="news-inner" href="post-single.html" style="background:url(images/bg-1.jpg) no-repeat; background-size: cover;">
                        <div class="post-overlay"></div>
                        <div class="post-preview-content">
                            <h4 class="date">7th july,2021</h4>
                            <h2 class="title">Idea of the site Appeared</h2>
                            <span class="border-line"></span>
                            <p class="author">By Us</p>
                        </div>
                    </a>
                </div><!--news col-->
                <div class="col-sm-6 text-center no-padding">
                    <a class="news-inner" href="post-single.html" style="background:url(images/bg-2.jpg) no-repeat; background-size: cover;">
                        <div class="post-overlay"></div>
                        <div class="post-preview-content">
                            <h4 class="date">10th july,2021</h4>
                            <h2 class="title">Work on website started</h2>
                            <span class="border-line"></span>
                            <p class="author">By Us</p>
                        </div>
                    </a>
                </div><!--news col-->
                <div class="col-sm-6 text-center no-padding">
                    <a class="news-inner" href="post-single.html" style="background:url(images/bg-3.jpg) no-repeat; background-size: cover;">
                        <div class="post-overlay"></div>
                        <div class="post-preview-content">
                            <h4 class="date">21th july,2021</h4>
                            <h2 class="title">Demo site created</h2>
                            <span class="border-line"></span>
                            <p class="author">By Us</p>
                        </div>
                    </a>
                </div><!--news col-->
                <div class="col-sm-6 text-center no-padding">
                    <a class="news-inner" href="post-single.html" style="background:url(images/bg-1.jpg) no-repeat; background-size: cover;">
                        <div class="post-overlay"></div>
                        <div class="post-preview-content">
                            <h4 class="date">28th August,2021</h4>
                            <h2 class="title">This site created</h2>
                            <span class="border-line"></span>
                            <p class="author">By Us</p>
                        </div>
                    </a>
                </div><!--news col-->
                </div>
            </div>
            <div class="clearfix"></div>
        </section><!--news section end-->
        <div class="cta">
            <div class="container text-center scroll-to">
                <h1>Simple & clean one page Shop</h1>
                <a href="#contact" class="btn btn-border-black btn-radius btn-lg">Purchase here</a>
            </div>
        </div><!--call to action-->


        <section id="contact" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="row contact-details">
                            <div class="col-sm-4 margin-bottom30 text-center">
                                <i class="ion-ios-location-outline"></i>
                                <h4>Chitwan,Nepal</h4>
                            </div>
                            <div class="col-sm-4 margin-bottom30 text-center">
                                <i class="ion-ios-email-outline"></i>
                                <h4>pchubnepal@gmail.com</h4>
                            </div>
                            <div class="col-sm-4 margin-bottom30 text-center">
                                <i class="ion-ios-telephone-outline"></i>
                                <h4>will be available soon..</h4>
                            </div>
                        </div><!--contact details-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">

                        <form name="sentMessage" class="contact-form" method="post" novalidate>
                            <h3>Drop us a line</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">

                                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">

                                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12  controls">

                                    <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">

                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12 text-right">
                                    <button type="submit" class="btn btn-white btn-lg">Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section><!--contact section end-->

        <footer class="footer">
            <div class="container text-center">
                <span class="alo">pchubnepal</span>
                <ul class="social list-inline">
                    <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                </ul>
                <span class="copyright">&copy; Copyright 2021.Pchub created By <a href="#">Our Team</a></span>
            </div>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/moderniz.min.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
        <!-- bootstrap js-->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="js/parallax.min.js"></script> 
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>	       
        <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
        <!--revolution slider scripts-->
        <script src="rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>  
        <script src="js/template.js" type="text/javascript"></script>

    </body>
</html>
