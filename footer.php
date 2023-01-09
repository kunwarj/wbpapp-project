<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wbpapp_Project
 */

?>

<!-- Footer -->
<footer class="">
    <div class="mainFooter bg-black">
        <div class="container flex flex-col md:flex-row justify-between items-center gap-10 lg:gap-32 pt-14 pb-20">
            <div class="flex flex-col xs:flex-row items-start gap-10 lg:gap-32">
                <div class="w-full max-w-[233px]">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/logo-white.png' ?>" alt="" class="w-full" />
                </div>
                <div class="w-full">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'quick-links',
                            'menu_id'        => 'quick-links',
                            'menu_class'     => 'flex flex-col items-center xs:items-start space-y-2 text-white text-base lg:text-lg',
                            'container'      => 'ul'
                        )
                    )
                    ?>
                </div>
            </div>
            <div class="w-full max-w-[264px]">
                <form action="" class="grid grid-cols-2 gap-5">
                    <div class="form-field">
                        <input type="text" placeholder="Search" required />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container py-6">
            <div class="flex">
                <p>
                    &copy; <?php bloginfo('name'); ?> <span class="sep"> | </span>
                </p>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'menu_id'        => 'footer-menu',
                        'menu_class'     => 'flex flex-row flex-wrap gap-3 justify-center items-center',
                        'container'      => 'ul'
                    )
                )
                ?>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>