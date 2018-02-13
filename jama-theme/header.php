<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta property="og:title" content="JAMA" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://www.jutsuaiki.org" />
		<meta property="og:image" content="http://www.jutsuaiki.org/img/jama-new-logo.png" />
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<?php if(is_page_template( 'splash.php' ))
		{

		} else {
		?>
			<!-- header -->
			<header class="header clear" role="banner">
        <div class="upper wrapper">
					<!-- logo -->
          <?php
          if(is_active_sidebar('logo')){
            dynamic_sidebar('logo');
          }
          ?>
					<!-- /logo -->

					<!-- nav -->
          <button type="button" id="nav-toggle"><i class="fa fa-navicon"></i></button>
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
        </div>
        <div class="banner"></div>
			</header>
			<!-- /header -->

		<?php } ?>
