<div class="col-md-4">
<div class="content-article">

<div class="widget-sidebar">
<div class="widget-title">
<h3>搜索</h3>
</div>
<form action="<?php bloginfo('url'); ?>/">
    <div class="input-group">
      <input type="text" class="form-control" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="搜索...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button" id="searchsubmit" value="Search"><i class="glyphicon glyphicon-search"></i></button>
      </span>
    </div>
</form>

</div>

<div class="widget-sidebar">
<div class="widget-title">
<h3>最新文章</h3>
</div>
<ul class="list-unstyled">
  <?php wp_get_archives('type=postbypost&limit=10'); ?>
</ul>
</div>

<div class="widget-sidebar">
<div class="widget-title">
<h3>分类目录</h3>
</div>
<ul class="list-unstyled">
  <?php wp_list_cats('sort_column=name&optioncount=0&hierarchical=0'); ?>
</ul>
</div>

<div class="widget-sidebar">
<div class="widget-title">
<h3>友情链接</h3>
</div>
<ul class="list-unstyled">
  <?php wp_list_bookmarks('title_li=&categorize=0&orderby=rand&limit=24'); ?>
</ul>
</div>


</div>
</div>