
  <div class="container" style="margin-top: 10px;">
      <div class="row">
                   <div class="col-md-4">
                 <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Contact form</h3>
                        </div>
                          <div class="panel-body">
						  <?php echo validation_errors();?>
                          <form method = "POST" action = "<?php print base_url(); ?>flight/contactform" class="form-horizontal">
                              <div class="row">
                               <div class="col-md-6">
                                   nature of complaint:
                               </div>
                               <div class="col-md-6">
                                <label class="radio-inline">
                                  <input type="radio" name="enquiry" id="Radio1" value="enquiry" checked>Enquiry
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="enquiry" id="Radio2" value="complaint"> Complaint
                                </label>
                              </div>
                              </div> <br />
                              <div class="row">
                                  <div class="col-md-1">
                                      sex:
                                  </div>
                                  <div class="col-md-4">
                                      <select class="form-control" name="sex">
                                          <option value="Male" checked>Male</option>
                                          <option value="Female" checked>Female</option>
                                        </select>
                                  </div>
                                  <div class="col-md-2">
                                  <label for="contact_form" > Phone:</label>
                                  </div>
                                  <div class="col-md-5">
                                    <input type="text" class="form-control" name="phone" id="contact_form">
                                  </div>
                              </div><br>
                              <div class="row">
                                  <div class="col-md-4">
                                      Surname:
                                  </div>
                                  <div class="col-md-8">
                                    <input type="text" class="form-control" name="lastname" id="contact_form">  
                                  </div>
                              </div><br>
                              <div class="row">
                                  <div class="col-md-4">
                                      First Name:
                                  </div>
                                  <div class="col-md-8">
                                    <input type="text" class="form-control" name="firstname" id="contact_form">  
                                  </div>
                              </div><br>
                              <div class="row">
                                  <div class="col-md-4">
                                      Other Name:
                                  </div>
                                  <div class="col-md-8">
                                    <input type="text" class="form-control" name="othernames" id="contact_form">  
                                  </div>
                              </div><br>
                              <div class="row">
                                  <div class="col-md-4">
                                      Email Address:
                                  </div>
                                  <div class="col-md-8">
                                    <input type="text" class="form-control" name="email" id="contact_form">  
                                  </div>
                              </div><br>
                              <div class="row">
                                  <div class="col-md-12">
                                     Message: <br />
                                      <textarea class="form-control" name="message" rows="5"></textarea>
                                  </div>
                              </div><br>
                              <div class="row">
                                  <div class="col-md-12">
                                      <button class="btn-success" type="submit" > SUBMIT </button>
                                  </div>
                              </div>
                          </form>
                          </div>
                  </div>
          </div>
          <div class="col-md-8">
             <div class="col-md-12" style="background-image: url(<?php echo base_url(); ?>assets/img/banners/cont_us.jpg); background-repeat: no-repeat; background-size: cover; background-position: center; height: 200px; margin-bottom: 10px;">
                 
             </div>
              <div class="col-md-5">
                  <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Phone Contacts</h3>
                    </div>
                    <div class="panel-body">
					
					<p id="contphn" style="font-weight: bold; font-size: 0.95em;">
				<label><i style="color:green;" class="fa fa-phone-square fa-2x"></i>  09090010078 </label><br />
				<label><i style="color:green;" class="fa fa-whatsapp fa-2x"></i>  09090010079 </label><br />
				<label><i style="color:green;" class="fa fa-envelope-o fa-2x"></i>  info@dasaactravels.com </label><br />
				<label><i style="color:blue;" class="fa fa-envelope-o fa-2x"></i><span>  helpdesk@dasaactravels.com</span></label><br />
					</p>
                    </div>
                  </div>
              </div>
              <div class="col-md-7">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Address</h3>
                        </div>
                          <div class="panel-body address_panel">
                            <address style="text-align: right; font-weight: bold; font-size: 1.2em;">
                            Dasaac Travels, <br />
							Adeleye & Adeleye Suite, <br />
							Investment House (7th floor)<br /> 21/25, Broad Street By CMS Bus-stop,<br /> Lagos island,<br /> Lagos.
					        </address>
                          </div>
                  </div>
              </div>
              <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Map</h3>
                        </div>
                          <div class="panel-body">
                          </div>
                  </div>
              </div>
          </div>

      </div>
  </div>
