<?php
wp_enqueue_style('service-banner', get_template_directory_uri() . '/assets/style/service-banner.css');
$heading = get_field('service_heading');
$service1 = get_field('service_1');
$service2 = get_field('service_2');
$service3 = get_field('service_3');
?>
<section class="service-banner">
    <h2><?= $heading ?></h2>
    <div class="service-wrapper">
        <div class="service-container">
            <div class="img-container">
                <img src="<?= $service1['img']['url'] ?>" alt="<?= $service1['img']['alt'] ?>">
            </div>
            <div class="text-container">
                <h3><?= $service1['heading'] ?></h3>
            </div>
        </div>
        <div class="service-container">
            <div class="img-container">
                <img src="<?= $service2['img']['url'] ?>" alt="<?= $service2['img']['alt'] ?>">
            </div>
            <div class="text-container">
                <h3><?= $service2['heading'] ?></h3>
            </div>
        </div>
        <div class="service-container">
            <div class="img-container">
                <img src="<?= $service3['img']['url'] ?>" alt="<?= $service3['img']['alt'] ?>">
            </div>
            <div class="text-container">
                <h3><?= $service3['heading'] ?></h3>
            </div>
        </div>
    </div>
</section>
