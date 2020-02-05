<!DOCTYPE html>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Royalcg</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css"> 
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css"> 
     <!-- Gallery Lightbox -->
    <link href="<?php echo base_url(); ?>assets/css/magnific-popup.css" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="<?php echo base_url(); ?>assets/css/default-theme.css" rel="stylesheet">  
    <!-- Main style sheet -->
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet"> 
    <link href="<?php echo base_url(); ?>assets/css/master.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

     </head>
 <?php   $data_id =$this->uri->segment(2); 
         $langs = $this->uri->segment(3); 
        // print_r($langs); die();
 ?>
  <?php if ($langs == 'ar') { ?>
      <link href="<?php echo base_url(); ?>assets/css/arabic_style.css" rel="stylesheet">        
     <?php } ?>

  <body class="<?php if($data_id =='service_details'){ echo 'mobile-class';} ?>">
  <div class="">
    <div class="container" style="padding: 0px;">
      <div class="">
        <div class="wow fadeInDown">