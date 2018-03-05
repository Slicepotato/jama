<?php
/* Template Name: Full Width */
?>

<?php get_header(); ?>

<div id="primary" class="site-content-fullwidth">
    <main id="main" class="site-main content-wrap" role="main">
        <h1>
          <?php
            if(!is_page('Home'))
            {
              wp_title('');
            }
          ?>
        </h1>
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="post-content"><?php the_content(); ?></div>
        <?php endwhile; ?>
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
