<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li><a href="#">manage suggetion</a></li>


                </ol>

        <div class="container-fluid">
                                


     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">
		
			   <div class="panel panel-default">
		
				     <div class="panel-heading">
					  
					 
					
					<h4>Manage suggetion</h4>
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
								<th> name </th>
								
								<th> Email </th>
								
								<th> Contact </th>
								
								<th> Suggetion </th>
							
								<th>action</th>
							</tr>
						</thead>
						<tbody>
						  <?php $i =1;  foreach($fb_data as $fb) { ?>
							   <tr>
							     <td>
								 <?php echo $i ;?>
							     </td>
								 <td>
								 <?php echo $fb['name'];?>
							     </td>
								<td>
								 <?php echo $fb['email'];?>
							     </td>
							    <td>
								 <?php echo $fb['contact'];?>
							     </td>	
								  <td>
								 <?php echo $fb['company'];?>
							     </td>									 	
								 <td>
								  <a onclick="return confirm('Are you sure you want to delete ?')"  href="<?php echo base_url(); ?>admin/delete_view_home_suggetion/<?php echo $fb['inviid']; ?>">delete</a>
							     </td>								 
							   </tr>
							   
							   
						  <?php $i++ ; } ?>
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

