<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="/admin_m/template/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="/admin_m/template/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="/admin_m/template/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='/admin_m/template/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="/admin_m/template/js/jquery-1.11.1.min.js"></script>
<script src="/admin_m/template/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="/admin_m/template/js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="/admin_m/template/js/metisMenu.min.js"></script>
<script src="/admin_m/template/js/custom.js"></script>
<link href="/admin_m/template/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="/admin_m/template/js/pie-chart.js" type="text/javascript"></script>

<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
					<link href="/admin_m/template/css/owl.carousel.css" rel="stylesheet">
					<script src="/admin_m/template/js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
           <h1><a class="navbar-brand" href="#"><span class="fa fa-area-chart"></span> Glance<span class="dashboard_text">XVision</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="?core=maison&action=acceuil_admin">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>New client </span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                   <li><a href="?core=maison&action=page_add_user"><i class="fa fa-angle-right"></i> New User</a></li>
                
                   <li><a href="?core=maison&action=Users_list"><i class="fa fa-angle-right"></i> User'sList</a></li>
                </ul>
              </li>
             
              <li class="treeview">
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>CONSULT</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="?core=maison&action=home_list"><i class="fa fa-angle-right"></i> Home's List</a></li>
                  <li><a href="?core=maison&action=Users_list"><i class="fa fa-angle-right"></i> Consulting Users</a></li>
                   <li><a href="?core=node&action=page_nodes"><i class="fa fa-angle-right"></i> Consulting Nodes</a></li>
                     <li><a href="?core=node&action=page_capteurs"><i class="fa fa-angle-right"></i> Consulting Sensors</a></li>
                </ul>
              </li>
			  <li>
                <a href="?core=node&action=reclamation_page">
                <i class="fa fa-th"></i> <span>Reclamation</span>
                <small class="label pull-right label-info"><?php  echo( $reclamations[0] ); ?></small>
                </a>
              </li>
              
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				
				
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$<?php  echo($users[0] * 600 ); ?></strong></h5>
                      <span>Total Revenue</span>
                    </div>
                </div>
        	</div>
        	
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-money user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$<?php  echo($users[0] * 200 ); ?></strong></h5>
                      <span>Expenses</span>
                    </div>
                </div>
        	</div>
        
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong> 
   <?php  echo($users[0]); ?>  </strong></h5>
                      <span>Total Users</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
		</div>
		
		
		
		<div class="row-one widgettable">
			<div class="col-md-7 content-top-2 card">
				<div class="agileinfo-cdr">
					<div class="card-header">
                        <h3>reclamation par rapport clients</h3>
                    </div>
					
						<div id="container" style="width: 100%; height:270px;">
							<canvas id="canvas"></canvas>
						</div>
						
				</div>
			</div>
		<div class="col-md-3 stat">
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Sales</h5>
					<label> <?php  echo($users[0] ); ?> </label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-1" class="pie-title-center" data-percent="45"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Reclamation</h5>
					<label><?php  echo( $reclamations[0] ); ?></label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-2" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Visitors</h5>
					<label>12589+</label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-3" class="pie-title-center" data-percent="90"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
			</div>



			<div class="col-md-2 stat">
				
				
				
			</div>
			<div class="clearfix"> </div>
		</div>
				
				
	
	<!-- for amcharts js -->
			<script src="/admin_m/template/js/amcharts.js"></script>
			<script src="/admin_m/template/js/serial.js"></script>
			<script src="/admin_m/template/js/export.min.js"></script>
			<link rel="stylesheet" href="/admin_m/template/css/export.css" type="text/css" media="all" />
			<script src="js/light.js"></script>
	<!-- for amcharts js -->

    <script  src="js/index1.js"></script>
	


				
			</div>
		</div>
	<!--footer-->
	<div class="footer">
	    <p>&copy; SmartHome | Design by XVision </p>		
	</div>
    <!--//footer-->
	</div>
		
	<!-- new added graphs chart js-->
	
    <script src="/admin_m/template/js/Chart.bundle.js"></script>
    <script src="/admin_m/template/js/utils.js"></script>
	
	<script>
       
        var color = Chart.helpers.color;
        var barChartData = {
            labels: [ <?php foreach($utlisateurs as $utlisateur) { ?> "<?php echo $utlisateur->getNom(); ?>" ,<?php } ?> ],
            datasets: [{
                label: 'reclamations ',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [  <?php  foreach($utlisateurs as $utlisateur) {
                	$uts=$utlisateur->getId();
                	 $nbrs=Reclamation::nbr_reclamtion_user($uts); 
?>

                  "<?php echo( $nbrs[0] ); ?>" ,   <?php }?> ]
            }]


  




        };

        window.onload = function() {
            var ctx = document.getElementById("canvas");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                       
                    }
                }
            });

        };

        
        
         

      

     
    </script>
	<!-- new added graphs chart js-->
	
	<!-- Classie --><!-- for toggle left push menu script -->

	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="/admin_m/template/js/jquery.nicescroll.js"></script>
	<script src="/admin_m/template/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='/admin_m/template/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- for index page weekly sales java script -->
	
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="/admin_m/template/js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>