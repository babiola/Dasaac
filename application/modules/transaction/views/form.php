<div class="small-header">
    <div class="hpanel">
        <div class="panel-body">
            <div id="hbreadcrumb" class="pull-right">
                <ol class="hbreadcrumb breadcrumb">
                    <li><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
                    <li>
                        <span>Contact Management</span>
                    </li>
                    <li class="active">
                        <span>Reply</span>
                    </li>
                </ol>
            </div>
            <h2 class="font-light m-b-xs">
                Contact Management
            </h2>
            <small>Please always reply to mail</small>
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-lg-12">
			            <div class="hpanel">
				<div class="panel-heading hbuilt">
					<span class="pull-left"><i class="fa fa-plus"></i> Reply</span>
					<a class="pull-right" href="<?php echo base_url();?>contact/index"><i class="fa fa-th"></i> Back</a>
					<div class="clearfix"></div>
				</div>
                <div class="panel-body">
				<?php echo validation_errors();?>
          <form action="<?php echo base_url();?>contact/sendMails" class="form-horizontal form-label-left" id="demo-form2" method="post" accept-charset="utf-8">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Nature</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="Enquiry" class="form-control" value="<?php if(isset($nature)){echo $nature;}?>" name="nature" required>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label  class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Email</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="email" placeholder="dasaac@gmail.com" class="form-control" value="<?php if(isset($email)){echo $email;}?>" name="email" required>
                            </div>
                        </div>
						  <div class="form-group">
                            <label  class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Subject</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" placeholder=" Thank you for contacting us" class="form-control" name="subject" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Message</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea placeholder="enter message here"  class="form-control" name="message" required></textarea>
                            </div>
                        </div>
                      
                      <div class="form-group">
		<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
		<a href="<?php echo base_url();?>contact/index" class="btn btn-warning"><i class="fa fa-history"></i> Cancel</a>&nbsp; &nbsp;
		<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Send Mail</button>
		</div>
		</div> 
                    </form>
                     </div>
            </div>
        </div>
    </div>
</div>        
     
       