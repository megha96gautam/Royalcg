<div class="static-content-wrapper">
       <div class="static-content">
					<ol class="breadcrumb">
              <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
			      	<li><a href="<?php echo base_url(); ?>admin/manage_listing">Manage Product</a></li>
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
        <td>Subcategory</td>
        <td>

        <?php

          $data_cate= $this->db->get_where('subcategory', array('subcate_id' =>$listing[0]['pro_subcatid']))->row();
         // print_r($data_cate); die();

         echo $data_cate->meta_title; ?></td>
        <td>Pricing</td>
        <td><?php echo $listing[0]['product_pricing']; ?></td>
      </tr>
     
	  <tr>
       <tr>
        <td>Meta Title</td>
        <td><?php echo $listing[0]['meta_title']; ?></td>
        <td >Title Arabic</td>
        <td style="text-align: right;"><?php echo $listing[0]['title_arabic']; ?></td>
      </tr>
       <tr>
        <td> Title Russian</td>
        <td><?php echo $listing[0]['title_russian']; ?></td>
        <td>Title Chinese</td>
        <td><?php echo $listing[0]['title_chiness']; ?></td>
      </tr>
       <tr>
     
        <td>Country</td>
        <td><?php echo $listing[0]['country']; ?></td>
        
     <!--  </tr>
      <tr> -->
        <td>City</td>
        <td><?php echo $listing[0]['city']; ?></td>
        
      </tr>
       <tr>
        <td>Country Arabic</td>
        <td style="text-align: right;"><?php echo $listing[0]['country_arabic']; ?></td>
        
     
        <td>City Arabic</td>
        <td style="text-align: right;"><?php echo $listing[0]['city_arabic']; ?></td>
        
      </tr>
       <tr>
        <td>Country Russian</td>
        <td><?php echo $listing[0]['country_russian']; ?></td>
        
     
        <td>City Russian</td>
        <td><?php echo $listing[0]['city_russian']; ?></td>
        
      </tr>
        <tr>
        <td>Country Chinese</td>
        <td><?php echo $listing[0]['country_chiness']; ?></td>
        
     
        <td>City Chinese</td>
        <td><?php echo $listing[0]['city_chiness']; ?></td>
        
      </tr>
       <tr>
        <td>Description</td>
         <td><?php echo $listing[0]['meta_discription']; ?></td>
     
        <td> description Arabic</td>
        <td style="text-align: right;"><?php echo $listing[0]['desc_arabic']; ?></td>
        
      </tr>
      <tr>
        <td>Description Russian</td>
         <td><?php echo $listing[0]['desc_russian']; ?></td>
     
        <td> description Chinese</td>
        <td><?php echo $listing[0]['desc_chiness']; ?></td>
        
      </tr>
    <!--  <?php  if($listing[0]['pro_contactno']!=""){?> -->
      <tr>
        <td>Contact</td>
        <td>

        <?php echo $listing[0]['pro_contactno']; ?></td>
        
     <!--  </tr> -->
  <!--   <?php }?> -->
     
     <!--  <tr> -->
        <td>Facebook</td>
        <td><?php echo $listing[0]['fb_url']; ?></td>
        
      </tr>
      <tr>
        <td>Linkdin</td>
        <td><?php echo $listing[0]['ln_url']; ?></td>
        
     <!--  </tr>
      <tr> -->
        <td>Twiter</td>
        <td><?php echo $listing[0]['tw_url']; ?></td>
        
      </tr>
      <tr>
        <td>Instagram</td>
        <td><?php echo $listing[0]['insta_url']; ?></td>
     <!--    
      </tr>
      
      <tr> -->
        <td>Last Update</td>
        <td><?php echo $listing[0]['pro_update']; ?></td>
        
      </tr>
      <tr>
        <td>status</td>
        <td><?php if($listing[0]['pro_status']==1){ echo "active"; }else{ echo "inactive";}?>
      </tr>
       <tr>
        <td>image 1</td>
        <td><a target="_blank" href="<?php echo base_url();?>images/listing/<?php echo $listing[0]['pro_thumb']; ?>" >
          <?php if($listing[0]['pro_thumb']==""){?>
            <img height="200" width="400" src="<?php echo base_url();?>images/place.png" >
          <?php }else{?>
          <img height="200" width="400" src="<?php echo base_url();?>images/listing/<?php echo $listing[0]['pro_thumb']; ?>" >
          <?php } ?>
        </a></td> 
      <!-- </tr>
          <tr> -->
        <td>image 2</td>
        <td><a target="_blank" href="<?php echo base_url();?>images/listing/<?php echo $listing[0]['pro_header']; ?>" >

          <?php if($listing[0]['pro_header']==""){?>
            <img height="200" width="400" src="<?php echo base_url();?>images/place.png" >
          <?php }else{?>
            <img height="200" width="400" src="<?php echo base_url();?>images/listing/<?php echo $listing[0]['pro_header']; ?>" ></a></td>
        <?php } ?>
         </tr>
          <tr>
        <td>image 3</td>
        <td><a target="_blank" href="<?php echo base_url();?>images/listing/<?php echo $listing[0]['pro_inner']; ?>" >
           <?php if($listing[0]['pro_inner']==""){?>
            <img height="200" width="400" src="<?php echo base_url(); ?>images/place.png">
          <?php }else{?>
          <img height="200" width="400" src="<?php echo base_url();?>images/listing/<?php echo $listing[0]['pro_inner']; ?>" ></a></td>
        <?php } ?>
      <!-- </tr>
         <tr> -->
        <td>image 4</td>
        <td><a target="_blank" href="<?php echo base_url();?>images/listing/<?php echo $listing[0]['image1']; ?>" >
           <?php if($listing[0]['image1']==""){?>
            <img height="200" width="400" src="<?php echo base_url(); ?>images/place.png">
          <?php }else{?>
          <img height="200" width="400" src="<?php echo base_url();?>images/listing/<?php echo $listing[0]['image1']; ?>" ></a></td>
        <?php } ?>
      </tr>  
       <tr>
        <td>image 5</td>
        <td><a target="_blank" href="<?php echo base_url();?>images/listing/<?php echo $listing[0]['image2']; ?>" >
           <?php if($listing[0]['image2']==""){?>
            <img height="200" width="400" src="<?php echo base_url(); ?>images/place.png">
          <?php }else{?>
          <img height="200" width="400" src="<?php echo base_url();?>images/listing/<?php echo $listing[0]['image2']; ?>" ></a></td>
        <?php } ?>
      <!-- </tr>  
       <tr> -->
        <td>image 6</td>
        <td><a target="_blank" href="<?php echo base_url();?>images/listing/<?php echo $listing[0]['image3']; ?>" >
           <?php if($listing[0]['image3']==""){?>
            <img height="200" width="400" src="<?php echo base_url(); ?>images/place.png">
          <?php }else{?>
          <img height="200" width="400" src="<?php echo base_url();?>images/listing/<?php echo $listing[0]['image3']; ?>" ></a></td>
        <?php } ?>
      </tr>  
     
	  
	   <tr>
      
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/manage_listing" >GO BACK</a></td>
        <td></td>

      </tr>
    </tbody>
  </table>
</div>
</div> 
<?php $this->load->view('admin/include/footer');  ?> 
</div>

				   
				   <!-- #page-content -->
               

        
		 
  