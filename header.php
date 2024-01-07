<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php echo bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>
        <?php echo bloginfo('title'); ?>
    </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Responsive navbar-->

    <div class="container-fluid bg-dark text-light py-1 announcement-bar">
        <div class="container">
            <div class="row m-1">
                <div class="col">
                    <i class="fa fa-phone"></i> 0115456524
                </div>
                <div class="col">
                    <i class="fa fa-envelope"></i> admin@admin.com
                </div>
                <div class="col">
                    <?php get_search_form(); ?>
                </div>
                <div class="col">
                    <i class="fa fa-facebook mx-2"></i>&nbsp;
                    <i class="fa fa-twitter mx-2"></i>&nbsp;
                    <i class="fa fa-instagram mx-2"></i>&nbsp;
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <?php if(has_custom_logo()) {
                    the_custom_logo() ;
                }
                else {
                    echo bloginfo('title') ;
                 } ?>
                
                <!-- Bootstraps -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(
                    array(
                        "theme_location" => "primary_menu_id",
                        "container" => false,
                        "items_wrap" => '<ul class="navbar-nav ms-auto mb-2 mb-lg-0">%3$s</ul>'
                    )
                );
                ?>


                <!-- Check if woocommerce plugin in activated. -->
                <?php if(class_exists('Woocommerce')) : ?>
                    
                    <!-- Show My Account page if user is logged in -->
                    <?php if(is_user_logged_in()) : ?>
                        
                        <a href="<?php echo get_permalink(get_option("woocommerce_myaccount_page_id")) ; ?>" class="myaccount-link">
                            My Account
                        </a>&nbsp;

                        <!-- <a href="<?php echo wp_logout_url(); ?>" class="myaccount-link">
                            Logout
                        </a>&nbsp; -->
                    
                    <?php else : ?> 
                        
                        <!-- Show Login & Register if user is not logged in. -->
                        <a href="<?php echo get_permalink(get_option("woocommerce_myaccount_page_id")) ; ?>" class="myaccount-link">
                            Login / Register
                        </a>&nbsp;

                    <?php endif;  ?>

                <?php endif ; ?>
                

                <div class="cart-info">
                    <a href="<?php echo wc_get_cart_url(); ?>" class="cart-subtotal">
                        <?php echo WC()->cart->get_total(); ?>
                    </a>
                    <a href="<?php echo wc_get_cart_url(); ?>" class="fa fa-shopping-cart fa-2x">
                        <span class="items-count">
                            <?php echo WC()->cart->get_cart_contents_count(); ?>
                        </span>
                    </a>
                </div>
                <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline-->
    <!-- <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header> -->
    <header>
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1" aria-current="true"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2" class=""></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3" class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1519" height="500"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#CCC"></rect><text x="50%" y="50%" fill="#555"
                            dy=".3em">First slide</text>
                    </svg> -->
                    <img src="https://via.placeholder.com/1519x500.png" class="d-block w-100" alt="image_1">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1519x500.png" class="d-block w-100" alt="image_2">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1519x500.png" class="d-block w-100" alt="image_3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>