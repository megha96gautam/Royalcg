<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li><a href="<?php echo base_url(); ?>admin/category">manage category</a></li>


                </ol>

        <div class="container-fluid">
                                


     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">
		
			   <div class="panel panel-default">
		
				     <div class="panel-heading">
					  
					 <a href="<?php echo base_url()?>admin/add_category" class="btn btn-default col-md-offset-10"> Add New </a>
					
					<h4>manage category</h4>
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
								<!-- <th>Cate_id</th> -->
								<th>Category name </th>
								
								<!--<th>region name </th>-->
<!-- 


								<th>Category image </th> -->

								<th>Status</th>
								
								<!-- <th>order</th> -->
							
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						    <?php
							$i =1; foreach($categories as $cat){?>
							 <tr class="odd gradeX">
								<td class="center"><?php echo $i ;?></td>
								<!-- <td class="center"><?php echo $cat['cate_id'] ;?>
								  <button   data-id="<?php echo $cat['cate_id'];?>" class=".panel-heading .btn-default send_notification">Send </br>noti</button>
								  
								</td> -->
								
								<td class="center"><?php echo $cat['meta_title']; ?></td>
								
								<!--<td class="center"><?php echo $cat['rea_name']; ?></td>-->
								
								
								
								  <!--  <td class="center">
								    
									<img height="100" width="100" src="<?php echo base_url()?>images/<?php echo $cat['cate_image']; ?>">
								   </td> -->
								   <td class="center">
								    <?php if($cat['cate_status']==1){ echo "Active";} else{ echo "Deactive" ; }?>
								   </td>
								   
								   <!--  <td class="center">
								    <?php echo $cat['order_by'];?>
								   </td> -->
								    <td class="center">
									
									 <a class="action-btn btn btn-info" type="button" href="<?php echo base_url(); ?>admin/view_category/<?php echo $cat['cate_id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
									 
									   &nbsp;&nbsp;&nbsp;&nbsp;
									   
									 <a class="action-btn btn btn-primary" type="button" href="<?php echo base_url(); ?>admin/edit_category/<?php echo $cat['cate_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
									 
									 <!--  &nbsp;&nbsp;&nbsp;&nbsp;
									  
									 <a href="<php echo base_url(); ?>admin/delete_category/<php echo $cat['cate_id']; ?>" onclick="return confirm('Are you sure you want to delete this category ?')" >delete</a> -->

                                      &nbsp;&nbsp;&nbsp;&nbsp;

									  <a class="action-btn <?php if($cat['cate_status']==1){ echo 'btn btn-warning'; }else{ echo 'btn btn-success'; } ?>" type="button" href="<?php echo base_url(); ?>admin/status_category/<?php echo $cat['cate_id']; ?>"><?php if($cat['cate_status']==1){ echo "Deactive";} else{ echo "Active" ; }?> </a>
									</br>
									
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

<script>

</script>