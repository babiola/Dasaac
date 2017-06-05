        <div class="container">
            <div class="row">
			<?php 
			foreach($deal as $deals){ ?>
			 <div class="col-md-4">
                    <div class="thumbnail">
                      <img style="height:150px;" src="<?php echo base_url(); ?>uploads/<?php echo$deals->path;?>" alt="<?php echo $deals->Name;  ?>">
                      <div class="caption">
                        <h1><?php echo $deals->Name;  ?></h1>
                        <p><?php echo $deals->description; ?></p>
                      </div>
                    </div>
                </div>	
			<?php } ?>
            </div>
        </div>   
      