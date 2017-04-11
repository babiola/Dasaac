<div class="row">
<?php foreach($alljobs as $job){
	
echo	' <div class="col-md-3">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h4 class="m-b-xs">'; echo $job->job_title; echo '</h4>
                            <p class="font-bold text-success">'; echo $job->job_id; echo '</p>
                            <div class="m">
                               '; echo $job->location_name; echo '
                            </div>
                            <p class="small">'; echo $job->job_desc; echo ' </p>
                            <button class="btn btn-success btn-xs"><a href ="'; echo base_url();echo'jobs/apply/'; echo $job->id; echo'">ReadMore</a></button>
                        </div>
                    </div>
                </div>
</div> ';
	
}?>
</div>
