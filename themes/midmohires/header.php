<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title('|', true, 'right'); ?></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Zimmer Communications" />

    <link rel="shortcut icon" href="images/favicon.ico">

    <?php wp_head(); ?>

</head>

<body <?php body_class() ?>>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">


        <!-- Menu Start -->
        <div class="container">

            <!-- Logo container-->
            <div>
                <a href="<?php echo site_url(); ?>" class="logo">
                    <img src="https://midmohires.com/goodies/uploads/2021/02/midMoHiresLogo-1.png" alt="" class="logo-light" height="80px" />
                    <img src="https://midmohires.com/goodies/uploads/2021/02/midMoHiresLogo-1.png" alt="" class="logo-dark" height="80px" />
                </a>
            </div>
            <?php $post_a_job = get_field('post_a_job_page', 'option'); ?>
            <div class="buy-button">
                <a href="<?php echo get_permalink($post_a_job->ID); ?>" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i> Post a Job</a>
            </div><!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
            <?php
            $args = array(
                 'menu' => 'top_menu',
                 'container_id' => 'navigation',
                 'menu_class' => 'navigation-menu'
            );
            wp_nav_menu( $args ); ?>

        </div><!--end container-->
        <!--end end-->
    </header><!--end header-->
    <!-- Navbar End -->
