<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">Dashbord</a></li>
                     <li><a href="<?php echo base_url(); ?>admin/contact_us">manage Contact</a></li>
                </ol>

  <div class="container-fluid">
     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">		
			   <div class="panel panel-default">		
				     <div class="panel-heading">					  
					<!--  <a href="" class="btn btn-default col-md-offset-10"> Add New </a> -->
					
					<h4>Manage Contact</h4>
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
								<th> Mobile </th>
								<th>Email</th>							
								<th>Message</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						    <?php
							$i =1; foreach($contact as $tasti){?>
							 <tr class="odd gradeX">
								<td class="center"><?php echo $i ;?></td>
								<td class="center"><?php echo $tasti['first_name']; ?></td>	
								<td class="center"><?php echo $tasti['mobile']; ?></td>
								<td class="center"><?php echo $tasti['email']; ?></td>
								<td class="center"><?php echo $tasti['message']; ?></td>
								<td class="center">
									 <a class="action-btn btn btn-danger" type="button" href="<?php echo base_url(); ?>admin/delete_contact/<?php echo $tasti['id']; ?>" onclick="return confirm('Are you sure you want to delete this Contact ?')" >Delete</a>
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
 <!-- model popupp  -->
 				 <!-- Modal -->

