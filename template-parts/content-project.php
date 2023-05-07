
    <section class="ttm-row portfolio-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ttm-tabs ttm-tab-style-03">
                        <div class="d-lg-flex align-items-center justify-content-between">
                            <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-grey ttm-bg ttm-left-span res-991-padding_top50 res-991-padding_right30  res-991-padding_bottom30 res-991-mt_40  res-991-mr_20">
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
                                <li class="tab"><a href="#" data-filter=".Buildings">Buildings</a></li>
                                <li class="tab"><a href="#" data-filter=".Houses">Houses</a></li>
                                <li class="tab"><a href="#" data-filter=".Interior">Interior</a></li>
                                <li class="tab"><a href="#" data-filter=".Offices">Offices</a></li>
                            </ul>
                        </div>
                        <div class="content-tab">
                        <?php $query_args = array(
                            'post_type' => 'projects',
                            'posts_per_page' => 6,
                            'order' => 'rand',
                        );
                        ?>

                            <!-- content-inner -->
                            <div class="row isotope-project">
                                <?php $query = new WP_Query( $query_args );
                                if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="col-lg-4 col-md-4 col-sm-6 project_item Buildings Interior">
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
                                            <?php
                                                $categories = get_the_category();
                                                if ( !empty( $categories ) ):
                                                foreach($categories as $cat): 
                                            ?>
                                                <span><?php echo $cat->name;?></span>,
										    <?php endforeach; endif;?>
                                            </span>
                                        </div>
                                    </div><!-- featured-imagebox-portfolio -->
                                </div>
                                <?php endwhile; else: endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
