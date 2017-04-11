<div class="small-header">
        <div class="hpanel">
            <div class="panel-body">
                <div id="hbreadcrumb" class="pull-right">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                        <li>
                            <span>user</span>
                        </li>
                        <li class="active">
                            <span>booking </span>
                        </li>
                    </ol>
                </div>

                <h2 class="font-light m-b-xs">
                    user Management
                </h2>
                <small>user Management for dasaac Travels</small>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel"><p style="color:white;"> <?php if (isset($msg)){ echo $msg; }?> </p>
                <div class="panel-body">
                    <table id="hotel" class="table table-striped table-bordered table-hover" width="100%" style="font-size:12px;">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>FULLNAME</th>
                            <th>PHONE</th>
                            <th>EMAIL</th>
                            <th>CREATED BY</th>
							<th>CREATED DATE</th>
							<th>ACTION</th>
                        </tr>
                        </thead>
						<tbody>
					<?php
						$SN = 0;
						foreach ($user as $user) {
				echo '	<tr>
							<td>'.++$SN.'</td>
							<td>'.$user->USERNAME.'</td>
							<td>'.$user->PHONE.'</td>
							<td>'.$user->EMAIL.'</td>
							<td>'.$user->CREATED_BY.'</td>
							<td>'.$user->CREATED_DATE.'</td>
							<td>';?> <?php if ($user->STATUS == '0'){ echo "Active"; }else{ echo "Inactive"; } echo'</td>'; ?>
					<?php echo  ' <td class="text-center">
					<div class="btn-group">';?>
                    <button class="btn btn-danger btn-xs" type="button"><i class="fa fa-trash-o"></i><a href = "<?php echo base_url();?>user/delete/<?php echo $user->USERID ?>">Delete</a></button>
					 <button class="btn btn-success btn-xs" type="button"><i class="fa fa-info-o"></i><a href = "<?php  echo base_url();?>user/status_change/<?php echo $user->USERID ?>"> Status</a></button>
                  
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
