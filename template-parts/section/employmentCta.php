<?php
$ctaFields = get_field('employment_cta', get_the_ID()); ?>

<!-- Employment Opportunities -->
<section class="py-10 sm:py-12 md:py-20 lg:py-[102px] bg-bgColor">
    <div class="container">
        <div class="relative border border-transparent">
            <div class="relative xs:absolute w-full xs:w-[36%] sm:w-[40%] md:w-[34%] top-0 left-0">
                <img src="<?php echo $ctaFields['image']; ?>" alt="" class="w-full" />
            </div>
            <div class="bg-primary px-6 xs:px-16 sm:px-28 md:px-32 py-12 w-full xs:w-[72%] mt-5 xs:mt-5 sm:mt-10 md:mt-14 mr-0 ml-auto">
                <h2 class="text-white mb-10 lg:mb-16 text-3xl md:text-4xl lg:text-5xl leading-10 md:leading-[52px] lg:leading-[62px] font-semibold">
                    <?php echo $ctaFields['title']; ?>
                </h2>
                <?php
                get_template_part('template-parts/section/button', null, ['link' => $ctaFields['button']]); ?>
            </div>
        </div>
    </div>
</section>