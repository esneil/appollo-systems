<?php
/**
 * Created by PhpStorm.
 * User: Esneil
 * Date: 1/7/2018
 * Time: 12:25 PM
 */

get_header();
?>

<!-- Hero Background SlideShow -->
<div id="hero-section" data-number="3" data-image-1="<?php echo get_theme_mod('header_slide1_url'); ?>"
     data-image-2="<?php echo get_theme_mod('header_slide2_url'); ?>"
     data-image-3="<?php echo get_theme_mod('header_slide3_url'); ?>" data-effect="fade"
     xmlns="http://www.w3.org/1999/html">
    <div class="hero-content">


    </div><!-- /.hero-content -->
</div>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">


                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                    <h2 class="text-center margin-bottom-10"><?php pll_e(get_theme_mod('page_entry_title')); ?></h2>
                    <div class="wprt-lines style-2 custom-1">
                        <div class="line-1"></div>
                    </div>

                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                    <p class="wprt-subtitle"><?php _e(get_theme_mod('page_entry_description'),"appollo"); ?></p>


                    <!-- ICONBOXS -->
                    <section class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80"
                                         data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->


                                <div class="col-md-4">
                                    <div class="wprt-icon-box accent-background rounded icon-effect-1 width-90">
                                        <div class="icon-wrap">
                                            <span class="dd-icon <?php echo get_theme_mod('first_page_icon'); ?>"></span>
                                        </div>
                                        <h3 class="dd-title font-size-18"><?php _e(get_the_title(get_theme_mod('first_page_title')),"appollo"); ?></h3>
                                        <p><?php _e(get_theme_mod('first_page_description')); ?></p>
                                        <p>
                                            <a href="<?php echo get_page_uri(get_page_by_title(get_the_title(get_theme_mod('first_page_title')))) ?>">...<?php _e('Read More') ?></a>
                                        </p>
                                    </div>
                                    <br>


                                    <div class="wprt-spacer" data-desktop="0"
                                         data-mobi="35" data-smobi="35"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="wprt-icon-box accent-background rounded icon-effect-1 width-90">
                                        <div class="icon-wrap">
                                            <span class="dd-icon <?php echo get_theme_mod('second_page_icon'); ?>"></span>
                                        </div>
                                        <h3 class="dd-title font-size-18"><?php _e(get_the_title(get_theme_mod('second_page_title')),"appollo"); ?></h3>
                                        <p><?php _e(get_theme_mod('second_page_description')); ?></p>
                                        <p>
                                            <a href="<?php echo get_page_uri(get_page_by_title(get_the_title(get_theme_mod('second_page_title')))) ?>">...<?php _e('Read More') ?></a>
                                        </p>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0"
                                         data-mobi="35" data-smobi="35"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="wprt-icon-box accent-background rounded icon-effect-1 width-90">
                                        <div class="icon-wrap">
                                            <span class="dd-icon <?php echo get_theme_mod('third_page_icon'); ?>"></span>
                                        </div>
                                        <h3 class="dd-title font-size-18"><?php _e(get_the_title(get_theme_mod('third_page_title')),"appollo"); ?></h3>
                                        <p><?php _e(get_theme_mod('third_page_description'),"appollo"); ?></p>
                                        <p>
                                            <a href="<?php echo get_page_uri(get_page_by_title(get_the_title(get_theme_mod('third_page_title')))) ?>">...<?php _e('Read More') ?></a>
                                        </p>
                                    </div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70"
                                         data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>


                    <!-- WORKS -->
                    <section class="wprt-section works parallax">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70"
                                         data-mobi="60" data-smobi="60"></div>
                                    <h2 class="text-center text-white margin-bottom-10"><?php _e(get_theme_mod('mini_slider_title'),"appollo"); ?></h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>
                                    <div class="wprt-spacer" data-desktop="50"
                                         data-mobi="40" data-smobi="40"></div>

                                    <div class="wprt-galleries-grid has-bullets bullet-style-2 bullet30 has-arrows arrow-position-2"
                                         data-layout="slider" data-column="3"
                                         data-column2="2" data-column3="2"
                                         data-column4="1" data-gaph="30"
                                         data-gapv="30">

                                        <div id="images-wrap" class="cbp">

                                            <?php for ($i = 1; $i <= 6; $i++) {
                                                $image_url = get_theme_mod('mini_slide' . $i . '_url');
                                                if ($image_url != '') {
                                                    ?>
                                                    <div class="cbp-item">
                                                        <div class="item-wrap">
                                                            <a class="zoom"
                                                               href="<?php echo $image_url; ?>"><i
                                                                        class="fa fa-arrows-alt"></i></a>
                                                            <img src="<?php echo $image_url; ?>"
                                                                 alt="image"/>
                                                        </div>
                                                    </div><!--/.cbp-item -->

                                                <?php }
                                            }
                                            ?>

                                        </div><!-- /#images-wrap -->
                                    </div><!--/.wprt-galleries-grid -->
                                </div>


                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70"
                                         data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="wprt-spacer" data-desktop="70"
                                     data-mobi="40" data-smobi="40"></div>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                    </section>


                    <!-- SERVICES -->
                    <section class="wprt-section service" id="components">
                        <div class="container-fluid padding-0">
                            <div class="row margin-0">
                                <div class="col-md-6 padding-0">
                                    <img src="<?php echo get_theme_mod('demo_options_image_url'); ?>"
                                         alt="image">
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6 padding-0">
                                    <div class="wprt-content-box style-2">
                                        <h2 class="margin-bottom-10"><?php _e(get_theme_mod('demo_options_title'),"appollo"); ?></h2>
                                        <div class="wprt-lines style-1 custom-2">
                                            <div class="line-1"></div>
                                        </div>
                                        <div class="wprt-spacer"
                                             data-desktop="25" data-mobi="25"
                                             data-smobi="25"></div>

                                        <ul class="wprt-list style-4 accent-color margin-top-10 margin-bottom-25">

                                            <P><?php _e(get_theme_mod('demo_options_description'),"appollo"); ?></P>


                                        </ul>
                                    </div><!-- /.wprt-content-box -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>


                    <img src="<?php echo get_theme_mod('customers_options_image_url'); ?>"
                         alt="image"/>


                    <div class="col-md-12">
                        <div class="wprt-spacer" data-desktop="70"
                             data-mobi="60" data-smobi="60"></div>
                        <h2 class="text-center text-white margin-bottom-10">
                            CONTACT</h2>
                        <div class="wprt-lines style-2 custom-1">
                            <div class="line-1"></div>
                        </div>


                        <div class="wprt-spacer" data-desktop="50"
                             data-mobi="40" data-smobi="40"></div>

                        <form action="./includes/contact/contact-process.php"
                              method="post" class="contact-form wpcf7-form"
                              style="margin:auto; max-width: 1200px">

                            <div class="wprt-contact-form-1">



                                                                    <span class="wpcf7-form-control-wrap name">
												<input type="text" tabindex="1" id="name" name="name" value=""
                                                       class="wpcf7-form-control" placeholder="Name *" required>
											</span>
                                <span class="wpcf7-form-control-wrap email">
												<input type="email" tabindex="2" id="email" name="email" value=""
                                                       class="wpcf7-form-control" placeholder="E-mail *" required>
											</span>
                                <span class="wpcf7-form-control-wrap phone">
												<input type="text" tabindex="3" id="phone" name="phone" value=""
                                                       class="wpcf7-form-control" placeholder="Phone Number">
											</span>
                                <span class="wpcf7-form-control-wrap subject">
												<input type="text" tabindex="4" id="subject" name="subject" value=""
                                                       class="wpcf7-form-control" placeholder="Subject *" required>
											</span>
                                <span class="wpcf7-form-control-wrap message">
												<textarea name="message" tabindex="5" cols="40" rows="10"
                                                          class="wpcf7-form-control wpcf7-textarea"
                                                          placeholder="Message" required></textarea>
											</span>
                                <div class="wrap-submit">
                                    <input type="submit" value="SEND MESSAGE"
                                           class="submit wpcf7-form-control wpcf7-submit"
                                           id="submit" name="submit">
                                </div>
                            </div>
                        </form>
                    </div><!-- /.col-md-8 -->

                    <?php
                    get_footer();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>