<?php

 if (!isset($_SESSION['logged_in'])) {
 redirect('/flight/');
} 
?>
<?php

    if(
	isset($_SESSION['CORE_APP']) && 
        in_array($_ci_vars['module'], $_SESSION['CORE_APP']) 
        && 
        in_array($this->router->fetch_method(), $_SESSION['ALL_APP'])
		|| 
        $this->router->fetch_method() == "flight"
        ||
        $this->router->fetch_method() == "index"
        ||
        $this->router->fetch_method() == "addpackage"
        ||
        $this->router->fetch_method() == "profile"
		||
        $this->router->fetch_method() == "addhotel"
		||
        $this->router->fetch_method() == "hotellist"
        ||
        $this->router->fetch_method() == "manage"
         ||
        $this->router->fetch_method() == "addhotel"
        ||
        $this->router->fetch_method() == "submit"
		 ||
        $this->router->fetch_method() == "adduser"
		 ||
        $this->router->fetch_method() == "delete"
		||
        $this->router->fetch_method() == "available"
		||
        $this->router->fetch_method() == "status_change"
		||
        $this->router->fetch_method() == "userlist"
		||
        $this->router->fetch_method() == "reply"
		||
        $this->router->fetch_method() == "sendMails"
		||
        $this->router->fetch_method() == "newjob"
		||
        $this->router->fetch_method() == "joblist"
		||
        $this->router->fetch_method() == "publish"
		||
        $this->router->fetch_method() == "get_job_list"
    ) {
		
		
		
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title><?php print $title; ?></title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/css/bootstrap.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/sweetalert/lib/sweet-alert.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" />

</head>

<body class="fixed-navbar fixed-sidebar">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Dasaac Travels and tour</h1><p>Feel free to explore the world at premium convinience </p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
          DASAAC TRAVELS
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i style="color:#fff;" class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">Dasaac Travels</span>
        </div>
        <form role="search" class="navbar-form-custom" method="post" action="#">
            <div class="form-group">
                <input type="text" placeholder="Search something special" class="form-control" name="search">
            </div>
        </form>
        <div class="mobile-menu">
            <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
                <i class="fa fa-chevron-down"></i>
            </button>
            <div class="collapse mobile-navbar" id="mobile-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="" href="<?php echo base_url(); ?>dashboard/logout">Logout</a>
                    </li>
                    <li>
                        <a class="" href="<?php echo base_url(); ?>dashboard/profile">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-right" style="background-color:#3e474f;">
            <ul class="nav navbar-nav no-borders">
                <li class="dropdown">
                    <a class="pull-right btn btn-xs " title="Logout" href="<?php echo base_url(); ?>dashboard/logout"><i style="color:#fff;" class="pe-7s-upload pe-rotate-90"></i></a>                       
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Navigation -->
<aside id="menu" >
    <div id="navigation" style="color:#fff;">
        <div class="profile-picture">
            <a href="<?php print base_url(); ?>dashboard/profile">
                <img src="<?php print base_url(); ?>images/imgs/png/dasaacadmin1.png" class="img-circle m-b" alt="logo">
            </a>

            <div class="stats-label text-color" style="color:#fff;">
                <span class="font-extra-bold font-uppercase"><?php echo $_SESSION[username]; echo $_SESSION['CORE_APP'];?></span>

            </div>
        </div>

        <ul class="nav" id="side-menu" style="color:#fff; background-color:#3e474f;" >
            <li>
                <a href="#"><span class="nav-label">Transaction</span><span class="fa arrow"></span></a>
                 <ul class="nav nav-second-level" style="color:#fff;">
                    <li><a href="<?php print base_url(); ?>transaction/flight">Today Flight</a></li>
                    <li><a href="<?php print base_url(); ?>package/index">Today Package</a></li>
					<!--<li><a href="<?php print base_url(); ?>deals/index">Today Deals</a></li>-->
					<li><a href="<?php print base_url(); ?>hotelmanager/index">Today Hotel</a></li>
                </ul>
            </li>
		
            <li>
                <a href="#"><span class="nav-label">Package</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php print base_url(); ?>package/index">All Package</a></li>
                    <li><a href="<?php print base_url(); ?>package/addpackage">Manage Package</a></li>
                </ul>
            </li>
			
			 <li>
                <a href="#"><span class="nav-label">Hotel</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php print base_url(); ?>hotelmanager/hotellist">All Hotel</a></li>
                    <li><a href="<?php print base_url(); ?>hotelmanager/addhotel">Manage Hotel</a></li>
                </ul>
            </li>
			 <li>
                <a href="#"><span class="nav-label">Deal</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php print base_url(); ?>deals/available">All Deals</a></li>
                    <li><a href="<?php print base_url(); ?>deals/manage">Manage Deals</a></li>
                </ul>
            </li>
			 <li>
                <a href="#"><span class="nav-label">Brochure</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php print base_url(); ?>brochure/available">All Brochure</a></li>
                    <li><a href="<?php print base_url(); ?>brochure/manage">Manage Brochure</a></li>
                </ul>
            </li>
			 <li>
                <a href="#"><span class="nav-label">Jobs</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
				<li><a href="<?php print base_url(); ?>jobs/newjob">Add Jobs</a></li>
                    <li><a href="<?php print base_url(); ?>jobs/available">Available Jobs</a></li>
                    
                </ul>
            </li>
			 
			 <li>
                <a href="#"><span class="nav-label">USER</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php print base_url(); ?>user/index">All User</a></li>
                    <li><a href="<?php print base_url(); ?>user/adduser">Add User</a></li>
					<li><a href="<?php print base_url(); ?>contact/index">Contact Manager</a></li>
                </ul>
            </li>
				<li >
                <a href="#"><span class="nav-label">Report</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level" style="color:#fff;">
                    <li><a href="<?php print base_url(); ?>transaction">All Report</a></li>
                </ul>
            </li>
			 <li class="active" style="background-color:#3e474f !important;">
            <a href="<?php print base_url(); ?>dashboard"> <span class="nav-label"><i class="fa fa-tasks"></i> Dashboard</span></a>
            </li>
        </ul>
    </div>
</aside>

<!-- Main Wrapper -->
<div id="wrapper" style="background-color: #74818d;">
             <?php $this->load->view($module . '/' . $view_file); ?>
   
    <!-- Footer-->
    <footer class="footer"style="color: #fff;" >
        <span class="pull-right">
            4ELEVEN
        </span>
        <?php echo date(Y); ?>
    </footer>

</div>

<!-- Vendor scripts -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-flot/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/flot.curvedlines/curvedLines.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery.flot.spline/index.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="<?php echo base_url(); ?>assets/scripts/homer.js"></script>
<script src="<?php echo base_url(); ?>assets/scripts/charts.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/sweetalert/lib/sweet-alert.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- DataTables buttons scripts -->
		<script src="<?php echo base_url(); ?>assets/vendor/pdfmake/build/pdfmake.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/pdfmake/build/vfs_fonts.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>';

		<script>
	$(document).ready(function() { 
    $('button#generate').click(function() {
		var report = $('select#report').val();
		var report_start = $('input#report_start').val();
		var report_end = $('input#report_end').val();
     var generate = $(this).val();
     $.ajax({
      url: "<?php print base_url('transaction/fetchReport'); ?>",
      type: "POST",
      data: {s_date:report_start, e_date:report_end, reportType:report},
      success: function(result){
		$('#coy').html(result);
		//
		 $('.tabs').dataTable( {
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            buttons: [
                {extend: 'copy',className: 'btn-sm'},
                {extend: 'csv',title: 'Reports', className: 'btn-sm'},
                {extend: 'pdf', title: 'Reports', className: 'btn-sm'},
                {extend: 'print',className: 'btn-sm'}
            ]
        }); 
		 
      }})});
	  
	 
	 
	  
	  });
						  </script>
		
		<script>
	$('#flight').dataTable( {
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            buttons: [
                {extend: 'copy',className: 'btn-sm'},
                {extend: 'csv',title: 'Booked Flight Report', className: 'btn-sm'},
                {extend: 'pdf', title: 'Booked Flight Report', className: 'btn-sm'},
                {extend: 'print',className: 'btn-sm'}
            ]
        });
		 //$('#datapicker2').datepicker();
			$('#hotel').dataTable( {
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            buttons: [
                {extend: 'copy',className: 'btn-sm'},
                {extend: 'csv',title: 'Booked Hotel Report', className: 'btn-sm'},
                {extend: 'pdf', title: 'Booked Hotel Report', className: 'btn-sm'},
                {extend: 'print',className: 'btn-sm'}
            ]
        });
</script>
	  <script>
            $(function () {
                var msgp = $('.message-info');
                setTimeout(function () {
                    msgp.fadeOut('slow', function () {
                        $(this).text('').fadeIn();
                    });
                }, 20000);
            });
        </script>
<script> 
			setTimeout(
				function() { 
					window.location.href = "<?php print base_url(); ?>"; 
				}
			, 300000);

		</script>
</body>
</html>

<?php

    }
    else {
        echo '<script>document.location.href="'.base_url().'";</script>';
    }
	
?>