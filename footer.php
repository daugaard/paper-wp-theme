
    <div class="container">
      <hr />
      <footer>
        <div class="row">
          <div class="col-md-4">
            <?php dynamic_sidebar( 'footer-left' ); ?>
          </div>
          <div class="col-md-8">
            <?php dynamic_sidebar( 'footer-right' ); ?>
          </div>
        </div>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/bootstrap.min.js"></script>

    <?php wp_footer(); ?>

  </body>
</html>
