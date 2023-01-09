<?php
$aboutFields = get_field('about', get_the_ID()); ?>

<section class="about">
    <h3>
        <?php echo $aboutFields['title']; ?>
    </h3>
    <!-- content -->
    <div class="content">
        <?php echo $aboutFields['content']; ?>
    </div>

    <!-- images -->
    <div class="images">
        <?php
        $images = $aboutFields['images'];
        foreach ($images as $image) : ?>
            <img src="<?php echo $image['url']; ?>" alt="about image">
        <?php endforeach; ?>
    </div>
</section>