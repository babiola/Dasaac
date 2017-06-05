<div class="jumbotron" style="background-image: url(<?php echo base_url(); ?>assets/img/banners/jobs_banner.jpg); background-repeat: no-repeat; background-size: cover; background-position: center;">
          <div class="container"  style="height: 220px;">
            <img src="" />
          </div>
        </div>
       
        <div class="container-fluid">
           <div class="row">
            <div class="col-md-12">
                    <ol class="breadcrumb" style="width: 100%;  ">
                      <li><a href="#">Home</a></li>
                      <li class="active">jobs</li>
                    </ol>
                </div>
            </div>
        </div> 
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-md-5 ">
                           <div class="panel panel-info" >
						    <div class="panel-heading">
                            <h3 class="panel-title">Available Jobs</h3>
                        </div>
						<div id = "accordion">
						   <?php foreach($alljobs as $job){ ?>
                             <h3 class="text-center" style="background-color:#183f88; color:#fff;"><?php echo $job->job_title; ?></h3>
							<div class="panel-body">
							<p><?php echo $job->location_name; ?></p>
							<p><?php echo $job->job_desc; ?></p>
							<button class="btn btn-success btn-sm"><a href ="<?php echo base_url();?>/jobs/apply/<?php echo $job->id;?>">ReadMore</a></button>
							 </div>
							 <?php }?>
                           </div> 
						</div> 						   
                       </div>
                       <div class="col-md-7">
                           <div class="row">
                               <div class="col-md-12">
                                     <div class="jumbotron">
                                      <a href="#" class="thumbnail">
                                          <img src="<?php echo base_url(); ?>assets/img/banners/packages_banner.jpg" alt="...">
                                        </a>
                                    </div>
                               </div> 
                           
                               <div class="col-md-6">
                                     <div class="jumbotron">
                                      <a href="#" class="thumbnail">
                                          <img src="<?php echo base_url(); ?>assets/img/banners/packages_banner.jpg" alt="...">
                                        </a>
                                    </div>
                               </div>  
                           
                               <div class="col-md-6">
                                     <div class="jumbotron">
                                      <a href="#" class="thumbnail">
                                          <img src="<?php echo base_url(); ?>assets/img/banners/packages_banner.jpg" alt="...">
                                        </a>
                                    </div>
                               </div>
							   </div>    
                       </div>
                   </div>
               </div>