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
		<link type="text/css" href="<?php echo base_url(); ?>assets/styles/css/mystyles.css" rel="stylesheet" />
	</head>
	
	<body class="body">
		<div id="navinfo">
			<marquee id="marqueehome"> 
					<ul>
						<li>
							<h2 class="maqblink"> <a href="Ã¼c.html">HOT DEALS </a> </h2>
							<span id="mardhomeinfo1">
							DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS 
							</span>
							
							<span id="mardhomeinfo1">
							DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS 
							</span>
							
							<span id="mardhomeinfo1">
							DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS 
							</span>
						</li>	
					
					
						<li>
							<h2 class="maqblink"> <a href="Ã¼c.html">NEW DEALS </a> </h2>
							<span id="mardhomeinfo1">
							DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS 
							</span>
							
							<span id="mardhomeinfo1">
							DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS 
							</span>
							
							<span id="mardhomeinfo1">
							DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS 
							</span>
						</li>
						<li>
							<h2 class="maqblink"> <a href="Ã¼c.html"> CLOSING DEALS </a> </h2>
							<span id="mardhomeinfo1">
							<img src="">
							DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS DASAAC TRAVELS 
							</span>
						</li>
					</ul>
									
				</marquee> 
				
						<?php echo validation_errors();?>
						<form action="<?php print base_url(); ?>flight/subscrible" method="POST">
							<label style="color:#ffffff;" for="newsletter">SUBSCRIBE TO OUR NEWSLETTER</label>
							<input type="email" name="newsletter" placeholder="Enter Email Address..." required />
							<input class="btn-primary" type="submit" value="submit">
												
						</form>
		</div>
		
		
			<div id="navwrap">
				<div id="logobox">
				</div>
		
					<nav  id="tn">
						<ul>
							<li><a href="<?php print base_url(); ?>" id="home">Home</a></li>
							<li><a href="<?php print base_url(); ?>flight/aboutus" id="about">About us</a></li>
							<li><a href="<?php print base_url(); ?>flight/brochure" id="broch">Brochures</a></li>
							<li><a href="<?php print base_url(); ?>flight/career" id="career">Careers</a></li>
							<li><a href="<?php print base_url(); ?>flight/contactus" id="cont">Contact us</a></li>
						</ul>					
					</nav>
			</div>	
			<div class="wrap">		
				<header>
					<label for="slide-1-trigger"> Packages </label>
					<label for="slide-2-trigger"> Flights </label>
					<label for="slide-3-trigger"> Hotels </label>
					<label for="slide-4-trigger"> Deals </label>
					<label for="slide-6-trigger"><a style="color:white;" href="<?php print base_url(); ?>jobs" id="jobs">Jobs</a></label>
					<label for="slide-6-trigger"><a style="color:white;" href="<?php print base_url(); ?>visa" id="visa">Visa</a></label>
					<label for="slide-6-trigger"><a style="color:white;" href="<?php print base_url(); ?>vacation" id="vacation">Vacations</a></label>
					<label ><a style="color:white;" href="<?php print base_url(); ?>flight/admin" id="admin">Admin</a></label>
				</header>
		
		
			
				<input id="slide-1-trigger" type="radio" name="slides" checked>
					<section class="slide slide-1" style="color:black;">
						<h1>Request For a Package</h1><br />
						<form class="package-form">
							
							<select name="packages"  cols="50">
							  <option value="0" >By Destinations....</option>
							  <option value="1">Nigeria</option>
							  <option value="2">Ghana</option>
							  <option value="3">South Africa</option>
							  <option value="4">Dubai</option>
							  <option value="5">Istanbul</option>
							</select>
												
							<select name="theme">
							  <option value="">By Theme....</option>
							  <option value="">Adventure</option>
							  <option value="">Leisure</option>
							  <option value="">Honeymoon</option>
							  <option value="">Pilgrimage</option>
							</select>
						
							<select name="price">
							  <option value="">By Price....</option>
							  <option value="">$0-500</option>
							  <option value="">$500-800</option>
							  <option value="">$800-1000</option>
							  <option value="">$1000-above</option>
							</select>
						
							<select name="By Date">
							  <option value="">By Date</option>
							  <option value=""></option>
							  <option value=""></option>
							  <option value=""></option>
							  <option value=""></option>
							</select>							
						
							  <input name="search" size="40">
							  <datalist id="packages">
								<option value="Package 1">
								<option value="Package 2">
								<option value="Package 3">
								<option value="Package 4">
								<option value="package 5">
							  </datalist>
							  <p id ="msg-container"><?php if (isset($msg)){echo $msg;}?></p>
							  <label for="email">Email:</label><input id="email" type="text" name="itn" placeholder="  Enter Email address">
							  <input class="btn-success" type="submit">
						</form>
					</section>
					
					 <script>
            $(function () {
                var msgp = $('#msg-container');
                setTimeout(function () {
                    msgp.fadeOut('slow', function () {
                        $(this).text('').fadeIn();
                    });
                }, 20000);
            });
        </script>
					
				<input id="slide-2-trigger" type="radio" name="slides">
					<section class="slide slide-2">
						<h1>Flight Reservation</h1><br />
						
						<table class="flights-form">
						<?php echo validation_errors();?>
						<form method="POST" action = "<?php echo base_url(); ?>flight/bookflight">
							<tr>
								<td>
									<label>Title</label><br />
									<select name="title">
										<option value ="mr">Mr</option>
										<option value ="mrs">Mrs</option>
										<option value ="ms">Ms</option>
									</select>
								</td>
								
								<td>
									<label for="surname">Surname:</label><br />
									<input id="surname" type="text" name="sname" placeholder=" Surname">
								</td>
								  <div class="tabletdspace"></div>
								<td>
									
								</td>
								
								<td>
									<label for="departure">Leaving from:</label><br />
									<input id="departure" type="text" name="leavefrom" placeholder="  Enter Departing city">
								</td>
								
								
								<td>							
									<label>Flight type</label><br />
									<select name= "flighttype">
										<option value="Round Trip">Round Trip</option>
										<option value="One Way">One Way</option>
										<option value="Multi-segment">Multi-segment</option>
									</select>
								</td>
								
								
								<td>
									<label>Date of Departure</label><br />
									<input type="date" name="bookingdate">
								</td>
								
								
								<td>
									
								</td>
								
								<td>
									<label>Adults(12+):</label><br />
									<select name = "adult">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</td>
								
								<td>
									<label>Children:</label><br />
									<select name = "children">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</td>
								
								<td>
									<label>infants:</label><br />
									<select name = "infant">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</td>
								</div>
								
								<td>
									<label for="email">Email:</label><br />
									<input id="email" type="text" name="email" placeholder="  Enter Email address">
								</td>
							</tr>

							<tr>
								<td>
							
								
								</td>
								
								
								
								<td>
									<label for="other-names">Other Names:  </label><br />
									<input id="other-names" type="text" name="othernames" placeholder=" Other Names">									
								</td>
								
								<td>
							
								
								</td>
								
								<td>
									<label for="arrival">Destination:</label><br />
									<input id="arrival" type="text" name="destination" placeholder="  Enter Arriving city">
								</td>
								
								
								
								<td>
									<label>Flight Class</label><br />
									<select name="flightclass">
										<option value="Economy">Economy</option>
										<option value="Business">Business</option>
										<option value="First">First</option>
									</select>
								</td>
								
								
								<td>									
									<label>Date of Arrival</label><br />
									<input type="date" name="arrivaldate">
								</td>
								
								
								<td>
									
								</td>
								
								<td>
									
								</td>
								
								<td>
																	
								</td>
								
								<td>
																	
								</td>
								
								<td>
																	
								</td>
								
								<td>
									
								</td>
								<td>
									<input class="btn-success" type="submit" value ="bookingflight" name="bookflight" >
								</td>
							 </tr>
							 </form>
						</table>
					</section>
					
					
					
					
				<input id="slide-3-trigger" type="radio" name="slides">
					<section class="slide slide-3">
						<h1>Hotel Reservation</h1><br />
						<?php echo validation_errors();?>
						<form  class="hotel-form" method="POST" action = "<?php echo base_url(); ?>hotelmanager/hotelbook">
					<label for="surname">Surname</label><input id="surname" type="text" name="surname" placeholder=" Surname">
					<label for="other-names">Other Names</label><input id="other-names" type="text" name="othernames" placeholder=" Other Names">
							
							<label>Hotel Type</label><select name="hoteltype">
								<option>City/Airport</option>
								<option>Apartment</option>
							</select>
							
							<label>Check-in</label><input type="date" name="checkindate">
							<label>Check-out</label><input type="date" name="checkoutdate">
							
							
							<label>Occupancy</label><select name="occupants">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
							</select>
							
							
							<label>Area Location</label><select name="location">
								<option>Airport</option>
								<option>Down Town</option>
								<option>East</option>
								<option>North</option>
								<option>South</option>
								<option>East</option>
								<option>Resort</option>
							</select>
							
							
							<label>Category</label><select name="cat">
								<option>First Class</option>
								<option>Luxury Hotel</option>
								<option>Standard Hotel</option>
								<option>Tourist Hotel</option>
							</select>
							
							
							<label for="email">Email</label><input id="email" type="text" name="email" placeholder="  Enter Email address">
							<input class="btn-success" type="submit" value ="bookhotel" name="bookhotel" >
						</form>
					</section>
					
					
					
					
		<!--			
				<input id="slide-4-trigger" type="radio" name="slides">
					<section class="slide slide-4">
						<h1>Deals</h1><br />
						<div class="deal-slide">
						</div>
					</section>
					
					
					
					
					
				<input id="slide-5-trigger" type="radio" name="slides">
					<section class="slide slide-5">
						<h1>Jobs</h1><br />
						<div class="jobs-slide">
						</div>
					</section>
					
					
					
					
					
				<input id="slide-6-trigger" type="radio" name="slides">
					<section class="slide slide-6">
						<h1>Visa</h1><br />
						<div class="visa-slide">
						</div>
					</section>
					
					
					
					
					
					
				<input id="slide-7-trigger" type="radio" name="slides">
					<section class="slide slide-7">
						<h1>Vacations</h1><br />
						<div class="vacations-slide">
						</div>
					</section>-->
			</div>
			
<!-- Main Wrapper -->
    <?php $this->load->view($module . '/' . $view_file); ?>
		<footer class="first">
	<section id="footercaddress">
	 <h3>Contact Us:</h3>
	 <p>
	 phone: 09090010078, 09090010079
	 </p>
	 <p>Email: info@dasaactravels.com</p>
	 <h3>Address:</h3>
	<address>
	Adeleye & Adeleye Suite, <br />
	Investment House (7th floor)<br /> 21/25, Broad Street By CMS Bus-stop,<br /> Lagos island,<br /> Lagos.
	</address>
	</section>
	<section id="socialicon">
	<h3>Conect With us:</h3>
		<ul id="sxc">
			<li><a href="uc.php"> <img src="<?php echo base_url(); ?>images/imgs/general/fb.png"> </a></li>
			<li><a href="http://www.twitter.com/DasaacTravels"> <img src="<?php echo base_url(); ?>images/imgs/general/tw.png"> </a></li>
			<li><a href="uc.php"> <img src="<?php echo base_url(); ?>images/imgs/general/in.png"> </a></li>
			<!--<li><a href="uc.php"> <img src=""> </a></li>-->
		</ul> <br />
		<br />
		<h3>GDS Partners:</h3>
		<ul id="prtns">
			<li><img src="<?php echo base_url(); ?>images/imgs/general/galileo.png"></li>
			<li><img src="<?php echo base_url(); ?>images/imgs/general/amadeus.png"></li>
	<!--		<li><a href="uc.php"> <img src=""> </a></li>   -->
		</ul>
	</section>
	
	
	 <section id="prtn">
	 <div id="ap1">
	 <h3>Airline Partners</h3>
		<ul id="alogo">
			<li> <img src="<?php echo base_url(); ?>images/imgs/general/ek.png"> </li>
			<li> <img src="<?php echo base_url(); ?>images/imgs/general/qr.png"> </li>
			<li> <img src="<?php echo base_url(); ?>images/imgs/general/tk.png"> </li>
			<li> <img src="<?php echo base_url(); ?>images/imgs/general/lh.png"> </li>
			<li><img src="<?php echo base_url(); ?>images/imgs/general/ey.png"> </li>
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
	 
	 
	 <section id="bnv">
		<ul>
			<li><a href="uc.php">About us |</a></li>
			<li><a href="uc.php">FAQ |</a></li>
			<li><a href="uc.php">Careers |</a></li>
			<li><a href="uc.php"> Site Map |</a></li>
			<li><a href="uc.php"> Contact us |</a></li>
			<li><a href="uc.php">Terms & Conditions </a></li>
		</ul>	
			
	 </section>
	</footer>
	
	<footer class="second">
	<section id="se1">
	<p>
	  copy right © <?php echo date(Y); ?>: Dasaac Travels & Tours ltd
	</p>
	</section>
	<section id="se2">
	<p>
	
	Designed and Managed by: <a href="http://www.4Eleventech.com"> <img src="" /><span>4Eleven Technology ltd</span></a>
	</p>
	</section>
	</footer>
<script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-flot/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/flot.curvedlines/curvedLines.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery.flot.spline/index.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="<?php echo base_url(); ?>assets/scripts/homer.js"></script>
<script src="<?php echo base_url(); ?>assets/scripts/charts.js"></script>
<script>

    $(function () {

        /**
         * Flot charts data and options
         */
        var data1 = [ [0, 55], [1, 48], [2, 40], [3, 36], [4, 40], [5, 60], [6, 50], [7, 51] ];
        var data2 = [ [0, 56], [1, 49], [2, 41], [3, 38], [4, 46], [5, 67], [6, 57], [7, 59] ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
            },
            grid: {
                tickColor: "#f0f0f0",
                borderWidth: 1,
                borderColor: 'f0f0f0',
                color: '#6a6c6f'
            },
            colors: [ "#62cb31", "#efefef"],
        };

        $.plot($("#flot-line-chart"), [data1, data2], chartUsersOptions);

        /**
         * Flot charts 2 data and options
         */
        var chartIncomeData = [
            {
                label: "line",
                data: [ [1, 10], [2, 26], [3, 16], [4, 36], [5, 32], [6, 51] ]
            }
        ];

        var chartIncomeOptions = {
            series: {
                lines: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: "#64cc34"

                }
            },
            colors: ["#62cb31"],
            grid: {
                show: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);



    });

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