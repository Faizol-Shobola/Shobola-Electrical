<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shobola_Electrical
 */

?>

<!--footer start-->
<footer class="footer widget-footer clearfix">
            <div class="first-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 widget-area">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 widget-area">
                            <div class="featured-icon-box icon-align-before-content">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-darkgrey ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-message"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Subscribe Newsletter</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>stay in touch with us to get latest news.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 widget-area">
                            <div class="widget newsletter_widget clearfix res-991-padding_top30">
                                <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                                    <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                        <p><input type="email" name="email" placeholder="Your Email Address..." required=""></p>
                                        <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-darkgrey" type="submit">Submit<i class="fa fa-long-arrow-right"></i></button>
                                    </div>
                                    <div id="subscribe-msg"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer ttm-bgimage-yes bg-footer ttm-bg ttm-bgcolor-darkgrey">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area">
                            <div class="widget-latest-tweets mt_140 res-991-margin_top0 clearfix">
                                <div class="widgte-text">
                                    <?php if(is_active_sidebar('opening-hours')): ?>
                                    <?php dynamic_sidebar('opening-hours');?>
                                    <?php endif;?> 

                                    <?php if(is_active_sidebar('footer-info')): ?>
                                    <?php dynamic_sidebar('footer-info');?>
                                    <?php endif;?>

                                    <?php if(is_active_sidebar('social-media')): ?>
                                    <?php dynamic_sidebar('social-media');?>
                                    <?php endif;?>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area">
                            <div class="widget widget_nav_menu clearfix">
                                <?php if(is_active_sidebar('menu')): ?>
                                    <?php dynamic_sidebar('menu');?>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area">
                            <div class="widget widget-recent-post clearfix">
                                <h3 class="widget-title">Recent Posts</h3>
                                <ul class="widget-post ttm-recent-post-list">
                                    <?php $related = get_posts( 
                                        array(  
                                        'numberposts' => 2, 
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer-text ttm-bg copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="text-left">
                                    <span class="cpy-text"> 
                                        <?php if(is_active_sidebar('footer-copyright')):?>
                                        <?php dynamic_sidebar('footer-copyright');?>
                                        <?php endif;?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->
        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
