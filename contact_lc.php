<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php 
            require 'include/head.php';
        ?>
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
            
            <section class="contact-lc-page">
                <div class="contact-lc-main">

                
                    <!-- Logo & Title -->
                    <div class="row logo-row title-contact-lc">
                        <div class="text-center lc-fname">
                            PARTH
                        </div>
                        <div class="logo-img">
                            <img src="img/Logo_Gradient_BRP-02.svg" alt="Liquid Charcoal Logo">
                        </div>
                        <div class="text-center lc-lname">
                            <span>PATEL</span>
                        </div>
                    </div>

                    <!-- other content -->
                    <div class="row contact-lc-form">
                        <form action="send_message.php" class="contact-lc-form row col-6 col-offset-left-3 col-sml-12 col-remove-offset-left" method="post">
                            <div class="col-12 row field-group">
                                <label for="name">Name : </label>
                                <input type="text" name="name" id="name">
                            </div>

                            <div class="col-12 row field-group">
                                <label for="email">Email : </label>
                                <input type="text" name="email" id="email">
                            </div>
                            <div class="col-12 row field-group">
                                <label for="msg-box">Message : </label>
                                <textarea name="msg-box" id="msg-box" cols="30" rows="8"></textarea>
                            </div>
                            <div class="col-12 row send-btn">
                                <input type="submit" value="Send Message" class="btn">
                            </div>

                        </form>
                    </div> 


                </div>
            </section>
        </section>



        <script src="js/liquidcharcoal-script.js" async defer></script>
    </body>
</html>
