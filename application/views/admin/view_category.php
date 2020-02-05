
                <div class="static-content-wrapper">
                    <div class="static-content">
					<ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				<li><a href="<?php echo base_url(); ?>admin/category">manage category</a></li>
                <li><a href="#"><?php echo $page ; ?></a></li>


                 </ol>
                     <div class="page-heading">
                      <h1 class="heading"><?php echo $heading;?>  </h1>

                   </div>
			<div  class="col-sm-12" style="margin-top:20px;">
					     
	<table class="table table-bordered">
    <thead>

    </thead>
    <tbody>
     
       <tr> <td>region</td> <td><?php echo $cate[0]['rea_name']; ?></td></tr>
       					       <?php if($languages){
								   $i = 0 ;
							   foreach($languages as $lang) {
								   
								  if(isset($cate[0]['cate_id'])){
									$result = $this->user->get_category_by_laguage($lang['lang_id'],$cate[0]['cate_id']);   
								   }
								?>		
		 <tr><td>category name in <?php  if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name'];  } else { echo $lang['lang_name']; }?></td><td> <?php   if(isset($result[0]['cate_name'])){ echo $result[0]['cate_name']; }?></td></tr>
		 <tr><td>category discription in<?php  if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name'];  } else { echo $lang['lang_name']; }?></td><td> <?php if(isset($result[0]['cate_desc'])){ echo $result[0]['cate_desc']; }?></td></tr>			     				
							   <?php $i++; } } ?>
		
        
        
      
      <tr>
        <td>category image</td>
        <td><a target="_blank" href="<?php echo base_url();?>images/<?php echo $cate[0]['cate_image']; ?>" ><img height="200" width="300" src="<?php echo base_url();?>images/<?php echo $cate[0]['cate_image']; ?>" ></a></td>
        
      </tr>
	  
	        
      <tr>
        <td>meta title</td>
        <td><?php echo $cate[0]['meta_title']; ?></td>
        
      </tr>
	  <tr>
        <td>meta tag</td>
        <td><?php echo $cate[0]['meta_tag']; ?></td>
        
      </tr>
	  	<tr>
        <td>meta discription</td>
        <td><?php echo $cate[0]['meta_discription']; ?></td>
        
      </tr>
      <tr>
      
        <td>status</td>
        <td><?php if($cate[0]['cate_status']==1){ echo "active"; }else{ echo "inactive";}?></td>
      </tr>
	  
	   <tr>
      
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/category" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

                   </div> 
				   </div> </br></br>
				   
				   <!-- #page-content -->
               

        
		 
  