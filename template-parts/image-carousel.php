<?php
wp_enqueue_style('image-carousel', get_template_directory_uri() . '/assets/style/image-carousel.css');

$images = get_field('image_carousel');
$heading = get_field('image_carousel_heading');
wp_enqueue_script('slick', get_template_directory_uri() . '/assets/scripts/slick.min.js');
wp_enqueue_script('image-carousel', get_template_directory_uri() . '/assets/scripts/image-carousel.js');
?>

<section id="bilder" class="image-carousel">
    <h2><?= $heading; ?></h2>
    <div class="carousel">
        <?php
        foreach ($images as $image) :
            if ($image['url']) : ?>
                <div class="img-container">
                    <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
                </div>
        <?php endif;
        endforeach; ?>
    </div>
    <div class="carousel-controls">
        <button class="prev" title="Zurück">
            <img src="/wp-content/themes/nastylashy/assets/images/prev.svg" alt="">
        </button>
        <div class="dots"></div>
        <button class="next" title="Vor">
            <img src="/wp-content/themes/nastylashy/assets/images/prev.svg" alt="">
        </button>
    </div>
</section>
