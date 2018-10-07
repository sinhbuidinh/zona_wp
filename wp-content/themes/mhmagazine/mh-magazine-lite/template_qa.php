<?php /* Template Name: FAQ */ ?>
<?php get_header(); ?>
<div class="mh-wrapper mh-clearfix">
    <div id="main-content" class="mh-loop mh-content" role="main">
        <?php
        while (have_posts()) : the_post();
            mh_before_page_content();
            get_template_part('content', 'page');
            comments_template();
        endwhile; 
        ?>
        <?php
            // Q&A code form
        ?>
    </div>
</div>
<?php get_footer(); ?>
