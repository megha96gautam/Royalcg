<div class="static-content-wrapper">
    <div class="static-content">
          <ol class="breadcrumb">
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/manage_event">manage event</a></li>
                <li><a href="#"><?php echo $page ; ?></a></li>
          </ol>
       <div class="page-heading">
           <h1 class="heading"><?php echo $heading;?>  </h1>
         </div>
      <div  class="col-sm-12" style="margin-top:20px;">               
        <table class="table table-bordered">         
          <tbody>   
             
      <tr>
        <td>Title</td>
        <td><?php echo $data_event['event_title']; ?></td>        
      </tr>
       <tr>
        <td>Title arabic</td>
        <td style="text-align: right;"><?php echo $data_event['title_arabic']; ?></td>        
      </tr>
       <tr>
        <td>Title Russian</td>
        <td><?php echo $data_event['title_russian']; ?></td>        
      </tr>
       <tr>
        <td>Title Chinese</td>
        <td><?php echo $data_event['title_chiness']; ?></td>        
      </tr>
    
      <tr>
        <td>Address</td>
        <td><?php echo $data_event['address']; ?></td>
         </tr>
       <tr>
        <td>Address Arabic</td>
        <td style="text-align: right;"><?php echo $data_event['address_arabic']; ?></td>
      </tr> 
      <tr>
        <td>Address Russian</td>
        <td><?php echo $data_event['address_russian']; ?></td>
         </tr>
       <tr>
        <td>Address Chinese</td>
        <td><?php echo $data_event['address_chiness']; ?></td>
      </tr>
      <tr>
      
        <td>Status</td>
        <td><?php if($data_event['event_status']==1){ echo "Active";} else{ echo "inactive" ; }?></td>
      </tr>
      <tr>
        <td>Description</td>
        <td><?php echo $data_event['event_description']; ?></td>
        
      </tr>
       <tr>
        <td>Description Arabic</td>
        <td style="text-align: right;"><?php echo $data_event['desc_arabic']; ?></td>
        
      </tr>
       <tr>
        <td>Description Russian</td>
        <td ><?php echo $data_event['desc_russian']; ?></td>
        
      </tr>
       <tr>
        <td>Description Chinese</td>
        <td><?php echo $data_event['desc_chiness']; ?></td>
        
      </tr>
        <tr>
      
        <td>Image</td>
        <td><img height="200" width="400" src="<?php echo base_url(); ?>images/<?php echo $data_event['event_image']; ?>" ></td>
      </tr>
    
     <tr>
      
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/manage_event" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

                   </div> 
<?php $this->load->view('admin/include/footer');  ?> 
</div>
           
           <!-- #page-content -->
               

        
     
  