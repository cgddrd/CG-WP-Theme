<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
        <meta charset="utf-8" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width" />

        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type='text/css' />

        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="site-container">

            <div id="title-bar">

                <div id="title-inner">

                    <div id="header">

                        <h2 class="logo">
                            <a href="index.php">
                                <?php bloginfo('name'); ?>
                            </a>
                        </h2>

                        <hr />

                        <ul class="social">

                            <li>
                                <a href="https://twitter.com/cgddrd">
                                            
                                            <i class="icon-twitter"></i>
                                    
                                </a>
                            </li>

                            <li>
                                <a href="http://www.linkedin.com/pub/connor-goddard/25/92/567">
     
                                            <i class="icon-linkedin"></i>
                      
                                </a>
                            </li>

                            <li>
                                <a href="https://github.com/cgddrd">
                  
                                            <i class="icon-github"></i>
                                
                                </a>
                            </li>

                            <li>
                                <a href="http://www.flickr.com/photos/cgoddard/">
                                   
                                            <i class="icon-flickr"></i>
                                   
                                </a>
                            </li>

                            <li>
                                <a href="mailto:hello@connorlukegoddard.com">
                                   
                                            <i class="icon-envelope"></i>
                                   
                                </a>
                            </li>

                        </ul>

                        <hr />

                        <ul class="nav-menu">
                            <?php wp_list_pages(array('title_li' => '')); ?>

                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="http://photo.connorlukegoddard.com">Photography</a>
                            </li>
                            <li>
                                <a href="#">CV</a>
                            </li>
                            <li>
                                <a href="http://wordwarz.connorlukegoddard.com">Wordwarz</a>
                            </li>
                        </ul>

                        <hr />

                        <div id="site-search">

                            <?php get_search_form(); ?>

                        </div>


                    </div>

                    <div id="footer">

                        <p>&#169; Connor Goddard 2013</p>
                        <p>All rights reserved.</p>

                    </div>

                </div>

            </div>

            <div id="scroll-bar">
                <span></span>
            </div>