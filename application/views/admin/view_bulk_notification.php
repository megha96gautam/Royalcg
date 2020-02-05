<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li><a href="<?php echo base_url(); ?>admin/mobile-voucher"> Bulk notification </a></li>


                </ol>
				
         <div class="row">
		     <form enctype="multipart/form-data" method="post"  class="form-horizontal notification_form">
			 
				<div class="form-group">
				<label class="col-sm-2 control-label" for="focusedinput">  Title</label>
				<div class="col-sm-8">
				 
				<input name="title" type="text" placeholder="Title" value="<?php echo $notidata->title;?>" class="form-control">
				</div>


				</div>	

				<div class="form-group">
				<label class="col-sm-2 control-label" for="focusedinput">  Description</label>
				<div class="col-sm-8">
				 
				 <textarea class="form-control" name="description" placeholder="Description"><?php echo $notidata->content;?></textarea>
				</div>


				</div>	

				<div class="form-group">
				<label class="col-sm-2 control-label" for="focusedinput"> </label>	

				<div class="col-sm-8">

				 <img width="200" src="<?php echo base_url().'images/notification/'.$notidata->image ;?>" >
				</div>
								 
				</div>				
				
				<div class="form-group">
				<label class="col-sm-2 control-label" for="focusedinput">Image</label>	

				<div class="col-sm-8">

				<input type="file" id="image2" name="image" class="file-control">
				</div>
				<br>
				 
				</div>


			
			 
			<div class="form-group">
			<label class="col-sm-2 control-label" for="focusedinput"> </label>	

			<div class="col-sm-8">
              <input type="submit" name="submit" value="Submit" class="btn-primary btn">
			 
			</div>
			 
			 
			</div>			 
			 </form>
		 
		 </div>
        <div class="container-fluid">
                                


     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">
		
			   <div class="panel panel-default">
		<div class="view_offer_request_msg"> </div>
				     <div class="panel-heading">
					  
					  
					
					<h4>Notifications </h4>
					
					 <?php if(isset($_SESSION['msg'])) { ?>
                     <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Success!</strong> <?PHP ECHO $_SESSION['msg'] ; ?>
                         </div>
					<div class="panel-ctrls"></div>
					 <?php unset($_SESSION['msg']); } ?>
				    </div>
				<div class="panel-body no-padding">
					<table id="toggleColumn-datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
							<th><input type="checkbox" class="mail-checkbox mail-group-checkbox" value="1" id="select_all"></th>
								<th>S.no</th>
								<th> device_id </th>
								<th> name  </th>
								<th> email </th>
								<th> <a href="javascript:;" class="btn btn-primary sendnotifi"> send</a> </th>
								 
							</tr>
						</thead>
						<tbody>
						    <?php
							 
							$i =1; foreach($result as $r){?>
							 <tr class="odd gradeX">

<td ><input type="checkbox" name="inbox_id[]" class="mail-checkbox mycheckbox" value="<?php echo $r->id; ?>" ></td>
								<td><?php echo $i ;?></td>
								<td><?php echo $r->device_id; ?></td>
								<td><?php echo $r->contact_name; ?></td>
								<td><?php echo $r->mobile; ?></td>
								
								<td> </td>
  
								 
 
								   
 
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

