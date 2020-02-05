<div class="static-content-wrapper">
       <div class="static-content">
            <div class="page-content">
                <ol class="breadcrumb">
                                
                     <li><a href="<?php echo base_url(); ?>admin/dashboard">dashbord</a></li>
                     <li><a href="<?php echo base_url(); ?>admin/manage_listing">Manage Product</a></li>


                </ol>

        <div class="container-fluid">
                                


     <div data-widget-group="group1">
	     <div class="row">
		     <div class="col-md-12">
		
			   <div class="panel panel-default">
		
				     <div class="panel-heading">
					  
					 
					 
					 <!--  filter form start -->
					 
					    <div class="col-sm-12" style="margin-bottom:20px;">
						       
						      <!-- <form action="<?php echo base_url();?>admin/manage_listing" method="post" >
                                 <h4>Filter</h4>                  
                                  
                                   <div class="form-group col-sm-3">
                                       <label for="pwd"></label>
                                          <select   id="subcategory_data" name="category" class="form-control">
									      <option value="">
										     select subcategory
										  </option>
										
										   
										  <?php
                                            if($subcategories){
										  foreach($subcategories as $cate){?>
										  <option value="<?php echo $cate['subcate_id'];?>" <?php if(isset($_POST['subcategory']) and $_POST['subcategory']== $cate['subcate_id']){?> selected <?php  }?>>
										   <?php echo $cate['subcate_name'];?>
										  </option>
											<?php } } ?>
										  
										  
										  
									   </select>
                                   </div>     
								   <div class="form-group col-sm-3">
                                       <label for="pwd"></label>
										<select class="form-control" name="select_rang"     >
										<option value="0">select range</option>
										      <?php foreach($segment as $seg) { ?>
										      <option <?php if($seg->seg_id==$list['s_id']) { echo "selected"; } ?> value="<?php echo $seg->seg_id;?>" <?php if(isset($_POST['select_rang']) and $_POST['select_rang']== $seg->seg_id){?> selected <?php  }?>><?php echo $seg->name ;?>
											  </option>
										       
										
										<?php } ?>
										</select>
                                   </div>
                                   <div  class="col-sm-3">
								   
								   </br>
								   
                                    <input  type="submit" value="filter"  name="filter_submit" class="form-control btn btn-default">
								   </div>
                                 </form> -->							    

						     </div>
						<!-- end  filter form -->
						<a href="<?php echo base_url()?>admin/add_listing" class="btn btn-default col-md-offset-10"> Add New </a>
					<h4>Manage Product</h4>
					 <?php if(isset($_SESSION['msg'])) { ?>
                        <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Success!</strong> <?PHP ECHO $_SESSION['msg'] ; ?>
                         </div>
					<div class="panel-ctrls"></div>
					 <?php unset($_SESSION['msg']); } ?>
					 <div class="givealert"></div>
				    </div>
				<div class="panel-body no-padding">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>S.no</th>
								<th>Product name </th>
								
								<th>Subcategory </th>

								<th>Image</th>
								
								<th>Status</th>
								
								<th>Add date</th>
								<th>Last Update</th>
								<!-- <th>segment</th>-->
							
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						    <?php 

						    $i =1; foreach($listings as $list){?>
							 <tr class="odd gradeX">
								<td><?php echo $i ;?></td>
								<td><?php echo $list['meta_title'] ;?></td>
								<td>
								 <?php 
								   echo $list['category_name'];
								 ?>								
								</td>
								
								   <td class="center">
								   <?php if($list['pro_thumb']==""){ ?>
									<img height="100" width="100" src="<?php echo base_url(); ?>images/social/placeholder.png"><?php } else{?>
										<img height="100" width="100" src="<?php echo base_url(); ?>images/listing/<?php echo $list['pro_thumb']; ?>"><?php } ?>
									
								   </td>
								   
								   <td class="center">
								    <?php if($list['pro_status']==1){ echo "Active";} else{ echo "Deactive" ; }?>
								   </td>
								   <!-- <td><input onclick="homepage(this,'<?php echo $list['pro_id']; ?>');" type="checkbox" name="homepage" <?php if($list['home_page']==1){ echo "checked";}  ?> class="homepage" ></td> -->
								    <!-- <td class="center">
								     <input type="text" value="<?php echo $list['sort']; ?>" onkeyup="order(this.value,'<?php echo $list['pro_id']; ?>');">
								   </td> -->
								   <td class="center">
								        <?php  echo $list['pro_dateadd'];  ?>
								   </td>
								   <td class="center">
								        <?php  echo $list['pro_update'];  ?>
								   </td>								   
								    
								   
								    <td class="center">
									
									  <a class="action-btn btn btn-info" type="button" href="<?php echo base_url(); ?>admin/view_listing/<?php echo $list['pro_id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
									  
									  &nbsp;
									 
									  <a class="action-btn btn btn-primary" type="button" href="<?php echo base_url(); ?>admin/edit_listing/<?php echo $list['pro_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
									 
									  &nbsp;
									  
									  <a class="action-btn btn btn-danger" type="button" href="<?php echo base_url(); ?>admin/delete_listing/<?php echo $list['pro_id']; ?>" onclick="return confirm('Are you sure you want to delete this Product?')" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									  &nbsp;

									  <a class="action-btn <?php if($list['pro_status']==1){ echo 'btn btn-warning'; }else{ echo 'btn btn-success'; } ?>" type="button" href="<?php echo base_url(); ?>admin/status_listing/<?php echo $list['pro_id']; ?>"><?php if($list['pro_status']==1){ echo "Deactive";} else{ echo "Active" ; }?> </a>
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
 
 <script>
 function order(val,list_id){
 
     			 $.ajax({
			url: "<?php echo base_url();?>admin/listing/manage_listing_order",
			type: "post",
			data:({val:val,list_id:list_id}),
			dataType : 'html',
			beforeSend: function(){
			},
			success: function (data) {
                  $(".x_content").html(data)
				  
				  
           
			},

			}); 
			
 }
  function homepage(val , list_id){
      var value = '';
      if($(val).is(":checked")){
	      value = 1;
	  }else{
	    value = 0;
	  }
      $.ajax({
			url: "<?php echo base_url();?>admin/listing/manage_listing_home",
			type: "post",
			data:({value:value,list_id:list_id}),
			dataType : 'html',
			beforeSend: function(){
			},
			success: function (data) {
                  
				if(data=='0'){
				   alert("Only 3 listing allow for home page");
				   $($(val)).prop('checked', false);
				}  
           
			},

			}); 	  
	  
  }
 
function select_range(pro_id,range){
 
      $.ajax({
			url: "<?php echo base_url();?>admin/listing/add_segment_to",
			type: "post",
			data:({pro_id:pro_id,range:range}),
			dataType : 'html',
			beforeSend: function(){
			},
			success: function (data) {
              
           
			},

			}); 	   
}  
  
 </script>