<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li><a href="<?php echo base_url(); ?>admin/mobile-voucher">View offer voucher </a></li>


                </ol>

        <div class="container-fluid">
                                


     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">
		
			   <div class="panel panel-default">
		<div class="view_offer_request_msg"> </div>
				     <div class="panel-heading">
					  
					  
					
					<h4>view offer voucher </h4>
					
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
								<th> offer listing name  </th>
								<th> device_id </th>
								<th> name  </th>
								<th> email </th>
								<th> Status </th>
								<th> action </th>
								 
							</tr>
						</thead>
						<tbody>
						    <?php $i =1; foreach($vouchers as $voucher){?>
							 <tr class="odd gradeX">
								<td><?php echo $i ;?></td>
								<td><?php echo $voucher['title']; ?></td>
								<td><?php echo $voucher['device_id']; ?></td>
								<td><?php echo $voucher['name']; ?></td>
								<td><?php echo $voucher['email']; ?></td>
								<td>
								<select class="status_change_request form-controls" data-id="<?php echo $voucher['id']; ?>" >
								     <option value="1" <?php if($voucher['status']==1){ echo "selected"; }?>>approve</option>
								     <option value="2" <?php if($voucher['status']==2){ echo "selected"; }?> >reject</option>
								     <option value="0" <?php if($voucher['status']==0){ echo "selected"; }?>>pending</option>
								</select>
								
								</td>
 	                           <th> <a href="javascript:;" class="vocher_model" data-id="<?php echo $voucher['id']; ?>">view</a> </th>
								 
 
								   
 
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
 
 
 <div id="myModal_voucher" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
 
 <!-- model popupp  -->
 				 <!-- Modal -->

