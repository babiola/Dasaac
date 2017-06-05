<div class="small-header">
        <div class="hpanel">
            <div class="panel-body">
                <div id="hbreadcrumb" class="pull-right">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="<?php echo base_url(); ?>/dashboard">Dashboard</a></li>
                        <li>
                            <span>Tables</span>
                        </li>
                        <li class="active">
                            <span>Flight Table</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Flight ADMIN
                </h2>
                <small>Flight booking for dasaac travels</small>
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-body">
                    <table id="hotel" class="table table-striped table-bordered table-hover" width="100%" style="font-size:12px;">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>DEPARTURE</th>
                            <th>FLIGHTTYPE</th>
							<th>DEPARTURE DATE</th>
                            <th>DESTINATION</th>
                            <th>ARRIVAL DATE</th>
                            <th>PHONE</th>
							<th>ADULT</th>
							<th>CHILDREN</th>
                            <th>INFANT</th>
							<th>STATUS</th>
                        </tr>
                        </thead>
						<tbody>
					<?php
						$SN = 1;
						foreach ($Flight as $Flight) {
				echo '	<tr>
							<td>'.$SN++.'</td>
							<td>'.$Flight->SURNAME.' '.$Flight->OTHERNAME.'</td>
							<td>'.$Flight->EMAIL.'</td>
							<td>'.$Flight->DEPARTURE.'</td>
							<td>'.$Flight->FLIGHTTYPE.'</td>
							<td>'.$Flight->DEPARTURE_DATE.'</td>
							<td>'.$Flight->DESTINATION.'</td>
							<td>'.$Flight->ARRIVAL_DATE.'</td>
							<td>'.$Flight->PHONE.'</td>
							<td>'.$Flight->ADULT.'</td>
							<td>'.$Flight->CHILDREN.'</td>
							<td>'.$Flight->INFANT.'</td>
							<td>'.$Flight->STATUS.'</td>
						</tr>';
						}
					?>
					</tbody>
                    </table>

                </div>
            </div>
 </div>
            </div>
