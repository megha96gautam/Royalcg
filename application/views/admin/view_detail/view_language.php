
                <div class="static-content-wrapper">
                    <div class="static-content">
					<ol class="breadcrumb">
                                
        <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				<li><a href="<?php echo base_url(); ?>admin/manage_language">manage Language</a></li>
                <li><a href="#"><?php echo $page; ?></a></li>
        </ol>
				 				 				 
				    <div class="page-heading">
                      <h1 class="heading"><?php echo $heading;?></h1>

                   </div>							 
                    
	<div  class="col-sm-12" style="margin-top:20px;">
					     
	<table class="table table-bordered">
    <thead>

    </thead>
    <tbody>
     
       <tr>
        <td>language title</td>
        <td><?php echo $language[0]['lang_name']; ?></td>
        
      </tr>
    <tr>
        <td>language contact</td>
        <td><?php echo $language[0]['lang_code']; ?></td>
        
      </tr> 
      <tr>
        <td>image</td>
        <td>
         <?php if(!empty($language[0]['image'])){ ?>
          <a target="_blank" href="<?php echo base_url();?>images/lang/<?php echo $language[0]['image']; ?>" ><img  src="<?php echo base_url();?>images/lang/<?php echo $language[0]['image']; ?>"></a>
        <?php }else{
  ?>
  <a target="_blank" href="<?php echo base_url()?>images/users.png" ><img  src="<?php echo base_url()?>images/users.png"></a>
   <?php
    } ?>
        </td>
        
      </tr>
	   
	       <tr>
        <td>sort order</td>
        <td><?php echo $language[0]['lang_status']; ?></td>
        
      </tr> 
	     <tr>
      
        <td>status</td>
        <td><?php if($language[0]['lang_status']==1){ echo "active"; }else{ echo "inactive";}?></td>
      </tr>
	  
	   <tr>
      
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/manage_language" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

                   </div> 
				   </div> </br></br>
				   
				   <!-- #page-content -->
               

        
		 
  