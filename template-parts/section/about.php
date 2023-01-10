<?php
$aboutFields = get_field('about', get_the_ID()); ?>

<!-- About section Begins -->
<section class="" id="about">
    <div class="container flex flex-col md:flex-row max-w-full">
        <div class="about-left">
            <h2 class="text-primary text-3xl md:text-4xl lg:text-5xl leading-[62px] text-left font-semibold">
                <?php echo $aboutFields['title']; ?>
            </h2>
            <p class="">
                <?php echo $aboutFields['content']; ?>
            </p>
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