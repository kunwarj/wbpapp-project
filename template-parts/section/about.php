<?php
$aboutFields = get_field('about', get_the_ID()); ?>

<!-- About section Begins -->
<section class="py-10 sm:py-12 md:py-20 lg:py-[102px]" id="about">
    <div class="container flex max-w-full">
        <div class="about-left w-1/2">
            <h4 class="text-[22px] md:text-[28px] leading-6 md:leading-8 text-primary font-semibold">
                <?php echo $aboutFields['title']; ?></h4>
            <?php echo $aboutFields['content']; ?>
        </div>
        <div class="about-right flex">

            <?php
            $images = $aboutFields['images'];
            ?>
            <img src="<?php echo $images[0]; ?>" alt="about-image-first" class="" width="563" height="375">
            <img src="<?php echo $images[1]; ?>" alt="dfx-truck" width="285" height="369" class="dfx-truck">
        </div>
    </div>
</section>
<!-- About section Ends -->