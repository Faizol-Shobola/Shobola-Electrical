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
        <div class="ttm-page-title ttm-bg clearfix" style="background-image: url(images/contact.jpg);">
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
            <!--contact-info-section-->
            <section class="ttm-row contact-info-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="featured-icon-box icon-align-top-content style8">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-live-chat"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Chat With A Live.</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Lorem ipsum loream ip dolor sit amet, consectetur adipiscing elit,</p>
                                    </div>
                                </div>
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-textcolor-darkgreycolor" href="#">Live Chats<i class="fa fa-long-arrow-right ttm-icon_element-color-skincolor"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="featured-icon-box icon-align-top-content style8">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-interview"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Become A Partner</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Lorem ipsum loream ip dolor sit amet, consectetur adipiscing elit,</p>
                                    </div>
                                </div>
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-textcolor-darkgreycolor" href="#">Join With Us<i class="fa fa-long-arrow-right ttm-icon_element-color-skincolor"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="featured-icon-box icon-align-top-content style8">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-chat"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Customers FAQ</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Lorem ipsum loream ip dolor sit amet, consectetur adipiscing elit,</p>
                                    </div>
                                </div>
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-textcolor-darkgreycolor" href="#">Live Chats<i class="fa fa-long-arrow-right ttm-icon_element-color-skincolor"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--contact-info-section-end-->
            <!--form-section-->
            <section class="ttm-row form-section ttm-bgcolor-grey clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--section-title-->
                            <div class="section-title title-style-center_text margin_bottom30">
                                <div class="title-header">
                                    <h3>GET IN TOUCH</h3>
                                    <h2 class="title">Have A Questions Drop <span>Us Line!</span></h2>
                                </div>
                            </div>
                            <!--section-title-end-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class=" ttm-bgcolor-white p-40 res-991-margin_right0 ">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ttm-bgcolor-white p-40 res-991-margin_top30 ttm-bgcolor-white p-40 ">
                                <div class="featured-icon-box icon-align-top-content margin_bottom20 ">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-message"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content pt-2">
                                        <div class="featured-title ">
                                            <h3 class="margin_bottom0">Let’s Call or Email</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>info@example.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-icon-box icon-align-top-content margin_bottom20 ">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-design-team"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content pt-2">
                                        <div class="featured-title ">
                                            <h3 class="margin_bottom0">Be Creative Our Team</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>+1800 123 456 7890</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-icon-box icon-align-top-content margin_bottom20 ">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="fa fa-skype"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content pt-2">
                                        <div class="featured-title ">
                                            <h3 class="margin_bottom0">Call or Message</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>@skype.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--form-section-end-->
            <!--map-section-->
            <section class="ttm-row padding_zero-section mt_100 res-991-margin_top40 res-991-margin_bottom40 clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="featured-icon-box icon-align-before-content style9">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-location-1"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Mouton</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>4444 Raleight St Houston <br> TX 85201 USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="featured-icon-box icon-align-before-content style9 active">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-call-1"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Call us on</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>+1 800 555 44 00 (Toll free) <br> +1 800 4566 223</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="featured-icon-box icon-align-before-content style9">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-envelope"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Email Us On</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>supportteam@example.com <br> career@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--map-section-end-->
            <div id="google_map" class="google_map mt_90 res-991-margin_top0">
                <div class="map_container clearfix">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.242931146893!2d-0.08187978422864274!3d51.54544427964142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761c903640c869%3A0xe9bd89dfec683ad1!2sTottenham%20Rd%2C%20London%2C%20UK!5e0!3m2!1sen!2sin!4v1616562073091!5m2!1sen!2sin" height="550" width="100"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--site-main end-->


<!-- GET FOOTER CONTENT -->
<?php get_footer();?>