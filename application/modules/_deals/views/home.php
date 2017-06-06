    <div class="small-header">
        <div class="hpanel">
            <div class="panel-body">
                <div id="hbreadcrumb" class="pull-right">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                        <li>
                            <span>Flight</span>
                        </li>
                        <li class="active">
                            <span>booking </span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    FLIGHT MANAGEMENT
                </h2>
                <small>Flight booking for dasaac Travels</small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-body">
                    <table id="flight" class="table table-striped table-bordered table-hover" width="100%" style="font-size:12px;">
                        <thead>
                        <tr>
                            <th>TITLE</th>
                            <th>SURNAME</th>
                            <th>EMAIL</th>
                            <th>TYPE</th>
                            <th>CLASS</th>
							<th>DEPARTURE DATE</th>
                            <th>ARRIVAL DATE</th>
                            <th>FROM</th>
                            <th>TO</th>
                            <th>ADULT</th>
							
							<th>CHILDREN</th>
                            <th>INFANT</th>
							<th>BOOKING DATE</th>
                        </tr>
                        </thead>
						<tbody>
					<?php
						
						foreach ($flight as $flight) {
				echo '	<tr>
							<td>'.$flight->TITLE.'</td>
							<td>'.$flight->SURNAME.' '.$flight->OTHERNAME.'</td>
							<td>'.$flight->EMAIL.'</td>
							<td>'.$flight->FLIGHTTYPE.'</td>
							<td>'.$flight->FLIGHTCLASS.'</td>
							<td>'.$flight->DEPARTURE_DATE.'</td>
							<td>'.$flight->ARRIVAL_DATE.'</td>
							<td>'.$flight->DEPARTURE.'</td>
							<td>'.$flight->DESTINATION.'</td>
							<td>'.$flight->ADULT.'</td>
							<td>'.$flight->CHILDREN.'</td>
							<td>'.$flight->INFANT.'</td>
							<td>'.$flight->BOOKING_DATE.'</td>
							
						</tr>';
						}
					?>
					</tbody>
                    </table>

                </div>
            </div>
 </div>
            </div>
