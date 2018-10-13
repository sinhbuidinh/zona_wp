<div class="mh-header-mobile-nav mh-clearfix"></div>
<div class="mh-row mh-clearfix dynamic_sidebar">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebars Login") ) : ?>
    <?php endif;?>
</div>
<div class="mh-clearfix"></div>
<header class="mh-header" itemscope="itemscope">
	<div class="mh-container mh-container-inner mh-row mh-clearfix">
		<?php mh_magazine_lite_custom_header(); ?>
	</div>
	<div class="mh-main-nav-wrap">
		<nav class="mh-navigation mh-main-nav mh-container mh-container-inner mh-clearfix" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
			<?php wp_nav_menu(array('theme_location' => 'main_nav')); ?>
		</nav>
	</div>
</header>