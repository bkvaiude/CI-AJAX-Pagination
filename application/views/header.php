<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CI Test Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Shape Calculator">
    <meta name="author" content="Bhushan Kishor Vaiude">

    <!-- Le styles -->
    <link href="<?php echo base_url() ?>media/vendors/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>media/app/css/app.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>media/vendors/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>media/vendors/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>media/vendors/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>media/vendors/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>media/vendors/assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="<?php echo base_url() ?>media/vendors/assets/ico/favicon.png">
	<!-- include the core styles -->
	<link rel="stylesheet" href="<?php echo base_url() ?>media/vendors/assets/css/alertify.core.css" />
	<!-- include a theme, can be included into the core instead of 2 separate files -->
	<link rel="stylesheet" href="<?php echo base_url() ?>media/vendors/assets/css/alertify.default.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>media/vendors/fancybox/jquery.fancybox.css" type="text/css" media="screen" />  
  </head>

  <body>

    <div class="container">
	  <div class="page-header">
        <h3 class="h3-header"> &nbsp;CI Test Application</h3>
      </div>
    <div class="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php  $msg = $this->session->flashdata('item_saved'); echo $x = !empty($msg) ? $msg : "Updates .... ";?>
    </div>