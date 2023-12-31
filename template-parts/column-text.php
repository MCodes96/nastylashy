<?php wp_enqueue_style('column-text', get_template_directory_uri() . '/assets/style/column-text.css'); ?>
<section id="ueber-mich" class="column-text">
    <div class="container">
        <div class="column">
            <h4><?= get_field('heading1') ?></h4>
            <p><?= get_field('text1') ?></p>
        </div>
        <div class="column">
            <h4><?= get_field('heading2') ?></h4>
            <p><?= get_field('text2') ?></p>
        </div>
        <div class="column">
            <h4><?= get_field('heading3') ?></h4>
            <p><?= get_field('text3') ?></p>
        </div>
    </div>
</section>
