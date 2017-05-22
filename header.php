<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>">
<title><?php if (is_home()||is_search()) { bloginfo('name'); } else { wp_title(''); print " - "; bloginfo('name'); } ?> </title>
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
<link rel="stylesheet" href="http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body id="page-top">
<div class="container content-wrapper">
<div class="content-article">
<div class="row">
<div class="col-md-12">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory');?>/images/logo.jpg"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling --><style>
    .navbar-default {
    background-color: #fff;
    border-color: #fff;
    border-radius: 0;
    margin-bottom: 0;
    padding-bottom: 30px;
    padding-top: 20px;
    transition: all 0.3s ease-in-out 0s;
}
    </style>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <!-- menu list -->
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu','container' => '','menu_class' => 'nav navbar-nav navbar-right') ); ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>
</div>