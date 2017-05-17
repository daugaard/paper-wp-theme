
  <div class="row">
    <div class="col-md-12">
      <a href="<?php the_permalink(); ?>"><h2 class="blog-post-title"><?php the_title(); ?></h2></a>
    </div>
  </div>
  <div class="row">

    <div class="col-md-12">
      <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
       <?php the_excerpt(); ?>
       <div class="right">
         <a href="<?php the_permalink(); ?>" class="right">Read More</a>         
       </div>
    </div>
  </div><!-- /.blog-post -->


  <hr/>
