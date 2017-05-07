
<?php
 if( has_post_thumbnail() ): ?>

  <div class="hero" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');">
    <div class="hero-light-blue-filter">
      <div class="container hero-text">
        <h1><?php the_title(); ?></h1>
        <p class="hero-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

      </div>
    </div>
  </div>
<?php endif; ?>

<div class="container">
  <div class="row">
    <div class="col-sm-8 blog-main">
      <?php if(!has_post_thumbnail()): ?>
        <h2><?php the_title(); ?></h2>
        <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
      <?php endif; ?>
      <div class="blog-post">

         <?php the_content(); ?>

      </div><!-- /.blog-post -->
    </div><!-- /.blog-main -->

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</div>
