<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Shobola_Electrical
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
													<h2 class="title"><?php the_title(); ?></h2>
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
                        <?php
                        while ( have_posts() ) :
                            the_post();
                        
                            get_template_part( 'template-parts/content', get_post_type() );

                        endwhile; // End of the loop.
                        ?>
                        <div class="col-lg-4 widget-area sidebar-right">

                            <aside class="widget widget-search with-title">
                                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="input-text" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'textdomain' ); ?>" value="<?php echo get_search_query(); ?>"name="s">
                                    </label>
                                    <button class="btn" type="submit"><i class="fa fa-search"></i> </button>
                                </form>
                                
                            </aside>
                            <aside class="widget widget-Categories with-title">
                                <h3 class="widget-title mb-0">Categories</h3>
                                <ul>
                                    <?php
                                        $categories = get_categories(array(
                                            'exclude' => 1 // 1 is the ID for the "uncategorized" category
                                        ));

                                        foreach ($categories as $category) {
                                            $cat_id = $category->cat_ID;
                                            $cat_name = $category->cat_name;
                                            $cat_link = get_category_link($cat_id);
                                            $cat_post_count = $category->category_count;
                                    ?>
                                    <li><i class="fa fa-arrow-right"></i><a href="<?php echo $cat_link ?>"><?php echo $cat_name ?></a>
                                        <span><?php echo $cat_post_count ?></span>
                                    </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </aside>
                            <aside class="widget widget-recent-post with-title">
                                <h3 class="widget-title">Recent Posts</h3>
                                <ul class="widget-post ttm-recent-post-list">
                                    <?php $related = get_posts( 
                                        array(  
                                        'numberposts' => 5, 
                                        'orderby' => 'desc',
                                        'post__not_in' => array($post->ID) ) ); 

                                        if( $related ) 
                                            foreach( $related as $post ) { setup_postdata($post); 
                                    ?>
                                    <li>
                                        <a href="blog-right-sidebar.html">
                                            <?php if(has_post_thumbnail()):?>
                                                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($post->ID, array(130,130));?>" alt="<?php the_title(); ?>">
                                            <?php endif;?>
                                            </a>
                                        <div class="post-detail">
                                            <span class="post-date"><i class="fa fa-calendar"></i><?php echo get_the_date('jS F, Y');?></span>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </li>
                                   <?php 
                                        } 
                                        wp_reset_postdata(); 
                                    ?>
                                    
                                </ul>
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
