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
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/logo-white.png' ?>" alt=""
                        class="w-full" />
                </div>
                <div class="w-full">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'quick-links',
                            'menu_id' => 'quick-links',
                            'menu_class' => 'flex flex-col items-center xs:items-start space-y-2 text-white text-base lg:text-lg',
                            'container' => 'ul'
                        )
                    )
                        ?>
                </div>
            </div>
            <div class="w-full max-w-[264px]">
                <form action="" class="grid grid-cols-2 gap-5">
                    <div class="form-field">
                        <input type="text" placeholder="Search" required />
                        <svg viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                                stroke="#8190A5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container py-6">
            <div class="flex flex-col xs:flex-row justify-center items-center gap-3">
                <p>
                    &copy; <?php bloginfo('name'); ?> <span class="sep"> | </span>
                </p>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'menu_id' => 'footer-menu',
                        'menu_class' => 'flex flex-row flex-wrap gap-3 justify-center items-center',
                        'container' => 'ul'
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