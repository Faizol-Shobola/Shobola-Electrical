<!-- post -->
<article class="post ttm-blog-classic clearfix">
  <!-- post-featured-wrapper -->
  <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
      <div class="ttm-post-featured">
          <?php if(has_post_thumbnail()):?>                           
          <img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
          <?php endif;?>
        </div>
  </div><!-- post-featured-wrapper end -->
  <!-- ttm-blog-classic-content -->
  <div class="ttm-blog-classic-content">
      <div class="ttm-post-entry-header">
          <div class="ttm-box-post-date">
              <span class="ttm-entry-date">
                  <time class="entry-date" datetime="<?php echo get_the_date('l jS F, Y');?>"><?php echo get_the_date('jS F, Y');?></time>
              </span>
          </div>
          <header class="entry-header">
              <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </header>
      </div>
      <div class="entry-content">
          <div class="ttm-box-desc-text">
              <p><?php the_excerpt(); ?></p>
          </div>
          <div class="ttm-blogbox-footer">
              <div class="post-meta">
                  <span class="ttm-meta-line byline"><i class="ti ti-user"></i>
                <?php

                    $fname = get_the_author_meta('first_name');
                    $lname = get_the_author_meta('last_name');
                    $full_name = '';

                    if( empty($fname)){
                        $full_name = $lname;
                    } elseif( empty( $lname )){
                        $full_name = $fname;
                    } else {
                        //both first name and last name are present
                        $full_name = "{$fname} {$lname}";
                    }
                    
                    echo $full_name; ?></span>
                  <!-- <span class="ttm-meta-line tags-links"><i class="fa fa-comments-o"></i>0 Comments</span> -->
              </div>
              <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline ttm-icon-btn-right" href="<?php the_permalink(); ?>">Read More<i class="fa fa-long-arrow-right"></i></a>
          </div>
      </div>
  </div><!-- ttm-blog-classic-content end -->
</article>
<!-- post end -->