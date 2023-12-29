<?php wp_enqueue_style('hero', get_template_directory_uri() . '/assets/style/hero.css'); ?>
<section class="hero-section">
    <div class="img-container">
        <div class="gradient-top-overlay"></div>
        <?php $image = get_field('hero_img');
        if ($image) : ?>
            <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
        <?php endif; ?>
        <div class="gradient-bottom-overlay"></div>
    </div>
    <div class="text-container">
        <div class="top-sub-heading-container">
            <div class="line"></div>
            <h4><?= get_field('top_sub_heading') ?></h4>
            <div class="line"></div>
        </div>
        <h1><?= get_field('heading') ?></h1>
        <h3><?= get_field('sub_heading') ?></h3>
        <a href="#" class="small-label"><?= get_field('small_label') ?></a>
    </div>
</section>
