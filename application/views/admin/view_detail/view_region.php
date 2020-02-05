
                <div class="static-content-wrapper">
                    <div class="static-content">
					<ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				<li><a href="<?php echo base_url(); ?>admin/manage_region">manage region</a></li>
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
     
       
       					       <?php if($languages){
								   $i = 0 ;
							   foreach($languages as $lang) {
								   
								  if(isset($id) and $id !=''){
									$result = $this->user->get_region_by_laguage($lang['lang_id'],$id);   
								   }
                                
								?>		
		 <tr><td>region name in <?php if(isset($result[0]['lang_name'])) { echo $result[0]['lang_name']; } else { echo $lang['lang_name']; }?></td><td> <?php if(isset($result[0]['rea_name'])) { echo $result[0]['rea_name']; }?></td></tr>
		 
							   <?php $i++; } } ?>
		

      <tr>
      
        <td>status</td>
        <td><?php if($regions[0]['rea_status']==1){ echo "active"; }else{ echo "inactive";}?></td>
      </tr>
	  
	   <tr>
      
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/manage_region" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

                   </div> 
				   </div> </br></br>