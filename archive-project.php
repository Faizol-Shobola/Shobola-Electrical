<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shobola_Electrical
 */

get_header();
?>
    <!-- page-title -->
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
        <!--grid-section-->
        <div class="ttm-row grid-section clearfix">
            <div class="container">
                <!-- row -->
                <?php if( have_posts() ) :  ?>
                                
                    <!-- content-inner -->
                    <div class="row ">
                        <?php while ( have_posts() ) : the_post(); ?>
                        <?php $terms = get_the_terms( $post->ID , 'project_category' );
                        if ( is_array( $terms ) && ! is_wp_error( $terms ) ) {
                            foreach ($terms as $term) {
                                $term_link = get_term_link($term, 'project_category');
                                if (is_wp_error($term_link))
                                    continue;
                            }
                        }
                        ?>
                        <div class="<?php echo 'col-lg-4 col-md-4 col-sm-6 project_item' . ' ' . $term->name; ?>">
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
                    <?php endwhile; ?>
                    </div>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php esc_html_e( 'Sorry, no project is available.' ); ?></p>
                <?php endif; ?>
                </div><!-- row end -->
            </div>
        </div>
        <!--grid-section end-->
        <!--pagination-section start-->
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
                echo '<div class="pagination justify-content-center">';
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
            }
            echo '</div>'
            ?>
        </div>
        <!--pagination-section end-->
        <!--financial-strategies-section -->
        <section class="ttm-row financial-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3>We Offer Financial Strategies & Superior Services</h3>
                        <div class=" margin_top30">
                            <a class="ttm-btn ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor padding_top15 padding_bottom15 " href="contact-us.html">Get A Quote<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--financial-strategies-section-End -->
    </div>
    <!--site-main end-->

<?php
get_footer(); ?>