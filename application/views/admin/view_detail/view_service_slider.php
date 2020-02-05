 <div class="static-content-wrapper">
                    <div class="static-content">
          <ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
        <li><a href="<?php echo base_url(); ?>admin/service_slider">manage Service Slider</a></li>
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
     
       <!--  <?php print_r($team); ?>     -->
     
    <tr>
        <td>Service Name</td>
        <td>
          <?php
          $sd=$this->db->get_where('pages_detail', array('id'=>$slider['service_id']))->row();
           echo $sd->page_title; ?>
            
          </td>
        
      </tr>      
       <tr>
      
        <td>Created Date</td>
        <td><?php echo $slider['created_at']?></td>
      </tr>
       <tr>
      
        <td>Status</td>
        <td><?php if($slider['slider_status']==1){ echo "active"; }else{ echo "inactive";}?></td>
      </tr>
       <tr>
        <td>Slider image</td>
        <td>
         <?php if(!empty($slider['image'])){ ?>
          <a target="_blank" href="<?php echo base_url();?>images/service_icons/<?php echo $slider['image']; ?>" ><img height="200" width="400" src="<?php echo base_url();?>assets/images/<?php echo $slider['image']; ?>"></a>
        <?php }else{
          ?>
          <a target="_blank" href="<?php echo base_url()?>images/users.png" ><img height="200" width="400" src="<?php echo base_url()?>images/place.png"></a>
           <?php
            } ?>
        </td>
        
      </tr>
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/service_slider" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
 </div> 
<?php $this->load->view('admin/include/footer');  ?> 
</div>
           <!-- #page-content -->
               

        
     
  