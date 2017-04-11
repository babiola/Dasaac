<div class="small-header">
    <div class="hpanel">
        <div class="panel-body">
            <div id="hbreadcrumb" class="pull-right">
                <ol class="hbreadcrumb breadcrumb">
                    <li><a href="<?php echo base_url(); ?>/dashboard">Dashboard</a></li>
                    <li>
                        <span>Hotel Management</span>
                    </li>
                    <li class="active">
                        <span>Add New Hotel </span>
                    </li>
                </ol>
            </div>
            <h2 class="font-light m-b-xs">
                Hotel Management
            </h2>
            <small>New Hotel</small>
        </div>
    </div>
</div>

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
					<span class="pull-left"><i class="fa fa-plus"></i> Add New Hotel</span>
					<a class="pull-right" href="<?php echo base_url(); ?>hotelmanager/hotellist"><i class="fa fa-th"></i> List All Hotel</a>
					<div class="clearfix"></div>
				</div>
                <div class="panel-body">
          <?php echo form_open('hotelmanager/submit', array('class' => 'form-horizontal form-label-left', 'id'=>'demo-form2')); ?>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Hotel Name</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="Hotel Name" class="form-control" name="hotelname" required>
                            </div>
                        </div>
                       	<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Category</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="js-source-states form-control" style="width: 100%" name="categoryname" style="color:black;">
									<option value="null">Select Category</option>
									<?php foreach ($category as $rec) { ?>
									 <option   value="<?php echo $rec->cat_id ?>"> <?php echo $rec->category_name ?> </option>
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
                        <div class="form-group">
                            <label  class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Price</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="price" class="form-control" name="price">
                            </div>
                        </div>
						  <div class="form-group">
                            <label  class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Address</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="3 lagos way, lekki." class="form-control" name="address">
                            </div>
                        </div>
                      <div class="form-group">
		<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
		<a href="<?php echo base_url(); ?>hotelmanager/hotellist" class="btn btn-warning"><i class="fa fa-history"></i> Cancel</a>&nbsp; &nbsp;
		<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Add Hotel</button>
		</div>
		</div> 
                    </form>
                     </div>
            </div>
        </div>
    </div>
</div>