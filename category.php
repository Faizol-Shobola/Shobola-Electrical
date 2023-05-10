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
                    <?php
                      global $wp_query;
                                  
                      $big = 999999999; // need an unlikely integer

                      $pages = paginate_links(array(
                          'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format'    => '?paged=%#%',
                          'current' => max(1, get_query_var('paged')),
                          'total' => $wp_query->max_num_pages,
                        'type'      => 'array',
                          'prev_text' => __('<i class="ti ti-arrow-left"></i>'),
                          'next_text' => __('<i class="ti ti-arrow-right"></i>'),
                      ));

                      if ($pages) {
                          echo '<div class="pagination">';
                          $current_page = max(1, get_query_var('paged'));
                          $last_page = $wp_query->max_num_pages;

                          if ($current_page !== 1) {
                              echo '<a class="first page-numbers" href="' . esc_url(get_pagenum_link(1)) . '">First</a>';
                              
                          }

                          foreach ($pages as $page) {
                              $class = (strpos($page, 'current ') !== false) ? 'current' : '';
                              echo '<span class="page-numbers ' . $class . '">' . $page . '</span>';
                          }

                          if ($current_page !== $last_page) {
                              echo '<a class="last page-numbers" href="' . esc_url(get_pagenum_link($last_page)) . '">Last</a>';    
                          }

                          echo '</div>';
                      }
                      ?>
                </div>
              </div>
              <!-- Sidebar -->
                <?php 
                get_template_part( 'template-parts/content', 'sidebar' ); ?>
                
          </div><!-- row end -->
      </div>
  </div>
  <!--blog-classic-section-end-->
</div>
<!--site-main end-->

<?php
get_footer();