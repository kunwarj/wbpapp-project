<?php

// get services
$services = get_field('services', get_the_ID());
?>

<!-- Details -->
<section id="services" class="py-10 sm:py-12 md:py-20 lg:py-[102px]">
    <div class="container grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 gap-10 lg:gap-[78px]">
        <?php
        foreach ($services as $service) : ?>
            <div class="grid grid-rows-[auto,1fr,auto]">
                <div class="relative w-full overflow-hidden pt-[74%]">
                    <div class="absolute bottom-0 left-0 right-0 top-0 w-full h-full">
                        <a href="#">
                            <img src="<?php echo $service['image']; ?>" alt="" class=" w-full h-full object-cover object-center group-hover:scale-110 animation" />
                        </a>
                    </div>
                </div>
                <a href="#" class="pt-4 sm:pt-6 sm:pb-7 md:pt-8 lg:pt-11 md:pb-6 pb-6">
                    <h4 class="text-[22px] md:text-[28px] leading-6 md:leading-8 text-primary font-semibold">
                        <?php echo $service['title']; ?>
                    </h4>
                </a>
                <a href="#" class="detailsDetails">
                    <?php echo $service['content']; ?>
                </a>
            </div>

        <?php endforeach; ?>
    </div>
</section>