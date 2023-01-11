<!-- home banner -->
<?php
$homeBanner = get_field('banner', get_the_ID());
?>
<!-- Hero -->
<section class="pt-14 sm:pt-16 md:pt-20 lg:pt-[100px] w-full">
    <div class="relative w-full h-full overflow-hidden">
        <div class="pt-[33%] pb-16 lg:pb-24 xl:pb-32 w-full mx-auto max-w-[812px] px-4 sm:px-5 lg:px-10 flex-col flex items-center relative z-10">
            <h6 class="text-white mb-0 lg:mb-3 text-base lg:text-lg leading-[62px] text-center">
                <?php echo $homeBanner['pre_title']; ?>
            </h6>
            <h2 class="text-white mb-10 lg:mb-16 text-3xl md:text-4xl lg:text-5xl leading-10 md:leading-[52px] lg:leading-[62px] text-center font-semibold">
                <?php echo $homeBanner['title']; ?>
            </h2>
            <?php
            get_template_part('template-parts/section/button', null, ['link' => $homeBanner['learn_more']]); ?>

        </div>
        <div class="absolute bottom-0 left-0 right-0 top-0 w-full h-full">
            <img src="<?php echo $homeBanner['background_image']; ?>" alt="" class="w-full h-full object-cover object-center" />
        </div>
    </div>
</section>