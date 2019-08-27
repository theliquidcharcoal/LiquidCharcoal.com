<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php 
            require 'include/head.php';
            
        ?>
        <!-- Embed Behance Styles -->
        <link rel="stylesheet" type="text/css" media="all" href="css/embed.behance.css"/>
        
        <!-- jQuery lib -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <!-- jQuery Easing lib (optional) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>

        <!-- Embed Behance Javascript -->
        <script type="text/javascript" src="js/embed.behance.js"></script>

    </head>
    <body>
        <div class="page-border-top"></div>
        <div class="page-border-bot"></div>
        <div class="page-border-rt"></div>
        <div class="page-border-lt"></div>
        <div class="bg-logo"></div>
        <section class="container">
            
            <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <header>
                <!-- <div class="logo"><img src="img/Logo_Gradient_BRP-02.svg" alt="Liquid Charcoal Logo"></div> -->
                <?php require "include/navbar.php"; ?>
            </header>
            
            <section class="portfolio-page">
                <div class="portfolio-main">

                
                    <!-- Logo -->
                    
                    <div class="port-logo text-center">
                        <a href="www.liquidcharcoal.com" class="text-center"><img src="img/Logo_Gradient_BRP-02.svg" alt="Liquid Charcoal Logo"></a>
                    </div>

                    <!-- Case Study Box -->
                    <section class="case-study-box" id="case-study-box">
                        <ul>
                            <li>
                                <figure>
                                <!-- Photo by Quentin Dr on Unsplash -->
                                    <img src="img/case_study_img/pp_cs_Page_6.jpg" alt="PetGuard - A human centered application Case Study:">
                                        <!-- <figcaption>
                                            <h3></h3>
                                        </figcaption> -->
                                </figure>
                                <p>
                                PetGuard - A human centered application Case Study.
                                </p>
                                <a href="portfolio/caseStudy/petGuard">Case Study</a>
                            </li>

                            <li>
                                <figure>
                                <!-- Photo by Quentin Dr on Unsplash -->
                                    <img src="img/case_study_img/pp_cs_Page_5.jpg" alt="Malack - An mobile app development Case Study">
                                        <!-- <figcaption>
                                            <h3></h3>
                                        </figcaption> -->
                                </figure>
                                <p>
                                    Malack - An mobile app development Case Study.
                                </p>
                                <a href="portfolio/caseStudy/malack">Case Study</a>
                            </li>

                            <li>
                                <figure>
                                <!-- Photo by Quentin Dr on Unsplash -->
                                    <img src="img/case_study_img/pp_cs_Page_4.jpg" alt="Swagat Herbals - A web development Case Study">
                                        <!-- <figcaption>
                                            <h3></h3>
                                        </figcaption> -->
                                </figure>
                                <p>
                                    Swagat Herbals - A web development Case Study.
                                </p>
                                <a href="portfolio/caseStudy/sherbal/swagat_casestudy.pdf">Case Study</a>
                            </li>

                            <li>
                                <figure>
                                <!-- Photo by Quentin Dr on Unsplash -->
                                    <img src="img/case_study_img/pp_cs_Page_3.jpg" alt="Bezier Control with leap motion - Case Study">
                                        <!-- <figcaption>
                                            <h3></h3>
                                        </figcaption> -->
                                </figure>
                                <p>
                                    Bezier Control with leap motion - Case Study.
                                </p>
                                <a href="portfolio/caseStudy/bezierControl/leapmotion.pdf">Case Study</a>
                            </li>

                            <li>
                                <figure>
                                <!-- Photo by Quentin Dr on Unsplash -->
                                    <img src="img/case_study_img/pp_cs_Page_2.jpg" alt="Addiction clock - A creative coding with p5.js Case Study">
                                        <!-- <figcaption>
                                            <h3></h3>
                                        </figcaption> -->
                                </figure>
                                <p>
                                    Addiction clock - A creative coding with p5.js Case Study
                                </p>
                                <a href="portfolio/caseStudy/addictionClock/addictionClock.pdf">Case Study</a>
                            </li>

                            <li>
                                <figure>
                                <!-- Photo by Quentin Dr on Unsplash -->
                                    <img src="img/case_study_img/pp_cs_Page_1.jpg" alt="TravelApp- A Case Study:">
                                        <!-- <figcaption>
                                            <h3></h3>
                                        </figcaption> -->
                                </figure>
                                <p>
                                    TravelApp- A Case Study:
                                    A  UX Design project
                                </p>
                                <a href="portfolio/caseStudy/travelApp/travelApp.pdf">Case Study</a>
                            </li>
                            

                        </ul>
                    </section>

                    <!-- Seperator section -->

                    <div class="divider">
                        <span></span>
                        <span> Other work from Behance. </span>
                        <span></span>
                    </div>

                    <!-- other content -->
                
                    <div class="container"> 
                        <div class="">
                            <!-- THE BEHANCE PORTFOLIO WILL BE PRINTED IN HERE -->
                            <div class="behance-container"></div>
                        </div>

                        <!-- Script -->
                        <script>
                            $(document).ready(function() {

                                $('.behance-container').embedBehance({

                                    // behance API Key
                                    apiKey: '6LvrPVSTUwBL4593L9MgHiGTT27IXdEp',

                                    // Behance Username
                                    userName: 'theliquidcharcoal',
                                    infiniteScrolling: true,



                                });

                            });

                        </script>
                          
                    </div>
                    
                    </div>
                </div>
            </section>
        </section>

        
        <?php include "include/quick_contact_box.php"; ?>
        <script src="js/liquidcharcoal-script.js" async defer></script>
    </body>
</html>
