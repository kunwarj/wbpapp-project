<!-- home banner -->
<?php
$homeBanner = get_field('banner', get_the_ID());
?>
<section class="banner homepage">
    <div class="container">

        <!-- pretitle from acf -->
        <p class="pretitle"><?php echo $homeBanner['pre_title']; ?></p>

        <!-- ttitle -->
        <p class="pretitle"><?php echo $homeBanner['title']; ?></p>
        <p class="pretitle"><?php echo $homeBanner['background_image']; ?></p>

        <!-- get button template -->
        <?php
        get_template_part('template-parts/section/button', null, ['link' => $homeBanner['learn_more']]); ?>

    </div>
</section>