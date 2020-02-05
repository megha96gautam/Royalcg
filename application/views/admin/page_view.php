<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li><a href="#">manage page</a></li>


                </ol>

        <div class="container-fluid">                             


     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">
		
			   <div class="panel panel-default">
		
				     <div class="panel-heading">
					  
					 <a href="<?php echo base_url()?>admin/add_page" class="btn btn-default col-md-offset-10"> Add New </a>
					
					<h4>manage page</h4>
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
								<th>Title </th>		
								<th>Footer Type</th>				
								<th> Manu service status</th>
								<!-- <th> Footer status</th> -->
								<th>Order </th>		

                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i =1; foreach($pages as $page){?>
						   <tr class="odd gradeX">
							<td><?php echo $i ;?></td>
							<td><?php echo $page['page_title'] ;?></td>
							<td><?php echo $page['footer_type'] ;?></td> 
							<td><?php if($page['menu_status']==1){?>
								<a  href="<?php echo base_url(); ?>admin/menu_status/<?php echo $page['id']; ?>" class="btn btn-info">Enable</a>
								<?php } else{ ?>
							    <a href="<?php echo base_url(); ?>admin/menu_status/<?php echo $page['id']; ?>" class="btn btn-danger">Disable</a><?php }?>
							</td>
							<!-- <td><?php if($page['footer_status']==1){?>
								<a  href="<php echo base_url(); ?>admin/footer_status/<php echo $page['id']; ?>" class="btn btn-info">unable</a>
								<?php } else{ ?>
							    <a href="<php echo base_url(); ?>admin/footer_status/<php echo $page['id']; ?>" class="btn btn-danger">Disable</a><?php }?>
							</td> -->
							<td><?php echo $page['order_by']; ?></td>
							<td> 
								<a class="action-btn btn btn-info" type="button" href="<?php echo base_url(); ?>admin/details_page/<?php echo $page['page_id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
								 &nbsp;&nbsp;&nbsp;&nbsp;
							<a class="action-btn btn btn-primary" type="button" href="<?php echo base_url().'admin/edit_page/'. language .'/'. $page['page_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								 &nbsp;&nbsp;&nbsp;&nbsp;
									                                       
									    <a class="action-btn <?php if($page['page_status']==1){ echo 'btn btn-warning'; }else{ echo 'btn btn-success'; } ?>" type="button" href="<?php echo base_url(); ?>admin/status_page/<?php echo $page['page_id']; ?>"><?php if($page['page_status']==1){ echo "Deactive";} else{ echo "Active" ; }?> </a>


									   <?php if($page['page_id']=='19' or $page['page_id']=='20' or $page['page_id']=='21'){ 
									   } else{?>

									   	  &nbsp;&nbsp;&nbsp;&nbsp;
									  <a class="action-btn btn btn-danger" type="button" href="<?php echo base_url().'admin/delete_page/'.$page['page_id']; ?>"onclick="return confirm('Are you sure you want to delete this page ?')"  href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									   <?php } ?>

							 </td>
							
						   </tr>
							<?php $i++;} ?> 
							   
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

