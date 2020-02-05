<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">Dashbord</a></li>
                     <li><a href="<?php echo base_url(); ?>admin/enquiry">manage enquiry</a></li>
                </ol>

  <div class="container-fluid">
     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">		
			   <div class="panel panel-default">		
				     <div class="panel-heading">					  
					<!--  <a href="" class="btn btn-default col-md-offset-10"> Add New </a> -->
					
					<h4>Manage enquiry</h4>
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
								<th>Name </th>
								<th>Email</th>
								<th>Contact</th>
								<th>Category</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						    <?php
							$i =1; 
							foreach($enquiries as $enq){?>
							 <tr class="odd gradeX">
								<td class="center"><?php echo $i ;?></td>
								<td class="center"> <?php echo $enq['name']; ?></td>
								<td class="center"><?php echo $enq['email']; ?></td>
								<td class="center"><?php echo $enq['contact']; ?></td>
								<td class="center"><?php echo $enq['page_title']; ?></td> 
								 <td class="center">
									
									 <a class="action-btn btn btn-info" type="button" href="<?php echo base_url(); ?>admin/view_enquiry/<?php echo $enq['id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>

									 <a class="action-btn btn btn-danger" type="button" href="<?php echo base_url(); ?>admin/delete_enquiry/<?php echo $enq['id']; ?>" onclick="return confirm('Are you sure you want to delete this enquiry ?')" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>

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