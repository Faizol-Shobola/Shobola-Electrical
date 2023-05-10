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

        <!-- Banner -->
        <p class="rs-p-wp-fix"></p>
        <rs-module-wrap id="rev_slider_3_1_wrapper" data-alias="main-classic-03" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
            <rs-module id="rev_slider_3_1" style="" data-version="6.5.7">
                <rs-slides>
                    <?php
                    $slide_1 = get_field('slide_1');
                    if( $slide_1 ): ?>
                        <rs-slide style="position: absolute;" data-key="rs-6" data-title="Slide" data-thumb="<?php echo esc_url( $slide_1['background_image']['url'] ); ?>" data-in="o:0;" data-out="a:false;">
                            <img src="<?php echo esc_url( $slide_1['background_image']['url'] ); ?>" title="<?php echo esc_attr( $slide_1['background_image']['alt'] ); ?>" width="1920" height="840" class="rev-slidebg tp-rs-img" data-no-retina>
                            <!--
                                -->
                            <rs-layer id="slider-3-slide-6-layer-0" data-type="text" data-color="#FFFFFF" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:79px,79px,0,520px;y:m;yo:-105px,-105px,-134px,-34px;" data-text="w:normal;s:16,16,16,15;l:25,25,20,12;ls:1px,1px,0px,0px;fw:600;" data-vbility="t,t,t,f" data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:100;sp:500;sR:100;" data-frame_999="o:0;st:w;sR:8400;" style="z-index:8;font-family:'Poppins';text-transform:uppercase;"><?php echo ($slide_1['text']['layer_1']) ?>
                            </rs-layer>
                            <!--

                                -->
                            <rs-layer id="slider-3-slide-6-layer-1" data-type="text" data-color="#FFFFFF" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:79px,79px,0,0;y:m;yo:-42px,-42px,-77px,-89px;" data-text="w:normal;s:65,65,55,40;l:90,90,56,50;fw:800;" data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:180;sp:800;sR:180;" data-frame_999="o:0;st:w;sR:8020;" style="z-index:9;font-family:'inter';"> <?php echo ($slide_1['text']['layer_2']) ?>
                            </rs-layer>
                            <!--

                                -->
                            <rs-layer id="slider-3-slide-6-layer-2" data-type="text" data-color="#FFFFFF" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:79px,79px,0,0;y:m;yo:42px,42px,-11px,-32px;" data-text="w:normal;s:65,65,55,40;l:90,90,56,50;fw:800;" data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:260;sp:800;sR:260;" data-frame_999="o:0;st:w;sR:7940;" style="z-index:10;font-family:'inter';"><?php echo ($slide_1['text']['layer_3']) ?>
                            </rs-layer>
                            <!--

                                -->
                            <rs-layer id="slider-3-slide-6-layer-3" data-type="shape" data-rsp_ch="on" data-xy="xo:35px,35px,-238px,-146px;y:m;yo:-34px,-34px,33px,20px;" data-text="w:normal;s:20,20,12,7;l:0,0,15,9;" data-dim="w:7px,7px,3px,1px;h:260px,260px,162px,99px;" data-vbility="t,t,f,f" data-frame_0="x:50,50,31,19;" data-frame_1="st:110;sp:400;sR:110;" data-frame_999="o:0;st:w;sR:8490;" style="z-index:14;background-color:#e51f22;">
                            </rs-layer>
                            <!--

                                -->
                            <rs-layer id="slider-3-slide-6-layer-4" data-type="shape" data-rsp_ch="on" data-xy="xo:35px,35px,-281px,-173px;y:m;yo:-163px,-163px,-90px,-55px;" data-text="w:normal;s:20,20,12,7;l:0,0,15,9;" data-dim="w:200px,200px,125px,77px;h:7px,7px,3px,1px;" data-vbility="t,t,f,f" data-frame_0="x:50,50,31,19;" data-frame_1="st:110;sp:400;sR:110;" data-frame_999="o:0;st:w;sR:8490;" style="z-index:13;background-color:#e51f22;">
                            </rs-layer>
                            <!--

                                --><a id="slider-3-slide-6-layer-5" class="rs-layer ttm-btn" href="<?php echo ($slide_1['buttons']['button_1']['link']) ?>" target="_self" rel="nofollow" data-type="text" data-color="#FFFFFF" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:84px,84px,0,0;y:m;yo:144px,144px,68px,31px;" data-text="w:normal;s:14,14,14,13;l:20,20,14,13;fw:700;" data-padding="t:13,13,12,12;r:27,27,30,25;b:13,13,12,12;l:30,30,30,25;" data-border="bos:solid;boc:#FFFFFF;bow:2px,2px,2px,2px;" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:260;sp:500;sR:260;" data-frame_999="o:0;st:w;sR:8240;" data-frame_hover="c:#fff;bgc:#e51f22;boc:#e51f22;bos:solid;bow:2px,2px,2px,2px;" style="z-index:12;font-family:'inter';"><?php echo ($slide_1['buttons']['button_1']['text']) ?> <i class="fa fa-long-arrow-right"></i>
                            </a>
                            <!--

                                --><a id="slider-3-slide-6-layer-13" class="rs-layer ttm-btn" href="<?php echo ($slide_1['buttons']['button_2']['link']) ?>" target="_self" rel="nofollow" data-type="text" data-color="#fff" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:270px,270px,0,0;y:m;yo:144px,144px,124px,85px;" data-text="w:normal;s:14,14,14,13;l:20,20,14,13;fw:700;" data-padding="t:13,13,12,12;r:25,25,30,25;b:13,13,12,12;l:30,30,30,25;" data-border="bos:solid;boc:#e51f22;bow:2px,2px,2px,2px;" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:260;sp:500;sR:260;" data-frame_999="o:0;st:w;sR:8240;" data-frame_hover="c:#fff;bgc:#111111;boc:#111111;bos:solid;bow:2px,2px,2px,2px;" style="z-index:11;background-color:#e51f22;font-family:'inter';"><?php echo ($slide_1['buttons']['button_2']['text']) ?> <i class="fa fa-long-arrow-right"></i>
                            </a>
                            <!--

                                -->
                            <rs-layer id="slider-3-slide-6-layer-14" data-type="image" data-rsp_ch="on" data-xy="x:c;xo:-349px,-349px,-218px,-134px;y:m;yo:-169px,-169px,-105px,-64px;" data-text="w:normal;s:20,20,12,7;l:0,0,15,9;" data-dim="w:42px,42px,25px,15px;h:53px,53px,32px,19px;" data-vbility="t,t,f,f" data-frame_0="rY:360deg;" data-frame_1="e:back.out;st:310;sp:500;sR:310;" data-frame_999="o:0;st:w;sR:8190;" style="z-index:15;"><img src="http://shobolaelectrical.test/wp-content/uploads/2023/05/shobola-1-3.png" class="tp-rs-img" width="43" height="54" alt="rev-img" data-no-retina>
                            </rs-layer>
                            <!--
                            -->
                        </rs-slide>
                    <?php endif; ?>
                    <?php
                    $slide_2 = get_field('slide_2');
                    if( $slide_2 ): ?>
                        <rs-slide style="position: absolute;" data-key="rs-8" data-title="Slide" data-thumb="<?php echo esc_url( $slide_2['background_image']['url'] ); ?>" data-in="o:0;" data-out="a:false;">
                            <img src="<?php echo esc_url( $slide_2['background_image']['url'] ); ?>" title="<?php echo esc_url( $slide_2['background_image']['alt'] ); ?>" width="1920" height="840" class="rev-slidebg tp-rs-img" data-no-retina>
                            <!--
                                -->
                            <rs-layer id="slider-3-slide-8-layer-0" data-type="text" data-color="#FFFFFF" data-rsp_ch="on" data-xy="x:r,r,c,c;xo:74px,74px,0,520px;y:m;yo:-100px,-100px,-128px,-34px;" data-text="w:normal;s:16,16,16,15;l:25,25,20,12;ls:1px,1px,0px,0px;fw:600;" data-vbility="t,t,t,f" data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:100;sp:500;sR:100;" data-frame_999="o:0;st:w;sR:8400;" style="z-index:8;font-family:'Poppins';text-transform:uppercase;"><?php echo ($slide_1['text']['layer_1']) ?>
                            </rs-layer>
                            <!--

                                -->
                            <rs-layer id="slider-3-slide-8-layer-1" data-type="text" data-color="#FFFFFF" data-rsp_ch="on" data-xy="x:r,r,c,c;xo:74px,74px,0,0;y:m;yo:-40px,-40px,-77px,-89px;" data-text="w:normal;s:65,65,55,40;l:90,90,56,50;fw:800;" data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:180;sp:800;sR:180;" data-frame_999="o:0;st:w;sR:8020;" style="z-index:9;font-family:'inter';"><?php echo ($slide_1['text']['layer_2']) ?>
                            </rs-layer>
                            <!--

                                -->
                            <rs-layer id="slider-3-slide-8-layer-2" data-type="text" data-color="#FFFFFF" data-rsp_ch="on" data-xy="x:r,r,c,c;xo:74px,74px,0,0;y:m;yo:45px,45px,-11px,-32px;" data-text="w:normal;s:65,65,55,40;l:90,90,56,50;fw:800;" data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:260;sp:800;sR:260;" data-frame_999="o:0;st:w;sR:7940;" style="z-index:10;font-family:'inter';"><?php echo ($slide_1['text']['layer_3']) ?>
                            </rs-layer>
                            <!--

                                -->
                            <rs-layer id="slider-3-slide-8-layer-3" data-type="shape" data-rsp_ch="on" data-xy="x:r;xo:30px,30px,-238px,-146px;y:m;yo:-34px,-34px,33px,20px;" data-text="w:normal;s:20,20,12,7;l:0,0,15,9;" data-dim="w:7px,7px,3px,1px;h:260px,260px,162px,99px;" data-vbility="t,t,f,f" data-frame_0="x:50,50,31,19;" data-frame_1="st:110;sp:400;sR:110;" data-frame_999="o:0;st:w;sR:8490;" style="z-index:14;background-color:#e51f22;">
                            </rs-layer>
                            <!--

                                -->
                            <rs-layer id="slider-3-slide-8-layer-4" data-type="shape" data-rsp_ch="on" data-xy="x:r;xo:30px,30px,-281px,-173px;y:m;yo:-163px,-163px,-90px,-55px;" data-text="w:normal;s:20,20,12,7;l:0,0,15,9;" data-dim="w:200px,200px,125px,77px;h:7px,7px,3px,1px;" data-vbility="t,t,f,f" data-frame_0="x:50,50,31,19;" data-frame_1="st:110;sp:400;sR:110;" data-frame_999="o:0;st:w;sR:8490;" style="z-index:13;background-color:#e51f22;">
                            </rs-layer>
                            <!--

                                --><a id="slider-3-slide-8-layer-5" class="rs-layer ttm-btn" href="<?php echo ($slide_2['buttons']['button_1']['link']) ?>" target="_self" rel="nofollow" data-type="text" data-color="#FFFFFF" data-rsp_ch="on" data-xy="x:r,r,c,c;xo:260px,260px,0,0;y:m;yo:144px,144px,62px,31px;" data-text="w:normal;s:14,14,14,13;l:20,20,14,13;fw:700;" data-padding="t:13,13,12,12;r:27,27,30,25;b:13,13,12,12;l:30,30,30,25;" data-border="bos:solid;boc:#FFFFFF;bow:2px,2px,2px,2px;" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:260;sp:500;sR:260;" data-frame_999="o:0;st:w;sR:8240;" data-frame_hover="c:#fff;bgc:#e51f22;boc:#e51f22;bos:solid;bow:2px,2px,2px,2px;" style="z-index:12;font-family:'inter';"><?php echo ($slide_2['buttons']['button_1']['text']) ?> <i class="fa fa-long-arrow-right"></i>
                            </a>
                            <!--

                                --><a id="slider-3-slide-8-layer-13" class="rs-layer ttm-btn" href="<?php echo ($slide_2['buttons']['button_2']['link']) ?>" target="_self" rel="nofollow" data-type="text" data-color="#fff" data-rsp_ch="on" data-xy="x:r,r,c,c;xo:74px,74px,0,0;y:m;yo:144px,144px,120px,85px;" data-text="w:normal;s:14,14,14,13;l:20,20,14,13;fw:700;" data-padding="t:13,13,12,12;r:25,25,30,25;b:13,13,12,12;l:30,30,30,25;" data-border="bos:solid;boc:#e51f22;bow:2px,2px,2px,2px;" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:260;sp:500;sR:260;" data-frame_999="o:0;st:w;sR:8240;" data-frame_hover="c:#fff;bgc:#111111;boc:#111111;bos:solid;bow:2px,2px,2px,2px;" style="z-index:11;background-color:#e51f22;font-family:'inter';"><?php echo ($slide_2['buttons']['button_2']['text']) ?> <i class="fa fa-long-arrow-right"></i>
                            </a>
                            <!--

                                --><a id="slider-3-slide-8-layer-18" class="rs-layer ttm_prettyphoto" href="https://www.youtube.com/watch?v=7e90gBu4pas" target="_self" rel="nofollow" data-type="text" data-color="#fff" data-rsp_ch="on" data-xy="x:c;xo:350px,350px,520px,320px;y:m;yo:-165px,-165px,25px,15px;" data-text="w:normal;s:25,25,15,9;l:55,55,34,20;a:center;" data-dim="w:55px,55px,34px,20px;h:55px,55px,34px,20px;" data-vbility="t,t,f,f" data-frame_0="rY:360deg;" data-frame_1="e:back.out;st:230;sp:500;sR:230;" data-frame_999="o:0;st:w;sR:8270;" data-frame_hover="c:#fff;bgc:#e51f22;" style="z-index:16;background-color:#111111;font-family:'Roboto';"><i class="fas fa-play"></i>
                            </a>
                            <!--
                            -->
                        </rs-slide>
                    <?php endif; ?>
                </rs-slides>
            </rs-module>
        </rs-module-wrap>
        <!-- Banner end-->
         <!--site-main start-->
         <div class="site-main">
            <!--top-section-->
            <section class="ttm-row top-section clearfix">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="row mt_160 res-991-margin_top_0 g-0">
                                <div class="col-lg-6">
                                    <div class="ttm-bgcolor-darkgrey padding_top40 padding_left50 padding_right50 padding_bottom60 res-320-padding_top30 res-320-padding_bottom30 res-320-padding_lr15 margin_left30 margin_right30 position-relative column-title">
                                        <!--col-title -->
                                        <div class="col-title section-title">
                                            <h2 class="ttm-textcolor-whitecolor"> In Our Work We Have Pride, Quality Is What We Provide.<span>We Build</span> Tomorrow</h2>
                                            <p>BuildTab is one of the largest construction organization of nation and ranked among the world's 15 top contractors. Address different segments.&nbsp;<a class="ttm-textcolor-skincolor" href="#">Read More</a></p>
                                        </div>
                                        <!--col-title-end -->
                                        <div class=" padding_top30 mb_120 res-575-margin_bottom0 ">
                                            <!-- <img class="img-fluid" src="images/single-img1.jpg" alt="single-img1"> -->
                                            <div class="d-flex ttm-fid inside style5 align-items-center justify-content-center">
                                                <div class="ttm-fid-contents">
                                                    <h4 class="ttm-fid-inner d-flex align-items-center">
                                                        <span data-appear-animation="animateDigits" data-from="0" data-to="25" data-interval="3" data-before="" data-before-style="sup" data-after="+" data-after-style="sub" class="numinate">25</span>+
                                                        <span class="ttm-fid-title">Years Of Experiance</span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layer-content">
                                        <div class="fid-box-style">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="featured-icon-box icon-align-top-content style1">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md">
                                                        <i class="flaticon flaticon-renovation"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h3>Building Renovation Maintenance</h3>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>We've team of skilled people with different maintenance experts specialties</p>
                                                    </div>
                                                    <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-textcolor-darkgreycolor" href="general-builder.html">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="featured-icon-box icon-align-top-content style1">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md">
                                                        <i class="flaticon flaticon-construction-2"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h3>House Construction Remodeling</h3>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>The variety of tasks that help create safe and comfortable living environment</p>
                                                    </div>
                                                    <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-textcolor-darkgreycolor" href="house-extensions.html">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--top-section-end-->
            <!-- about-section -->
            <section class="ttm-row Lifestyle-section clearfix ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="padding_top20 ">
                            <div class="section-title">
                                <div class="title-header">
                                    <h3>ABOUT COMPANY</h3>
                                    <h2 class="title">We're Leading Company For Urban <span>Lifestyle</span></h2>
                                </div>
                                <div class="title-desc">
                                    <p>BuildTab has provided a hassle-free, home-building solutions with its unique sustainable development projects & environment-friendly practices. It has a large scale presence in international.</p>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col-sm-6">
                                    <ul class="ttm-list ttm-list-style-icon d-grid ttm-list-icon-color-skincolor">
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Project Quality Management</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">The Ability to Delegate Tasks</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">An Ability to Prioritize Activity</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Robust Quality Management</span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="ttm-list ttm-list-style-icon  d-grid ttm-list-icon-color-skincolor">
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Possess Problem Solving Skills</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Run a Cost-Effective Business</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Regulations Governing Energy</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Robust Quality Management</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="margin_top20">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark margin_right20 margin_top15" href="about-us.html">Learn More </a>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor  margin_top15" href="services-1.html">Services
                                    </a>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ttm_single_image-wrapper text-center imagestyle-one res-1199-padding_top70 mt-50 ">
                                <img class="img-fluid auto_size" src="https://themetechmount.com/html/buildtab/images/single-img2.jpg" alt="single-02" height="412" width="512">
                                <div class="ttm_single_image_text">
                                    <p>The only direction not represented in <br> their construction was it is vertical</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--about-section-end-->
            <!--service-section-->
            <section class="ttm-row service-one-section ttm-bgimage-yes bg-img1 ttm-bg ttm-bgcolor-darkgrey clearfix">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--section-title -->
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <h3>Best Services</h3>
                                    <h2 class="title">Unvarying Quality <span>Services</span></h2>
                                </div>
                            </div>
                            <!--section-title-end -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="featured-icon-box icon-align-top-content style2">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md ttm-icon_element-color-skincolor">
                                                <i class="flaticon flaticon-workers"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Construction Services</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Uncompromised level of quality throughout the work</p>
                                            </div>
                                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="general-builder.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="featured-icon-box icon-align-top-content style2">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md ttm-icon_element-color-skincolor">
                                                <i class="flaticon flaticon-blueprint-1"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Maintenance Services</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Tailored as per the requirements of an individual one</p>
                                            </div>
                                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="house-extensions.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="featured-icon-box icon-align-top-content style2 active">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md ttm-icon_element-color-skincolor">
                                                <i class="flaticon flaticon-house"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Building Sustainability</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Desire to carry activities without depleting resources</p>
                                            </div>
                                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="electrical-services.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="featured-icon-box icon-align-top-content style2">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md ttm-icon_element-color-skincolor">
                                                <i class="flaticon flaticon-construction"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Design And Estimating</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Decide how long will take you to perform small design task.</p>
                                            </div>
                                            <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="civil-structure.html">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-one ttm-bgcolor-dark">
                                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                        <div class="layer-content">
                                            <div class="featured-content padding_top145 padding_bottom30 padding_left30 padding_right30 margin_top15 margin_bottom15">
                                                <div class="featured-title">
                                                    <h3>Expert Mechanical</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Expertise of all our qualified builders and hardworking employees to offer excellence in terms of provided the following services.</p>
                                                </div>
                                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="about-us-2.html">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <div class="featured-icon-box icon-align-top-content style2">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md ttm-icon_element-color-skincolor">
                                                        <i class="flaticon flaticon-building-1"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h3>House Planning</h3>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>Uncompromised level of quality throughout the work</p>
                                                    </div>
                                                    <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="disaster-response.html">Learn More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="featured-icon-box icon-align-top-content style2">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md ttm-icon_element-color-skincolor">
                                                        <i class="flaticon flaticon-mixer-truck"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h3>General Contracting</h3>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>The outside or all of the external faces of a building</p>
                                                    </div>
                                                    <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-skincolor" href="general-builder.html">Learn More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--service-section-end-->
            <!--portfolio-section-->
            <?php get_template_part( 'template-parts/content', 'project' ); ?>
            <!--portfolio-section-end-->
            <!-- testimonial section -->
            <section class="ttm-row testimonial-section ttm-bgimage-yes bg-img2 ttm-bg ttm-bgcolor-grey clearfix">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-6">
                            <!-- section title -->
                            <div class="section-title ">
                                <div class="title-header">
                                    <h3>CUSTOMER TESTIMONIALS</h3>
                                    <h2 class="title"> What Are They Saying About Our <span>Services</span></h2>
                                </div>
                            </div><!-- section title end -->
                            <!-- col-img-bg-img-two -->
                            <div class="ttm-bgcolor-white padding_top40  padding_bottom15 padding_left50 padding_right50 margin_top45">
                                <div class="layer-content">
                                    <div class="slick_slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":false, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 1}},{"breakpoint":840,"settings":{"slidesToShow": 1}}]}'>
                                        <?php get_template_part( 'template-parts/content', 'testimonial2')?>    
                                    </div>
                                    <div class="padding_top30 res-991-p-0">
                                        <div class="ttm-horizontal_sep width-100 margin_top10 res-991-margin_top25 margin_bottom30"></div>
                                        <div class="featured-icon-box icon-align-before-content">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-size-lg ttm-icon_element-onlytxt ttm-icon_element-color-skincolor">
                                                    <i class="flaticon flaticon-customer-service"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-desc">
                                                    <p class="ttm-textcolor-darkgreycolor fs-16">If you have any questions or need help contact with our team, or call<strong><a class="ttm-textcolor-darkgreycolor" href="contact-us.html"> (003) 123 456 7890</a></strong> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6  ">
                            <div class="row ttm-boxes-spacing-9px align-items-end">
                                <div class="col-6 res-991-w-100 ttm-box-col-wrapper">
                                    <div class="ttm-bg ttm-bgcolor-skincolor ttm-col-bgimage-yes col-bg-img-two">
                                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                        <div class="layer-content">
                                            <div class="featured-content padding_top70 padding_bottom70 padding_left30">
                                                <div class="featured-title">
                                                    <h3 class="fs-23">Transforming The Creativity Into Best Civil Construction! Services!</h3>
                                                </div>
                                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right" href="general-builder.html">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 res-991-w-100 ttm-box-col-wrapper">
                                    <img class="img-fluid margin_top30 res-991-margin_top_0" src="https://themetechmount.com/html/buildtab/images/single-img3.jpg" alt="single-img3">
                                </div>
                            </div>
                            <div class="row ttm-boxes-spacing-9px ">
                                <div class="col-6 res-991-w-100 ttm-box-col-wrapper">
                                    <img class="img-fluid" src="https://themetechmount.com/html/buildtab/images/single-img4.jpg" alt="single-img4">
                                </div>
                                <div class="col-6 res-991-w-100 ttm-box-col-wrapper">
                                    <div class="ttm-bg ttm-bgcolor-darkgrey ttm-col-bgimage-yes col-bg-img-three">
                                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                        <div class="layer-content">
                                            <div class="featured-content padding_top65 padding_left10 padding_bottom70 padding_left30">
                                                <div class="featured-title">
                                                    <h3 class="fs-23">Let's Renovate Incomplete Dreams, That Must Be <br> Fulfilled!</h3>
                                                </div>
                                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right" href="civil-structure.html">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial section-end-->
            <!-- image-section-->
            <section class="ttm-row image-section ttm-bgimage-yes bg-img3 ttm-bg ttm-bgcolor-dark clearfix">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section title -->
                            <div class="section-title style3 ">
                                <h4 class="title border-rad_5">We’re Here to Help You</h4>
                                <h2 class="title">We Offer The Most Complete <br> House <span>Renovating </span> Services.</h2>
                                <div class="title-desc">
                                    <p>Constructor explains how you can enjoy high end flooring trends like textured wood and with new <br> laminate flooring. As the general contractor.</p>
                                </div>
                            </div><!-- section title end -->
                            <div class="ttm-play-icon-animation ttm-play-icon-animation-skincolor position-relative d-flex style2">
                                <a href="https://youtu.be/7e90gBu4pas" target="_self" class="ttm_prettyphoto">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                        <i class="fa fa-play ttm-textcolor-skincolor"></i>
                                    </div>
                                </a>
                                <div class="ttm-play-icon-title">
                                    <h3 class="ttm-textcolor-white"> How It Works! </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- image-section-end-->
            <!-- progress-bar-section-->
            <section class="ttm-row progressbar-section ttm-bg bg-layer-equal-height ttm-bgcolor-grey clearfix">
                <div class="container">
                    <div class="row g-0 padding_top50 ttm-bgcolor-grey">
                        <div class="col-lg-6">
                            <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-grey ttm-bg ttm-left-span padding_top70 padding_right70 padding_bottom30 padding_left15 res-991-padding_lr15 res-1199-padding_left30 ">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <!--section-title -->
                                    <div class="section-title ">
                                        <div class="title-header">
                                            <h3>WHY CHOOSE US</h3>
                                            <h2 class="title">Can Go To
                                                <span>Extra Miles</span> <br> To Get Job Done! </h2>
                                        </div>
                                        <div class="title-desc">
                                            <p> Each of our services are delivered collaboratively with the goal to maximize value, minimize waste and make sure everyone home.
                                            </p>
                                        </div>
                                    </div>
                                    <!--section-title-end -->
                                    <!--featured-icon-box-->
                                    <div class="featuredbox-number">
                                        <!--featured-icon-box-->
                                        <div class="featured-icon-box icon-align-before-content style4">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-md ttm-icon_element-style-square">
                                                    <i class="ttm-num ti-info"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Project Conception</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>A Conception is the stage where ideas are at their most fluid creates construction process.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--featured-icon-box end-->
                                        <!--featured-icon-box-->
                                        <div class="featured-icon-box icon-align-before-content style4">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-md ttm-icon_element-style-square">
                                                    <i class="ttm-num ti-info"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>The Design Process</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Once you have finally completed bending the rules of a reality to bring your client’s dream.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--featured-icon-box end-->
                                        <!--featured-icon-box-->
                                        <div class="featured-icon-box icon-align-before-content style4">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-md ttm-icon_element-style-square">
                                                    <i class="ttm-num ti-info"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>A Plan Procurement</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p> Next is procurement which is the most straight forward step in the construction processes.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--featured-icon-box end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- ttm-col-bg-six-->
                            <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-six z-index-2">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content">
                                </div>
                            </div>
                            <!-- ttm-col-bg-six-end-->
                            <img class="img-fluid ttm-equal-height-image w-100" src="images/bg-image/col-bgimage-6.jpg" alt="bg-image">
                        </div>
                    </div>
                    <div class="margin_top90 padding_bottom30 res-991-margin_top50">
                        <div class="padding_left15 padding_right15">
                            <h3 class="title">Our Valuable <span>Clients</span></h3>
                        </div>
                        <div class="row slick_slider" data-slick='{"slidesToShow": 6, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}},{"breakpoint":575,"settings":{"slidesToShow": 2}},{"breakpoint":400,"settings":{"slidesToShow": 1}}]}'>
                            <div class="col-lg-12">
                                <div class="client-box style1">
                                    <div class="client-thumbnail">
                                        <img class="img-fluid auto_size" width="160" height="98" src="https://themetechmount.com/html/buildtab/images/client/client-01.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="client-box style1">
                                    <div class="client-thumbnail">
                                        <img class="img-fluid auto_size" width="160" height="98" src="https://themetechmount.com/html/buildtab/images/client/client-02.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="client-box style1">
                                    <div class="client-thumbnail">
                                        <img class="img-fluid auto_size" width="160" height="98" src="https://themetechmount.com/html/buildtab/images/client/client-03.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="client-box style1">
                                    <div class="client-thumbnail">
                                        <img class="img-fluid auto_size" width="160" height="98" src="https://themetechmount.com/html/buildtab/images/client/client-04.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="client-box style1">
                                    <div class="client-thumbnail">
                                        <img class="img-fluid auto_size" width="160" height="98" src="https://themetechmount.com/html/buildtab/images/client/client-05.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="client-box style1">
                                    <div class="client-thumbnail">
                                        <img class="img-fluid auto_size" width="160" height="98" src="https://themetechmount.com/html/buildtab/images/client/client-06.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="client-box style1">
                                    <div class="client-thumbnail">
                                        <img class="img-fluid auto_size" width="160" height="98" src="https://themetechmount.com/html/buildtab/images/client/client-07.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div><!-- row end -->
                    </div>
                </div>
            </section>
            <!-- progress-bar-section-end-->
            <!--Blog-section-->
            <section class="ttm-row blog-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section title -->
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <h3>OUR BLOG</h3>
                                    <h2 class="title"> Our Recent News & <span>Blog</span></h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                    <div class="row slick_slider mb_15" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":true, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 2}} , {"breakpoint":900,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                        <?php get_template_part( 'template-parts/content', 'blog')?>    

                    </div>
                </div>
            </section>
            <!--Blog-section-end-->
        </div>
        <!--site-main end-->

<!-- GET FOOTER CONTENT -->
<?php get_footer();?>