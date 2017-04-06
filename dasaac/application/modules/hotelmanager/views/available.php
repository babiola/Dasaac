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
                <div class="panel-body">
                    <table id="hotel" class="table table-striped table-bordered table-hover" width="100%" style="font-size:12px;">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>HOTEL</th>
                            <th>ADDRESS</th>
                            <th>PRICE</th>
                            <th>CATEGORY</th>
							<th>LOCATION</th>
                        </tr>
                        </thead>
						<tbody>
					<?php
						$SN = 0;
						foreach ($hotellist as $hotel) {
				echo '	<tr>
							<td>'.++$SN.'</td>
							<td>'.$hotel->Name.'</td>
							<td>'.$hotel->address.'</td>
							<td>'.$hotel->price.'</td>
							<td>'.$hotel->category_name.'</td>
							<td>'.$hotel->location_name.'</td>
							
						</tr>';
						}
					?>
					</tbody>
                    </table>

                </div>
            </div>
 </div>
            </div>
