<?php
wp_enqueue_style('contact-section', get_template_directory_uri() . '/assets/style/contact-section.css');
$contact_img = get_field('contact_img');
$heading = get_field('contact_heading');
$socials_text = get_field('socials_text');
$instagram_link = get_field('insta_profile_link');
$contactform_text = get_field('contactform_text');
?>
<section class="contact-section" id="kontakt">
    <h2><?= $heading ?></h2>
    <div class="container">
        <div class="img-container">
            <img src="<?= $contact_img['url'] ?>" alt="<?= $contact_img['alt'] ?>" />
        </div>
        <div class="contact-form">
            <div class="socials">
                <p><?= $socials_text ?></p>
                <div class="social-icons">
                    <a href="<?= $instagram_link ?>" target="_blank" title="Zu meinem Instagram Profil">
                        <img src="<?= get_template_directory_uri() . '/assets/images/instagram.svg' ?>" alt="Instagram Icon" />
                    </a>
                </div>
            </div>
            <p><?= $contactform_text ?></p>
            <?= do_shortcode('[wpforms id="68" title="false"]'); ?>
        </div>
    </div>
</section>
