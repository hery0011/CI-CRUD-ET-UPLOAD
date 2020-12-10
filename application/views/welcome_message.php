<!doctype html>
<html class="no-js" lang="zxx">

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
	
	<body class="bg-log-in">
			<div class="container">
			<div class="log-in-box text-center wow zoomIn">
				<div class="log-in-box-top">
					<a href="index.php"><img src="<?php echo base_url('bootstrap/img/Logo.png');?>"></a>
					<h2 class="title">
						Authentification
					</h2>
				</div>
				<hr class="separator">
		    		<?php echo form_open('welcome/login'); ?>
		    		 <div class="form-group">
		              <label>Identifiant</label>
		              <?php echo form_input(['name'=>'identifiant', 'type'=>'text', 'class'=>'form-control']); ?>
		            </div>
		    		 <div class="form-group">
		              <label>Mot de passe</label>
		              <?php echo form_input(['name'=>'password', 'type'=>'password', 'class'=>'form-control']); ?>
		            </div>
		            <a class="connect-btn">
		    			<?php echo form_submit(['name'=>'submit', 'value'=>'se connecter', 'class'=>'btn btn-post']); ?>
		    		</a>
		    	<?php form_close() ?>
			</div>
				
			<div class="log-in-box wow zoomIn">
				<div class="cp-right">
					<div class="rights">
						<p>
						Copyright ©2020 All rights reserved <br>
						| Made with passion by <a href="">www.dev-inbox.com</a>
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

		<script src="js/jquery-3.5.1.js"></script>
</html>