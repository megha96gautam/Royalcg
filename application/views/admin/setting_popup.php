<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li><a href="<?php echo base_url(); ?>admin/suggestion">Mobile Popup </a></li>


                </ol>

        <div class="container-fluid">
                                


     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">
		
			   <div class="panel panel-default">
		
 
				<div class="panel-body no-padding">
						<div  class="tab-pane active" style="margin-top:20px;">

						<form  action="<?php echo $action;?>" enctype="multipart/form-data" method="post" id="region_form" class="form-horizontal validate_inner ">  
							<div class="form-group">
							<label class="col-sm-2 control-label" for="focusedinput">Select setting</label><div class="col-sm-8">
							 
							    <select class="form-control popup_setting"   > 
								
								    <option value="yes" <?php if( $result[0]->flag=='yes' ) { echo "selected";} ?>>Enable Popup on app</option>
								    <option value="no" <?php if( $result[0]->flag=='no' ) { echo "selected";} ?> >disable popup on app</option>
								</select>
							</div>


                           </div>	
						 </form>
				</div>
				<div class="panel-footer"></div>
			</div>
		</div>
	</div>
</div>

</div> <!-- .container-fluid -->
 </div> <!-- #page-content -->
 </div>
 <!-- model popupp  -->
 				 <!-- Modal -->
 