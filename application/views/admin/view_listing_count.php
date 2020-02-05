<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li><a href="#"> View listing count </a></li>


                </ol>
				
 
        <div class="container-fluid">
                                


     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">
		
			   <div class="panel panel-default">
		<div class="view_offer_request_msg"> </div>
				     <div class="panel-heading">
					  
					  
					
					  <h4>View listing count </h4>
 
				    </div>
				<div class="panel-body no-padding">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
							 
								<th>S.no</th>
								<th> device_id </th>
								<th> Count  </th>
								<th> Listing  </th>
								<th> id  </th>
								 
								 
								 
							</tr>
						</thead>
						<tbody>
						    <?php
							 
							$i =1; foreach($listingcount as $r){?>
							 <tr class="odd gradeX">
								<td><?php echo $i; ?></td>
								<td><?php echo $r->device_id; ?></td>
								<td><?php 
								 echo $this->Common_model->countwhereuser("mobile_like" , array("device_id"=>$r->device_id,"listing_id"=>$r->pro_id));
								?></td>
								<td><?php echo $r->pro_title; ?></td>
								<td><?php echo $r->pro_id; ?></td>
 
 
								   
 
							   </tr>
							<?php $i++; } ?>
							   
							   
						</tbody>
					</table>
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

