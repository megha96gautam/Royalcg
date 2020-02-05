

           
                <div class="static-content-wrapper">
                    <div class="static-content">
					<ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				<li><a href="<?php echo base_url(); ?>admin/testimonial">manage testimonial</a></li>
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
     
       <tr> <td>region</td> <td><?php echo $testimonial[0]['rea_name']; ?></td></tr>
       
       					       <?php if($languages){
								   $i = 0 ;
							   foreach($languages as $lang) {
								  if(isset($testimonial[0]['testi_id'])){
									$result = $this->content_model->get_testimonial_by_laguage($lang['lang_id'],$testimonial[0]['testi_id']);   
								   }
								   
								?>		
		 <tr><td>testimonial name in <?php if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name'] ; } else{ echo $lang['lang_name'] ; }?></td><td> <?php if(isset($result[0]['testi_name'])){ echo $result[0]['testi_name']; } ?></td></tr>
		 <tr><td>testimonial discription in <?php if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name'] ; } else{ echo $lang['lang_name'] ; }?></td><td> <?php if(isset($result[0]['test_desc'])) { echo  $result[0]['test_desc']; }?></td></tr>			     				
		 
							   <?php $i++; } } ?>
		
        
        
      <tr>
      
        <td>image</td>
        <td><a>
        	<img height="200" width="300" src="<?php echo base_url() ?>images/testimonial/<?php echo $testimonial[$i]['testi_image'] ; ?>">
        </a></td>
      </tr>
      
  
      <tr>
      
        <td>status</td>
        <td><?php if($testimonial[0]['testi_status']==1){ echo "active"; }else{ echo "inactive";}?></td>
      </tr>
	  
	   <tr>
      
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/testimonial" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

                   </div> 
<?php $this->load->view('admin/include/footer');  ?> 
</div>
				   
				   <!-- #page-content -->
               

        
		 
  
		 
  