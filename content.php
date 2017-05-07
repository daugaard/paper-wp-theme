
  <div class="row">
    <div class="col-md-12">
      <a href="<?php the_permalink(); ?>"><h2 class="blog-post-title"><?php the_title(); ?></h2></a>
    </div>
  </div>
  <div class="row">

    <div class="col-md-8">
      <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
       <?php the_excerpt(); ?>
    </div>
    <div class="col-md-4">
      <a href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        } ?>
      </a>
    </div>
  </div><!-- /.blog-post -->


  <hr/>
