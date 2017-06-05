  		 <div class="jumbotron" style="background-image: url(<?php echo base_url(); ?>assets/img/banners/brochbanner.jpg); background-repeat: no-repeat;">
          <div class="container" style="height: 220px">
           <div class="col-md-5">
            <h3 class="">Search for a package</h3>
            <p class="col-md-12">
              Our Amazing Brochures are Guaranteed to meet your Every Leisure needs
               <select name="Packages" class="form-control" style="color: #0066FF; margin: 5px 0px;">
                <option value="1">Tailored Packages...</option>
                <option value="2">Tailored Packages</option>
                <option value="3">Tailored Packages</option>
                <option value="4">Tailored Packages</option>
                </select> 
                <a class="col-md-5  btn btn-info btn-md" href="" > Search</a>
                <a class="col-md-6 col-md-offset-1 btn btn-warning btn-md" href=""> Contact</a>
            </p>
            </div>
          </div>
        </div>
        
		 <div class="container">
            <div class="row">
			<?php foreach($brochure as $brochures){ ?>
			 <div class="col-md-3" >
                    <div class="thumbnail" style="padding: 0px;">
                 <h1><?php echo $brochures->Name;  ?></h1>
                      <img style="height:350px;" src="<?php echo base_url(); ?>uploads/<?php echo$brochures->path;?>" alt="<?php echo $brochures->Name;  ?>">
                      <div class="caption">
                        <p><?php echo $brochures->description; ?></p>
                      </div>
                      <p style="text-align: center;"><a href="#" class="btn btn-info btn-sm" role="button" style="margin-right: 3px;">Preview</a>
                    <a href="<?php echo base_url(); ?>brochure/download/<?php echo $brochures->pdf ?>" class="btn btn-success btn-sm"  style="margin-left: 3px;"role="button">Download</a></p>
                  </div>
                </div>	
				
			<?php } ?>
			</div>	
            </div> 