<div class="small-header">
    <div class="hpanel">
        <div class="panel-body">
            <div id="hbreadcrumb" class="pull-right">
                <ol class="hbreadcrumb breadcrumb">
                    <li><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
                    <li>
                        <span>Report Management</span>
                    </li>
                    <li class="active">
                        <span>Report </span>
                    </li>
                </ol>
            </div>
            <h2 class="font-light m-b-xs">
                Report Management
            </h2>
            <small></small>
        </div>
    </div>
</div>
<div class="content">
    <div class="row">
        <div class="col-lg-12">
			            <div class="hpanel">
                <div class="panel-body">
				<?php echo validation_errors();?>
         		<form action="transaction/fetchReport_list" method="GET" class="form-horizontal form-label-left" id="demo-form2">
				<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Report Type</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
							<select  class="form-control" name="report" id="report"  >
							<option value=""> Select Report Type</option>
							<option value="flightreservation">flight Bookings</option>
							<option value="hotel">Hotel Bookings</option>
							<option value="package">Package Bookings</option>
							<option value="deals">Deals Bookings</option>
							</select>
				</div>
				</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Report Start Date</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="date" class="form-control date_picker" name="report_start" id="report_start" value="<?php echo date('Y-m-d'); ?>" />
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Report End Date</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="date" class="form-control date_picker" name="report_end" id="report_end" value="<?php echo date('Y-m-d'); ?>" />
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
										<a href="<?php echo base_url();?>dashboard" class="btn btn-warning"><i class="fa fa-history"></i> Cancel</a>&nbsp; &nbsp;
										<button type="button" class="btn btn-success generate" value="generate" name="generate" id="generate"><i class="fa fa-check"></i> Generate Report</button>
									</div>
								</div> 
							 </form>
                     </div>
            </div>
        </div>
    </div>
</div>        
    <script src="<?php echo base_url(); ?>assets/js/login.js"></script>
			
						<div class=" panel-body" id="coy"></div>

        