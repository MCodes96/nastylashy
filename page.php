<?php 
get_header(); 
wp_enqueue_style('page', get_template_directory_uri() . '/assets/style/page.css');
?>
<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>
<div class="entry-content" itemprop="mainContentOfPage">
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>
