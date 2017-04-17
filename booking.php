<?php
	function mailsend(){
	if(isset($_POST['send'])){
		
		if(isset($_POST['fname'])){
			$fname = $_POST['fname'];
			
		}else{
			 $fname ="";
			}
		
		if(isset($_POST['phone'])){
				$phone = $_POST['phone'];
			
		}else{
			 $phone ="";
			}
			
		if(isset($_POST['email'])){
			$email = $_POST['email'];
			
		}else{
			 $email ="";
			}
		
		if(isset($_POST['address'])){
			 $address = $_POST['address'];
			
		}else{
			 $address ="";
			}
		
		if(isset($_POST['checkin'])){
			$checkin = $_POST['checkin'];
			
		}else{
			 $checkin ="";
			}
			
		if(isset($_POST['checkout'])){
			 $checkout = $_POST['checkout'];
			
		}else{
			 $checkout ="";
			}
		if(isset($_POST['excursions'])){
			$excursions = $_POST['excursions'];
			
		}else{
			 $excursions ="";
			}
		if(isset($_POST['destination'])){
			$destination = $_POST['destination'];
			
		}else{
			 $destination ="";
			}
		if(isset($_POST['noAdults'])){
			$noAdults = $_POST['noAdults'];
			
		}else{
			 $noAdults ="";
			}
		
		if(isset($_POST['noChild'])){
			 $noChild = $_POST['noChild'];
			
		}else{
			 $noChild ="";
			}
		if(isset($_POST['accommodation'])){
			 $accommodation = $_POST['accommodation'];
			
		}else{
			 $accommodation ="";
			}
		if(isset($_POST['room_type'])){
			 $room_type = $_POST['room_type'];
			
		}else{
			 $room_type ="";
			}
		if(isset($_POST['no_room'])){
			 $no_room = $_POST['no_room'];
			
		}else{
			 $no_room ="";
			}
		if(isset($_POST['meal_plan'])){
			 $meal_plan = $_POST['meal_plan'];
			
		}else{
			 $meal_plan ="";
			}
		if(isset($_POST['request'])){
			 $request = $_POST['request'];
			
		}else{
			 $request ="";
			}
		
		
    if(empty($fname) || empty($email) || empty($phone) || empty($checkin) || empty($checkout) || empty($noAdults) || empty($accommodation)  || empty($room_type) || empty($no_room)){
       
        echo'<p style="color:#f26522;"> * All Fields are Require </p>';
        }else{
        $to   = "travaline@yahoo.com";
        $from = $email;
		
		$subject = "TravaLine - Tour Booking";
         
        $headers = "From: " . strip_tags($email) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $message = '<html><body>';
         
        $message .= '<table width="100%"; rules="all" cellpadding="10">';
         
        $message .= "<tr>
                        <td colspan=2>
                        Dear Sir,
                        <br /> <hr/>
                        Hi, I am $fname. My Email Address Is $email. My Phone Number is $phone. My Live Town is $address. <br>
                        <hr /><br />
                        <u>Booking Tour Packages</u><br>
                       	Duration From : $checkin &nbsp; &nbsp; To : $checkout<br>
						Preferred Excursions : $excursions<br>
						Preferred Destinations : $destination<br>
						No of Adults: $noAdults &nbsp; &nbsp; No of Childern: $noChild<br>
						Type of Accommodations : $accommodation<br>
						Room Type : $room_type &nbsp; &nbsp; No. of Rooms : $no_room<br> 
						Meal Plan: $meal_plan<br>
						Any Other Special Requests : <br>
						$request
                        </td></tr>";
				
         
        $message .= "<tr><td colspan=2 font='colr:#999999;'></td></tr>";
         
        $message .= "</table>";
         
        $message .= "</body></html>";
       
        mail($to, $subject, $message, $headers);
           
        echo'<p style="color:#f26522;"> * Message Sent 
		</p>';   
        }
	  }
    }

	?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trava Line | Book Now</title>

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
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
          <!--date -->
    <link rel="stylesheet" href="css/addform.css">
	
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-------------Top header--------------> 
<header>

<!-----------navigetion--------->

    	<div class="navbar navbar-default navbar-static-top top_two" role="navigation">
			<!--<div class="container">-->
            	<div class="col-lg-1 col-md-1"></div>
            	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-5" style="padding:0px; margin:0px;">
                        <a class="" href="index.php">
                        <img src="image/sahan_travel_logo.jpg" class="logo_res">
                        </a>
    			</div>
              <!--  <div class="hidden-lg hidden-md hidden-sm col-xs-6">
                </div>-->
                    
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:0px; margin:0px;">
                   <!-- <div class="row">-->
                   		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px; margin:0px;">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 con" style="padding:0px; margin:0px;">
                                 
                                     <p class="head_para">
                                    <span class="glyphicon glyphicon-earphone" style="color:#F00;"> </span><span style="color:#F00; font-weight:bold;"> Hot Line :</span> (+94) 777 58 2222 </p>
                                       <!-- <div class="ticket_booking_1">
                <a href="ticketing.php#air_ticket"><button type="button" class="btn btn-danger ticket_btn_l">Flight Ticket</button></a>
                                        </div>-->
                            </div>
                            <div class="col-lg-2 col-md-2"></div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 collapse navbar-collapse navHeaderCollapse nav_menu" style="padding:0px; margin:0px;">
                            <ul class="nav navbar-nav">
                            	<li class="<?php if($_GET['page']=='about') {echo'active';} ?>">
                                      <a href="about.php?page=about">About us</a>
                                </li>
                                <li class="<?php if($_GET['page']=='con') {echo 'active';} ?>">
                                      <a href="contact.php?page=con">Contact</a>
                                </li>	
                             </ul>
                             </div>
                        </div>        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px; margin:0px;">
                        	 <div class="col-lg-4 col-md-4" style="padding:0px; margin:0px;"></div>
                         	 <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 navigetion"  style="padding:0px; margin:0px;">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                                        <span class="icon-bar">
                                        </span>
                                        <span class="icon-bar">
                                        </span>
                                        <span class="icon-bar">
                                        </span>
                                    </button>
                            
                               <!-- <div class="row">-->
                                     
                                        <div class="collapse navbar-collapse navHeaderCollapse nav_menu">
                                        <ul class="nav navbar-nav" style="margin-left:58px;">
                                            <li class="<?php if(empty($_GET['page'])) {echo'active';} ?>">
                                                <a href="index.php">Home</a>	
                                            </li>
                                            <li class="<?php if($_GET['page']=='tour') {echo'active';} ?>">
                                        		<a href="tourpack.php?page=tour">Tourpack</a>
                                    		</li>
                                            <li class="<?php if($_GET['page']=='tick') {echo 'active';} ?>">
                                                <a href="ticketing.php?page=tick">Ticketing</a>
                                            </li>
                                            <li class="<?php if($_GET['page']=='job') {echo 'active';}?>">
                                                <a href="jobs.php?page=job">jobs</a>
                                            </li>
                                            
                                        </ul>
                                        </div>
                                 </div>
                               <!-- </div>-->
                	 		 </div>
                        </div> 
                </div>     
              	<div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                      <div class="langu" style="width:79%; float:right;">
                                       <select style="font-size:12px; padding:0px;"><option>Select Language</option></select>
                                     
                       </div>
                             
                                        
                   <div style="clear:both;"></div>
                   <div class="" style="width:85%; float:right;">
                        <form id="search1" action="#" method="GET" accept-charset="utf-8" style="padding:0px; margin:15px 0px 0px 0px;">
                            <p>
                               <input type="text" name="s" value="Search Term..." onblur="if(this.value == '') { this.value='Enter keyword:'}" onfocus="if (this.value == 'Enter keyword:') {this.value=''}" style="font-size:12px;" />
                               <a onclick="document.getElementById('search').submit()"></a>                        
                            </p>
                        </form>
                    </div>
               </div> 
				
</div>   
</header>
       <!------------ slider--------->
       
      <img src="image/1.jpg" style="width:100%; margin-top:-10%;">
       
       

   <div class="container" style="margin-bottom:30px;">
   	<div class="row">
    	<div class="col-lg-12 col-md-12 col-sm-12">
        	<div class="col-lg-8 col-md-8 col-sm-8 booking_2" style="margin-top:80px;">
            	<div class="booking_bd">
                <form action="#" method="post">
                	<fieldset>
                    <?php mailsend() ?>
                    	<h4>PERSONAL INFORMATION</h4>
                    	
                			<div class="col-lg-6 col-md-6 col-sm-6">
						    	<span>Full Name*</span>
						    	<span><input type="firstname" class="form-control textbd" id="firstName" name="fname"></span>
						    </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
						    	<span>Email*</span>
						    	<span><input type="email" class="form-control textbd" id="inputEmail3" name="email"></span>
						    </div>
						    
                            <div class="clear"></div>
                            <div class="clear"></div>
                            <br>
                            <div class="col-lg-6 col-md-6 col-sm-6">
						    	<span>Phone Number*</span>
                                
                                <span><input type="number" class="form-control textbd" id="phoneNumber" maxlength="10" name="phone"></span>
						    	
						    </div>
                            
						    <div class="col-lg-6 col-md-6 col-sm-6">
						    	<span>Address</span>
						    	<span><input type="text" class="form-control textbd" id="address" name="address"></span>
						    </div>
                            <div class="clear"></div>
                            <div class="clear"></div>
                            <br>
                       <h4>YOUR PACKAGE INFORMATION</h4>
                      
                       <h5>Duration</h5>
                        <div class="col-lg-6 col-md-6 col-sm-6">
						    	<span>From</span>
						    	<span><input id="ch_in" type="text" class="form-control textbd" name="checkin" placeholder="Check in"></span>
						    </div>
                             <div class="col-lg-6 col-md-6 col-sm-6">
						    	<span>To</span>
						    	<span><input id="ch_out" type="text" class="form-control textbd" name="checkout" placeholder="Check out"></span>
						    </div>
                            <div class="clear"></div>
                            	<!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						    	<span>Room Type*</span>
						    	<span><select class="styled_book">
								<option></option>
								<option>
									Single
								</option>
								<option>
									Double
								</option>
								<option>
									Luxury
								</option>
								
							</select></span>
						    </div>-->
						    <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						    	<span>No of Rooms*</span>
						    	<span><select class="styled_book">
								<option></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5+</option>
								
							</select></span>
						    </div>-->
                             <div class="clear"></div>
                            <div class="clear"></div>
                            <br>
                             <div class="col-lg-6 col-md-6 col-sm-6">
						    	<span>Preferred Excursions</span>
						    	<span><input type="text" class="form-control textbd" id="excursions" name="excursions"></span>
						    </div>
                             <div class="col-lg-6 col-md-6 col-sm-6">
						    	<span>Preferred Destinations</span>
						    	<span><input type="text" class="form-control textbd" id="destinations" name="destination"></span>
						    </div>
                            
                             <div class="clear"></div>
                            <br>
                            
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						    	<span>Number of Adults</span>
						    	<span><input type="number" class="form-control textbd" id="noAdults" name="noAdults"></span>
						    </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						    	<span>Number of Children</span>
						    	<span><input type="number" class="form-control textbd" id="noChild" name="noChild"></span>
						    </div>
                             <div class="clear"></div>
                            <div class="clear"></div>
                            <br>
                            
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						    	<span>Type of Accommodations</span>
                                <br>
						   <span><input type="radio" name="accommodation" value="Standard" checked>Standard</span>
                           <span><input type="radio" name="accommodation" value="Superior" checked>Superior</span>
                           <span><input type="radio" name="accommodation" value="Delux" checked>Delux</span>
						    </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						    	<span>How many rooms do you require?</span>
						    	<span><select class="styled_book" name="room_type">
								
								<option value="Single Room">
									Single Room
								</option>
								<option value="Double Room">
									Double Room
								</option>
								<option value="Triple Room">
									Triple Room
								</option>
								
							</select></span>
                            
                            <span><input type="number" class="form-contro" id="noRooms" placeholder="Number of rooms" name="no_room"></span>
						    </div>
                            <div class="clear"></div>
                            <br>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						    	<span>Meal Plans</span>
                                <br>
						    	<span><select class="styled_book" name="meal_plan">
								
								<option value="Room Only">
									Room Only
								</option>
								<option value="Bed and Breakfast">
									Bed and Breakfast
								</option>
								<option value="Half Board">
									Half Board
								</option>
                                <option value="Full Board">
									Full Board
								</option>
								
							</select></span>
						    </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						    	<span>Any Other Special Requests?</span>
						    	<span><input type="text" class="form-control textbd" id="requests" name="request"></span>
						    </div>
                          
						   
                            <div class="clear"></div>
                            
                            <br>
						   <div class="col-lg-12">
                           		<label class="fa-btn btn-1 btn-1e">
                           		<input class="btn btn-info" type="submit" value="Send" name="send"></label>
						   		
						  </div>
                          <br>
                    </fieldset>
                </form>
            
            <!-- <form action="" method="post">
             	<fieldset class="well the-fieldset">
 						 <legend class="the-legend">Connect With Us</legend>
                			<div class="col-lg-12">
						    	<span>Your Name (required)</span>
						    	<span><input type="username" class="form-control text-feld" id="userName"></span>
                                <br>
						    </div>
                            
						    <div class="col-lg-12">
						    	<span>Your Email (required)</span>
						    	<span><input type="email" class="form-control text-feld" id="inputEmail3"></span>
                                <br>
						    </div>
                           
                            
                            <div class="col-lg-12">
						    	<span>Your Telephone (required)</span>
						    	<span><input type="text" class="form-control text-feld" id="telephone"></span>
                                <br>
						    </div>
						    <div class="col-lg-12">
						    	<span>Nationality</span>
						    	<span><input type="text" class="form-control text-feld" id="nationality"></span>
                                <br>
						    </div>
                            
                            
						    <div class="col-lg-12">
						    	<span>Message*</span><br>
						    	<span><textarea class="form-control text-feld" rows="8"></textarea></span>
                                <br>
						    </div>
                            <div class="clear"></div>
                            
                          
						   <div class="col-lg-12">
                           		<label class="fa-btn btn-1 btn-1e">
                           		<input class="btn btn-info" type="submit" value="Send"></label>
						   		
						  </div>
                          <br>
                          </fieldset>
                </form>-->
                   
                </div>
               
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:90px;">
            	<center>                
                   <div class="fb-page" data-href="https://www.facebook.com/TRAVA-LINE-908235289261679/" data-tabs="timeline" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div> 
                </center>
 			</div>
           
            <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:100px;">
            	<img src="image/ticketing_bottom.jpg" style="width:100%;"/>
            </div>

			
        </div>
        </div>
    	
   </div>
</div>
<div class="hidden-xs visible-md hidden-sm visible-lg  container-fluid" style="padding:0px; margin:0px 0px 0px 0px;">
      <img src="image/bottom_head.png" style="width:100%;">
</div>
<div class="hidden-xs hidden-md visible-sm hidden-lg  container-fluid" style="padding:0px; margin:0px 0px 0px 0px;">
      <img src="image/bottom_head.png" style="width:100%;">
</div>
<div class="hidden-lg hidden-md hidden-sm visible-xs container-fluid" style="padding:0px; margin:20px 0px 0px 0px;">
      <img src="image/bottom_head.png" style="width:100%;">
</div>
<?php include 'footer.php'; ?>

 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script type="text/javascript" src="js/zebra_datepicker.js"></script>
    
      <script>
		$(document).ready(function() {

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
