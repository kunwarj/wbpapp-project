<?php

// get services
$services = get_field('services', get_the_ID());
?>

<section class="services">
    <div class="container">
        <!-- services -->
        <div class="services">
            <?php
            foreach ($services as $service) : ?>
                <div class="service">
                    <img src="<?php echo $service['image']; ?>" alt="service icon">
                    <h4>
                        <?php echo $service['title']; ?>
                    </h4>
                    <div class="content">
                        <?php echo $service['content']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>