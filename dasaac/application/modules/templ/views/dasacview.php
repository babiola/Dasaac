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
        $this->router->fetch_method() == "adddeals"
         ||
        $this->router->fetch_method() == "addhotel"
        ||
        $this->router->fetch_method() == "submit"
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
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
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
        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
                <li class="dropdown">
                    <a class="pull-right btn btn-xs " title="Logout" href="<?php echo base_url(); ?>dashboard/logout"><i class="pe-7s-upload pe-rotate-90"></i></a>                       
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">
            <a href="<?php print base_url(); ?>dashboard/profile">
                <img src="<?php print base_url(); ?>images/imgs/png/dasaacadmin1.png" class="img-circle m-b" alt="logo">
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase"><?php echo $_SESSION[username]; echo $_SESSION['CORE_APP'];?></span>

            </div>
        </div>

        <ul class="nav" id="side-menu">
            <li class="active">
            <a href="<?php print base_url(); ?>dashboard"> <span class="nav-label"><i class="fa fa-tasks"></i> Dashboard</span></a>
            </li>
			<li>
                <a href="#"><span class="nav-label">Transaction</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php print base_url(); ?>deals/flight">Booked Flight</a></li>
                    <li><a href="<?php print base_url(); ?>package/index">Booked Package</a></li>
					<li><a href="<?php print base_url(); ?>deals/index">Booked Deals</a></li>
					<li><a href="<?php print base_url(); ?>hotelmanager/index">Booked Hotel</a></li>
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
                    <li><a href="<?php print base_url(); ?>deals/index">All Deals</a></li>
                    <li><a href="<?php print base_url(); ?>deals/adddeals">Manage Deals</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>

<!-- Main Wrapper -->
<div id="wrapper" style="background: #74f5a7;">

    
        
             <?php $this->load->view($module . '/' . $view_file); ?>
   
    <!-- Footer-->
    <footer class="footer">
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

        /**
         * Flot charts data and options
         */
        var data1 = [ [0, 55], [1, 48], [2, 40], [3, 36], [4, 40], [5, 60], [6, 50], [7, 51] ];
        var data2 = [ [0, 56], [1, 49], [2, 41], [3, 38], [4, 46], [5, 67], [6, 57], [7, 59] ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
            },
            grid: {
                tickColor: "#f0f0f0",
                borderWidth: 1,
                borderColor: 'f0f0f0',
                color: '#6a6c6f'
            },
            colors: [ "#62cb31", "#efefef"],
        };

        $.plot($("#flot-line-chart"), [data1, data2], chartUsersOptions);

        /**
         * Flot charts 2 data and options
         */
        var chartIncomeData = [
            {
                label: "line",
                data: [ [1, 10], [2, 26], [3, 16], [4, 36], [5, 32], [6, 51] ]
            }
        ];

        var chartIncomeOptions = {
            series: {
                lines: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: "#64cc34"

                }
            },
            colors: ["#62cb31"],
            grid: {
                show: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);



    });

</script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-4625583-2', 'webapplayers.com');
        ga('send', 'pageview');

    </script>
	  <script>
            $(function () {
                var msgp = $('#msg-container');
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