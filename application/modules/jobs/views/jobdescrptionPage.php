<div class="row">
 <div class="col-md-2"></div>
 <div class="col-md-8">
            <div class="hpanel">

                <div class="panel-body">

                    <div class="text-center">
					<?php foreach($single as $single){
					
					echo $single->job_title;
					}
					;?>
                    </div>

                    <div class="tab-content">
                        <div id="note1" class="tab-pane active">
                            <div class="pull-right text-muted m-l-lg">
                                <?php echo date(Y)?>
                            </div>
                            <h3><?php echo $single->job_id;?></h3>
                            <hr/>
                            <div class="note-content">
							<P><?php echo $single->job_desc;?></p>
                            </div>
                            <div class="btn-group">
                               <button class="btn btn-success btn-xs"><a href ="<?php echo base_url();?>jobs/application/<?php echo $single->job_id;?>">Apply</a></button>
                              <button class="btn btn-warning btn-xs"><a href ="<?php echo base_url();?>jobs">Cancel</a></button>
                            </div>
                        </div>

  </div>  </div>
                        </div>
                        </div></div>