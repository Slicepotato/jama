<?php
/* Template Name: Full Width */
?>

<?php get_header(); ?>

<div id="primary" class="site-content-fullwidth content-wrap">
    <main id="main" class="site-main" role="main">
        <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
