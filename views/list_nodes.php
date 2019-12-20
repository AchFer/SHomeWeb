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
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
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
                <span>New client</span>
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
					<form class="input" action="?core=node&action=search_node" method="post">
						<input class="sb-search-input input__field--madoka" placeholder="Search ..." type="search" id="input-31" name="user" />
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
				<div class="tables">
					<h2 class="title1">Tables</h2>
					
					
					
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Nodes:    <a class="btn btn-primary" href="?core=node&action=page_add_node"> New node ?  </a></h4>

						<table class="table">
						    <thead>
						        <tr>
						        <th>#</th>
						        <th>Image</th>  
						        <th>Name</th>
						        <th>Name of user</th>
						        <th></th>
						    </thead>
						    <tbody>
						        <tr class="active">
						        <?php $a = 1;
						         foreach($nodes as $node)
						    {   ?>
						        <th scope="row"><?php echo $a++; ?></th>
						        <td><img src="uploads/<?php echo $node->getImage(); ?>" width="75px" height="80px"></td>
						        <td><?php echo $node->getNomNoeud(); ?></td>
						        <td> <?php   $id_maison=$node->getMaison_id();
						        $maisons = Maison::chercher_nom_maison($id_maison);
						         foreach($maisons as $maison)
   {
   $id_user = $maison->getUtilisateur_id();
   $users=Utilisateur::chercher_nom_user($id_user);}
     foreach($users as $user)
   {
   echo $user->getNom();}
						         ?>


						        </td>
						        <td>
						        <a class="btn btn-danger" href="?core=node&action=delete&id_noeud=<?php echo $node->getId(); ?>">  delete </a>
                                <a class="btn btn-primary" href="?core=node&action=page_update_noeud&id_noeud=<?php echo $node->getId(); ?>"> Update </a>
                                <a class = "btn btn-warning" href="?core=node&action=page_add_sensor&id_noeud=<?php echo $node->getId(); ?>"> add Sensors</a>
                                
                                </td>
                                
						        </tr> 
						         <?php } ?>
						    </tbody>
				        </table> 
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