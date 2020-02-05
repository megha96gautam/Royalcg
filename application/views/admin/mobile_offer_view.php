<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li><a href="<?php echo base_url(); ?>admin/mobile-offer">manage mobile offer</a></li>


                </ol>

        <div class="container-fluid">
                                


     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">
		
			   <div class="panel panel-default">
		
				     <div class="panel-heading">
					  
					 <a href="<?php echo base_url()?>admin/add_mobile_offer" class="btn btn-default col-md-offset-10"> Add New </a>
					
					<h4>manage offer</h4>
					 <?php if(isset($_SESSION['msg'])) { ?>
                     <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Success!</strong> <?PHP ECHO $_SESSION['msg'] ; ?>
                         </div>
					<div class="panel-ctrls"></div>
					 <?php unset($_SESSION['msg']); } ?>
				    </div>
				<div class="panel-body no-padding">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>S.no</th>
								<th> Title </th>
								<th> image </th>
								<th> sort</th>
								<th>status</th>
								<th>action</th>
							</tr>
						</thead>
						<tbody>
						    <?php $i =1; foreach($banners as $banner){?>
							 <tr class="odd gradeX">
								<td><?php echo $i ;?></td>
								<td><?php echo $banner['title']; ?></td>
								<td>
								  <a target="_blank" href="<?php echo base_url();?>images/offer/<?php echo $banner['image']; ?>" ><img  src="<?php echo base_url();?>images/offer/<?php echo $banner['image']; ?>"></a>
								</td>	
								<td>
								  <?php echo $banner['order_by']; ?> 
								</td>
								   <td class="center">
								    <?php if($banner['status']==1){ echo "Active";} else{ echo "inactive" ; }?>
								   </td>
								   
								    <td class="center">
									 <a href="<?php echo base_url(); ?>admin/edit_mobile_offer/<?php echo $banner['offer_id']; ?>">edit</a>
									  &nbsp;&nbsp;&nbsp;&nbsp;
									  <a onclick="return confirm('Are you sure you want to delete this banner ?')"  href="<?php echo base_url(); ?>admin/delete_mobile_offer/<?php echo $banner['offer_id']; ?>">delete</a>
									</td>
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

