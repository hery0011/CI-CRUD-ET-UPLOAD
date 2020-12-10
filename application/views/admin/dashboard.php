
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CRM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/img/favicon.ico'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/all.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/animate.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/dataTables.bootstrap4.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/reset.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/style.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('bootstrap/js/sweetalert2.all.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('bootstrap/js/sweetalert2.all.min.js'); ?>"></script>
    
</head>
<body>

	<div class="dashboard">
		<!-- NAVBAR -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<header id="head" class="">
					<div class="container">
						<div class="navbar-head">
							
									<div class="navbar-logo">
										<a href="index.php"><img src="<?php echo base_url('bootstrap/img/Logo.png') ?>"></a>
									</div>

									<div class="toggle-menu">
										<div class="hamburger">
											<i class="fas fa-bars"></i>
										</div>	
									</div>
									
									<div class="navbar-menu">
										<ul class="navbar-menu-list">
											<li class="navbar-menu-item contain pullUpDown">
												<!-- <a href="create-article.html">Nouvel article</a> -->
												<?php echo anchor('articleController/newArticle','Nouvel article'); ?>
											</li>
											<li class="navbar-menu-item">
												<!-- <a class="log-btn">Logout</a> -->
												<?php echo anchor('acceuilController/acceuil','Logout',['class'=>'log-btn']); ?>
											</li>
										</ul>
									</div>
							
						</div>
					</div>
				</header>
			</div>
		</div>
	</div>
	<!-- NAVBAR -->



	<!-- BODY -->
	<div class="container-fluid">
		
		<div class="row">
			<!-- <div class="col-md-12 col-lg-2">
				<div class="Dash-left">
					<h2 class="title">Dashboard</h2> 
					<ul>
				   		<li class="text-center"><a href="create-article.html" >Créer un Nouvel article</a></li>
				   </ul>
				</div>
			</div> -->
			<div class="col-md-12 col-lg-12">
				<section id="post">
					<div class="container">
						<h2 class="title text-center">Gestion des actualités </h2>
						<table id="table_id" class="display table-striped table table-bordered dt-responsive" style="width:100%;">
						    <thead>
						        <tr>
						            <th>Titre</th>
						            <th>Action</th>

						        </tr>
						    </thead>
						    <tbody>
						    	<?php if (count($posts)): ?>
								<?php foreach ($posts as $post): ?>		
						    	<tr data-id="">
						    		<td><?php echo $post->titre_art; ?></td>
						    	
						    		<td>
			            				<div class="text-center">
			            					<?php echo anchor('articleController/getArticle/'.$post->id_art,'edit',['class'=>'fa fa-edit']);?>
				            				
				            				<?php echo anchor('articleController/deleteArticle/'.$post->id_art,'delete',['class'=>'fa fa-trash']);?>
				            				
				            			</div>
		           					</td>
						        </tr>
						           	<?php endforeach ?>
									<?php endif ?>
						    		
						    </tbody>
						</table>
					</div>
				</section>	
			</div>
		</div>

	</div>
	<!-- BODY -->
	</div>

	<!-- FOOTER -->
	<div class="container-fluid">
		<div class="row" style="background-color: #e0dede;">
			<div class="col-md-12">
				<footer id="footer">
					<div class="container">
						<div class="row">

		                    <div class=" col-md-4 ">
		                        <div class="footer_widget">
		                            <h3 class="footer_title">
		                               <strong>Liens utiles</strong> 
		                            </h3>
		                            <ul>
		                                </i><li><a target="_blank" href="https://edbm.mg/?lang=fr">EDBM</a></li>
		                                <li><a target="_blank" href="http://www.impots.mg/">DGI</a></li>
		                                <li><a target="_blank" href="http://www.oecfm.mg/">OECFM</a></li>
		                            </ul>
		                        </div>
		                    </div>

		                    <div class=" col-md-4 ">
		                        <div class="footer_widget">
		                            <h3 class="footer_title">
		                                <strong>Documentations</strong>
		                            </h3>
		                            <ul>
		                                <li><a target="_blank" href="https://edbm.mg/sitemap/main-doeuvre/?lang=fr"><i class="fa fa-download"></i>&nbsp Travail</a></li>
		                                <li><a target="_blank" href="https://edbm.mg/sitemap/commerce/?lang=fr"><i class="fa fa-download"></i>&nbsp Commerce</a></li>
		                                <li><a target="_blank" href="https://edbm.mg/sitemap/lois-sur-les-societes/?lang=fr"><i class="fa fa-download"></i>&nbsp Lois sur les sociétés</a></li>
		                            </ul>
		                        </div>
		                    </div>

		                    <div class=" col-md-4">
		                        <div class="footer_widget">
		                            <p>
		                               CRM – Cabinet de Comptabilité, Audit & Conseil
		                               <br>
		                               <i class="fa fa-map-marker-alt"></i> Lot II M 92 Antsakaviro <br>
		                               <i class="fa fa-phone-alt"></i> <a target="_blank" href="+261 34 65 459 75">+261 34 65 459 75</a>
		                            </p>
		                            <div class="socail_links">
		                                <p>Nous suivre : </p>
		                                <a target="_blank" href="web.facebook.com">
		                                    <i class="fab fa-facebook-f"></i>
		                                </a>
		                                <a target="_blank" href="fr.linkedin.com">
		                                    <i class="fab fa-linkedin-in"></i>
		                                </a>
		                            </div>
		                        </div>
		                    </div>

						</div>

						<div class="cp-right">
							<div class="rights">
								<p>
								Copyright ©2020 All rights reserved <br>
								| Made with passion by <a target="_blank" href="https://www.dev-inbox.com/">www.dev-inbox.com</a>
							</p>
							<p>
								<a href="">Privacy Policy</a> & <a href="">Term of Use</a>
							</p>
							</div>
							<div class="social-link">
								<a target="_blank" href="https://web.facebook.com/Devinbox-112170117151430/?">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a target="_blank" href="https://www.linkedin.com/company/49147337/">
								<i class="fab fa-linkedin-in"></i>
							</a>
							</div>
						</div>	
					</div>
				</footer>
			</div>
		</div>
	</div>
	<!-- FOOTER -->

	<!-- JAVASCRIPT -->
	<cript rel="stylesheet" type="text/css" src="<?php echo base_url('bootstrap/js/jquery-3.5.1.js'); ?>"></script>
	<cript rel="stylesheet" type="text/css" src="<?php echo base_url('bootstrap/js/jquery.dataTables.min.js'); ?>"></script>
	<cript rel="stylesheet" type="text/css" src="<?php echo base_url('bootstrap/js/dataTables.bootstrap4.min.js'); ?>"></script>
	<cript rel="stylesheet" type="text/css" src="<?php echo base_url('bootstrap/js/dataTables.responsive.min.js'); ?>"></script>
	<cript rel="stylesheet" type="text/css" src="<?php echo base_url('bootstrap/js/responsive.bootstrap4.min.js'); ?>"></script>
	<cript rel="stylesheet" type="text/css" src="<?php echo base_url('bootstrap/js/control.js'); ?>"></script>
	<cript rel="stylesheet" type="text/css" src="<?php echo base_url('bootstrap/js/control.js'); ?>"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
		    $('#table_id').DataTable();
		} );
    </script>

</body>
</html>
