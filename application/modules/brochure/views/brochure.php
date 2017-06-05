   <div class="small-header">
        <div class="hpanel">
            <div class="panel-body">
                <div id="hbreadcrumb" class="pull-right">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                        <li>
                            <span>brochures</span>
                        </li>
                        <li class="active">
                            <span>booking </span>
                        </li>
                    </ol>
                </div>

                <h2 class="font-light m-b-xs">
                    brochures Management
                </h2>
                <small>brochures Management for dasaac Travels</small>
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
                            <th>BROCHURE ID</th>
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
						foreach ($brochures as $brochures) {
				echo '	<tr>
							<td>'.++$SN.'</td>
							<td>'.$brochures->brochureid.'</td>
							<td>'.$brochures->Name.'</td>
							<td>'.$brochures->createdby.'</td>
							<td>'.$brochures->created_date.'</td>
							<td>'.$brochures->status.'</td>
							<td>'.$brochures->publishedby.'</td>
							<td>'.$brochures->publish_date.'</td>
							<td>'.$brochures->description.'</td>
						';?>
					<?php echo  ' <td class="text-center">
					<div class="btn-group">';?>
                    <button class="btn btn-danger btn-xs" type="button"><i class="fa fa-trash-o"></i><a href = "<?php echo base_url();?>brochure/delete/<?php echo $brochures->ID ?>">Delete</a></button>
					<button class="btn btn-sucsess btn-xs" type="button"><i class="fa fa-info-o"></i><a href = "<?php echo base_url();?>brochure/publish/<?php echo $brochures->ID ?>">publish</a></button>
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