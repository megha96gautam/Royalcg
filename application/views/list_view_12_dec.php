<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title><?php echo  $title;?></title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="<?php echo base_url();?>/front_assets/css/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>/front_assets/css/supersized.shutter.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>/front_assets/css/font-awesome.css" type="text/css" media="screen" />

<link href="<?php echo base_url();?>/front_assets/css/master.css" rel="stylesheet">
<link href="<?php echo base_url();?>/front_assets/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<!--Demo styles (you can delete this block)--> 

<!--<ul id="demo-block">
		<li><a href="http://buildinternet.com/project/supersized/" target="_blank"><img src="img/supersized-logo.png"/></a></li>
		<li>Photographers: <a href="http://cargocollective.com/mariakazvan" target="_blank">Maria Kazvan</a>, <a href="http://colindub.com" target="_blank">Colin Wojno</a>, &amp; <a href="http://brookeshaden.com/" target="_blank">Brooke Shaden</a></li>
	</ul>--> 

<!--End of styles--> 

<!--Thumbnail Navigation-->
<div id="prevthumb"></div>
<div id="nextthumb"></div>

<!--Arrow Navigation--> 

<!--	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>--> 

<!--    <div class="scrollbar" id="style-4">
      <div class="force-overflow">-->

 



        
 <button type="button" class="slide-toggle"><i class="fa fa-caret-right" aria-hidden="true"></i></button>       
<div id="thumb-tray" class="load-item new_scroll">
  <div class="box-inner">  <div id="thumb-back"></div>
  <div id="thumb-forward"></div>
</div>
</div>


<!--<div class="box">
        <div class="box-inner">
  </div>
    </div>-->



<!--Time Bar-->
<div id="progress-back" class="load-item">
  <div id="progress-bar"></div>
</div>

<!--Control Bar-->
<div id="controls-wrapper" class="load-item">
  <div id="controls"> <a id="play-button"><img id="pauseplay" src="<?php echo base_url();?>front_assets/img/pause.png"/></a>
    
    <div id="slidecounter"> <span class="slidenumber"></span> / <span class="totalslides"></span> </div>
   
    <div id="slidecaption"></div>
    
    <div class="categoury_list">
    
   <div class="bs-example">
    <div class="btn-group dropup cate_foot">
        <div class="btn-group cate_foot">
            <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle cate_foot"><i class="fa fa-th-list mobile" aria-hidden="true"></i><span class="category_pa"> Category </span> <span class="caret"></span></button>
            <ul class="dropdown-menu cate_foot">
			
			  <?php foreach($categories as $cat) { ?>
                <li><a href="<?php echo $cat_url . base64_encode($cat['cate_id']); ?>">
				 <?php echo $cat['cate_name'];?>
				</a></li>
			  <?php } ?>
                
            </ul>
            
</div>
    </div>
</div>
    
    </div>
    
     <div class="read_more_se">
     <!-- <a href="index.html">Read more</a>-->
     </div>
     
    
    <a id="tray-button"><img id="tray-arrow" src="<?php echo base_url();?>front_assets/img/button-tray-up.png"/></a>
    <ul id="slide-list">
    </ul>
  </div>
</div>


























<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>-->
<script src="<?php echo base_url();?>/front_assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>/front_assets/js/jquery.easing.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>/front_assets/js/supersized.3.2.7.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>/front_assets/js/supersized.shutter.min.js"></script> 
<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slide_interval          :   3000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	700,		// Speed of transition
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[

					// Slideshow Images
					<?php foreach ($lists as $l) {?>
                 {image : '<?php echo base_url();?>images/listing/<?php echo $l['pro_header']; ?>', title : '<?php echo $l['pro_title']; ?>', thumb : '<?php echo base_url();?>images/listing/<?php echo $l['pro_thumb'];?>', url : '<?php echo $url. base64_encode($l['pro_id']);?>'},
					<?php } ?>
										]
					
				});
		    });
		    
		</script>
        
        
        
<script type="text/javascript">
    $(document).ready(function(){
        $(".slide-toggle").click(function(){
			
			$( this ).toggleClass( "highlight" );
			
            $(".new_scroll").animate({
                width: "toggle"
            });
			
			   $(this).animate({
                width: "toggle"
				
            });
			
	
				$(".slide-toggle").click(function(){
           
				
				
            });

			
		 });
		
		
    });
</script>        
        
        
        
        
        
        
        
</body>
</html>
