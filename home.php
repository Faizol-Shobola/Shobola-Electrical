<?php
/**
 * The template for displaying Home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package duromedia
 */

get_header();
?>
<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-dark clearfix">
  <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-12">
              <div class="ttm-page-title-row-inner">
                  <div class="page-title-heading">
                      <h2 class="title">Blog</h2>
                  </div>
                  <div class="breadcrumb-wrapper">
                      <span>
                          <a title="Homepage" href="index-2.html">
                              <i class="themifyicon ti-home"></i> &nbsp;
                              Home</a>
                      </span>
                      <span>Blog</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- page-title end -->
<!--site-main start-->
<div class="site-main">
  <!--blog-classic-section -->
  <div class="ttm-row sidebar ttm-sidebar-right clearfix">
      <div class="container">
          <!-- row -->
          <div class="row">
              <div class="col-lg-8 content-area">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <?php get_template_part( 'template-parts/content', 'blog_archive' ); ?>
                    
                <?php endwhile; endif; ?>
                <div class="pagination-block">
                    <span class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="next page-numbers" href="#">
                        <i class="ti ti-arrow-right"></i></a>
                </div>
              </div>
              <div class="col-lg-4 widget-area sidebar-right">
                  <aside class="widget widget-search with-title">
                      <form role="search" method="get" class="search-form" action="#">
                          <label>
                              <span class="screen-reader-text">Search for:</span>
                              <input type="search" class="input-text" placeholder="Search …" value="" name="s">
                          </label>
                          <button class="btn" type="submit"><i class="fa fa-search"></i> </button>
                      </form>
                  </aside>
                  <aside class="widget widget-Categories with-title">
                      <h3 class="widget-title mb-0">Categories</h3>
                      <ul>
                          <li><i class="fa fa-arrow-right"></i><a href="#">Builders</a>
                              <span>3</span></li>
                          <li><i class="fa fa-arrow-right"></i><a href="#">Decorating</a>
                              <span>1</span></li>
                          <li><i class="fa fa-arrow-right"></i><a href="#">Designing</a>
                              <span>2</span></li>
                          <li><i class="fa fa-arrow-right"></i><a href="#">Industrial</a>
                              <span>3</span></li>
                          <li><i class="fa fa-arrow-right"></i><a href="#">Preconstruction</a>
                              <span>1</span></li>
                          <li><i class="fa fa-arrow-right"></i><a href="#">Renovations</a>
                              <span>1</span></li>
                      </ul>
                  </aside>
                  <aside class="widget widget-recent-post with-title">
                      <h3 class="widget-title">Recent Posts</h3>
                      <ul class="widget-post ttm-recent-post-list">
                          <li>
                              <a href="blog-right-sidebar.html"><img class="img-fluid" src="images/blog/b_thumbb-01.jpg" alt="post-img"></a>
                              <div class="post-detail">
                                  <span class="post-date"><i class="fa fa-calendar"></i>May 21, 2021</span>
                                  <a href="blog-right-sidebar.html">Improve Workflow With Agile Construction</a>
                              </div>
                          </li>
                          <li>
                              <a href="blog-right-sidebar.html"><img class="img-fluid" src="images/blog/b_thumbb-02.jpg" alt="post-img"></a>
                              <div class="post-detail">
                                  <span class="post-date"><i class="fa fa-calendar"></i>April 28, 2021</span>
                                  <a href="blog-right-sidebar.html">What Are The Benefits Of LEED Certification?</a>
                              </div>
                          </li>
                          <li>
                              <a href="blog-right-sidebar.html"><img class="img-fluid" src="images/blog/b_thumbb-03.jpg" alt="post-img"></a>
                              <div class="post-detail">
                                  <span class="post-date"><i class="fa fa-calendar"></i>April 28, 2021</span>
                                  <a href="blog-right-sidebar.html">What Are The Benefits Of LEED Certification?</a>
                              </div>
                          </li>
                      </ul>
                  </aside>
                  <aside class="widget tagcloud-widget with-title">
                      <h3 class="widget-title">Tags</h3>
                      <div class="tagcloud">
                          <a href="#" class="tag-cloud-link">Architect</a>
                          <a href="#" class="tag-cloud-link">Benefits</a>
                          <a href="#" class="tag-cloud-link">Builders</a>
                          <a href="#" class="tag-cloud-link">Decor</a>
                          <a href="#" class="tag-cloud-link">Design</a>
                          <a href="#" class="tag-cloud-link">Home</a>
                          <a href="#" class="tag-cloud-link">Industry</a>
                          <a href="#" class="tag-cloud-link">Project</a>
                          <a href="#" class="tag-cloud-link">Structure</a>
                      </div>
                  </aside>
                  <aside class="widget widget-banner">
                      <div class="ttm-col-bgcolor-yes ttm-bgcolor-darkgrey col-bg-img-ten ttm-col-bgimage-yes ttm-bg ttm-sidebar-contact-banner">
                          <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                              <div class="ttm-col-wrapper-bg-layer-inner"></div>
                          </div>
                          <div class="layer-content">
                              <div class="widget-banner-inner text-end">
                                  <div class="banner-contact-top">
                                      <h6>Construction</h6>
                                      <h2 class="ttm-textcolor-skincolor fs-35 font-weight-800">Save Up <br> to 20%</h2>
                                      <div class="banner-contact-button">
                                          <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-whitecolor" href="contact-us.html">Get Quote <i class="fa fa-long-arrow-right"></i></a>
                                      </div>
                                  </div>
                                  <div class="featured-icon-box icon-align-before-content style11">
                                      <div class="featured-icon">
                                          <div class="ttm-icon ttm-icon_element-style-rounded ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-size-sm">
                                              <i class="fa fa-phone"></i>
                                          </div>
                                      </div>
                                      <div class="featured-content">
                                          <h5 class="mb-0">(+12)123 456 789</h5>
                                          <p class="mb-0 fs-16">Contact Us</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </aside>
              </div>
          </div><!-- row end -->
      </div>
  </div>
  <!--blog-classic-section-end-->
</div>
<!--site-main end-->

<?php
get_footer();