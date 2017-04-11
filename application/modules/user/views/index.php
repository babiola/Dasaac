<div class="small-header">
    <div class="hpanel">
        <div class="panel-body">
            <div id="hbreadcrumb" class="pull-right">
                <ol class="hbreadcrumb breadcrumb">
                    <li><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
                    <li>
                        <span>User Management</span>
                    </li>
                    <li class="active">
                        <span>Add New User </span>
                    </li>
                </ol>
            </div>
            <h2 class="font-light m-b-xs">
                User Management
            </h2>
            <small>New User</small>
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-lg-12">
			            <div class="hpanel">
				<div class="panel-heading hbuilt">
					<span class="pull-left"><i class="fa fa-plus"></i> Add New User</span>
					<a class="pull-right" href="<?php echo base_url();?>user/index"><i class="fa fa-th"></i> List All User</a>
					<div class="clearfix"></div>
				</div>
                <div class="panel-body">
				<?php echo validation_errors();?>
          <form action="<?php echo base_url();?>user/submit" class="form-horizontal form-label-left" id="demo-form2" method="post" accept-charset="utf-8">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">User Name</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="User" class="form-control" name="username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Password</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" placeholder="*********" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Email</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="email" placeholder="dasaac@gmail.com" class="form-control" name="email" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Phone</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="08010101010" class="form-control" name="phone" required>
                            </div>
                        </div>
                       <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">User Type</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								 <select name="usertype" class="js-source-states form-control" style="width: 100%">
									  <option value="">Select User Type</option>
									<option value="0"
									>
										Admin  </option>
									<option value="1"
									>
										Support</option>
								</select>
							</div>
						</div>
                      <div class="form-group">
		<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
		<a href="http://localhost/hadmin/User/Userlist" class="btn btn-warning"><i class="fa fa-history"></i> Cancel</a>&nbsp; &nbsp;
		<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Add User</button>
		</div>
		</div> 
                    </form>
                     </div>
            </div>
        </div>
    </div>
</div>        
     
       