
                <div class="static-content-wrapper">
                    <div class="static-content">
					<ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				<li><a href="<?php echo base_url(); ?>admin/banner">manage banner</a></li>
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
     
       <tr>
        <td>Banner title english</td>
        <td><?php echo $banner['banner_title']; ?></td>
        
      </tr>
      <tr>
        <td>Banner title arabic</td>
        <td><?php echo $banner['arabic_title']; ?></td>
        
      </tr>
      <tr>
        <td>Banner title chinese</td>
        <td><?php echo $banner['chiness_title']; ?></td>
        
      </tr>
      <tr>
        <td>Banner title russian</td>
        <td><?php echo $banner['russian_title']; ?></td>
        
      </tr>
    <!-- <tr>
        <td>Banner contact</td>
        <td><?php echo $banner['banner_contact']; ?></td>
        
      </tr>  -->
      <tr>
        <td>Banner image</td>
        <td>
         <?php if(!empty($banner['slider_image'])){ ?>
          <a target="_blank" href="<?php echo base_url();?>images/banner/<?php echo $banner['slider_image']; ?>" ><img  src="<?php echo base_url();?>images/banner/thumb/<?php echo $banner['slider_image']; ?>"></a>
        <?php }else{
  ?>
  <a target="_blank" href="<?php echo base_url()?>images/users.png" ><img  src="<?php echo base_url()?>images/users.png"></a>
   <?php
    } ?>
        </td>
        
      </tr>
	       <!--  <tr>
        <td>image mobile</td>
        <td> 
          <?php if(!empty($banner['banner_mobile'])){ ?>
          <a target="_blank" href="<?php echo base_url()?>images/banner/mobile_banner/<?php echo $banner['banner_mobile'];?>" ><img  src="<?php echo base_url()?>images/banner/mobile_banner/<?php echo $banner['banner_mobile'];?>"></a>
         <?php }else{
  ?>
  <a target="_blank" href="<?php echo base_url()?>images/users.png" ><img  src="<?php echo base_url()?>images/users.png"></a>
<?php
} ?>

        </td>
        
      </tr> -->
	       <tr>
        <td>Sort order</td>
        <td><?php echo $banner['sort_order']; ?></td>
        
      </tr> 
	     <tr>
      
        <td>Status</td>
        <td><?php if($banner['slider_status']==1){ echo "active"; }else{ echo "Inactive";}?></td>
      </tr>
	  
	   <tr>
      
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/banner" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

                   </div> 

	<?php $this->load->view('admin/include/footer');  ?> 
</div> 	   
				   <!-- #page-content -->
               

        
		 
  