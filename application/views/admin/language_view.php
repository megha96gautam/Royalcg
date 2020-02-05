<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li><a href="<?php echo base_url(); ?>admin/manage_language">manage language</a></li>


                </ol>

        <div class="container-fluid">
                                


     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">
		
			   <div class="panel panel-default">
						
				     <div class="panel-heading">
					 <!--  
					 <a href="<php echo base_url()?>admin/add_language" class="btn btn-default col-md-offset-10"> Add New </a>  -->
					
					<h4>Manage language</h4>
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
								<th>Language name</th>
								
								<th>Status</th>
							    <th>Action</th>
							</tr>
						</thead>
						<tbody>
						    <?php $i =1; foreach($languages as $lang){?>
							 <tr class="odd gradeX">
								<td><?php echo $i ;?></td>
								<td><?php echo ucfirst($lang['lang_name']); ?></td>
								
								   <td class="center">
								    <?php if($lang['lang_status']==1){ echo "Active";} else{ echo "inactive" ; }?>
								   </td>
								   
								    <td class="center">
									   
									   <a class="action-btn <?php if($lang['lang_status']==1){ echo 'btn btn-warning'; }else{ echo 'btn btn-success'; } ?>" type="button" href="<?php echo base_url(); ?>admin/status_laguage/<?php echo $lang['lang_id']; ?>"><?php if($lang['lang_status']==1){ echo "Active";} else{ echo "inactive" ; }?> </a>
									  
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

