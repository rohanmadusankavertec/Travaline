<?php

function mailsend() {
    if (isset($_POST['send'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $tele = $_POST['tel'];
        $nation = $_POST['national'];
        $msg = $_POST['msg'];

        if (empty($name) || empty($email) || empty($tele) || empty($nation) || empty($msg)) {

            echo'<p style="color:#f26522;"> * All Fields are Require </p>';
        } else {
            $to = "travaline@yahoo.com";
            $from = $email;

            $subject = "TravaLine - Contact Messages";

            $headers = "From: " . strip_tags($email) . "\r\n";
            $headers .= "Reply-To: " . strip_tags($email) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $message = '<html><body>';

            $message .= '<table width="100%"; rules="all" cellpadding="10">';

            $message .= "<tr>
                        <td colspan=2>
                        
                        Dear Sir,
                        <br /> <hr/>
                        Hi I am $name. My Email Address Is $email. My Phone Number is $tele.<br>
                        <hr /><br />
                        <u>My Message : </u><br>
                       
                        $msg
                       
                        </td></tr>";

            $message .= "<tr><td colspan=2 font='colr:#999999;'></td></tr>";

            $message .= "</table>";

            $message .= "</body></html>";

            mail($to, $subject, $message, $headers);

            echo'<p style="color:#f26522;"> * Message Sent </p>';
        }
    }
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Trava Line | Contact</title>

        <link rel="stylesheet" href="css/style.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <link href="css/font-awesome.css" rel="stylesheet">

        <!-- Latest compiled and minified JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="../js/jssor.slider.mini.js"></script>
        <!-- Owl Carousel Assets -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <script src="js/owl.carousel.js"></script>
        <script>
            $(document).ready(function () {

                $("#owl-demo").owlCarousel({
                    items: 4,
                    lazyLoad: true,
                    autoPlay: true,
                    navigation: true,
                    navigationText: ["", ""],
                    rewindNav: false,
                    scrollPerPage: false,
                    pagination: false,
                    paginationNumbers: false,
                });

            });
        </script>

    </head>

    <body>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <!-------------Top header--------------> 
        <header>



            <!-----------navigetion--------->

            <?php include 'navigation.php'; ?>

        </header>
        <!------------ slider--------->

        <img src="image/New-Office.jpg" style="width:100%; margin-top:-10%;">

        <!--      <div class="slider_bottom" style="margin-top: 3%;background-color: #cc99ff;height: 3%;">
                        <div class="container">
                        <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                <h2>Contact Us</h2>
                           <h5 style="color:#fff !important;">Trava Line</h5>
                            
                            </div>
                            
                        </div>
                    </div>
                </div>-->
        <!--    -----------------------------------------------------------------------    -->
        <!--        <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12" >
                <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top: 3%;background-color: #cca3e2;height: 50px;">
                            <div class="container">
                                <div class="row">
                                    <div style="text-align: center;">
                                            <h3>How To Find Out Us</h3>
                                    </div>
                                </div>
                                
                        </div>
                    <div style="text-align: center;margin-bottom: 10px;">
                        <h3 style="margin-bottom: 10px;">How To Find Out Us</h3>
                    </div>
                    
                    
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top: 3%;background-color: #cca3e2;height: 50px;">
        
        
                    <div style="text-align: center;">
                        <h3>Send Us Message</h3>
        
        
        
                    </div>
                </div>
                </div>
                </div>
                </div>-->

        <!--    -----------------------------------------------------------------------    -->            

        <!--        <div class="container" style="margin-bottom:100px;">
                    <div class="row">-->
        
        <div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1" style="margin-bottom:100px; margin-top: 20px;">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<!--                <div style="background-color: #cccccc;height: 50px;width: 100%;">
                    <h3 style="padding-left:35px;padding-top: 15px;">How To Find Us</h3>
                </div>-->
                <table style="background-color:#cccccc; height: 20px; width: 100%">
                            <tr>
                                <td>
                                    <h4 style="margin-left: 50px;">How To Find Us</h4>
                                </td>
                            </tr>
                        </table>
                <div class="map" style="margin-top: 12%;">
                    <!--<h3 style="padding-left:35px;">How To Find Us</h3>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.853429654679!
                            2d79.95896199999997!3d6.6650789999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
                            1s0x3ae248342e80037b%3A0xd8cf402526dd51ef!2sVertec+International+Pvt.+Limited!5e0!3m2!1sen!2slk!
                            4v1409887168138" class="com_map" width="100%" height="350px" style="border:1px solid #333;"></iframe>
                </div>


                <!--                        <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:60px;">
                                            <center>                
                                                <div class="fb-page" data-href="https://www.facebook.com/TRAVA-LINE-908235289261679/" data-tabs="timeline" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div> 
                                            </center>
                                        </div>-->



            </div>


            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<!--                <div style="background-color: #cccccc;height: 50px;width: 100%;">
                    <h3 style="padding-left:35px;padding-top: 15px;">Send Us Message</h3>
                </div>-->
                <table style="background-color:#cccccc; height: 20px; width: 100%">
                            <tr>
                                <td>
                                    <h4 style="margin-left: 50px;">Send Us Message</h4>
                                </td>
                            </tr>
                        </table>
                <div class="clear"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 booking" style="margin-top:50px;">

                    <form action="" method="post">
                        <fieldset class="the-fieldset">
                            <!--<legend class="the-legend">Connect With Us</legend>-->
                            <?php mailsend() ?>
                            <div class="col-lg-12 col-md-12">
                                <span>Your Name*</span>
                                <span><input type="username" class="form-control text-feld" id="userName" name="name"/></span>
                                <br>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="col-lg-6 col-md-6">
                                    <div style="margin-left: -14px;">
                                    <span>Your Email*</span>
                                    <span><input type="email" class="form-control text-feld" id="inputEmail3" name="email"/></span>
                                    </div>
                                    <br>
                                    
                                </div>
                                <div class="col-lg-6 col-md-6" style="">
                                     <div style="margin-left: -44px;">
                                    <span>Your Telephone*</span>
                                    <span><input type="text" style="width: 185px;border-radius:0px" class="form-control" id="telephone" name="tel"/></span>
                                     </div>
                                    <br>
                                </div>
                            </div>


                            <!--                                    <div class="col-lg-12">
                                                                    <span>Your Telephone*</span>
                                                                    <span><input type="text" class="form-control text-feld" id="telephone" name="tel"></span>
                                                                    <br>
                                                                </div>-->
                            <div class="col-lg-12 col-md-12">
                                <span>Nationality*</span>
                                <span><input type="text" class="form-control text-feld" id="nationality" name="national"/></span>
                                <br>
                            </div>


                            <div class="col-lg-12 col-md-12">
                                <span>Message*</span><br>
                                <span><textarea class="form-control text-feld" rows="4" name="msg"/></textarea></span>
                                <br>
                            </div>
                            <div class="clear"></div>


                            <div class="col-lg-12">
                                <label class="fa-btn btn-1 btn-1e">
                                    <input class="btn btn-info" type="submit" value="Send" name="send"/></label>

                            </div>
                            <br>
                        </fieldset>
                    </form>


                </div>



            </div>
            <!--                </div>
            
                        </div>-->
        </div>
        <div class="hidden-xs visible-md hidden-sm visible-lg  container-fluid" style="padding:0px; margin:0px 0px 0px 0px;">
            <img src="img/bottom_head.jpg" style="width:100%;">
        </div>
        <div class="hidden-xs hidden-md visible-sm hidden-lg  container-fluid" style="padding:0px; margin:0px 0px 0px 0px;">
            <img src="img/bottom_head.jpg" style="width:100%;">
        </div>
        <div class="hidden-lg hidden-md hidden-sm visible-xs container-fluid" style="padding:0px; margin:20px 0px 0px 0px;">
            <img src="img/bottom_head.jpg" style="width:100%;">
        </div>

        <?php include 'footer.php'; ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>   
    </body>
</html>
