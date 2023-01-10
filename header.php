<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wbpapp_Project
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">

        <header class="fixed bg-white w-full shadow-xl z-50">
            <div class="container relative flex flex-row items-center justify-between gap-10">
                <div>
                    <a href="index.html">
                        <?php
                        the_custom_logo(); ?>
                    </a>
                </div>
                <div class="grid w-5 items-end space-y-[.375rem] overflow-hidden p-0 sm:w-6 md:hidden" id="hamburger">
                    <div class="h-[.1875rem] w-full origin-left bg-primary duration-200 ease-in-out" id="span1"></div>
                    <div class="w-full">
                        <div class="mx-auto h-[.1875rem] w-full origin-center bg-primary duration-200 ease-in-out" id="span2"></div>
                        <div class="mx-auto -mt-[.1875rem] h-[.1875rem] w-full origin-center bg-primary duration-200 ease-in-out" id="span3"></div>
                    </div>
                    <div class="h-[.1875rem] w-full origin-right bg-primary duration-200 ease-in-out" id="span4"></div>
                </div>
                <div class="h-screen md:h-auto md:relative absolute right-0 top-[58px] sm:top-[66px] md:top-0 bg-white hidden opacity-0 flex-col md:flex-row gap-5 md:gap-[60px] items-start md:items-center" id="hammenu">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'flex flex-col md:flex-row items-start whitespace-nowrap w-[280px] md:w-fit h-full p-5 pt-0 md:p-0',
                            'container'      => 'nav',
                        )
                    );
                    ?>
                </div>
            </div>
        </header>