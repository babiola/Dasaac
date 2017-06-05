<!DOCTYPE html>
<html lang="en-us">

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<meta name="description" contant="" />
		<meta name="author" contant="">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title><?php print $title; ?></title>
		   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/style.css">
		<link type="text/css" href="<?php echo base_url(); ?>assets/styles/animate/animate.css" rel="stylesheet"/>
		<link type="text/css" href="<?php echo base_url(); ?>assets/styles/css/mystyle.css" rel="stylesheet" />
		
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dist/sweetalert.css">
	</head>
	
	<body>
	
<div class="container-fluid" style="background-color: #8D652F; height: 40px; padding: 0px; ">
    <div class="row">
        <div class="col-md-7">
          <marquee style="margin-top: 6px; margin-left: 5px; color: yellow; font-size: 1.2em"> 
          <span style="background-color: red; font-size: .7em; padding: 5px; font-weight: bold; border-radius: 6px; margin-right: 10px;">
           HOT DEALS
           </span>
          dasaac dasaac dasaac dasaac dasaac dasaac dasaac dasaac dasaac dasaac  
          dasaac dasaac dasaac dasaac dasaac dasaac dasaac dasaac dasaac dasaac
          
           <span style="background-color: red; font-size: .7em; padding: 5px; font-weight: bold; border-radius: 6px; margin-right: 10px;">
           CLOSING DEALS
           </span>         
          
          </marquee>
        </div>
        <div class="col-md-5">
                    <?php echo validation_errors();?>
            <form class="form-inline" action="<?php print base_url(); ?>flight/subscrible" method="POST" style="margin-top: 5px; margin-left: 10px;">
              <div class="form-group">
                <label for="subscriberemail" style="color: #fff;">Subscriber to newsletter:  </label>
                <input type="email" class="form-control input-sm" id="subscriberemail" placeholder="abc@domain.com" required>
              </div>
              <button type="submit" class="btn btn-primary btn-sm">subscribe</button>
            </form>

        </div>
    </div>
</div>
<div class="container-fliud">
    <div id="navwrap">
				<div id="logobox">
				</div>
		
					<nav  id="tn">
						<ul>
							<li><a href="<?php print base_url(); ?>" id="home">Home</a></li>
							<li><a href="<?php print base_url(); ?>flight/aboutus" id="about">About us</a></li>
							<li><a href="<?php print base_url(); ?>brochure" id="broch">Brochures</a></li>
							<li><a href="<?php print base_url(); ?>careers" id="career">Careers</a></li>
							<li><a href="<?php print base_url(); ?>flight/contactus" id="cont">Contact us</a></li>
						</ul>					
					</nav>
    </div>		
</div>
			
			<div class="wrap">		
				<header>
					<label for="slide-1-trigger"> Packages </label>
					<label for="slide-2-trigger"> Flights </label>
					<label for="slide-3-trigger"> Hotels </label>
				<a href="<?php print base_url(); ?>deals"> <label for="slide-4-trigger">Deals</label> </a>
				<a href="<?php print base_url(); ?>jobs">	<label for="slide-5-trigger"> Jobs </label> </a>
				<a href="<?php print base_url(); ?>visa">	<label for="slide-6-trigger"> Visa </label> </a>
				<a href="<?php print base_url(); ?>vacation">	<label for="slide-7-trigger"> Vacation Gallery </label></a>
				</header>
		
		
			
				<input id="slide-1-trigger" type="radio" name="slides">
					<section class="slide slide-1">
						<h1>Search For a Package</h1><br />
						<form class="form-inline" style="bottom: 30px;">
							<div class="form-group">
							<div class="col-md-2">
                                <select name="packages" class="form-control" cols="50" style="color: #0066FF;">
                                  <option value="0" >By Destinations....</option>
                                  <option value="1">Nigeria</option>
                                  <option value="2">Ghana</option>
                                  <option value="3">South Africa</option>
                                  <option value="4">Dubai</option>
                                  <option value="5">Istanbul</option>
                                </select>
                            </div>
							
				            <div class="col-md-2">					
                                <select name="theme" class="form-control" style="color: #0066FF;">
                                  <option value="">By Theme....</option>
                                  <option value="">Adventure</option>
                                  <option value="">Leisure</option>
                                  <option value="">Honeymoon</option>
                                  <option value="">Pilgrimage</option>
                                </select>
                            </div>
                            
						    <div class="col-md-2">
                                <select name="price" class="form-control" style="color: #0066FF;">
                                  <option value="">By Price....</option>
                                  <option value="">$0-500</option>
                                  <option value="">$500-800</option>
                                  <option value="">$800-1000</option>
                                  <option value="">$1000-above</option>
                                </select>
                            </div>
						
						    <div class="col-md-2">
                                <select name="By Date" class="form-control" style="color: #0066FF;">
                                  <option value="">By Date</option>
                                  <option value=""></option>
                                  <option value=""></option>
                                  <option value=""></option>
                                  <option value=""></option>
                                </select>
                            </div>							
						
							  
							  <div class="col-md-3">
                                   <div class="input-group">
                                    <div class="input-group-addon">@</div>
                                      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Enter Email">
                                      </div>
                                </div>
                                 
                                 <div class="col-md-1">
                                  <input class="btn btn-default" type="submit" style="color: #0066FF;" >
                                </div>
                            </div>
						</form>
					</section>
					
					<p class ="message-info"><?php if (isset($msg)){echo $msg;}?></p>
					
				<input id="slide-2-trigger" type="radio" name="slides"  checked>
					<section class="slide slide-2">
						<h1>Flight Reservation</h1><br />
						
						<?php echo validation_errors();?>
						<form method="POST" action = "<?php echo base_url(); ?>flight/bookflight" class="form-inline">					
							<div class="form-group form-group-xs">
                               <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-1">
									<label class="control-label" for="nametitle">Title</label>
									
									<select name="title" class="form-control input-sm" id="nametitle"><br />
										<option value ="mr">Mr</option>
										<option value ="mrs">Mrs</option>
										<option value ="ms">Ms</option>
									</select>
                                    </div>
                                    
                                    <div class="col-md-11">
                                        <div class="col-md-12">
                                            <div class="col-md-2">
                                                <label for="surname">Surname:</label>
									               <input class="form-control input-sm" id="surname" type="text" name="sname" placeholder=" Surname" required>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="departure">Leaving from:</label>
									           <input class="form-control input-sm" id="departure" type="text" name="leavefrom" placeholder="  Enter Departing city" required>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Flight type:</label><br />
                                                <select class="form-control input-sm" name= "flighttype" required>
                                                    <option value="Round Trip">Round Trip</option>
                                                    <option value="One Way">One Way</option>
                                                    <option value="Multi-segment">Multi-segment</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Date of Departure:</label>
									            <input class="form-control input-sm" type="date" name="bookingdate" required>
                                            </div>
                                            <div class="col-md-4">
                                               <div class="col-md-2">
                                                   <label>A(12+):</label>
                                                    <select class="form-control input-sm" name="adult">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                               </div>
                                               <div class="col-md-2">
                                                   <label>Chld:</label>
                                                    <select class="form-control input-sm" name="children">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                               </div>
                                               <div class="col-md-2">
                                                   <label>infants:</label>
                                                    <select class="form-control input-sm" name="infant">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                               </div>                                         
                                               <div class="col-md-6">
                                                <label for="phnno">Phone no:</label>
									           <input class="form-control input-sm" id="phnno" type="text" required name="phnno" placeholder="  Enter Phone number">
                                            </div>     
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="padding-top: 10px;">
                                            <div class="col-md-2">
                                               <label for="other-names">Other Names:  </label>
									           <input class="form-control input-sm" id="other-names" type="text" name="othernames" placeholder=" Other Names">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="arrival">Arriving To:</label>
                                                <input class="form-control input-sm" id="arrival" type="text" name="destination" placeholder="  Enter Arriving city" required>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Class</label><br />
                                                <select class="form-control input-sm" name="flightclass" required>
                                                    <option value="Economy">Economy</option>
                                                    <option value="Business">Business</option>
                                                    <option value="First">First</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Date of Arrival</label>
									            <input class="form-control input-sm" type="date" name="arrivaldate" required>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-6">
                                                   <label for="email">Email:</label><br />
									               <input class="form-control input-sm" id="email" type="text" name="email" placeholder="  Enter Email address" required> 
                                                </div>
                                                <div class="col-md-6">
                                                   <br /> 
                                                    <input class="btn btn-success form-control input-sm" type="submit" value ="submit" name="submit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                            </div>
				        </form>
					</section>
					
					
	 				
				<input id="slide-3-trigger" type="radio" name="slides">
					<section class="slide slide-3">
						<h1>Hotel Reservation</h1><br />
						<?php echo validation_errors();?>
						<form class="form-inline" method="POST" action = "<?php echo base_url(); ?>hotelmanager/hotelbook">
						  <div class="form-group form-group-xs">
						       <div class="row">
						           <div class="col-md-12">
						               <div class="col-md-2">
						                   <label for="surname">Surname</label><br />
						                   <input class="form-control input-sm" id="surname" type="text" name="surname" placeholder=" Surname" required>
							
						               </div>
						               <div class="col-md-2">
						                   <label>Category</label><br />
                                            <select class="form-control input-sm"  name="cat" required>
                                                <option>First Class</option>
                                                <option>Luxury Hotel</option>
                                                <option>Standard Hotel</option>
                                                <option>Tourist Hotel</option>
                                            </select>
						               </div>
						               <div class="col-md-2">
						               <label>Occupancy</label><br />
                                        <select class="form-control input-sm"  name="occupants" required>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
						               </div>
						               <div class="col-md-2">
						                   <label>Check-in</label><br />
						                   <input class="form-control input-sm" type="date" name="checkindate" required>	
						               </div>
						               <div class="col-md-4">
						                   <label for="hphnno">Phone</label><br />
						                   <input class="form-control input-sm" id="hphnno" type="text" name="phnno" placeholder="  Enter Phone Number" required>
						               </div>
						               
						           </div>
						           <div class="col-md-12" style="padding-top: 10px;">
						               
						               <div class="col-md-2">
						                   <label for="other-names">Other Names:  </label><br /><input class="form-control input-sm" id="other-names" type="text" name="othernames" placeholder=" Other Names">
						               </div>
						               <div class="col-md-2">
						                   <label>Hotel Type:</label><br />
                                            <select class="form-control input-sm" name="hoteltype">
                                                <option>City/Airport</option>
                                                <option>Apartment</option>
                                            </select>
						               </div>
						               <div class="col-md-2">
						               <label>Area Location:</label><br />
                                        <select class="form-control input-sm" name="location">
                                            <option>Airport</option>
                                            <option>Down Town</option>
                                            <option>East</option>
                                            <option>North</option>
                                            <option>South</option>
                                            <option>East</option>
                                            <option>Resort</option>
                                        </select>							
						               </div>
						              <div class="col-md-2">
						                   <label>Check-out:</label><br />
						                   <input class="form-control input-sm" type="date" name="checkoutdate" required>	
						               </div>
						               <div class="col-md-4">
                                       <div class="col-md-8">
                                          <label for="email">Email</label><br />
						                   <input class="form-control input-sm" id="email" type="text" name="email" placeholder="  Enter Email address" required> 
                                       </div>
                                       <div class="col-md-4">
                                       <input class="btn btn-success form-control input-sm" type="submit" value ="submit" name="submit">
                                       </div>		       
						               </div>
						           </div>
						        </div>
                          </div>
			
						</form>
					</section>
</div>
		
			
<!-- Main Wrapper -->
    <?php $this->load->view($module . '/' . $view_file); ?>
	        
        <div class="container-fluid" style="background-color: #A9A9A9; margin-top: 5px; padding-bottom: 10px;">
           <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <section id="footercaddress">
                     <h3>Contact Us:</h3>
                     <p>
                     phone: 09090010078, 09090010079
                     </p>
                     <p>Email: info@dasaactravels.com</p>
                     <h3>Address:</h3>
                    <address>
                    <strong>Adeleye & Adeleye Suite, </strong><br />
                    Investment House (7th floor)<br /> 21/25, Broad Street By CMS Bus-stop,<br /> Lagos island,<br /> Lagos.
                    </address>
                </section>
            </div>
            
            <div class="col-md-3 col-md-offset-1">
                <section id="socialicon">
                    <h3>Conect With us:</h3>
                    <ul id="sxc">
                    <li><a href="www.facebook.com/dasaactours"> <i style="color:#3b5998;" class="fa fa-facebook-square fa-2x"></i>  </a></li>
                    <li><a href="http://www.twitter.com/DasaacTravels"><i style="color:#1da1f2;" class="fa fa-twitter-square fa-2x"></i>  </a></li>
                    <li><a href="uc.php"><i style="color:#0077b5;" class="fa fa-linkedin-square fa-2x"></i>  </a></li>
                    <!--<li><a href="uc.php"> <img src=""> </a></li>-->
                    </ul> <br />
                    <br />
                    <h3>GDS Partners:</h3>
                    <ul id="prtns">
                        <li><img src="<?php echo base_url(); ?>assets/img/general/galileo.png"></li>
                        <li><img src="<?php echo base_url(); ?>assets/img/general/amadeus.png"></li>
                    <!--<li><a href="uc.php"> <img src=""> </a></li>   -->
                    </ul>
                    </section>
            </div>
            
            <div class="col-md-3">
                <section id="prtn">
	 <div id="ap1">
	 <h3>Airline Partners</h3>
		<ul id="alogo">
			<li> <img src="<?php echo base_url(); ?>assets/img/general/ek.png"> </li>
			<li> <img src="<?php echo base_url(); ?>assets/img/general/qr.png"> </li>
			<li> <img src="<?php echo base_url(); ?>assets/img/general/tk.png"> </li>
			<li> <img src="<?php echo base_url(); ?>assets/img/general/lh.png"> </li>
			<li><img src="<?php echo base_url(); ?>assets/img/general/ey.png"> </li>
		</ul>
	 </div>
	 <div id="hp1">
	  <h3>Hotel Partners</h3>
		<ul>
			<li><a href="uc.php"> <img src=""> </a></li>
			<li><a href="uc.php"> <img src=""> </a></li>
			<li><a href="uc.php"> <img src=""> </a></li>
			<li><a href="uc.php"> <img src=""> </a></li>
		</ul>
	</div>
	<div id="lt1">
	 <h3></h3>
	 		<ul>
			<li><a href="uc.php"> <img src=""> </a></li>
			<li><a href="uc.php"> <img src=""> </a></li>
			<li><a href="uc.php"> <img src=""> </a></li>
			<li><a href="uc.php"> <img src=""> </a></li>
		</ul>
	 </div>
	 </section>
	
     </div>
       
        
    <div class="col-md-12">
        <span class="visibe-md-inline" id="bnv">
            <a class="btn btn-default btn-sm" href="<?php print base_url(); ?>flight/aboutus" role="button">About us</a>
               <a class="btn btn-default btn-sm" href="<?php print base_url(); ?>flight/faq" role="button">FAQ</a>
               <a class="btn btn-default btn-sm" href="<?php print base_url(); ?>careers" role="button">Careers</a>
               <a class="btn btn-default btn-sm" href="<?php print base_url(); ?>flight/sitemap" role="button"> Site Map</a>
               <a class="btn btn-default btn-sm" href="<?php print base_url(); ?>flight/contactus" role="button"> Contact us</a>
                <a class="btn btn-default btn-sm" href="<?php print base_url(); ?>flight/terms" role="button">Terms & Conditions </a>           			
         </span>
        
    </div>
  </div>

</div>

<div class="container-fluid" style="background-color: #8D652F; padding: 10px 0px;">
    <div class="col-md-12">
      <div class="col-md-6">
         <p class="col-md-6 col-md-offset-3" style="color: #fff;  font-size: 1.2em;">Copyright 2017: Dasaac Travels ltd</p>         
      </div>
      <div class="col-md-6">
         <p class="col-md-6 col-md-offset-3" style="color: #fff;  font-size: 1.2em;">Designed by: 4Eleven Technology ltd</p>          
      </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/sparkline/index.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/sweetalert.min.js"></script>
<!-- App scripts -->
<script src="<?php echo base_url(); ?>assets/scripts/homer.js"></script>
<script src="<?php echo base_url(); ?>assets/scripts/charts.js"></script>

	<script>
	$(document).ready(function(){
		
	$('input[type=submit]').click(function(){
			swal({
  title: "Are you sure",
  text: "",
  type:input,
  showCancelButton: true,
  closeOnConfirm: false,
  animation: "slide-from-top",
  inputPlaceholder: ""
},
function(inputValue){
	
  if (inputValue === false) return false;
  
  if (inputValue === "") {
    swal.showInputError("You need to write an update!");
    return false
  }
  
  swal("Nice!", "Your Update is successful: ", "success");
});
		
	});	
		
	});

</script>
<script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-4625583-2', 'webapplayers.com');
        ga('send', 'pageview');

    </script>
	
	</body>
	
</html>		