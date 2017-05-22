<?php get_header();?>
<div class="row">
<div class="col-md-12">
<div class="content-article">
<div class="heading-title">
<h2><?php single_cat_title();?></h2>
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


<div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12">
    <a href="<?php the_permalink() ?>" class="thumbnail">
<?php if ( has_post_thumbnail() ) { ?>
<?php the_post_thumbnail('thumbnail'); ?>
<?php } else {?>
<img src="<?php echo catch_first_image() ?>"/>
<?php } ?>
</a>

  </div>
  <div class="col-md-8 col-sm-8 col-xs-12">
  <div class="blog-post">
  <h2><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h2>
  <div class="entry_meta">
  <time datetime="<?php the_date_xml()?>"><?php the_date_xml()?></time>
  <span class="<?php the_author(); ?>">作者: <?php the_author(); ?></span>
  </div>
  
  <p class="post-des"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"……"); 
?>
</p>
                  <p><a class="btn btn-secondary btn-sm" href="<?php the_permalink() ?>">阅读全文 <i class="fa fa-angle-right"></i></a><span class="meta-post-view pull-right"> <?php if(function_exists('the_views')) { the_views(); } ?></span></p>
  
  </div>
  </div>

</div>
<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>

<nav>
  <?php if(function_exists('wp_pagenavi')){wp_pagenavi();} ?>
</nav>


</div>
</div>
<?php get_sidebar();?>
</div>

<?php get_footer();?>