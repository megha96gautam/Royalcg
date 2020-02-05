<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li><a href="#"> manage listing_suggetion</a></li>


                </ol>

        <div class="container-fluid">
                                


     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">
		
			   <div class="panel panel-default">
		
				     <div class="panel-heading">
					  
					 
					
					<h4>Manage  listing_suggetion</h4>
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
								
								<th> category </th>
								
								<th> brands </th>
							
								<th>action</th>
							</tr>
						</thead>
						<tbody>
						  <?php $i =1;  foreach($listings as $list) { ?>
							   <tr>
							     <td>
								 <?php echo $i ;?>
							     </td>
								 <td>
								 <?php echo $list['name'];?>
							     </td>
								<td>
								 <?php echo $list['email'];?>
							     </td>
							    <td>
								 <?php echo $list['contact'];?>
							     </td>	
								  <td>
								 <?php echo $list['category'];?>
							     </td>	
								 <td>
								 <?php echo $list['brand'];?>
							     </td>									 	
								 <td>
								  <a onclick="return confirm('Are you sure you want to delete ?')"  href="<?php echo base_url(); ?>admin/delete_listing_suggetion/<?php echo $list['id']; ?>">delete</a>
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

