<!-- footer -->
<footer class="footer" role="contentinfo">

  <!-- copyright -->
  <p class="copyright">
    &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
    <a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
  </p>
  <!-- /copyright -->

</footer>
<!-- /footer -->

</div>
<!-- /wrapper -->

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


<ul class="secondary">
  <?php
    if(is_active_sidebar('footer-sidebar-1')){
      dynamic_sidebar('footer-sidebar-1');
    }
    if(is_active_sidebar('footer-sidebar-2')){
      dynamic_sidebar('footer-sidebar-2');
    }
    if(is_active_sidebar('footer-sidebar-3')){
      dynamic_sidebar('footer-sidebar-3');
    }
    if(is_active_sidebar('footer-sidebar-4')){
      dynamic_sidebar('footer-sidebar-4');
    }
  ?>
</ul>
