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
								<th> voucher  </th>
								<th> vocuher create date</th>
								 
							</tr>
						</thead>
						<tbody>
						    <?php $i =1; foreach($vouchers as $voucher){?>
							 <tr class="odd gradeX">
								<td><?php echo $i ;?></td>
								<td><?php echo $voucher['title']; ?></td>
								<td><?php echo $voucher['device_id']; ?></td>
								<td>
								  <a target="_blank" href="<?php echo base_url();?>images/barcode/<?php echo md5($voucher['voucher']).'.jpg'; ?>" ><img  src="<?php echo base_url();?>images/barcode/<?php echo md5($voucher['voucher']).'.jpg'; ?>"></a>
								</td>	
								<td>
								  <?php  echo date('d F  Y', strtotime($voucher['access_date'])); ?> 
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

