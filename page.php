<?php get_header(); ?>
<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
<div class="entry-content" itemprop="mainContentOfPage">
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>
