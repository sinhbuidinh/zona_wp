<?php /* Template Name: Customize */ ?>
<?php get_header(); ?>
<div class="mh-wrapper mh-clearfix">
	<div id="main-content" class="mh-loop mh-content" role="main">
		<?php 
		// the query
		$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
		 
		<?php if ( $wpb_all_query->have_posts() ) : ?>
			<ul>
			    <!-- the loop -->
			    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
					<?php get_template_part('content', 'loop'); ?>
			    <?php endwhile; ?>
			    <!-- end of the loop -->
			</ul>
			<?php
		    wp_reset_postdata(); 
		    ?>
		<?php else : ?>
		    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>