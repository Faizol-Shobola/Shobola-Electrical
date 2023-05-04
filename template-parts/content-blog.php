<?php $query_args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'order' => 'DESC',
    );

    $query = new WP_Query( $query_args ); ?>

<?php if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post();?>


<div class="col-lg-4">
  <!-- featured-imagebox-post -->
  <div class="featured-imagebox featured-imagebox-post style1">
      <div class="featured-thumbnail">
        <?php if(has_post_thumbnail()):?>                           
            <img src="" class="w-full h-48 object-cover">
            <img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
        <?php endif;?>
      </div>
      <div class="featured-content">
          <!-- ttm-box-post-date -->
          <div class="ttm-box-post-date">
              <span class="ttm-entry-date">
                  <time class="entry-date" datetime="<?php echo get_the_date('l jS F, Y');?>"><?php echo get_the_date('F jS');?></time>
              </span>
          </div><!-- ttm-box-post-date end -->
          <div class="post-meta">
              <span class="ttm-meta-line byline">
                  <i class="ti ti-user"></i>John Doe</span>
              <span class="ttm-meta-line comments-link">
                  <i class="fa fa-comments-o"></i>
                  0 Comments</span>
          </div>
          <div class="featured-title">
              <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
          </div>
          <div class="featured-desc">
              <p><?php the_excerpt(); ?></p>
          </div>
          <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-textcolor-darkgreycolor" href="<?php the_permalink();?>">Read More<i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
  </div><!-- featured-imagebox-post end -->
</div>

<?php endwhile; else: endif; ?>