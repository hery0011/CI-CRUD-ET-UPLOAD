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
	<body>
		

		<section>
			<div class="container">
				<h2 class="title text-center">Formulaire de création d’article</h2>
				<hr class="separator">
					<?php echo form_open_multipart('articleController/createArticle',['class'=>'form-horizontal']); ?>
					<div class="form-group">
		              <label>Titre</label>
		              <?php echo form_input(['name'=>'titre','type'=>'text','class'=>'form-control']); ?>
		            </div>

		            <div class="form-group">
		              <label>Date de publication</label>
		              <?php echo form_input(['name'=>'date','type'=>'date','class'=>'form-control']); ?>
		            </div>

		            <div class="form-group">
		              <label>image</label>
		              <?php echo form_input(['name'=>'file_name','type'=>'file','class'=>'form-control']); ?>
		            </div>

		            <div class="form-group">
					    <label>Contenu</label>
<!-- 					    <textarea class="form-control" rows="3" name="contenu"></textarea> -->
					    <?php echo form_textarea(['name'=>'contenu', 'type'=>'text','class'=>'form-control', 'rows'=>'3']); ?>
					  </div>

		            <div class="form-group">
		              <label>Signature (auteur)</label>
		              <?php echo form_input(['name'=>'signature','type'=>'text','class'=>'form-control']); ?>
		            </div>

		            <div class="btn-wrap text-center">
		            	<?php echo form_submit(['name'=>'submit', 'value'=>'Soumettre', 'class'=>'btn btn-primary']); ?>
		            	<?php echo anchor('articleController/dashboard','Annuler',['class'=>'btn btn-danger']); ?>
		            </div>
				<?php echo form_close(); ?>
			</div>
		</section>

		
		
		<script src="js/jquery-3.5.1.js"></script>
		<script src="js/main.js"></script>
		<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
		</body>
</html>
