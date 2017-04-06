<div class="normalheader transition animated fadeIn">
        <div class="hpanel">
            <div class="panel-body">
                <a class="small-header-action" href="#">
                    <div class="clip-header">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                </a>

                <div id="hbreadcrumb" class="pull-right m-t-lg">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="<?php echo base_url(); ?>/dashboard">Dashboard</a></li>
                        <li>
                            <span>Tables</span>
                        </li>
                        <li class="active">
                            <span>hotel Table</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    HOTEL ADMIN
                </h2>
                <small>hotel booking for dasaac travels</small>
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
               <!-- <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                        <a class="closebox"><i class="fa fa-times"></i></a>
                    </div>
                    Basic example with Ajax (json file)
                </div>-->
                <div class="panel-body">
                    <table id="hotel" class="table table-striped table-bordered table-hover" width="100%" style="font-size:12px;">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>SURNAME</th>
                            <th>EMAIL</th>
                            <th>TYPE</th>
                            <th>CHECKIN DATE</th>
							<th>CHECKOUT DATE</th>
                            <th>OCCUPANT</th>
                            <th>LOCATION</th>
                            <th>CATEGORY</th>
							<th>BOOKING DATE</th>
                        </tr>
                        </thead>
						<tbody>
					<?php
						$SN = 1;
						foreach ($hotel as $hotel) {
				echo '	<tr>
							<td>'.$SN++.'</td>
							<td>'.$hotel->SURNAME.' '.$hotel->OTHERNAME.'</td>
							<td>'.$hotel->EMAIL.'</td>
							<td>'.$hotel->HOTELTYPE.'</td>
							<td>'.$hotel->CHECKIN_DATE.'</td>
							<td>'.$hotel->CHECKOUT_DATE.'</td>
							<td>'.$hotel->OCCUPANT.'</td>
							<td>'.$hotel->LOCATION.'</td>
							<td>'.$hotel->CATEGORY.'</td>
							<td>'.$hotel->BOOKING_DATE.'</td>
							
						</tr>';
						}
					?>
					</tbody>
                    </table>

                </div>
            </div>
 </div>
            </div>
