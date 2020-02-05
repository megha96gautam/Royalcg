<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li><a href="#">Manage Static Content</a></li>


                </ol>

        <div class="container-fluid">
                                


     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">
		
			   <div class="panel panel-default">
		
				     <div class="panel-heading">
					  
					 
					
					<h4>Manage Static Content</h4>
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
								<th>Title English </th>								
								<th style="text-align: right;">Title Arabic</th>								
								<th>Title Russian </th>
								<th>Title Chinese </th>
								<th >Action</th>
							
								 
							</tr>
						</thead>
						<tbody>
						  <?php $i =1;  foreach($translate as $trans) { ?>
							   <tr>
							     <td>
								 <?php echo $i ;?>
							     </td>
								 <td >
								 <?php echo $trans->title;?>
							     </td>
								<td style="text-align: right;">
								 <?php echo $trans->arabic; ?> 
							     </td>
							    <td>
								 <?php echo $trans->russian; ?>
							     </td>	
							      <td>
								 <?php echo $trans->chiness; ?>
							     </td>	
								  <td>
								<a class="action-btn btn btn-primary" type="button" href="<?php echo base_url(); ?>admin/edit_static/<?php echo $trans->lang_id; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>						  
									  
									
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
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Questions</h4>
        </div>
        <div class="modal-body dumpdata">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
<Script>

function view_modal(que1,que2,que3,ans1,ans2,ans3){
var element ='';
$(".dumpdata").html(''); 
 element += "<table class='table table-striped table-bordered'><tr><td>"+que1+"</td><td>"+ans1+"</td></tr><tr><td>"+que2+"</td><td>"+ans2+"</td></tr><tr><td>"+que3+"</td><td>"+ans3+"</td></tr></table>";
 
 $("#myModal").modal('show'); 
 $(".dumpdata").html(element); 

}
</script>