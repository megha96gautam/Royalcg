<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li><a href="<?php echo base_url(); ?>admin/category">Manage Cities</a></li>
                </ol>

    <div class="container-fluid">
      <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">
		        <div class="panel panel-default">
		           <div class="panel-heading">
					  
					 <a href="<?php echo base_url()?>admin/add_city" class="btn btn-default col-md-offset-10"> Add New </a>
					
					<h4>Manage Cities</h4>
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
								<th>City name </th>
								<th>Created</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						    <?php
							$i =1; foreach($cities as $cat){?>
							 <tr class="odd gradeX">
								<td class="center"><?php echo $i ;?></td>
								<td class="center"><?php echo $cat['city_name']; ?></td>
								<td class="center"><?php echo $cat['create_date']; ?></td>
								<td class="center"><?php if($cat['city_status']==1){ echo "Active";} else{ echo "Deactive" ; }?>
								</td>
								 <td class="center">
								 	<a class="action-btn btn btn-info" type="button" href="<?php echo base_url(); ?>admin/view_city/<?php echo $cat['city_id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
									&nbsp;&nbsp;&nbsp;&nbsp;
								<a class=" action-btn btn btn-primary" type="button" href="<?php echo base_url(); ?>admin/edit_city/<?php echo $cat['city_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
									 
									  &nbsp;&nbsp;&nbsp;&nbsp;
									  
									 <a class="action-btn btn btn-danger" type="button" href="<?php echo base_url(); ?>admin/delete_city/<?php echo $cat['city_id']; ?>" onclick="return confirm('Are you sure you want to delete this City ?')" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                                      &nbsp;&nbsp;&nbsp;&nbsp;

									  <a class="action-btn <?php if($cat['city_status']==1){ echo 'btn btn-warning'; }else{ echo 'btn btn-success'; } ?>" type="button"  href="<?php echo base_url(); ?>admin/status_city/<?php echo $cat['city_id']; ?>"><?php if($cat['city_status']==1){ echo "Deactive";} else{ echo "Active" ; }?> </a>
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