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
    <!-- <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-dark clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="ttm-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title">Contemporary Villa </h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index-2.html">
                                    <i class="themifyicon ti-home"></i> &nbsp;
                                    Home</a>
                            </span>
                            <span>Contemporary Villa </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="ttm-page-title ttm-bg clearfix" style="background-image: url(images/aboutus.jpg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="ttm-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title"><?php the_title(); ?></h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span><?php get_breadcrumb(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->
    <!--site-main start-->
    <div class="site-main">
        <!-- Project-style-section -->
        <section class="ttm-row project-single-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-pf-single-content-wrapper">
                            <div class="ttm-pf-single-content-wrapper-innerbox">
                                <div class="ttm-pf-detail-box">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-8">
                                            <!-- ttm_pf_image-wrapper -->
                                            <div class="ttm_pf_image-wrapper">
									            <?php if(has_post_thumbnail()):?> 
                                                <img class="" src="<?php the_post_thumbnail_url();?>" alt="portfolio-img" >
                                                <?php endif;?>
                                            </div><!-- ttm_pf_image-wrapper end -->
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="ttm-pf-single-detail-box res-991-margin_top30">
                                                <div class="ttm-short-desc"><?php the_excerpt(); ?></div>
                                                <ul class="ttm-pf-detailbox-list">
                                                    <li>
                                                        <h3>Project Type </h3><span><?php the_field('project_type'); ?> </span>
                                                    </li>
                                                    <li>
                                                        <h3>Client </h3><span><?php the_field('client'); ?></span>
                                                    </li>
                                                    <li>
                                                        <h3>Architects</h3><span><?php the_field('architect'); ?></span>
                                                    </li>
                                                    <li>
                                                        <h3>Completion </h3><span><?php the_field('completion'); ?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ttm-pf-single-content-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="margin_top40">
                                                <h2 class="res-991-padding_top20">Project Details</h2>
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="ttm_single_image-wrapper text-left padding_top15">
                                            <?php 
                                            $image = get_field('image_1');
                                            if( !empty( $image ) ): ?>
                                                <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                            <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="ttm_single_image-wrapper text-left padding_top15">
                                            <?php 
                                            $image = get_field('image_2');
                                            if( !empty( $image ) ): ?>
                                                <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                            <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin_top40">
                                        <div class="col-lg-6">
                                            <div class=" text-start">
                                                <ul class="social-icons list-inline">
                                                    <li><a class="tooltip-top" href="https://www.facebook.com/themetechMount18" rel="noopener" aria-label="facebook">
                                                            <i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="tooltip-top" href="https://www.instagram.com/theme_tech_mount/" rel="noopener" aria-label="instagram">
                                                            <i class="fa fa-instagram"></i></a></li>
                                                    <li><a class="tooltip-top" href="https://www.linkedin.com/company/themetech-mount/" rel="noopener" aria-label="linkedin">
                                                            <i class="fa fa-linkedin"></i></a></li>
                                                    <li><a class="tooltip-top" href="https://in.pinterest.com/themetechmount/_created/" rel="noopener" aria-label="pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 res-375-margin_top30">
                                            <div class="float-end res-320-margin_top30">
                                                <?php $terms = get_the_terms( $post->ID , 'project_category' );
                                                if ( is_array( $terms ) && ! is_wp_error( $terms ) ) {
                                                    foreach ($terms as $term) {
                                                        $term_link = get_term_link($term, 'project_category');
                                                        if (is_wp_error($term_link))
                                                            continue;
                                                        echo '<a href="#" class="ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-grey">' . $term->name . '</a> ';
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ttm-horizontal_sep width-100 margin_top30 margin_bottom30"></div>
                                    <div class="d-flex justify-content-between">
                                        <?php $prev_post = get_previous_post();
                                        if ( ! empty( $prev_post ) ) : ?>
                                            <a href="<?php echo get_permalink( $prev_post->ID); ?>" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-darkgrey">Previous</a>
                                        <?php endif; ?>
                                        <?php $next_post = get_next_post();
                                        if ( ! empty( $next_post ) ) : ?>
                                            <a href="<?php echo get_permalink( $next_post->ID); ?>" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-darkgrey">Next</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="row ttm-pf-single-related-wrapper margin_top50 mb_15">
                                    <div class="col-12">
                                        <h2>Related Work</h2>
                                    </div>
                                    <?php $related = get_posts( 
                                        array( 
                                            'post_type' => 'project',
                                            'category__in' => wp_get_post_categories($post->ID, 'project_category'), 
                                            'numberposts' => 3, 
                                            'orderby' => 'rand',
                                            'post__not_in' => array($post->ID) ) ); 

                                            if( $related ) 
                                            foreach( $related as $post ) { setup_postdata($post); 
                                        ?>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox-portfolio -->
                                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <?php if(has_post_thumbnail()):?> 
                                                        <a href="benoit-architecture.html"> <img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="image"></a>
                                                        <?php endif;?>
                                                    </div><!-- featured-thumbnail end-->
                                                    <div class="ttm-media-link">
                                                        <a href="<?php the_permalink(); ?>" class="ttm_link"><i class="ti ti-plus"></i></a>
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                                <div class="featured-content featured-content-portfolio">
                                                    <div class="featured-title">
                                                        <h3><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 10 ); ?></a></h3>
                                                    </div>
                                                    <span class="category">
                                                        <?php $terms = get_the_terms( $post->ID , 'project_category' );
                                                        if ( is_array( $terms ) && ! is_wp_error( $terms ) ) {
                                                            foreach ($terms as $term) {
                                                                $term_link = get_term_link($term, 'project_category');
                                                                if (is_wp_error($term_link))
                                                                    continue;
                                                                echo '<span>' . $term->name . '</span> ';
                                                            }
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                            </div><!-- featured-imagebox-portfolio -->
                                        </div>
                                    <?php 
                                    } 
                                    wp_reset_postdata(); 
                                    ?>
                                </div><!-- row end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Project-style-section-end-->
    </div>
    <!--site-main end-->

<?php
get_footer(); ?>