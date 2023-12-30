<?php
get_header();
wp_enqueue_style('404', get_template_directory_uri() . '/assets/style/404.css');
?>
<div class="nastylashy-main-content">
    <h1>404</h1>
    <p>
        Ups! Du hast dich wohl verlaufen. <br />
        Die Seite konnte nicht gefunden werden.
    </p>
</div>
<?php get_footer(); ?>
