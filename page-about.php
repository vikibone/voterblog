<?php    
/* 
Template Name: 关于页面   
*/   
?> 

<?php get_header();?>

<div class="row">
<div class="col-md-12">
<div class="content-article">
<div class="heading-title">
<h2><?php the_title_attribute(); ?></h2>
<div class="breadcrumb">
                  <?php
	if(function_exists('bcn_display')) {
		bcn_display();
	}
?>
                </div>
</div>

</div>
</div>
</div>

<div class="row">
<div class="col-md-8">
<div class="content-article">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?></p>
<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>                 
</div>
</div>

<?php get_sidebar();?>
</div>




</div>


<?php get_footer();?>