<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 d-block d-lg-none">Mobile menu</div>
            <div class="col-6 col-lg-2">
                <?php
                    if ( function_exists( 'the_custom_logo' ) ):
                        the_custom_logo();
                    endif;
                ?>
            </div>
            <div class="col-lg-8 col-xl-7 d-none d-lg-block">
                <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <?php 
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'container' => 'ul',
                                'menu_class' => 'navbar-nav',
                                'add_li_class' => 'nav-item'
                            )
                        ); 
                    ?>

                    <!-- <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    </ul> -->

                </div>
                </nav>
            </div>
            <div class="col-3 col-lg-2 col-xl-3 text-right">Icons</div>
        </div>
    </div>
</header>

<div class="site">