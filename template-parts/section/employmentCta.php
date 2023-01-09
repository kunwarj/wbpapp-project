<?php
$ctaFields = get_field('employment_cta', get_the_ID()); ?>

<section class="employment_cta">
    <div class="image">
        <img src="<?php echo $ctaFields['image']['url']; ?>" alt="employment image">
    </div>
    <h3>
        <?php echo $ctaFields['title']; ?>
    </h3>

    <!-- button -->
    <?php
    get_template_part('template-parts/section/button', null, ['link' => $ctaFields['button']]); ?>

</section>