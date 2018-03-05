<!-- footer -->
<footer class="footer" role="contentinfo">
  <div class="content-wrap">
    <ul class="meta">
      <?php if(is_active_sidebar('footer-sidebar-1')){ ?>
          <li class="widget social-wrap"><?php dynamic_sidebar('footer-sidebar-1'); ?></li>
      <?php } if(is_active_sidebar('footer-sidebar-2')){ ?>
          <li class="widget"><?php dynamic_sidebar('footer-sidebar-2'); ?></li>
      <?php } if(is_active_sidebar('footer-sidebar-3')){ ?>
        <li class="widget"><?php dynamic_sidebar('footer-sidebar-3'); ?></li>
      <?php } if(is_active_sidebar('footer-sidebar-4')){ ?>
        <li class="widget"><?php dynamic_sidebar('footer-sidebar-4'); ?></li>
    <?php } ?>
    </ul>
    <!-- copyright -->
    <div class="copyright">
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
      <p>Jutsu Aiki Martial Arts is a 501(c)(3) under federal tax guidelines.</p>
    </div>
    <!-- /copyright -->
  </div>
</footer>
<!-- /footer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114024212-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-114024212-1');
</script>

</body>
</html>
