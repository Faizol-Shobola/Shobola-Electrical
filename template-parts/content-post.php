<div class="col-lg-8 content-area">
  <!-- post -->
  <article class="post ttm-blog-single clearfix">
      <!-- post-featured-wrapper -->
      <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
      <div class="ttm-post-featured">
            <img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
        </div>
      </div>
      <!-- post-featured-wrapper end -->
      <!-- ttm-blog-classic-content -->
      <div class="ttm-blog-single-content">
          <div class="ttm-post-entry-header">
              <div class="post-meta">
                  <span class="ttm-meta-line byline"><i class="ti ti-user"></i>John Doe</span>
                  <span class="ttm-meta-line tags-links"><i class="fa fa-comments-o"></i>0 Comments</span>
              </div>
          </div>
          <div class="entry-content">
              <div class="ttm-box-desc-text">
                 <?php the_content(); ?>
              </div>
              <div class="social-media-block">
                  <div class="d-sm-flex justify-content-between">
                      <div class="ttm_tag_lists margin_top15">
                          <span class="ttm-tags-links-title">
                              Tags:</span>
                          <span class="ttm-tags-links"><a href="blog-right-sidebar.html">Builders</a>
                              <a href="blog-right-sidebar.html">Decor</a></span>
                      </div>
                      <div class="ttm-social-share-wrapper margin_top15">
                          <h6 class="fs-16 m-0 padding_right10">Share : </h6>
                          <ul class="social-icons">
                              <li><a href="https://www.facebook.com/themetechMount18"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="https://twitter.com/themetechmount"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="https://www.linkedin.com/company/themetech-mount/"><i class="fa fa-linkedin"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="ttm-horizontal_sep width-100 margin_top30 margin_bottom30"></div>
              <div class="row ">
                <!--  previous-post -->
                <div class="col-sm-6">
                  <?php $prev_post = get_previous_post();
                  if ( ! empty( $prev_post ) ) : ?>
                  <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                      <div class="featured-icon">
                        <?php if(has_post_thumbnail( $prev_post->ID)):?>  
                          <?php echo get_the_post_thumbnail( $prev_post->ID, array(130,100), array('class' => 'img-fluid auto_size'));?>
                        <?php endif; ?>
                      </div>
                      <div class="featured-content padding_left15 padding_top5">
                          <div class="featured-desc">
                              <a href="<?php echo get_permalink( $prev_post->ID); ?>"><p>Previous Post</p></a>
                          </div>
                          <div class="featured-title">
                              <h4><a href="<?php echo get_permalink( $prev_post->ID); ?>"> <?php echo get_the_title( $prev_post->ID); ?></a></h4>
                          </div>
                      </div>
                  </div>
                  <?php endif; ?>
                </div>
                <!--  previous-post end -->
                <!--  next-post -->
                <div class="col-sm-6">
                  <?php $next_post = get_next_post();
                  if ( ! empty( $next_post ) ) : ?>
                  <div class="featured-icon-box icon-align-before-content icon-ver_align-top ">
                      <div class="featured-content text-end padding_right15 padding_top5 ">
                          <div class="featured-desc">
                              <a href="<?php echo get_permalink($next_post->ID); ?>"><p>Next Post</p></a>
                          </div>
                          <div class="featured-title">
                              <h4><a href="<?php echo get_permalink($next_post->ID); ?>"> <?php echo get_the_title($next_post->ID); ?></a></h4>
                          </div>
                      </div>
                      <div class="featured-icon">
                        <?php if(has_post_thumbnail( $next_post->ID)):?>
                            <?php echo get_the_post_thumbnail( $next_post->ID, array(130,100), array('class' => 'img-fluid auto_size'));?>
                        <?php endif; ?>
                      </div>
                  </div>
                  <?php endif; ?>
                </div>
                <!--  next-post end -->
              </div>
              
          </div>
          
      </div><!-- ttm-blog-classic-content end -->
  </article><!-- post end -->
</div>