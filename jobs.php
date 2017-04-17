<?php
function mailsend(){
if (isset($_POST) && !empty($_POST)){
	
	$fullname = $_POST['fullname'];
	$address = $_POST['address'];
	$coun = $_POST['coun'];
	$tel1 = $_POST['tel1'];
	$tel2 = $_POST['tel2'];
	$job = $_POST['job'];
   
    if(empty($fullname) || empty($address) || empty($coun) || empty($tel1) || empty($tel2) || empty($job)){
       
        echo'<p style="color:#f26522;"> * All Fields are Require </p>';}
	
	if(!empty($_FILES['attachment']['name'])){
		$file_name = $_FILES['attachment']['name'];
		$temp_name = $_FILES['attachment']['tmp_name'];
		$file_type = $_FILES['attachment']['type'];
		
		$base = basename($file_name );
		$extension = substr($base, strlen($base)-4, strlen($base));
		
		$allowed_extensions = array(".doc", "docx", ".pdf", ".zip", ".png");
		if(in_array($extension,$allowed_extensions)){
			
			//mail essentials
			$from = $_POST['email'];
			$to = "travaline@yahoo.com";
			$subject = "TravaLine - Job Vacancies";
			$message = "Application For Job Vacancies ";
			
			//things you need
			$file = $temp_name;
			$content = chunk_split(base64_encode(file_get_contents($file)));
			$uid = md5(uniqid(time()));
			
			//standard mail headers
			$header = "From: ".$from."\r\n";
			//$header .= "reply-to:".$replyto."\r\n";
			$header .= "MIME-Version: 1.0\r\n";
			
			//we have multiple kinds
			$header .="Content-type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
			$header .= "this is a multi_part message in MIME format.\r\n";
			
			//plain text part
			$header .="--".$uid."\r\n";
			$header .="Content-type:text/plain; charset-iso-8859-1\r\n";
			$header .= "Content-Transfer-Encoding:7bit\r\n\r\n";
			$header .= $message."\r\n\r\n";
			
			//file attachment
			$header .="--".$uid."\r\n";
			$header .="Content-Type:".$file_type."; name=\"".$file_name."\"\r\n";
			$header .="Content-Transfer-Encoding: base64\r\n";
			$header .="Content-Disposition: attachment; filename=\"".$file_name."\r\n";
			$header .=$content."\r\n\r\n";
			
			//message
			$message1 = '<html><body>';
         
        	$message1 .= '<table width="100%"; rules="all" cellpadding="10">';
         
        	$message1 .= "<tr>
                        <td colspan=2>
                        
                        Dear Sir,
                        <br /> <hr/>
                        Job Post : $job<br>
                        <hr /><br />
                        Full Name : $fullname<br>
                       	<hr /><br />
						Address : $address<br>
                       	<hr /><br />
						Country : $coun<br>
                       	<hr /><br />
						Telephone(home) : $tel1<br>
                       	<hr /><br />
						Telephone(mobile) : $tel2<br>
                       	<hr /><br />
						E-mail : $from<br>
                       
                       
                        </td></tr>";
         
        	$message1 .= "<tr><td colspan=2 font='colr:#999999;'></td></tr>";
         
        	$message1 .= "</table>";
         
        	$message1 .= "</body></html>";
			
			//send the mail
			
			if(mail($to, $subject, "", $header, $message1)){
					echo '<p style="color:#f26522;"> success </p>';
			}else{
				echo '<p style="color:#f26522;">fail</p>';
			}
			
			
			
			
		}else{
			echo '<p style="color:#f26522;">file type not allowed</p>';
		}
	}
		
	}
	
}
//else{
//	echo"no file posted";
//}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trava Line | Careers</title>

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

    	<?php include 'navigation.php'; ?>
       </header>
       <!------------ slider--------->
       
      <img src="image/New-Office.jpg" style="width:100%; margin-top:-10%;">
       
        <div class="slider_bottom">
        	<div class="container">
                <div class="row">
                	<div class="col-lg-12 col-md-12 col-sm-12">
           
                    <h2>Vacancies</h2>
                   <h5 style="color:#fff !important;">Trava Line</h5>
                    </div>
                </div>
            </div>
    	</div>

   <div class="container" style="margin-top:20px;">
   	<div class="row">
    	<div class="col-lg-12 col-md-12 col-sm-12">
        	<div class="careers">
            	<div class="col-lg-6 col-md-6 col-sm-6 ">
                	<h3>Job Vacancies</h3>
                    <p class="join">A Reputable Rectruitment Organizationwho will provide foreign employeements for Sri Lankans.
Inland Job Opptunities from various organizations of Sri Lankans and for foregins. Apply with Your Details at our format.
</p>
					<img src="image/job_vacancy_banner.jpg" style="margin-top:40px; width:100%;"/>
		
                                        
                                        
                                        
                                        
                                        
                                        
                                        <h3>Career Opportunities For;</h3>
                         <marquee direction="up" scrollamount="2">
                         
                         
                             <h4>Vacancy Heading 01</h4>
                             <p>Job description of the vacancy heading 01</p>
                         
                             <br>
                             <h4>Vacancy Heading 02</h4>
                             <p>Job description of the vacancy heading 02</p>
                         
                             <br>
                             <h4>Vacancy Heading 03</h4>
                             <p>Job description of the vacancy heading 03</p>
                         
                             
                         </marquee>
              
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 application">
                	<br>
                	<form action="" method="post" enctype="multipart/form-data">
                    	<?php  mailsend() ?>
                        <fieldset>
                        
                        	<label><h4>Application Form</h4></label>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            	<div class="col-lg-4 col-md-4 col-sm-6">
                                	<span>Full Name:</span>
                                </div>
                               
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                	<input type="text" name="fullname" id="fullname" class="form-control textbd">
                                </div>
                            </div>
                            <div class="clear"></div>
                            <br>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            	<div class="col-lg-4 col-md-4 col-sm-6">
                                	<span>Address:</span>
                                </div>
                               
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                	<input type="text" name="address" id="address" class="form-control textbd">
                                </div>
                            </div>
                            <div class="clear"></div>
                            <br>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            	<div class="col-lg-4 col-md-4 col-sm-6">
                                	<span>Country:</span>
                                </div>
                               
                                <div class="col-lg-8 col-md-8 col-sm-6">
                               	<select class="form-control textbd" name="coun" id="coun">
                                    <option value="">--Select Country--</option>
        										<option value="Afghanistan">Afghanistan</option>
												<option value="Albania">Albania</option>
												<option value="Algeria">Algeria</option>
												<option value="Andorra">Andorra</option>
												<option value="Angola">Angola</option>
												<option value="Anguilla">Anguilla</option>
												<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
												<option value="Argentina">Argentina</option>
												<option value="Armenia">Armenia</option>
												<option value="Aruba">Aruba</option>
												<option value="Australia">Australia</option>
												<option value="Austria">Austria</option>
												<option value="Azerbaijan">Azerbaijan</option>
												<option value="Bahamas">Bahamas</option>
												<option value="Bahrain">Bahrain</option>
												<option value="Bangladesh">Bangladesh</option>
												<option value="Barbados">Barbados</option>
												<option value="Belarus">Belarus</option>
												<option value="Belgium">Belgium</option>
												<option value="Belize">Belize</option>
												<option value="Benin">Benin</option>
												<option value="Bermuda">Bermuda</option>
												<option value="Bhutan">Bhutan</option>
												<option value="Bolivia">Bolivia</option>
												<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
												<option value="Botswana">Botswana</option>
												<option value="Brazil">Brazil</option>
												<option value="British Virgin Islands">British Virgin Islands</option>
												<option value="Brunei">Brunei</option>
												<option value="Bulgaria">Bulgaria</option>
												<option value="Burkina Faso">Burkina Faso</option>
												<option value="Burundi">Burundi</option>
												<option value="Cambodia">Cambodia</option>
												<option value="Cameroon">Cameroon</option>
												<option value="Cape Verde">Cape Verde</option>
												<option value="Cayman Islands">Cayman Islands</option>
												<option value="Chad">Chad</option>
												<option value="Chile">Chile</option>
												<option value="China">China</option>
												<option value="Colombia">Colombia</option>
												<option value="Congo">Congo</option>
												<option value="Cook Islands">Cook Islands</option>
												<option value="Costa Rica">Costa Rica</option>
												<option value="Cote D Ivoire">Cote D Ivoire</option>
												<option value="Croatia">Croatia</option>
												<option value="Cruise Ship">Cruise Ship</option>
												<option value="Cuba">Cuba</option>
												<option value="Cyprus">Cyprus</option>
												<option value="Czech Republic">Czech Republic</option>
												<option value="Denmark">Denmark</option>
												<option value="Djibouti">Djibouti</option>
												<option value="Dominica">Dominica</option>
												<option value="Dominican Republic">Dominican Republic</option>
												<option value="Ecuador">Ecuador</option>
												<option value="Egypt">Egypt</option>
												<option value="El Salvador">El Salvador</option>
												<option value="Equatorial Guinea">Equatorial Guinea</option>
												<option value="Estonia">Estonia</option>
												<option value="Ethiopia">Ethiopia</option>
												<option value="Falkland Islands">Falkland Islands</option>
												<option value="Faroe Islands">Faroe Islands</option>
												<option value="Fiji">Fiji</option>
												<option value="Finland">Finland</option>
												<option value="France">France</option>
												<option value="French Polynesia">French Polynesia</option>
												<option value="French West Indies">French West Indies</option>
												<option value="Gabon">Gabon</option>
												<option value="Gambia">Gambia</option>
												<option value="Georgia">Georgia</option>
												<option value="Germany">Germany</option>
												<option value="Ghana">Ghana</option>
												<option value="Gibraltar">Gibraltar</option>
												<option value="Greece">Greece</option>
												<option value="Greenland">Greenland</option>
												<option value="Grenada">Grenada</option>
												<option value="Guam">Guam</option>
												<option value="Guatemala">Guatemala</option>
												<option value="Guernsey">Guernsey</option>
												<option value="Guinea">Guinea</option>
												<option value="Guinea Bissau">Guinea Bissau</option>
												<option value="Guyana">Guyana</option>
												<option value="Haiti">Haiti</option>
												<option value="Honduras">Honduras</option>
												<option value="Hong Kong">Hong Kong</option>
												<option value="Hungary">Hungary</option>
												<option value="Iceland">Iceland</option>
												<option value="India">India</option>
												<option value="Indonesia">Indonesia</option>
												<option value="Iran">Iran</option>
												<option value="Iraq">Iraq</option>
												<option value="Ireland">Ireland</option>
												<option value="Isle of Man">Isle of Man</option>
												<option value="Israel">Israel</option>
												<option value="Italy">Italy</option>
												<option value="Jamaica">Jamaica</option>
												<option value="Japan">Japan</option>
												<option value="Jersey">Jersey</option>
												<option value="Jordan">Jordan</option>
												<option value="Kazakhstan">Kazakhstan</option>
												<option value="Kenya">Kenya</option>
												<option value="Kuwait">Kuwait</option>
												<option value="Kyrgyz Republic">Kyrgyz Republic</option>
												<option value="Laos">Laos</option>
												<option value="Latvia">Latvia</option>
												<option value="Lebanon">Lebanon</option>
												<option value="Lesotho">Lesotho</option>
												<option value="Liberia">Liberia</option>
												<option value="Libya">Libya</option>
												<option value="Liechtenstein">Liechtenstein</option>
												<option value="Lithuania">Lithuania</option>
												<option value="Luxembourg">Luxembourg</option>
												<option value="Macau">Macau</option>
												<option value="Macedonia">Macedonia</option>
												<option value="Madagascar">Madagascar</option>
												<option value="Malawi">Malawi</option>
												<option value="Malaysia">Malaysia</option>
												<option value="Maldives">Maldives</option>
												<option value="Mali">Mali</option>
												<option value="Malta">Malta</option>
												<option value="Mauritania">Mauritania</option>
												<option value="Mauritius">Mauritius</option>
												<option value="Mexico">Mexico</option>
												<option value="Moldova">Moldova</option>
												<option value="Monaco">Monaco</option>
												<option value="Mongolia">Mongolia</option>
												<option value="Montenegro">Montenegro</option>
												<option value="Montserrat">Montserrat</option>
												<option value="Morocco">Morocco</option>
												<option value="Mozambique">Mozambique</option>
												<option value="Namibia">Namibia</option>
												<option value="Nepal">Nepal</option>
												<option value="Netherlands">Netherlands</option>
												<option value="Netherlands Antilles">Netherlands Antilles</option>
												<option value="New Caledonia">New Caledonia</option>
												<option value="New Zealand">New Zealand</option>
												<option value="Nicaragua">Nicaragua</option>
												<option value="Niger">Niger</option>
												<option value="Nigeria">Nigeria</option>
												<option value="Norway">Norway</option>
												<option value="Oman">Oman</option>
												<option value="Pakistan">Pakistan</option>
												<option value="Palestine">Palestine</option>
												<option value="Panama">Panama</option>
												<option value="Papua New Guinea">Papua New Guinea</option>
												<option value="Paraguay">Paraguay</option>
												<option value="Peru">Peru</option>
												<option value="Philippines">Philippines</option>
												<option value="Poland">Poland</option>
												<option value="Portugal">Portugal</option>
												<option value="Puerto Rico">Puerto Rico</option>
												<option value="Qatar">Qatar</option>
												<option value="Reunion">Reunion</option>
												<option value="Romania">Romania</option>
												<option value="Russia">Russia</option>
												<option value="Rwanda">Rwanda</option>
												<option value="Saint Pierre &amp; Miquelon">Saint Pierre &amp; Miquelon</option>
												<option value="Samoa">Samoa</option>
												<option value="San Marino">San Marino</option>
												<option value="Satellite">Satellite</option>
												<option value="Saudi Arabia">Saudi Arabia</option>
												<option value="Senegal">Senegal</option>
												<option value="Serbia">Serbia</option>
												<option value="Seychelles">Seychelles</option>
												<option value="Sierra Leone">Sierra Leone</option>
												<option value="Singapore">Singapore</option>
												<option value="Slovakia">Slovakia</option>
												<option value="Slovenia">Slovenia</option>
												<option value="South Africa">South Africa</option>
												<option value="South Korea">South Korea</option>
												<option value="Spain">Spain</option>
												<option value="Sri Lanka">Sri Lanka</option>
												<option value="St Kitts &amp; Nevis">St Kitts &amp; Nevis</option>
												<option value="St Lucia">St Lucia</option>
												<option value="St Vincent">St Vincent</option>
												<option value="St. Lucia">St. Lucia</option>
												<option value="Sudan">Sudan</option>
												<option value="Suriname">Suriname</option>
												<option value="Swaziland">Swaziland</option>
												<option value="Sweden">Sweden</option>
												<option value="Switzerland">Switzerland</option>
												<option value="Syria">Syria</option>
												<option value="Taiwan">Taiwan</option>
												<option value="Tajikistan">Tajikistan</option>
												<option value="Tanzania">Tanzania</option>
												<option value="Thailand">Thailand</option>
												<option value="Timor L'Este">Timor L'Este</option>
												<option value="Togo">Togo</option>
												<option value="Tonga">Tonga</option>
												<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
												<option value="Tunisia">Tunisia</option>
												<option value="Turkey">Turkey</option>
												<option value="Turkmenistan">Turkmenistan</option>
												<option value="Turks &amp; Caicos">Turks &amp; Caicos</option>
												<option value="Uganda">Uganda</option>
												<option value="Ukraine">Ukraine</option>
												<option value="United Arab Emirates">United Arab Emirates</option>
												<option value="United Kingdom">United Kingdom</option>
												<option value="Uruguay">Uruguay</option>
												<option value="Uzbekistan">Uzbekistan</option>
												<option value="Venezuela">Venezuela</option>
												<option value="Vietnam">Vietnam</option>
												<option value="Virgin Islands (US)">Virgin Islands (US)</option>
												<option value="Yemen">Yemen</option>
												<option value="Zambia">Zambia</option>
												<option value="Zimbabwe">Zimbabwe</option>
						

</select>

                                </div>
                            </div>
                             <div class="clear"></div>
                            <br>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            	<div class="col-lg-4 col-md-4 col-sm-6">
                                	<span>Telephone:</span>
                                </div>
                               
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                	<input type="number" name="tel1" id="tel1" class="form-control textbd" placeholder="Home">
                                </div>
                           </div>
                                <div class="clear"></div>
                                <br>
                           <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                	<span>&nbsp;</span>
                                </div>
                                
                                 <div class="col-lg-8 col-md-8 col-sm-6">
                                	<input type="number" name="tel2" id="tel2" class="form-control textbd" placeholder="Mobile">
                                </div>
                            </div>
                            <div class="clear"></div>
                                <br>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                	<span>Job Post:</span>
                                </div>
                                
                                 <div class="col-lg-8 col-md-8 col-sm-6">
                                	<input type="text" name="job" id="job" class="form-control textbd">
                                </div>
                            </div>
                            <div class="clear"></div>
                                <br>
                                
                             <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                	<span>E-mail:</span>
                                </div>
                                
                                 <div class="col-lg-8 col-md-8 col-sm-6">
                                	<input type="email" name="email" id="email" class="form-control textbd">
                                </div>
                            </div>
                            <div class="clear"></div>
                                <br>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                	<span>Attached your CV:</span>
                                </div>
                                
                                 <div class="col-lg-8 col-md-8 col-sm-6">
                                	<input type="file" name="attachment" id="attachment">
                                </div>
                            </div>
                              <div class="clear"></div>
                                <br>
                             <div class="col-lg-12">
                           		
                           		<input style="float:right;" class="btn btn-info" type="submit" value="Send" name="send"></label>
						   		
						  </div>
                            <div class="clear"></div>
                                <br>
                                <br>
                                
                        </fieldset>
                    </form>
                </div>
             <!--   <div class="market">
                	<h3>MICE Marketing Manager</h3>
                    <p>Vcreations™ is a sub-Department of Vertec International which is subsidiary of “VERTEC GROUP” started on 1990 and “Vertec” founder-Chairman was Mr. M.P.T .Cooray, former Deputy Director General of BOI .</p>
                    <h4>Responsibilities | Job Description</h4>
                    <ul>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    </ul>
                    
                     <h4>Desired Skills and Experience</h4>
                    <ul>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    </ul>
                </div>-->
                
                <!--<div class="ticket">
                	<h3>Ticketing / Reservations Manager</h3>
                   
                    <h4>Job Description</h4>
                    <ul>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    </ul>
                    
                     <h4>Desired Skills and Experience</h4>
                    <ul>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    <li>We have been working as service providers for international outsource companies for the last eight years.Our target is to “provide a website for all in the community.</li>
                    </ul>
                </div>-->
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
    <script src="js/bootstrap.min.js"></script>   
</body>
</html>
