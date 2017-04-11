<div class="small-header ">
    <div class="hpanel">
        <div class="panel-body">
            <div id="hbreadcrumb" class="pull-right">
                <ol class="hbreadcrumb breadcrumb">
                    <li><a href="<?php echo base_url(); ?>/dashboard">Dashboard</a></li>
                    <li>
                        <span>Jobs Management</span>
                    </li>
                    <li class="active">
                        <span>List Jobs </span>
                    </li>
                </ol>
            </div>
            <h2 class="font-light m-b-xs">
                Jobs Management
            </h2>
            <small> Jobs</small>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-lg-12">
		<?php 
			if (isset($msg)) {
				echo $msg;
			} 
			?>
            <div class="hpanel">
                <div class="panel-body">
                    <table id="hotel" class="table table-striped table-bordered table-hover" width="100%" style="font-size:12px;">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>JOB ID</th>
                            <th>TITLE</th>
                            <th>LOCATION</th>
                            <th>CATEGORY</th>
							<th>DESCRIPTION</th>
							<th>ACTION</th>
                        </tr>
                        </thead>
						<tbody>
					<?php
						$SN = 0;
						foreach ($jobs as $jobs) {
				echo '	<tr>
							<td>'.++$SN.'</td>
							<td>'.$jobs->job_id.'</td>
							<td>'.$jobs->job_title.'</td>
							<td>'.$jobs->location_name.'</td>
							<td>'.$jobs->cat_name.'</td>
							<td>'.$jobs->job_desc.'</td>
						';?>
					<?php echo  ' <td class="text-center">
					<div class="btn-group">';?>
                    <button class="btn btn-danger btn-xs" type="button"><i class="fa fa-trash-o"></i><a href = "<?php echo base_url();?>jobs/delete/<?php echo $jobs->id ?>">Delete</a></button>
					<button class="btn btn-sucsess btn-xs" type="button"><i class="fa fa-info-o"></i><a href = "<?php echo base_url();?>jobs/post/<?php echo $jobs->id ?>">Post</a></button>
                <?php echo ' </div>
				</td>
				
						</tr>';
						}
					?>
					</tbody>
                    </table>

                </div>
            </div>
 </div>
            </div>