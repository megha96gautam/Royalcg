<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li><a href="<?php echo base_url(); ?>admin/banner">manage banner</a></li>


                </ol>

        <div class="container-fluid">
                                


     <div data-widget-group="group1" >
	     <div class="row">
		     <div class="col-md-12">
		
			   <div class="panel panel-default">
		
				     <div class="panel-heading">
					  
					 <a href="<?php echo base_url()?>admin/add_banner" class="btn btn-default col-md-offset-10"> Add New </a>
					
					<h4>manage banner</h4>
					 <?php if(isset($_SESSION['msg'])) { ?>
                     <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Success!</strong> <?PHP ECHO $_SESSION['msg'] ; ?>
                         </div>
					<div class="panel-ctrls"></div>
					 <?php unset($_SESSION['msg']); } ?>
				    </div>
				<div class="panel-body no-padding table-cls">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>S.no</th>
								<th> Banner title </th>			
								<th style="width: 130px;"> Banner Image </th>						
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						    <?php $i =1; foreach($banners as $banner){?>
							 <tr class="odd gradeX">
								<td><?php echo $i ;?></td>
								<!-- <td><?php echo $banner['rea_name']; ?></td> -->
								<td><?php echo $banner['banner_title']; ?></td>
								<!-- <td><?php echo $banner['banner_contact']; ?></td> -->
								<td style="width: 160px!important;">
								 <?php if(!empty($banner['slider_image'])){ ?>
								  <a target="_blank" href="<?php echo base_url();?>images/banner/<?php echo $banner['slider_image']; ?>" ><img  src="<?php echo base_url();?>images/banner/<?php echo $banner['slider_image']; ?>"></a>
								   <?php }else{
                                         ?>
                                <a target="_blank" href="<?php echo base_url()?>images/users.png" ><img  src="<?php echo base_url()?>images/users.png"></a>
                               <?php } ?>
								</td>	
								<!-- <td>
									  <?php if(!empty($banner['banner_mobile'])){ ?>
								  <a target="_blank" href="<?php echo base_url()?>images/banner/mobile_banner/<?php echo $banner['banner_mobile'];?>" ><img  src="<?php echo base_url()?>images/banner/mobile_banner/<?php echo $banner['banner_mobile'];?>"></a>
								   <?php }else{
  ?>
  <a target="_blank" href="<?php echo base_url()?>images/users.png" ><img  src="<?php echo base_url()?>images/users.png"></a>
<?php
} ?>
								</td> -->
								<!-- <td><?php echo $banner['sort_order']; ?></td> -->
								   <td class="center">
								    <?php if($banner['slider_status']==1){ echo "Active";} else{ echo "Deactive" ; }?>
								   </td>
								   <td class="center">
								    <a class="action-btn btn btn-info" type="button" href="<?php echo base_url(); ?>admin/view_banner/<?php echo $banner['slider_id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>

									 <a class="action-btn btn btn-primary" type="button" href="<?php echo base_url(); ?>admin/edit_banner/<?php echo $banner['slider_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

									 <a class="action-btn btn btn-danger" type="button" onclick="return confirm('Are you sure you want to delete this banner ?')"  href="<?php echo base_url(); ?>admin/delete_banner/<?php echo $banner['slider_id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

									  <a class="action-btn <?php if($banner['slider_status']==1){ echo 'btn btn-warning'; }else{ echo 'btn btn-success'; } ?>" type="button" href="<?php echo base_url(); ?>admin/status_banner/<?php echo $banner['slider_id']; ?>"><?php if($banner['slider_status']==1){ echo "Deactive";} else{ echo "Active" ; }?> </a>
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

