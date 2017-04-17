
  <?php /*?><?php
	function mailsend(){
	if(isset($_POST['send'])){
   
   	$return = "" ;
 	if(isset($_POST['way_type'])){
		 $way_type = $_POST['way_type'];
		
	}else{
		 $way_type ="";
		}
   	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$from = $_POST['from'];
	$to_country = $_POST['to'];
	$adult = $_POST['adult'];
	$children = $_POST['children'];
	$infant = $_POST['infant'];
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
	$service = $_POST['service'];
	$flexible = "" ;
if (isset ($_POST['subject1'])){
	foreach($_POST['subject1'] as $_subjectValue) {
		$flexible = $flexible.' - '.$_subjectValue;
	}
}
   
    if( empty($way_type) || empty($name) || empty($contact) || empty($from) || empty($to_country) || empty($adult) || empty($children) || empty($infant) || empty($service) || empty($checkin) || empty($checkout) ){
       
        echo'<p style="color:#f26522;"> * All Fields are Require </p>';
        }else{
        $to = "vcreationstm@gmail.com";
       
		$subject = "Sahan Travels Flight Booking";
         
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $message = '<html><body>';
         
        $message .= '<table width="100%"; rules="all" cellpadding="10">';
         
        $message .= "<tr>
                        <td colspan=2>
                        Dear Sir,
                        <br /> <hr/>
						I am $name. My contact number is $contact.<br>
                        <hr /><br />
                        Book International Flight Ticket<br>
						$way_type Type<br>
                        <hr /><br />
						From $from To $to_country. <br>
                        <hr /><br />
						No of Adults: $adult . No of Children: $children. No of Infant: $infant <br>
						Service Class: $service 
                        <hr /><br />
						Duration: From $checkin &nbsp; To $checkout. <br>
                        <hr /><br />
                       	$flexible<br>
                        <hr /><br />
                       
                        </td></tr>";
         
        $message .= "<tr><td colspan=2 font='colr:#999999;'></td></tr>";
         
        $message .= "</table>";
         
        $message .= "</body></html>";
       
        mail($to, $subject, $message, $headers);
           
        echo'<p style="color:#f26522; padding:0px"> * Message Sent </p>';   
        }
	  }
    }

	?>  <?php */?>
   <script>
   		function hidedatecombo(){
	       document.getElementById('returnpanel').hidden = true;
	   }
		function undohidedatecombo(){
	       document.getElementById('returnpanel').hidden = false;
	   }
   </script>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
     <!------------ slider--------->
  
  <!--  <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="css/screen.css">	
    
      
<div class="slider_bg">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
    <li data-target="#carousel-example-generic" data-slide-to="9"></li>
    <li data-target="#carousel-example-generic" data-slide-to="10"></li>
    <li data-target="#carousel-example-generic" data-slide-to="11"></li>
    <li data-target="#carousel-example-generic" data-slide-to="12"></li>
    <li data-target="#carousel-example-generic" data-slide-to="13"></li>
    <li data-target="#carousel-example-generic" data-slide-to="14"></li>
    <li data-target="#carousel-example-generic" data-slide-to="15"></li>
    <li data-target="#carousel-example-generic" data-slide-to="16"></li>
  </ol>


  <div class="carousel-inner slider_hi">
    <div class="item active">
      <img src="image/slid_18.jpg" alt="...">
     
      
    </div>
    <div class="item">
      <img src="image/slid_1.jpg" alt="...">
   
      
    </div>
    <div class="item">
      <img src="image/slid_4.jpg" alt="...">
    
     </div>
     <div class="item">
      <img src="image/slid_5.jpg" alt="...">
      
     </div>
     <div class="item">
      <img src="image/slid_7.jpg" alt="...">
      
     </div>
     <div class="item">
      <img src="image/slid_9.jpg" alt="...">
    
     </div>
     <div class="item">
      <img src="image/slid_10.jpg" alt="...">
      
     </div>
     <div class="item">
      <img src="image/slid_11.jpg" alt="...">
    
     </div>
     <div class="item">
      <img src="image/slid_12.jpg" alt="...">
    
     </div>
     <div class="item">
      <img src="image/slid_13.jpg" alt="...">
    
     </div>
     <div class="item">
      <img src="image/slid_8.jpg" alt="...">
     
     </div>
     <div class="item">
      <img src="image/slid_16.jpg" alt="...">
    
     </div>
     <div class="item">
      <img src="image/slid_6.jpg" alt="...">
      
     </div>
     <div class="item">
      <img src="image/slid_3.jpg" alt="...">
     
     </div>
     <div class="item">
      <img src="image/slid_17.jpg" alt="...">
     
     </div>
     <div class="item">
      <img src="image/slid_2.jpg" alt="...">
      
     </div>
     <div class="item">
      <img src="image/slid_15.jpg" alt="...">
      
     <!--  <div class="flex-caption hidden-sm hidden-xs">
      <h4>Memories we can never buy</h4>
      <p>As the multi-coloured hot air balloons drifts silently above the forest, adventure takes on a whole new meaning . . .</p>
      </div>-->
     </div>
    
    
  </div>
 
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
	</div> 
    
    <div class="col-lg-12 hidden-sm hidden-xs flex" style="z-index: 1;"> 
    	<div class="col-lg-8 col-md-7 col-sm-6">
    		<!--<div class="col-lg-12 col-md-12 col-sm-12">
           		<div class="col-lg-3 col-md-3"></div>
                <div class="col-lg-9 col-md-9 col-sm-12">
        			<img src="image/logo_theame.png" style="width:40%; margin-left:17%; margin-top:-15px;"/>
            	</div>
            	
            </div>-->
            <div class="col-lg-6 col-md-10 col-sm-12" style="margin-top:20px;margin-left: 8%;"> 
                <div class="col-lg-12 col-md-12 titel_2" style="width: 96%;">
                <span></span><p style="font-size:20px; font-weight:bold;"><img src="image/airplane.png" height="30" width="30" style="margin-left: -20px; height: 30px; width: auto;"/> Online Booking</p>
            </div>
            <div class="col-lg-12 col-md-12 sub_titel">
                <p>Booking Flights</p>
                
            </div>
            <div class="col-lg-12 col-md-12 flight_form flex-caption">
                <form action="ticketing.php?page=tick#"   method="post" target="_blank">
                 <?php /*?><?php  mailsend() ?> <?php */?>
                <label class="col-lg-4 col-md-4" style="margin-bottom:15px;">
               
                    <input type="radio" id="checbox1" name="way_type" value="Return"  onclick="undohidedatecombo()"/>Return
                </label>
                <label class="col-lg-4 col-md-4" style="margin-bottom:15px;">
               
                    <input type="radio" id="checbox1" name="way_type" value="Oneway" onclick="hidedatecombo()" />One Way
                </label>
               
                    
                <!--<label class="col-lg-6 col-md-6 col-sm-6"><span>Name:</span>
                    <input type="text" class="form_con" id="name" name="name" /></label>
                <label class="col-lg-6 col-md-6 col-sm-6"><span>Contact No:</span>
                    <input type="text" class="form_con" id="contact" name="contact" /></label>-->
                <label class="col-lg-6 col-md-6"><span>Departure Date</span>
                    <input type="text" class="form_con" id="ch_in" name="checkin" placeholder="Check in" /></label>
                    <div id="returnpanel" style="z-index: -50000;">
                
				
				
				<label class="col-lg-6 col-md-6" ><span>Return Date</span>
                    <input type="text" class="form_con" id="ch_out" name="checkout" placeholder="Check out" /></label>  
				
				
				
				  			</div>
                <div style="clear:both;"></div>
				
				
				
                <label class="col-lg-6 col-md-6 col-sm-6"><!--<span>&nbsp;</span>-->
                    <input type="text" class="form_con" id="from" name="from" placeholder="From:"/></label>
                <label class="col-lg-6 col-md-6 col-sm-6"><!--<span>&nbsp;</span>-->
                    <input type="text" class="form_con" id="to" name="to" placeholder="To:"/></label>
               
                <!--<label class="col-lg-6 col-md-6">-->
               <!-- <div class="col-lg-12 col-md-12">&nbsp;</div>-->
                    <label class="col-lg-2 col-md-2"><span>Adult</span>
                        <select class="form_con1" name="adult">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </label>
                    <label class="col-lg-2 col-md-2"><span>Children</span>
                    <select class="form_con1" name="children">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </label>
                    <label class="col-lg-2 col-md-2"><span>Infant</span>
                    <select class="form_con1" name="infant">
                             <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </label>
                    <label class="col-lg-6 col-md-6"><span>Service Class</span>
                 	<select class="form_con1" name="service">
                            <option value="Economy">Economy</option>
                            <option value="Business">Business</option>
                            <option value="FirstClass">First Class</option>
                            
                    </select>
                	</label>
                <!--</label>-->
                 
               
                <!--<label class="col-lg-12 col-md-12">
                    <input type="checkbox" id="checbox1" name="subject1" value="Dates Flexible" /><span style="font-size:12px">  I want the lowest fare my dates are flexible 
              [+/- 3 days]</span>
                </label>-->
                
                <!--<label class="col-lg-12 col-md-12">
                            <ul class="toggle-vertical clean-list" style="padding:0px; margin:0px;">
                                <li style="padding:0px; margin:0px;">
                                    <input type="checkbox" id="toggle-4" name="toggle-helper">
                                    <label for="toggle-4" class="font-13x menu_list col-lg-4">
          							<p>Find Flight</p>
          							</label>
                                    <div style="clear:both;"></div>
                                    <div class="toggle-content">
                                        
                                        <div class="text-left">
                                            <label class="col-lg-6 col-md-6 col-sm-6">
                    							<input type="text" class="form_con" id="name" name="name" placeholder="Name:" />
                                            </label>
                							<label class="col-lg-6 col-md-6 col-sm-6">
                    							<input type="text" class="form_con" id="contact" name="contact" placeholder="Contact No:" />
                                            </label>
                                           
                                        </div>
                                    </div>
                                </li>
                             </ul>
                </label>-->	
                <label class="col-lg-7 col-md-7" style="margin-top: 20px;padding-left: 10%;">
                    Best Fare Click Here
               	 </label>
                 <label class="col-lg-5 col-md-5" style="height: 30px; margin-top: 20px;">
                    <input type="submit" value="Search Fare" class="btn-warning" name="send1"  />
               	 </label>
                  
                </form>
            </div>
            </div>
            <div class="col-lg-6 col-md-1"> 
            
            </div>
             <div class="hidden-lg hidden-md hidden-sm hidden-xs">
             </div>
 		</div>
        <div class="col-lg-3 col-md-4 col-sm-5"></div>
    	<div class="col-lg-1 col-md-1 col-sm-1">
        	
            <ul style="margin-top:90px; margin-left:-20px;">
            	
            	<li class="slider_social_icon"><a href="https://www.facebook.com/Travaline-1736729383316295/" class="social_icon"><img src="image/fb.png"/></a></li>
                <li class="slider_social_icon"><a href="#" class="social_icon"><img src="image/ut.png"/></a></li>
                <li class="slider_social_icon"><a href="#" class="social_icon"><img src="image/g+.png"/></a></li>
                <li class="slider_social_icon"><a href="#" class="social_icon"><img src="image/tw.png"/></a></li>
                <li class="slider_social_icon"><a href="#" class="social_icon"><img src="image/in.png"/></a></li>
            </ul>
 		</div>
 		
 
 	</div>   

</div>
      
       <!-- end of slider -->
       
       <script src="js/jquery.min.js"></script>
    <script src="js/plugins.js"></script>
	<script src="js/options.js"></script>