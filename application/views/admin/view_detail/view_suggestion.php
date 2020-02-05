
                <div class="static-content-wrapper">
                    <div class="static-content">
					<ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				<li><a href="<?php echo base_url(); ?>admin/suggestion">manage suggestion</a></li>
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
     
       <tr> <td>region</td> <td><?php echo $sug[0]['rea_name']; ?></td></tr>
       
       					       <?php if($languages){
								   $i = 0 ;
							   foreach($languages as $lang) {
				      		    if(isset($sug[0]['sug_id'])){
									   
									   $result = $this->content_model->suggation_by_language($lang['lang_id'],$sug[0]['sug_id']);
								    } 
									
								   
								?>		
		 <tr><td>suggestion name in <?php if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name']; } else{ echo $lang['lang_name']; } ?></td><td> <?php  if(isset($result[0]['sug_title'])) { echo  $result[0]['sug_title']; } ?></td></tr>
		 <tr><td>suggestion discription in <?php if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name']; } else{ echo $lang['lang_name']; } ?></td><td> <?php if(isset($result[0]['sug_ldesc'])) { echo  $result[0]['sug_ldesc'] ; }?></td></tr>			     				
		 
							   <?php $i++; } } ?>
		
        
        
      
  
      <tr>
      
        <td>status</td>
        <td><?php if($sug[0]['sug_stauts']==1){ echo "active"; }else{ echo "inactive";}?></td>
      </tr>
	  
	   <tr>
      
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/suggestion" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

                   </div> 
				   </div> </br></br>
				   
				   <!-- #page-content -->
               

        
		 
  