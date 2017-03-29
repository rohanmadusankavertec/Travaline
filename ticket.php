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
                <h1>Booking</h1>
                <h5>Pick Your Holiday</h5>
            </div>

        </header>

        <!--end of header-->
        <!--<div class="container">
                <div class="row">
            </div>
        </div>-->
        <section>
            <div class="container" style="margin:20px auto;">
                <marquee>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <img src="image/booking_logo6.jpg">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <img src="image/booking_logo5.jpg">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <img src="image/booking_logo4.jpg">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <img src="image/booking_logo3.jpg">
                </div>
                <div class="hidden-lg hidden-md hidden-xs visible-sm col-sm-3">
                    &nbsp;
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <img src="image/booking_logo2.jpg">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <img src="image/booking_logo1.jpg">
                </div>
                <div class="hidden-lg hidden-md hidden-xs visible-sm col-sm-3">
                    &nbsp;
                </div>
                </marquee>
            </div>
            <!-- <hr style="border:solid 1px #c6dbee;"/>-->

            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm" style="margin-top:100px;">
                    <img src="image/ticketing_bottom.jpg" style="width:100%;">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="background-image:url(image/booking_bg.jpg); background-repeat:repeat; padding-bottom:20px; margin-top:10px;">
                    <h2 style="padding-left:30px;">Search Cheap International Flight Tickets</h2>

                    <div class="ticket_form">
                        <?php mailsend() ?>
                        <form action="#" method="post" id="form">
                            <fieldset>

                                <!--<div class="col-lg-6 col-md-6 col-sm-6">
                                        <span>Type :</span>
                                    <span><select class="textbd" name="type">
                                        <option value="none">Select Type</option>
                                        <option value="domestic">Domestic</option>
                                        <option value="international">International</option>
                                    </select>  </span>
                                </div>
                                <div class="clear"></div>
                                <br>-->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top:30px;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <span><input type="radio" name="trip" value="Return" onclick="undohidedatecombo()" <?php
                                            if (isset($_POST['way_type'])) {
                                                echo '' . $valueReturn;
                                            }
                                            ?>>Return</span>
                                        <span><input type="radio" name="trip" value="Oneway" onclick="hidedatecombo()"<?php
                                            if (isset($_POST['way_type'])) {
                                                echo '' . $valueOneWay;
                                            }
                                            ?> class="radio_btn">One Way</span>
                                    </div>


                                    <!--
                                                            <div id="returnpanel" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <span>&nbsp;</span>
                                                                    <br>
                                                                    <span><input id="ch_out" type="text" class="form-control1 textbd" name="check_out" placeholder="Return Date" <?php
                                            if (isset($_POST['checkout'])) {
                                                echo 'value=' . $checkout;
                                            }
                                            ?>> </span>  
                                                            </div>
                                    -->
                                    <div style="clear:both;"></div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <span>&nbsp;</span>
                                        <br>
                                        <span><input type="text" class="form-control textbd" id="from" name="from_" <?php
                                            if (isset($_POST['from'])) {
                                                echo 'value=' . $from;
                                            }
                                            ?> placeholder="From"></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <span>&nbsp;</span>
                                        <br>
                                        <span><input type="text" class="form-control textbd" id="from" name="to_" <?php
                                                     if (isset($_POST['to'])) {
                                                         echo 'value=' . $to;
                                                     }
                                            ?> placeholder="To"></span>
                                    </div>
                                    <!--<div class="col-lg-11 col-md-11 col-sm-11">-->


                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <span>&nbsp;</span>
                                        <br>
                                        <span><input id="ch_in" type="text" class="form-control1 textbd" name="check_in" placeholder="Departure Date" <?php
                                            if (isset($_POST['checkin'])) {
                                                echo 'value=' . $checkin;
                                            }
                                            ?>> </span>  
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <span>&nbsp;</span>
                                        <br>
                                        <span><input id="ch_out" type="text" class="form-control1 textbd" name="check_out" placeholder="Return Date" <?php
                                                if (isset($_POST['checkout'])) {
                                                    echo 'value=' . $checkin;
                                                }
                                                ?>> </span>  
                                    </div>
                                    <div style="clear:both;"></div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" style="margin-top:20px;">
                                        <span>Adult</span>
                                        <div class="clear"></div>
                                        <span>
                                            <select class="form_con2" name="adult_">
<?php
if (isset($_POST['adult'])) {
    echo '<option>' . $adult . '</option>';
} else {
    echo '<option>1</option>';
}
?>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" style="margin-top:20px;">
                                        <span>Chidren</span>
                                        <div class="clear"></div>
                                        <span>
                                            <select class="form_con2" name="children_">
<?php
if (isset($_POST['children'])) {
    echo '<option>' . $children . '</option>';
} else {
    echo '<option>0</option>';
}
?>

                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" style="margin-top:20px;">
                                        <span>Infant</span>
                                        <div class="clear"></div>
                                        <span>
                                            <select class="form_con2" name="infant_">
<?php
if (isset($_POST['infant'])) {
    echo '<option>' . $infant . '</option>';
} else {
    echo '<option>0</option>';
}
?>

                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </span>
                                    </div>

                                    <div class="hidden-lg hidden-md hidden-sm visible-xs col-xs-6" style="margin-top:20px;">
                                        <span>Class</span>
                                        <div class="clear"></div>
                                        <span>
                                            <select class="form_con2 textbd" name="ser_class">
                                                    <?php
                                                    if (isset($_POST['service'])) {
                                                        echo '<option>' . $stype . '</option>';
                                                    } else {
                                                        echo '<option>Class</option>';
                                                    }
                                                    ?>
                                                <option value="Ecomony">Economy</option>
                                                <option value="Business">Business</option>
                                                <option value="FirstClass">First Class</option>
                                            </select>
                                        </span>
                                    </div>


                                    <div class="hidden-xs visible-md visible-sm visible-lg col-lg-12 col-md-12 col-sm-12">
                                        <!--<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12"> &nbsp;</div>-->
                                        <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                            <span>&nbsp;</span>
                                            <br>
                                            <span>
                                                <select class="form_con2 textbd" name="ser_class">
<?php
if (isset($_POST['service'])) {
    echo '<option>' . $stype . '</option>';
} else {
    echo '<option>Class</option>';
}
?>
                                                    <option value="Ecomony">Economy</option>
                                                    <option value="Business">Business</option>
                                                    <option value="FirstClass">First Class</option>
                                                </select>
                                            </span>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-4"> &nbsp;</div>
                                    </div>




                                    <!--</div>-->
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h4 style="padding-left:16px; padding-top:20px;">Personal Information</h4>
                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
                                        <span>&nbsp;</span>
                                        <span><input type="text" class="form-control textbd" id="firstName" name="name" placeholder="Name" required></span>
                                    </div>

                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
                                        <span>&nbsp;</span>
                                        <span><input type="text" class="form-control textbd" id="phoneNumber" name="number" placeholder="Phone Number" required></span>

                                    </div>

                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
                                        <span>&nbsp;</span>
                                        <span><input type="email" class="form-control textbd" id="inputEmail3" name="email" placeholder="Email" required></span>
                                    </div>

                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
                                        <span>&nbsp;</span>
                                        <span><input type="text" class="form-control textbd" id="address" name="address" placeholder="Live Town" required></span>
                                    </div>
                                    <!--<div class="clear"></div>
                                    <div class="clear"></div>
                                    <br>-->
                                </div>



                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:15px; margin-left:20px;"> 
                                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                        <input type="checkbox" id="checbox1" name="subject1_" value="Dates Flexible" <?php
if (isset($_POST['subject1'])) {
    echo '' . $checkdates;
}
?> /><span style="font-size:13px; font-weight:bold;">  I want the lowest fare my dates are flexible (+/- 3 days)</span>
                                    </div>
                                    <div class="hidden-lg hidden-md hidden-sm visible-xs col-xs-12"> &nbsp;</div>
                                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                        <label class="fa-btn btn-1 btn-1e">
                                            <input class="btn btn-search" type="submit" value="Search Fare" name="send"></label>

                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

        </section>
        <!--<hr style="border:solid 1px #909fb2; margin-top:0px;" class="hidden-xs"/>-->
        <div class="hidden-xs hidden-md visible-sm hidden-lg container-fluid" style="padding:0px; margin:0px 0px 0px 0px;">
            <div class="col-lg-2 col-md-2 col-sm-2" style="padding:0px; margin:0px;"></div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding:0px; margin:-20px 0px 0px 0px;">
                <img src="image/ticketing_bottom.jpg" style="width:80%; padding:0px; margin:0px 5%;">
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7" style="padding:0px; margin:0px;"></div>
        </div>
        <!--<div class="hidden-lg hidden-md hidden-sm visible-xs container-fluid" style="padding:0px; margin:-20px 0px 0px 0px;">
            <div class="col-xs-12" style="padding:0px; margin:0px;">
              <img src="image/ticketing_bottom.jpg" style="width:30%; padding:0px; margin:0px 10%;">
            </div>
        </div>-->
        <div class="hidden-xs visible-md hidden-sm visible-lg  container-fluid" style="padding:0px; margin:0px 0px 0px 0px;">
            <img src="image/bottom_head.png" style="width:100%;">
        </div>
        <div class="hidden-xs hidden-md visible-sm hidden-lg  container-fluid" style="padding:0px; margin:0px 0px 0px 0px;">
            <img src="image/bottom_head.png" style="width:100%;">
        </div>
        <div class="hidden-lg hidden-md hidden-sm visible-xs container-fluid" style="padding:0px; margin:20px 0px 0px 0px;">
            <img src="image/bottom_head.png" style="width:100%;">
        </div>
        <?php /* ?><div id="air_ticket">
          <div class="contact">
          <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="col-lg-8 col-md-8 col-sm-8 air_bg">
          <h3>Book Domestic & International Flight Tickets</h3>
          <br>
          <div class="ticket_form">
          <?php mailsend() ?>
          <form action="#" method="post" id="form">
          <fieldset>
          <div class="col-lg-12 col-md-12 col-sm-12">
          <span>Type :</span>
          <span><select class="textbd" name="type">
          <option value="none">Select Type</option>
          <option value="domestic">Domestic</option>
          <option value="international">International</option>
          </select>  </span>
          </div>
          <div class="clear"></div>
          <br>
          <div class="col-lg-12 col-md-12 col-sm-12">

          <span><input type="radio" name="trip" value="Return" onclick="undohidedatecombo()" <?php if(isset($_POST['way_type'])){echo ''.$valueReturn; } ?>>Return</span>
          <span><input type="radio" name="trip" value="Oneway" onclick="hidedatecombo()"<?php if(isset($_POST['way_type'])){echo ''.$valueOneWay; } ?>>One Way</span>
          <span><input type="radio" name="trip" value="Twoway" onclick="undohidedatecombo()" <?php if(isset($_POST['way_type'])){echo ''.$valueTwoWay; } ?>>Two Way</span>
          </div>

          <div class="clear"></div>
          <br>
          <div class="col-lg-6 col-md-6 col-sm-6">
          <span>DEPARTURE DATE</span>
          <br>
          <span><input id="ch_in" type="text" class="form-control textbd" name="check_in" placeholder="Check in" <?php if(isset($_POST['checkin'])){echo 'value='.$checkin; } ?>> </span>
          </div>

          <div id="returnpanel" class="col-lg-6 col-md-6 col-sm-6">
          <span>RETURN DATE</span>
          <br>
          <span><input id="ch_out" type="text" class="form-control textbd" name="check_out" placeholder="Check out" <?php if(isset($_POST['checkout'])){echo 'value='.$checkout; }  ?>> </span>
          </div>
          <div class="clear"></div>
          <br>
          <div class="col-lg-6 col-md-6 col-sm-6">
          <span>FROM</span>
          <br>
          <span><input type="text" class="form-control textbd" id="from" name="from_" <?php if(isset($_POST['from'])){echo 'value='.$from; } ?>></span>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
          <span>TO</span>
          <br>
          <span><input type="text" class="form-control textbd" id="from" name="to_" <?php if(isset($_POST['to'])){echo 'value='.$to; } ?>></span>
          </div>
          <div class="clear"></div>
          <br>

          <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="col-lg-4 col-md-4 col-sm-4">
          <span>ADULT</span>
          <div class="clear"></div>
          <span><select class="form_con1" name="adult_">
          <?php if(isset($_POST['adult'])){echo '<option>'.$adult.'</option>';} else{ echo '<option>0</option>';} ?>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          </select></span>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
          <span>CHILDREN</span>
          <div class="clear"></div>
          <span><select class="form_con1" name="children_">
          <?php if(isset($_POST['children'])){echo '<option>'.$children.'</option>';} else{ echo '<option>0</option>';} ?>

          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          </select></span>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
          <span>INFANT</span>
          <div class="clear"></div>
          <span><select class="form_con1" name="infant_">
          <?php if(isset($_POST['infant'])){echo '<option>'.$infant.'</option>';} else{ echo '<option>0</option>';} ?>

          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          </select></span>
          </div>

          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
          <span>SERVICE CLASS</span>
          <br>
          <span><select class="class textbd" name="ser_class">
          <?php if(isset($_POST['service'])){echo '<option>'.$stype.'</option>';} else{ echo '<option>Service</option>';} ?>
          <option value="Ecomony">Economy</option>
          <option value="Business">Business</option>
          <option value="FirstClass">First Class</option>
          </select>
          </span>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:15px;">
          <input type="checkbox" id="checbox1" name="subject1_" value="Dates Flexible" <?php if(isset($_POST['subject1'])){echo ''.$checkdates; } ?> /><span style="font-size:12px">  I want the lowest fare my dates are flexible
          [+/- 3 days]</span>
          </div>
          <div class="clear"></div>
          <br>
          <h3>Personal Infomation</h3>

          <div class="col-lg-6 col-md-6 col-sm-6">
          <span>Full Name</span>
          <span><input type="text" class="form-control textbd" id="firstName" name="fname" required></span>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
          <span>Email</span>
          <span><input type="email" class="form-control textbd" id="inputEmail3" name="email" required></span>
          </div>

          <div class="clear"></div>
          <div class="clear"></div>
          <br>
          <div class="col-lg-6 col-md-6 col-sm-6">
          <span>Phone Number</span>
          <span><input type="text" class="form-control textbd" id="phoneNumber" name="number" required></span>

          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
          <span>Address</span>
          <span><input type="text" class="form-control textbd" id="address" name="address"></span>
          </div>
          <div class="clear"></div>
          <div class="clear"></div>
          <br>
          <div class="col-lg-12">
          <label class="fa-btn btn-1 btn-1e">
          <input class="btn btn-info" type="submit" value="Send" name="send"></label>

          </div>
          <div class="clear"></div>
          <br>
          </fieldset>
          </form>
          </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
          </div>
          </div>
          </div>
          </div>
          </div><?php */ ?>
        <!--<div style="clear:both"></div>
           <div class="container" style="margin-bottom:20px;">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                
                    </div>
                    <div class="clear"></div>
                    <br>
                    <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:20px;">-->
        <!--<div class="col-lg-6 col-md-6 col-sm-6 packages">
                <img src="image/ho_2.jpg">
            <div class="package-ribbon-wrapper_2">
                    <div class="package-type"><a href="#">Read More</a>
                    </div>
                    <span class="bottem_border" style="border-bottom-color:#333"></span>
                    </div>
              <h2>Available for all Countries</h2>
            <p class="days" style="float:left;"><i class="glyphicon glyphicon-time"></i> 3 NIGHTS | 4 DAYS</p>
            <div class="clear"></div>
            <p>Visiting Places: City tour of Shimla Six-storey Viceregal Lodge or Rashtrapati Niwas Christ Church and St. Michael’s Cathedral the Jhaku...</p>
            <button type="button" class="btn btn-info">Book Now!</button>
             
        </div>-->

        <!--<div class="col-lg-4 col-md-4 col-sm-4 packages">
                <img src="image/ho_1.jpg">
                <div class="package-ribbon-wrapper_2">
                    <div class="package-type"><a href="#">Read More</a>
                    </div>
                    <span class="bottem_border" style="border-bottom-color:#333"></span>
                </div>
                 <h2>Special Offers</h2>
            <p class="days" style="float:left;"><i class="glyphicon glyphicon-time"></i> 3 NIGHTS | 4 DAYS</p>
            <div class="clear"></div>
            <p>Visiting Places: City tour of Shimla Six-storey Viceregal Lodge or Rashtrapati Niwas Christ Church and St. Michael’s Cathedral the Jhaku...</p>
            <button type="button" class="btn btn-info">Book Now!</button>
        </div>	
    
        <div class="col-lg-4 col-md-4 col-sm-4 packages">
                <img src="image/ho_4.jpg">
            <div class="package-ribbon-wrapper_2">
                    <div class="package-type"><a href="#">Read More</a>
                    </div>
                    <span class="bottem_border" style="border-bottom-color:#333"></span>
                    </div>
              <h2>Online Bookings</h2>
            <p class="days" style="float:left;"><i class="glyphicon glyphicon-time"></i> 3 NIGHTS | 4 DAYS</p>
            <div class="clear"></div>
            <p>Visiting Places: City tour of Shimla Six-storey Viceregal Lodge or Rashtrapati Niwas Christ Church and St. Michael’s Cathedral the Jhaku...</p>
            <button type="button" class="btn btn-info">Book Now!</button>
             
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-4 packages">
                <img src="image/ho_5.jpg">
                <div class="package-ribbon-wrapper_2">
                    <div class="package-type"><a href="#">Read More</a>
                    </div>
                    <span class="bottem_border" style="border-bottom-color:#333"></span>
                </div>
                 <h2>24 Hours Service</h2>
            <p class="days" style="float:left;"><i class="glyphicon glyphicon-time"></i> 3 NIGHTS | 4 DAYS</p>
            <div class="clear"></div>
            <p>Visiting Places: City tour of Shimla Six-storey Viceregal Lodge or Rashtrapati Niwas Christ Church and St. Michael’s Cathedral the Jhaku...</p>
            <button type="button" class="btn btn-info">Book Now!</button>
        </div>	
    </div>
    <div class="clear"></div>-->

        <!--   <div class="col-lg-12 col-md-12 col-sm-12">
               <div class="col-lg-6 col-md-6 col-sm-6 packages">
                       <img src="image/pk-05.jpg">
                   <div class="package-ribbon-wrapper_2">
                           <div class="package-type"><a href="#">Read More</a>
                           </div>
                           <span class="bottem_border" style="border-bottom-color:#333"></span>
                           </div>
                     <h2>Paradise in Himalayas</h2>
                   <p class="days" style="float:left;"><i class="glyphicon glyphicon-time"></i> 3 NIGHTS | 4 DAYS</p>
                   <div class="clear"></div>
                   <p>Visiting Places: City tour of Shimla Six-storey Viceregal Lodge or Rashtrapati Niwas Christ Church and St. Michael’s Cathedral the Jhaku...</p>
                   <button type="button" class="btn btn-info">Book Now!</button>
                    
               </div>
               
               <div class="col-lg-6 col-md-6 col-sm-6 packages">
                       <img src="image/pk-06.jpg">
                       <div class="package-ribbon-wrapper_2">
                           <div class="package-type"><a href="#">Read More</a>
                           </div>
                           <span class="bottem_border" style="border-bottom-color:#333"></span>
                       </div>
                        <h2>Paradise in Himalayas</h2>
                   <p class="days" style="float:left;"><i class="glyphicon glyphicon-time"></i> 3 NIGHTS | 4 DAYS</p>
                   <div class="clear"></div>
                   <p>Visiting Places: City tour of Shimla Six-storey Viceregal Lodge or Rashtrapati Niwas Christ Church and St. Michael’s Cathedral the Jhaku...</p>
                   <button type="button" class="btn btn-info">Book Now!</button>
               </div>	
           </div>-->

        <!-- 
         <div class="clear"></div>
         
 </div>
</div>

<div class="clear"></div>
<br>-->
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
