<div class="small-header">
    <div class="hpanel">
        <div class="panel-body">
            <div id="hbreadcrumb" class="pull-right">
                <ol class="hbreadcrumb breadcrumb">
                    <li><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
                    <li>
                        <span>Brochure Management</span>
                    </li>
                    <li class="active">
                        <span>Add New Brochure </span>
                    </li>
                </ol>
            </div>
            <h2 class="font-light m-b-xs">
                Brochure Management
            </h2>
            <small>New Brochure</small>
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
					<span class="pull-left"><i class="fa fa-plus"></i> Add New Brochure</span>
					<a class="pull-right" href="<?php print base_url(); ?>brochure/available"><i class="fa fa-th"></i> List All Brochure</a>
					<div class="clearfix"></div>
				</div>
                <div class="panel-body">
          <?php echo form_open_multipart('brochure/submit', array('class' => 'form-horizontal form-label-left', 'id'=>'demo-form2')); ?>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Brochure Id</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="Acc001" class="form-control" name="brochureid" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Brochure Title</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="Senior Developer" class="form-control" name="title" required>
                            </div>
                        </div>
						  <div class="form-group">
                            <label  class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Picture</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file"  class="form-control" name="user_file">
                            </div>
                        </div>
						  <div class="form-group">
                            <label  class="control-label col-md-3 col-sm-3 col-xs-12 text-right">PDF</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file"  class="form-control" name="pdf_file">
                            </div>
                        </div>
						 <div class="form-group">
                            <label  class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Description</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea placeholder="enter description here"  class="form-control" name="desc" ></textarea>
                            </div>
                        </div>
                      <div class="form-group">
		<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
		<a href="<?php echo base_url(); ?>deals/available" class="btn btn-warning"><i class="fa fa-history"></i> Cancel</a>&nbsp; &nbsp;
		<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Add Brochure</button>
		</div>
		</div> 
                    </form>
                     </div>
            </div>
        </div>
    </div>
</div>