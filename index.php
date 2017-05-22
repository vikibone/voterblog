<?php get_header();?>
<div class="row">
<div class="col-md-12">
<div class="content-article">
<div class="slider-box">
    <div class="slider-show">
      <ul>
        <li><a href="#"><img src="<?php bloginfo('template_directory');?>/images/slider1.jpg"></a></li>
        <li><a href="#"><img src="<?php bloginfo('template_directory');?>/images/slider2.jpg"></a></li>
        <li><a href="#"><img src="<?php bloginfo('template_directory');?>/images/slider3.jpg"></a></li>
      </ul>
      <div class="nav">
        <span class="selected">1</span>
        <span>2</span>
        <span>3</span>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="content-article">
<div class="jumbotron">
  <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
  <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
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

