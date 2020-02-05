
                <div class="static-content-wrapper">
                    <div class="static-content">
          <ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
        <li><a href="<?php echo base_url(); ?>admin/team">manage team</a></li>
                <li><a href="#"><?php echo $page ; ?></a></li>


                 </ol>
                     <div class="page-heading">
                      <h1 class="heading"><?php echo $heading;?>  </h1>

                   </div>
      <div  class="col-sm-12" style="margin-top:20px;">
               
  <table class="table table-bordered table-view">
    <thead>

    </thead>
    <tbody>
     
       <!--  <?php print_r($team); ?>     -->
      <tr>
        <td>Name</td>
        <td><?php echo $team['name']; ?></td>
        
      </tr>
       <tr>
        <td>Name arabic</td>
        <td style="text-align: right;"><?php echo $team['name_arabic']; ?></td>
        
      </tr>
       <tr>
        <td>Name russian</td>
        <td><?php echo $team['name_russian']; ?></td>
        
      </tr>
       <tr>
        <td>Name chinese</td>
        <td><?php echo $team['name_chiness']; ?></td>
        
      </tr>
   
      <tr>
        <td>Designation</td>
        <td><?php echo $team['designation']; ?></td>
        
      </tr>
       <tr>
        <td>Designation Arabic</td>
        <td style="text-align: right;"><?php echo $team['arabic_designation']; ?></td>
        
      </tr>
       <tr>
        <td>Designation Russian</td>
        <td><?php echo $team['russian_designation']; ?></td>
        
      </tr>
       <tr>
        <td>Designation Chinese</td>
        <td><?php echo $team['chiness_designation']; ?></td>
        
      </tr>
     <tr>
        <td>Description</td>
        <td><?php echo $team['description']; ?></td>
        
      </tr>
       <tr>
        <td>Description Arabic</td>
        <td style="text-align: right;"><?php echo $team['arabic_description']; ?></td>
        
      </tr>
       <tr>
        <td>Description Russian</td>
        <td><?php echo $team['russian_description']; ?></td>
        
      </tr>
       <tr>
        <td>Description Chinese</td>
        <td><?php echo $team['chiness_description']; ?></td>
        
      </tr>
      <tr>
      
        <td>Facebook Link</td>
        <td><?php echo $team['facebook']; ?></td>
      </tr>
     <tr>
      
        <td>Instagram Link</td>
        <td><?php echo $team['insta']; ?></td>
      </tr>
       <tr>
      
        <td>Gmail Link</td>
        <td><?php echo $team['gmail']; ?></td>
      </tr>
     <tr>
       <tr>
      
        <td>Created Date</td>
        <td><?php echo $team['created_date']?></td>
      </tr>
       <tr>
      
        <td>Status</td>
        <td><?php if($team['status']==1){ echo "active"; }else{ echo "inactive";}?></td>
      </tr>
       <tr>
        <td>Team image</td>
        <td>
         <?php if(!empty($team['team_image'])){ ?>
          <a target="_blank" href="<?php echo base_url();?>images/<?php echo $team['team_image']; ?>" ><img  src="<?php echo base_url();?>images/<?php echo $team['team_image']; ?>"></a>
        <?php }else{
  ?>
  <a target="_blank" href="<?php echo base_url()?>images/users.png" ><img  src="<?php echo base_url()?>images/users.png"></a>
   <?php
    } ?>
        </td>
        
      </tr>
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/team" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
 </div> 
  <?php $this->load->view('admin/include/footer'); ?>
</div> 
           
           <!-- #page-content -->
               

        
     
  