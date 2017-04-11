<div class="content">
    <div class="row">
        <div class="col-lg-12">
			<?php 
			if (isset($msg)) {
				echo $msg;
			} 
			?>
            <div class="hpanel">
				<div class="panel-heading hbuilt">
					<span class="pull-left"><i class="fa fa-plus"></i> Jobs Application Form</span>
					<a class="pull-right" href="<?php print base_url(); ?>jobs"><i class="fa fa-th"></i> Available Jobs</a>
					<div class="clearfix"></div>
				</div>
                <div class="panel-body">
          <?php echo form_open('jobs/process', array('class' => 'form-horizontal form-label-left', 'id'=>'demo-form2')); ?>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Jobs Title</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="Acc001" class="form-control" value="<?php if(isset($jobtitle)){echo $jobtitle;} ?>" name="jobtitle" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">First Name</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="Alex" class="form-control" name="fname" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Last Name</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="Henry" class="form-control" name="lname" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Address</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="3, obaseki street" class="form-control" name="address" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Email</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="you@yahoo.com" class="form-control" name="email" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Phone</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="080xxxxxxxx" class="form-control" name="phone" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Education</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="University Degree" class="form-control" name="education" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Jobs Title</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="Senior Developer" class="form-control" name="jobtitle" required>
                            </div>
                        </div>
                       	<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Category</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="js-source-states form-control" style="width: 100%" name="categoryname" style="color:black;">
									<option value="null">Select Category</option>
									<?php foreach ($category as $rec) { ?>
									 <option   value="<?php echo $rec->cat_id ?>"> <?php echo $rec->cat_name ?> </option>
								   <?php } ?>
								</select>
							</div>
						</div>
						 	<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Location</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="js-source-states form-control" style="width: 100%" name="location" style="color:black;">
									<option value="null">Select Location</option>
									<?php foreach ($location as $loc) { ?>
									 <option   value="<?php echo $loc->loc_id ?>"> <?php echo $loc->location_name ?> </option>
								   <?php } ?>
								</select>
							</div>
						</div>
                       
						<!--  <div class="form-group">
                            <label  class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Address</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="3 lagos way, lekki." class="form-control" name="address">
                            </div>
                        </div>-->
						 <div class="form-group">
                            <label  class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Description</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea placeholder="enter description here"  class="form-control" name="desc" required></textarea>
                            </div>
                        </div>
                      <div class="form-group">
		<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
		<a href="<?php echo base_url(); ?>jobs" class="btn btn-warning"><i class="fa fa-history"></i> Cancel</a>&nbsp; &nbsp;
		<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
		</div>
		</div> 
                    </form>
                     </div>
            </div>
        </div>
    </div>
</div>