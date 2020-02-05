<div class="static-content-wrapper">
    <div class="static-content">
          <ol class="breadcrumb">
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/destinations">manage Destination</a></li>
                <li><a href="#"><?php echo $page ; ?></a></li>
          </ol>
       <div class="page-heading">
           <h1 class="heading"><?php echo $heading;?>  </h1>
         </div>
      <div  class="col-sm-12" style="margin-top:20px;">               
        <table class="table table-bordered">         
          <tbody>   
             
      <tr>
 <!-- <?php var_dump($designation); ?>  -->
        <td>Destination name</td>
        <td><?php echo $designation['destinations_name']; ?></td>
        
      </tr>
    <tr>
        <td>Url</td>
        <td><?php echo $designation['destinations_url']; ?></td>
        
      </tr>
      <tr>
        <td>Description</td>
        <td><?php echo $designation['description']; ?></td>
        
      </tr>
      <tr>
      
        <td>Date</td>
        <td><?php echo $designation['created']; ?></td>
      </tr>
      <tr>
      
        <td>Status</td>
        <td><?php if($designation['destinations_status']==1){ echo "Active";} else{ echo "inactive" ; }?></td>
      </tr>
        <tr>
      
        <td>Image</td>
        <td><img height="200" width="400" src="<?php echo base_url(); ?>images/<?php echo $designation['destinations_image']; ?>" ></td>
      </tr>
    
     <tr>
      
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/destinations" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

                   </div> 
<?php $this->load->view('admin/include/footer');  ?> 
</div>
           
           <!-- #page-content -->
               

        
     
  