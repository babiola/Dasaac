<!--
			<img class="banner contactusbanner" src="imgs/banners/packages_banner.jpg">  -->
		
		<div class="contactusbody">
			
			
			
			<div id="addresswrap">
			
				<div class="cont_panel contphn">
					<header class="cont_header"> Phone Numbers </header>
					
					<p>
					<img src="imgs/general/phone.png" />   09090010078 <br />

					<img src="imgs/general/phone.png" />   09090010079 <br />
					
					<img src="imgs/general/whatsapp.png" />  09090010078
					<br />
					<br />
					<img src="imgs/general/emailus.png" /> info@dasaactravels.com <br />
					<img src="imgs/general/emailus.png" /> helpdesk@dasaactravels.com
					<br />
					
					</p>
					
				
				</div>
				
				<div class="cont_panel contaddress">
					<header class="cont_header"> Address</header>
					<address>
							Adeleye & Adeleye Suite, <br />
							Investment House (7th floor)<br /> 21/25, Broad Street By CMS Bus-stop,<br /> Lagos island,<br /> Lagos.
					</address>
				</div>
			
			</div>
			
			
			
			<div class="cont_panel contmap">
				<header class="cont_header"> Map </header>
				<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5349173746117!2d3.387322914314802!3d6.453695095331051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b11de409435%3A0x6ef0bee8868db7e!2s21%2F25+Broad+St%2C+Lagos+Island%2C+Lagos!5e0!3m2!1sen!2sng!4v1491317570587" width="790" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
						
			<div class="cont_panel contform">
				<header class="cont_header"> Contact Form </header>
				<?php echo validation_errors();?>
				<form method = "POST" action = "<?php print base_url(); ?>flight/contactform" style= "color:black;">
				<table border="1">
					<tr>
						<td colspan="2">
							
							<label for="enquiry">Nature of Contact</label>
						</td>
						<td colspan="2">
							<input id="enquiry" type="radio" name="enquiry" value="enquiry"> Enqury
												
							<input id="complaint" type="radio" name="enquiry" value="complaint" > Complaint    <br />
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
						<label for="sex">Sex</label>
							
						</td>
						<td>
							<select name="sex">
							  <option value="Male" checked>Male</option>
							  <option value="female">Female</option>
							</select>
						</td>
				</tr>
					<tr>
						<td colspan="2">
						<label for="firstname">First Name</label>
							 
						</td>
						
						<td colspan="2">
						<input type="text" name="firstname"> 
						</td>
					</tr>
					
					
					<tr>
						<td colspan="2">
						<label for="lastname">Last Names</label>
						</td>
						<td colspan="2">
						<input type="text" name="lastname">
						</td>
					</tr>
					
					<tr>
						<td  colspan="2">
						<label for="email">Email Address</label>
						</td>
						<td colspan="2">
						<input type="text" name="email">
						</td>
					</tr>
										
					
					<tr>
						<td  colspan="2">
						<label for="phone">Phone number</label>
						</td>
						<td colspan="2">
						<input type="text" name="phone">
						</td>
					</tr>
					
					
					<tr>
					<td  colspan="12" style= "text-align:center;">
						<label for="message" >Enter Message</label>
						</td>
						</tr>
						<tr>
						<td  colspan="6">
							 <textarea name="message" rows="7" cols="53"></textarea>
						</td>
					</tr>
					
					<tr>
						<td  colspan="12" style= "text-align:center;">
					 <button class="btn-success" type="submit">SUBMIT</button>
						</td>
					</tr>
				</table>
			</form>
			</div>
		
		<!--	<div class="contactwrap">
				<header class="contactheader">
					<label for="s1trigger"> General informations </label>
					<label for="s2trigger"> complaint form </label>
				</header>
				
					<input id="s1trigger" type="radio" name="contslides" checked>
					<section class="cslide s1">
						<h1>Headline One</h1>
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
					<input id="s2trigger" type="radio" name="contslides">
					<section class="cslide s2">
						<h1>Headline two</h1>
					</section>

					 
			</div>
		
			<section id="contactstatement">
				<h1>Why Choose us?</h1>
				<ul>
					<li>Cheapest rates in the industry</li>
					<li>It is our believe that you are our most important customer</li>
					<li>our robust & flexible packages ensures that we find an exact fit for you </li>
					<li>we are always ready to assist you</li>
					<li>No hidden suprises</li>
					<li>Fast response time</li>
				</ul>
			</section>			
		-->	
		</div>
		
			
		
		
		
		<!--bottom starts here -->