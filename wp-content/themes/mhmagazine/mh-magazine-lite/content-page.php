<?php /* Default template for displaying page content */ ?>
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (is_home()) { ?>
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title page-title">', '</h1>'); ?>
	</header>
	<?php } ?>
	<div class="entry-content mh-clearfix">
		<?php the_content(); ?>
	</div>
</article>