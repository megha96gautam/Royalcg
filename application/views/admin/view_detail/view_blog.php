

           
                <div class="static-content-wrapper">
                    <div class="static-content">
					<ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				<li><a href="<?php echo base_url(); ?>admin/blog">manage blog</a></li>
                <li><a href="#"><?php echo $page ; ?></a></li>


                 </ol>
				 

				  </div>
				  	<div class="page-heading ">
                      <h1 class="heading"><?php echo $heading;?>  </h1>

                   </div>
<div  class="col-sm-12 " style="margin-top:20px;">
					     
	<table class="table table-bordered">
    <thead>

    </thead>
    <tbody>
     
       <tr> <td>region</td> <td><?php

	    
	   echo $blog[0]['rea_name']; ?></td></tr>
       					       <?php if($languages){
								   $i = 0 ;
							   foreach($languages as $lang) {
								   
								 if(isset($blog[0]['blog_id'])){
									$result = $this->content_model->get_blog_by_laguage($lang['lang_id'],$blog[0]['blog_id']);   
								   } 
								   
								?>		
		 <tr><td>blog name in <?php if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name'] ;  } else {  echo $lang['lang_name']; } ?></td><td> <?php if(isset($result[0]['blog_title'])) { echo  $result[0]['blog_title'] ; }?></td></tr>
		 <tr><td>blog discription in <?php if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name'] ;  } else {  echo $lang['lang_name']; } ?></td><td> <?php if(isset($result[0]['blog_desc'])) { echo  $result[0]['blog_desc'] ; }?></td></tr>			     				
							   <?php $i++; } } ?>
	
      <tr>
        <td>image</td>
        <td><a target="_blank" href="<?php echo base_url();?>images/blog/<?php echo $blog[0]['blog_image']; ?>" ><img height="200" width="300" src="<?php echo base_url();?>images/blog/<?php echo $blog[0]['blog_image']; ?>" ></a></td>
        
      </tr>
      <tr>
      
        <td>status</td>
        <td><?php if($blog[0]['blog_status']==1){ echo "active"; }else{ echo "inactive";}?></td>
      </tr>
	  
	   <tr>
      
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/blog" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
                  
				   </div> </br></br>
				   
				   <!-- #page-content -->
               

        
		 
  