   <div class="small-header">
        <div class="hpanel">
            <div class="panel-body">
                <div id="hbreadcrumb" class="pull-right">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                        <li>
                            <span>Hotdeals</span>
                        </li>
                        <li class="active">
                            <span>booking </span>
                        </li>
                    </ol>
                </div>

                <h2 class="font-light m-b-xs">
                    Hotdeals Management
                </h2>
                <small>Hotdeals Management for dasaac Travels</small>
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
                            <th>TITLE</th>
                            <th>CREATED BY</th>
                            <th>CREATED DATE</th>
							<th>STATUS</th>
                            <th>PUBLISH BY</th>
                            <th>PUBLISH DATE</th>
							<th>DESCRIPTION</th>
							<th>ACTION</th>
                        </tr>
                        </thead>
						<tbody>
					<?php
						$SN = 0;
						foreach ($hot as $hot) {
				echo '	<tr>
							<td>'.++$SN.'</td>
							<td>'.$hot->Name.'</td>
							<td>'.$hot->createdby.'</td>
							<td>'.$hot->Date_Created.'</td>
							<td>'.$hot->status.'</td>
							<td>'.$hot->publishedby.'</td>
							<td>'.$hot->Date_published.'</td>
							<td>'.$hot->description.'</td>
						';?>
					<?php echo  ' <td class="text-center">
					<div class="btn-group">';?>
                    <button class="btn btn-danger btn-xs" type="button"><i class="fa fa-trash-o"></i><a href = "<?php echo base_url();?>deals/remove/<?php echo $hot->ID ?>">Delete</a></button>
					<button class="btn btn-sucsess btn-xs" type="button"><i class="fa fa-info-o"></i><a href = "<?php echo base_url();?>deals/released/<?php echo $hot->ID ?>">publish</a></button>
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