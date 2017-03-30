<?php
if (isset($_POST['service'])) {
    $stype = $_POST['service'];

    if (isset($_POST['adult'])) {
        $adult = $_POST['adult'];
    }
    if (isset($_POST['children'])) {
        $children = $_POST['children'];
    }
    if (isset($_POST['infant'])) {
        $infant = $_POST['infant'];
    }

    $returnValue = false;
    $valueReturn = "";
    $valueOneWay = "";
    $valueTwoWay = "";
    if (isset($_POST['way_type'])) {
        $returnValue = $_POST['way_type'];
        if ($returnValue == "Return") {
            $valueReturn = "Checked";
        } else if ($returnValue == "Oneway") {
            $valueOneWay = "Checked";

            ;
        } else if ($returnValue == "Twoway") {
            $valueTwoWay = "Checked";
        }
    }
    $from = $_POST['from'];
    $to = $_POST['to'];
    $checkin = $_POST['checkin'];
    if (isset($_POST['checkout'])) {
        $checkout = $_POST['checkout'];
    }

    $checkdates = "";
    if (isset($_POST['subject1'])) {
        $checkdates = "Checked";
    }


    //header("Location: booking.php?page=booking#booking");
}
?>


<?php

function mailsend() {
    if (isset($_POST['send'])) {
        if (isset($_POST['trip'])) {
            $trip = $_POST['trip'];
        } else {
            $trip = "";
        }
        if (isset($_POST['check_in'])) {
            $check_in = $_POST['check_in'];
        } else {
            $check_in = "";
        }

        $status = "";
        if ($trip == "Return" || $trip = "TwoWay") {
            if (isset($_POST['check_out'])) {
                $status = "ON";
            } else {
                $status = "OFF";
            }
        } else if ($trip == "OneWay") {
            $status = "ON";
        }

        if (isset($_POST['check_out'])) {
            $check_out = $_POST['check_out'];
        } else {
            $check_out = "";
        }

        if (isset($_POST['from_'])) {
            $from_ = $_POST['from_'];
        } else {
            $from_ = "";
        }

        if (isset($_POST['to_'])) {
            $to_ = $_POST['to_'];
        } else {
            $to_ = "";
        }
        if (isset($_POST['adult_'])) {
            $adult_ = $_POST['adult_'];
        } else {
            $adult_ = "";
        }

        if (isset($_POST['children_'])) {
            $children_ = $_POST['children_'];
        } else {
            $children_ = "";
        }
        if (isset($_POST['infant_'])) {
            $infant_ = $_POST['infant_'];
        } else {
            $infant_ = "";
        }

        if (isset($_POST['ser_class'])) {
            $ser_class = $_POST['ser_class'];
        } else {
            $ser_class = "";
        }


        $flexible = "";
        if (isset($_POST['subject1[]'])) {
            foreach ($_POST['subject1[]'] as $_subjectValue) {
                $flexible = $flexible . ' - ' . $_subjectValue;
            }
        }

        if (isset($_POST['name'])) {
            $name = $_POST['name'];
        } else {
            $name = "";
        }

        if (isset($_POST['number'])) {
            $number = $_POST['number'];
        } else {
            $number = "";
        }

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            $email = "";
        }

        if (isset($_POST['address'])) {
            $address = $_POST['address'];
        } else {
            $address = "";
        }

        if (empty($trip) || empty($check_in) || empty($from_) || empty($to_) || empty($ser_class) || empty($adult_) || ($status == "OFF")) {

            echo'<p style="color:#f26522;"> * All Fields are Require </p>';
        } else {
            $to = "travaline@yahoo.com";
            $from = $email;

            $subject = "TravaLine - Flight Booking";

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
                        Hi, I am $name. My Email Address Is $email. My Phone Number is $number. My Live Town is $address. <br>
                        <hr /><br />
                        <u>Booking Flight Tickets</u><br>
                       	Type: $trip. <br>
						Departure Date: $check_in. Return Date: $check_out. <br>
						From: $from_. To: $to_. <br>
						No of Adults: $adult_. No of Childern: $children_. No of Infants: $infant_. <br>
						Service Class: $ser_class<br>
						$flexible<br>
                        
                       
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
        <title>Tourism | Packages</title>

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
        <!-- //Owl Carousel Assets -->
        <!--date -->
        <link rel="stylesheet" href="css/addform.css">

        <script>
            function hidedatecombo() {
                document.getElementById('returnpanel').hidden = true;
            }
            function undohidedatecombo() {
                document.getElementById('returnpanel').hidden = false;
            }

        </script>

        <style>

            .textbd::-webkit-input-placeholder {
                color: #333;
            }
            .textbd:-moz-placeholder {
                color: #333;
            }
            .textbd::-moz-placeholder {
                color: #333;
            }
            .textbd:-ms-input-placeholder {
                color: #333;
            }
        </style>

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

        <header class="top_bg">

            <!-----------navigetion--------->
            <?php include 'navigation.php'; ?>

            <div class="container head_about">
                <h1>Ticketing</h1>
                <h5>Pick Your Holiday</h5>
            </div>

        </header>

        <!--end of header-->
        <!--<div class="container">
                <div class="row">
            </div>
        </div>-->
        <section>
            <div class="container">
                <br>
                <br>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center" style="width: 100%; height: 40px; background-color: #0099ff;">
                        <span><h2>COLOMBO TO SINGAPPUR</h2></span>
                    </div>
                    
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" >
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                        <br>
                        <strong>ECONOMY CLASS</strong> SEATS ON SELECTED DESTINATION<br>
                        Return Air Tickets | Sri Lankan Airlines<br>
                        FARES STARTING FROM
                        <div><h2>LKR 18,000 + Taxes*</h2></div>
                        
                        
                       
                    
                    
                        <a href="booking.php"><img src="image/book-300x187.png" style="width: 40%; height: auto;"></a>
                   <br>
                   <p style="color:#333; padding-left:5px">Click here to book your Tour....</p>
                   <a href="booking.php" class="booknow_btn">Book Now!</a>
                    
                        
                        
                        
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                        <img  src="image/srilankan_airlines.jpg" style="width: 70%; height: auto; float: right;"/>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-style: inset; margin-top: 20px;">
                
                </div>
                <br>
                <br>
                <br>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " style="margin-top: 50px;">
                
                    <strong>Terms & Conditions</strong><br>
                    01. This offer is valid only for those who book their ticket till 30th september, 2016 only.<br>
                    02. The outbound travels are all available 31st December, 2016 only.<br>
                    03. This offer is valid only on srilankan Airlines operated flights.<br>
                    04. This promotion is valid on Economy class booking only.<br>
                    05. The travel should originate from srilanka.<br>
                    06.Seats are limited and only available for those who book throughither<br>
                    07. Tickets are non refundable<br>
                    08. These offers are bound by the terms and condition of the respective partners established for any more information please visitable<br>
                    
                    
                    <strong>Booking Valid :</strong> 30th September, 2016<br>
                    <strong>Travel Valid :</strong> 31st December, 2016
                    
                    
                </div>
                <br>
                <br>
                <br>
            </div>
            <!-- <hr style="border:solid 1px #c6dbee;"/>-->
<br>
                <br>
            

        </section>
        <!--<hr style="border:solid 1px #909fb2; margin-top:0px;" class="hidden-xs"/>-->
        
        
<?php include 'footer.php'; ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <script type="text/javascript" src="js/zebra_datepicker.js"></script>

        <script>
                                            $(document).ready(function () {

                                                // assuming the controls you want to attach the plugin to 
                                                // have the "datepicker" class set
                                                $('input.datepicker').Zebra_DatePicker();

                                            });
                                            var $zdp = $('#element').data('Zebra_DatePicker');

                                            $('#ch_in').Zebra_DatePicker({
                                                direction: true,
                                                pair: $('#ch_out')
                                            });

                                            $('#ch_out').Zebra_DatePicker({
                                                direction: 1
                                            });
        </script>
        <script src="js/bootstrap.min.js"></script>   
    </body>
</html>
