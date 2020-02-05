<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title ; ?></title>
<link rel="icon" href="<?php echo base_url();?>assets/images/logo.png" type="image/png" sizes="20x20">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600' rel='stylesheet'>

    <link type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="<?php echo base_url();?>assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">              <!-- Themify Icons -->
    <link type="text/css" href="<?php echo base_url();?>assets/fonts/weather-icons/css/weather-icons.min.css" rel="stylesheet">      <!-- Weather Icons -->

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles-alternative.css" id="theme">             <!-- Default CSS: Altenate Style -->
    <link rel="prefetch alternate stylesheet" href="<?php echo base_url();?>assets/css/styles.css">                 <!-- Prefetched Secondary Style -->

    <link type="text/css" href="<?php echo base_url();?>assets/plugins/codeprettifier/prettify.css" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="<?php echo base_url();?>assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              <!-- iCheck -->

    <!--[if lt IE 10]>
        <script type="text/javascript" src="assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="assets/js/respond.min.js"></script>
        <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    
<link type="text/css" href="<?php echo base_url();?>assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet"> 						<!-- FullCalendar -->
<link type="text/css" href="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"> 			<!-- jVectorMap -->
<link type="text/css" href="<?php echo base_url();?>assets/plugins/switchery/switchery.css" rel="stylesheet">   							<!-- Switchery -->

<link type="text/css" href="<?php echo base_url();?>assets/plugins/charts-chartistjs/chartist.min.css" rel="stylesheet"> 					<!-- Chartist -->



   <style>
 .error{
	 color:red;
 }
 .green{
	 color:green;
 }
 .panel-heading .btn-default{ 
	 background-color:#038dcc !important;
	 color:white;!important;
	 float:right;
 }
 a,h4,h1{
    text-transform: capitalize;	 
	 
 }
 .miandiv p{
	 margin-left:10px;
	color:red; 
 }
 .heading{
	 margin-left:20px !important;
	 font-weight: 400 !important;
	 color:#616161 !important;
	 font-size: 18px !important;
	 
 }

	 
 

 </style>
    </head>
       <?php 
		if(isset($page)){
		if($page=='login' or $page=='registration' or $page=='forgetpassword'){
		$class='focused-form';
		}else{
		$class='animated-content';
		}}else{
		$class='animated-content';
		}?>
    <body class="<?php echo $class; ?>">