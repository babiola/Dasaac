    <div class="small-header">
        <div class="hpanel">
            <div class="panel-body">
                <div id="hbreadcrumb" class="pull-right">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                        <li>
                            <span>CONTACT </span>
                        </li>
                        <li class="active">
                            <span>US </span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    CONTACT MANAGEMENT
                </h2>
                <small><?php if(isset($msg)){ echo $msg ; }?></small>
            </div>
        </div>
    </div>
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-body">
                    <table id="hotel" class="table table-striped table-bordered table-hover" width="100%" style="font-size:12px;">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>FULLNAME</th>
                            <th>PHONE</th>
                            <th>EMAIL</th>
                            <th>MESSAGE</th>
							<th>NATURE</th>
							<th>REQUEST_DATE</th>
							<th>ACTION</th>
                        </tr>
                        </thead>
						<tbody>
					<?php
						$SN = 0;
						foreach ($contact as $contact) {
				echo '	<tr>
							<td>'.++$SN.'</td>
							<td>'.$contact->FIRSTNAME.','.$contact->LASTNAME.'</td>
							<td>'.$contact->PHONE.'</td>
							<td>'.$contact->EMAIL.'</td>
							<td>'.$contact->MESSAGE.'</td>
							<td>'.$contact->NATURE.'</td>
							<td>'.$contact->REQUEST_DATE.'</td>
						';?>
					<?php echo  ' <td class="text-center">
					<div class="btn-group">';?>
                    <button class="btn btn-danger btn-xs" type="button"><i class="fa fa-trash-o"></i><a href = "<?php echo base_url();?>contact/delete/<?php echo $contact->CONTACT_ID ?>">Delete</a></button>
					<button class="btn btn-sucsess btn-xs" type="button"><i class="fa fa-info-o"></i><a href = "<?php echo base_url();?>contact/reply/<?php echo $contact->CONTACT_ID ?>">Reply</a></button>
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
  </div>