<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li>Manage Email History</li>


                </ol>

        <div class="container-fluid">
                                


     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">
		
			   <div class="panel panel-default">
		
				 <div class="panel-heading">
					  
					 <a href="<?php echo base_url()?>admin/add_sendemail" class="btn btn-default col-md-offset-10"> Add New </a>
					
					<h4>Manage Email History</h4>
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
								<th>Template Title </th>
								<th>User Name</th>
							    <th>Email Subject</th>
							    <th>Sender Type</th>
							    
								<th>action</th>
							</tr>
						</thead>
						<tbody>
						    <?php
							$i =1; foreach($emails as $email){?>
							 <tr class="odd gradeX">
								<td class="center"><?php echo $i ;?></td>
									<td class="center"> <?php echo $email['title']; ?></td>
								<td class="center">
     
								 <?php 
								 if($email['sender_type']=="Subscriber"){
                                   $subdata= $this->db->get_where('tbl_subcribe_email', array('subscribe_id'=> $email['users_id']))->row();
								  
								   echo $subdata->email;

								 }elseif ($email['sender_type']=="contact") {
                                	$contdata=$this->db->get_where('contact_us', array('id'=>$email['users_id']))->row();
                                	//print_r($contdata);
								 	 echo $contdata->first_name;						 

								 }else
								 {	 

								 	 	$inq=$this->db->get_where('enquiries_form', array('id'=>$email['users_id']))->row();
								 	 echo $inq->name;
								 }
    								
								// echo $email['user_id']; ?>
								 	
								 </td>
							
								<td class="center"><?php echo $email['email_subject']; ?></td>
								<td class="center"><?php echo $email['sender_type']; ?></td>
								
								   
								<td class="center">
									 <a  class="action-btn btn btn-info" type="button" href="<?php echo base_url(); ?>admin/view_email_history/<?php echo $email['email_id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
												&nbsp;&nbsp;&nbsp;&nbsp;
									  <a class="action-btn btn btn-danger" type="button" href="<?php echo base_url(); ?>admin/delete_email_history/<?php echo $email['email_id']; ?>" onclick="return confirm('Are you sure you want to delete this Email History ?')" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>

									
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