  <div class="row">
        <div class="">
            <div class="hpanel">
                <div class="panel-heading">
                   Application for job
                </div>
                <div class="">
                    <p>
                       <?php if (isset($msg)){echo $msg;}?>
                    </p>

                    <form role="form" id="form">
                        <div class="form-group"><label>Email</label> <input type="email" placeholder="Enter email" class="form-control" required></div>
                        <div class="form-group"><label>Password</label> <input type="password" placeholder="Password" class="form-control" name="password"></div>
                        <div class="form-group"><label>Url</label> <input type="text" placeholder="Enter email" class="form-control" name="url"></div>
                        <div class="form-group"><label>Number</label> <input type="text" placeholder="Enter email" class="form-control" name="number"></div>
                        <div class="form-group"><label>MaxLength</label> <input type="text" placeholder="Enter email" class="form-control" name="max"></div>
                        <div>
                            <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Submit</strong></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
