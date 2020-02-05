<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li><a href="<?php echo base_url(); ?>admin/manage_like_segment">manage like segment</a></li>


                </ol>

        <div class="container-fluid">
                                


     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">
		
			   <div class="panel panel-default">
						 <?php if(isset($_SESSION['msg'])) { ?>
                     <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Success!</strong> <?PHP ECHO $_SESSION['msg'] ; ?>
                         </div>
					<div class="panel-ctrls"></div>
					 <?php unset($_SESSION['msg']); } ?>
				     <div class="panel-heading">
					  
					 <!--<a href="<?php echo base_url()?>admin/add_language" class="btn btn-default col-md-offset-10"> Add New </a> -->
					
					<h4>manage like segment</h4>
	
				    </div>
				<div class="panel-body no-padding">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>S.no</th>
								<th>segment name</th>
								<th>range</th>
								<th>action</th>
							</tr>
						</thead>
						<tbody>
						    <?php $i =1; foreach($segment as $seg){?>
							 <tr class="odd gradeX">
								<td><?php echo $i ;?></td>
								<td><?php echo $seg['name']; ?></td>
								<td><?php echo $seg['start_range'] . '-'.$seg['end_range'] ; ?></td>
 
								    <td class="center">
									
									  <a href="<?php echo base_url(); ?>admin/edit_like_segment/<?php echo $seg['seg_id']; ?>">edit</a>
									 
 
									  
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

