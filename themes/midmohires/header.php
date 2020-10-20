<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
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
                <a href="index.html" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/long-logo.png" alt="" class="logo-light" height="25" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/long-logo.png" alt="" class="logo-dark" height="25" />
                </a>
            </div>
            <div class="buy-button">
                <a href="post-a-job.html" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i> Post a Job</a>
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




    <!--             <div id="navigation">
                    <! Navigation Menu-->
                    <!-- <ul class="navigation-menu">
                        <li><a href="index.html">Home</a></li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Jobs</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="job-list.html">Job List</a></li>
                                <li><a href="job-grid.html">Job Grid</a></li>
                                <li><a href="job-details.html">Job Details</a></li>
                                <li><a href="job-details-2.html">Job Details-2</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="about.html">About us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="faq.html">Faqs</a></li>
                                <li><a href="pricing.html">Pricing plans</a></li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Candidates</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="candidates-listing.html">Candidates Listing</a></li>
                                        <li><a href="candidates-profile.html">Candidates Profile</a></li>
                                        <li><a href="create-resume.html">Create Resume</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Blog</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blog-grid.html">Blogs</a></li>
                                        <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Employers</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="employers-list.html">Employers List</a></li>
                                        <li><a href="company-detail.html">Company Detail</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> User Pages</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="signup.html">Signup</a></li>
                                        <li><a href="recovery_passward.html">Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="components.html"> Components</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">contact</a>
                        </li>
                    </ul><!end navigation menu-->
                <!--</div>end navigation-->
