
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

                <div class="static-content-wrapper">

                    <div class="static-content">
                    	<section class="content-header">
                    <h1>
                        Dashboard
                       
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>admin/dashbaord"><i class="fa fa-dashboard"></i> Home</a></li>
                      
                    </ol>
                </section>
                       <div class="row">
	
	<div class="col-lg-3 col-md-6" style="margin-top: 10px;">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3" style="color: black; ">
						<i class="fa fa-users fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge" style="color: black;  font-size: 15px;">
						  <?php echo count($category_count);?>
						</div>
						<div style="color: black;  font-size: 15px;">Category</div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url(); ?>admin/category">
				<div class="panel-footer gray-gradient">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6" style="margin-top: 10px;">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3" style="color: black; ">
						<i class="fa fa-list-alt fa-5x" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge" style="color: black;  font-size: 15px;">
						  <?php echo count($product_count); ?>
						</div>
						<div style="color: black;  font-size: 15px;">Products</div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url(); ?>admin/manage_listing">
				<div class="panel-footer gray-gradient">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
 <div class="col-lg-3 col-md-6" style="margin-top: 10px;">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3" style="color: black; ">
						<i class="fa fa-th-large fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge" style="color: black;  font-size: 15px;">
						 <?php echo count($services_count);?>
						</div>
						<div style="color: black;  font-size: 15px;">Services</div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url(); ?>admin/page">
				<div class="panel-footer gray-gradient">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6" style="margin-top: 10px;">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3" style="color: black; ">					
						<i class="material-icons fa-5x" style="font-size:56px">location_on</i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge" style="color: black;  font-size: 15px;">
						 <?php echo count($city_count);?>
						</div>
						<div style="color: black;  font-size: 15px;">City</div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url(); ?>admin/manage_cities">
				<div class="panel-footer gray-gradient">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	
</div>
 <section class="content-header">
                    <!-- <h1>
                        All Activity Chart
                       
                    </h1> -->
                   
                </section>
<!-- <div class="row">
       
	<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
</div>	 -->	
                   </div> <!-- #page-content -->
                   <?php $this->load->view('admin/include/footer');  ?> 
</div>
                    </div>

           
      

    
   