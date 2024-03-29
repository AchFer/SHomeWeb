<!<!DOCTYPE HTML>
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
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new messages</h3>
									</div>
								</li>
								<li><a href="#">
								   <div class="user_img"><img src="images/1.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li class="odd"><a href="#">
									<div class="user_img"><img src="images/4.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								</a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/3.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all messages</a>
									</div> 
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new notification</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="user_img"><img src="images/4.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								 </a></li>
								 <li class="odd"><a href="#">
									<div class="user_img"><img src="images/1.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li><a href="#">
									<div class="user_img"><img src="images/3.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li>
									<div class="notification_bottom">
										<a href="#">See all notifications</a>
									</div> 
								</li>
							</ul>
						</li>	
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">8</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 8 pending task</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Database update</span><span class="percentage">40%</span>
										<div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										<div class="bar yellow" style="width:40%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar green" style="width:90%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
										<div class="clearfix"></div>	
									</div>
								   <div class="progress progress-striped active">
										 <div class="bar red" style="width: 33%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar  blue" style="width: 80%;"></div>
									</div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all pending tasks</a>
									</div> 
								</li>
							</ul>
						</li>	
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				
				
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		
		<div id="page-wrapper">
		
			<div class="main-page">

				<div class="row">
					 <form class="login-form" method="post" action='?core=maison&action=add_maison' enctype="multipart/form-data">
					
					<div class="form-two widget-shadow">
						<div class="form-title">
                                <?php 
						         foreach($results as $result)
						    {   ?>
							<h3>Add Home of user :</h3><h4 > <?php echo $result->getNom(); ?></h4>
							<input type="hidden" name='user_id' value= "<?php echo $result->getId();?>" >
						</div>
  <?php } ?>
					<div class="form-body" data-example-id="simple-form-inline">




						
							<div class="form-group"> 
							    <label for="exampleInputName2">Adress</label> <input type="text" class="form-control" name="adresse" placeholder="Adress"> 
							</div> 
							

								<div class="form-group"> 
							    <label for="exampleInputName2">Image</label> <input type="file" class="form-control" name="image" > 
							</div>
							   
						 </div> 
						
					
							
							
							
									  <input class="btn btn-primary btn-lg btn-block" type="submit"  value="add home"></input> 
            
					 </from>
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>

		</div>
		
		<!--footer-->
		<div class="footer">
		    <p>&copy; SmartHome | Design by XVision </p>	
	   </div>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='/admin_m/template/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="/admin_m/template/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="/admin_m/template/js/jquery.nicescroll.js"></script>
	<script src="/admin_m/template/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="/admin_m/template/js/bootstrap.js"> </script>
   
</body>
</html>