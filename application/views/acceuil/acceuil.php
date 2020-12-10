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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/reset.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/style.css'); ?>">
</head>
<body>

	<?php require_once(APPPATH."views/navbar.php"); ?>
	
	<!-- SLOGAN -->
	<div id="banner" class="banner-home">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<section id="banner" class="">
					<div class="">
						<div class="inner-banner">
							<div class="inner-banner-slogan wow fadeInLeft" data-wow-duration="1s">
								
								
								<h2 class="" style="font-family: Gotham; font-size : 27px;"><mark style="background-color: #46606c;">Votre projet au centre de nos préoccupations </mark></h2>
								
								<p class="" style="font-family: 'Gotham'; font-size : 20px;"><mark style="background-color: #46606c;">Votre réussite, notre victoire </mark><span style="color: #46606c;"></span></p>

								
							</div>	
						</div>
					</div>
				</section>
			</div>
			<!-- <div class="col-md-4"></div> -->
			<div class="col-md-4"></div>
		</div>
	</div>
	</div>
	<!-- SLOGAN -->


	<!-- BODY -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<section id="service"> 
					<div class="">
							<div class="Intro text-center">
								<h2 class="title"><b>Nos domaines d’ <span style="color:#4997d1; ">intervention</span></b></h2>
								<hr class="separator">
								<p>
									Pour mieux répondre à vos besoins, le Cabinet CRM dispose d’une riche expérience dans les métiers de la <span style="font-weight: bold; color: #46606c;">comptabilité</span>, de la <span style="font-weight: bold; color: #46606c;">finance</span>, de l’<span style="font-weight: bold; color: #46606c;">audit</span>, de la <span style="font-weight: bold; color: #46606c;">fiscalité</span> et du <span style="font-weight: bold; color: #46606c;">conseil</span>.
								</p>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="service-content">
										<div class="service-icon">
											<i class="fa fa-calculator" style="color: #ffc107;"></i>
										</div>
										<div class="service-detail">
											<h4 class="title1"><b>Expertise comptable </b></h4>
											<p class="text-justify">
												Tenue de comptabilité, révision des comptes, compilation d’états financiers
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="service-content" >
										<div class="service-icon">	
												<i class="fas fa-broadcast-tower" style="color: #20c997;"></i>
										</div>
										<div class="service-detail">
											<h4 class="title1"><b>Audit</b></h4>
											
											<p class="text-justify">
												Audit légal (commissariat aux comptes) et audit contractuel (audit de projets, audit de fraude, etc.)
											</p>
										</div>	
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="service-content">
										<div class="service-icon">	
												<i class="fas fa-tag" style="color: #28a745;"></i>
										</div>	
										<div class="service-detail">	
											<h4 class="title1"><b>Fiscalité </b></h4>
											<p class="text-justify">
												Préparation des déclarations fiscales, revue et visa des déclarations fiscales, assistance et conseil fiscaux
											</p>
										</div>	
									</div>
								</div>
								<div class="col-md-6">
									<div class="service-content">
										<div class="service-icon">	
												<i class="fas fa-hand-holding-usd" style="color: #17a2b8;"></i>
										</div>	
										<div class="service-detail">	
											<h4 class="title1"><b>Assistance aux investisseurs</b></h4>
											<p class="text-justify">
												Création d’entreprise, accompagnement à l’obtention de visas et d’autorisations d’emploi, établissements d’états financiers prévisionnels
											</p>
										</div>	
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="service-content">
										<div class="service-icon">	
												<i class="fas fa-people-carry" style="color:#b2904f;"></i>
										</div>	
										<div class="service-detail">
											<h4 class="title1"><b>Assistance et conseil en gestion</b></h4>
										<p class="text-justify">
											Conception et mise en place de dispositifs de pilotage, diagnostic financier
										</p>
										</div>	
									</div>
								</div>
							</div>

					</div>
				</section>


		

		<section class="actus"> 
			<div class="container">
				<h2 style="text-align : left; color : #46606c;"><b>Actualités</b></h2>
				<div class="row">

				<?php if (count($posts)): ?>
				<?php foreach ($posts as $post): ?>	

					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="actus-content">
							<a href="actualite.php">
								<div class="actus-img">
								<?php $photo =  $post->image_art; ?>
								<img src="<?php  echo base_url('assets/uploads/'.$photo)?>" width="100%" height="250px">
								</div>
								<h2 class="title" style="font-size: 20px;"><?php echo $post->titre_art; ?></h2>
							</a>
						</div>
					</div>
				<?php endforeach ?>
				<?php endif ?>
				
					
				</div>
			</div>
		</section>
			</div>
		</div>
	</div>
	<!-- BODY -->

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
    <script rel="stylesheet" type="text/css" src="<?php echo base_url('bootstrap/js/jquery-3.5.1.js'); ?>"></script>
    <script rel="stylesheet" type="text/css" src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"></script>
    <script rel="stylesheet" type="text/css" src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script rel="stylesheet" type="text/css" src="<?php echo base_url('bootstrap/js/wow.min.js'); ?>"></script>
    <script rel="stylesheet" type="text/css" src="<?php echo base_url('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script rel="stylesheet" type="text/css" src="<?php echo base_url('bootstrap/js/main.js'); ?>"></script>
    <script rel="stylesheet" type="text/css" src="<?php echo base_url('bootstrap/js/aos.js'); ?>"></script>

</body>
</html>