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

<div class="blog-post-tags">
                  <strong><i class="fa fa-tags"></i> 标签 :</strong>
                  <?php the_tags('', ', ', ''); ?>
                </div>
                
<div class="row">
   <div class="col-md-12">
   <div class="blog-post-author">
   <div class="media">
  <div class="media-left">
    <img width="80px" class="media-object img-circle" src="<?php bloginfo('template_directory');?>/images/author-avatar.jpg" alt="...">
  </div>
  <div class="media-body">
 <h3 class="media-heading">周红川 <small>- 云梦商学院联合创始人.</small></h3>
                    <p>80后一枚，喜欢研究互联网技术和营销。目前主要从事在线教育、兼带研究互联网营销、产品设计等学科。个人标签：折腾、学习.</p>
                  </div>
</div>
              </div>
            </div></div>
            
<div class="row">
<div class="col-md-12 blog-post-tags">
<strong><i class="fa fa-calendar-plus-o"></i> 相关文章 :</strong>
</div>
  
  <?php if(function_exists('wp_related_posts')){wp_related_posts();} ?>
  
  
  
</div>
<div class="row">
<div class="col-md-12">
<h3>评论模块：</h3>
<?php comments_template(); ?>
</div>
</div>

                            
</div>
</div>

<?php get_sidebar();?>
</div>




</div>


<?php get_footer();?>