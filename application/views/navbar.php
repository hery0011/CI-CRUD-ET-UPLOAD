<!-- NAVBAR -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<header id="head" class="">
					<div class="container">
						<div class="navbar-head">
							
									<div class="navbar-logo">
										<a href="index.php"><img src="<?php echo base_url('bootstrap/img/Logo.png'); ?>"></a>
									</div>

									<div class="toggle-menu">
										<div class="hamburger">
											<i class="fas fa-bars"></i>
										</div>	
									</div>
									
									<div class="navbar-menu">
										<ul class="navbar-menu-list">
											<li class="navbar-menu-item contain pullUpDown"><?php echo anchor('acceuilController/acceuil','Accueil', ['class'=>'log-btn1']); ?></li>	

											<li class="navbar-menu-item contain dropdown pullUpDown">
												<a class="log-btn1" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Le Cabinet </a>
												<ul class="sub_menu sub1 dropdown-menu" aria-labelledby="dropdownMenuButton">
													<li><a href="cabinet_qui_sommes_nous.html">Qui sommes-nous ?</a></li>
													<li><a href="cabinet_valeurs.html">Nos valeurs</a></li>
													<li><a href="cabinet_missions.html">Nos missions</a></li>
												</ul>
											</li>
											
											<li class="navbar-menu-item contain dropdown pullUpDown">
												<a class="log-btn1" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos Services</a>
												<ul class="sub_menu sub2 dropdown-menu">
													<li><a href="service_expertise.html">Expertise comptable</a></li>
													<li><a href="service_audit.html">Audit</a></li>
													<li><a href="service_fiscalité.html">Fiscalité</a></li>
													<li><a href="service_investisseur.html">Assistance aux investisseurs</a></li>
													<li><a href="service_conseil.html">Assistance et conseil en gestion</a></li>
												</ul>
											</li>
											<li class="navbar-menu-item contain pullUpDown"><a class="log-btn1" href="devis.html">Devis</a></li>
											<li class="navbar-menu-item contain pullUpDown"><a class="log-btn1" href="actualite.php">Actualités</a></li>
											<li class="navbar-menu-item contain pullUpDown"><a class="log-btn1" href="contact.php">Contact</a></li>
										</ul>
										
									</div>

									
							
						</div>
					</div>
				</header>
			</div>
		</div>
	</div>
	<!-- NAVBAR -->
