
    <section class="ttm-row portfolio-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ttm-tabs ttm-tab-style-03">
                        <div class="d-lg-flex align-items-center justify-content-between">
                            <div class="ttm-bg ttm-col-bgcolor-yes ttm-bg ttm-left-span res-991-padding_top50 res-991-padding_right30  res-991-padding_bottom30 res-991-mt_40  res-991-mr_20">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer spacing-1">
                                    <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <!-- section title -->
                                    <div class="section-title margin_bottom45">
                                        <div class="title-header">
                                            <h3>ABOUT PROJECTS</h3>
                                            <h2 class="title">Our Recent <span>Portfolio</span></h2>
                                        </div>
                                    </div><!-- section title end -->
                                </div>
                            </div>
                            <ul class="tabs portfolio-filter res-991-padding_bottom15 res-991-padding_top30">
                                <li class="tab active"><a href="#" data-filter="*"> All </a></li>
                            </ul>
                        </div>
                        <div class="content-tab">
                        <?php $query_args = array(
                            'post_type' => 'project',
                            'posts_per_page' => 6,
                            'order' => 'desc',
                        );
                        $query = new WP_Query( $query_args );
                        ?>

                        <?php if( $query->have_posts() ) :  ?>
                            
                            <!-- content-inner -->
                            <div class="row isotope-project">
                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
