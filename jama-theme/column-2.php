<?php
/* Template Name: Two Column */
?>

<?php get_header(); ?>

<div id="primary" class="site-content-col-2">
    <main id="main" class="site-main content-wrap" role="main">
        <h1><?php wp_title(''); ?></h1>
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="post-content"><?php the_content(); ?></div>
        <?php endwhile; ?>
    </main><!-- .site-main -->

    <?php get_sidebar(); ?>
</div><!-- .content-area -->

<?php get_footer(); ?>
