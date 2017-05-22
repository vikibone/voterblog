<div class="footer">
      <div class="container">
        <div class="row">
          
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar1') ) : ?>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget-footer">
              <div class="widget-title">
                <h3>最新评论</h3>
              </div>

              <ul>
                <li><a href="#">Jane</a> On <a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Jane</a> On <a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Jane</a> On <a href="#">Lorem ipsum dolor</a></li>
              </ul>
            </div>
          </div>
<?php endif; ?>
        </div>
      </div>
          
        </div>
      </div>
    </div>

<div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12"><a class="btn btn-secondary scrolltop btn-scrolltop" href="#page-top"><i class="glyphicon glyphicon-chevron-up"></i></a></div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 copyright-left">
            <p>Copyright &copy; 2016 All Right Reserved.</p>
          </div>
          <div class="col-md-6 col-sm-6 copyright-right">
            <p>Design By <strong><a target="_blank" href="<?php echo get_option('home'); ?>"><?php bloginfo(’name’); ?>.</a></strong></p>
          </div>
        </div>
      </div>
    </div>
 <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/slider.js"></script>
<?php wp_footer(); ?>
</body>
</html>