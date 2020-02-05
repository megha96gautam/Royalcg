
                <div class="static-content-wrapper">
                    <div class="static-content">
          <ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
        <li><a href="<?php echo base_url(); ?>admin/enquiry">manage enquiry</a></li>
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
        <td>Name</td>
        <td><?php echo $enquiries[0]['name']; ?></td>
        
      </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $enquiries[0]['email']; ?></td>
        
      </tr>
      <tr>
        <td>Contact</td>
        <td><?php echo $enquiries[0]['contact']; ?></td>
        
      </tr>
      <tr>
        <td>Category</td>
         <td><?php   $cate=$this->db->get_where('pages_detail', array('id'=>$enquiries[0]['category']))->row();  
                  echo $cate->page_title;
            ?></td>
        
      </tr>
       <tr>
        <td>City</td>
         <td><?php  // $cate=$this->db->get_where('pages_detail', array('id'=>$enquiries[0]['category']))->row();  
                  echo $enquiries[0]['city_id'];
            ?></td>
        
      </tr>
      <tr>
      
        <td>Message</td>
        <td><?php echo $enquiries[0]['message']; ?></td>
      </tr>
    
     <tr>
      
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/enquiry" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
</div> 
    <?php $this->load->view('admin/include/footer');  ?> 
</div>    
           
           <!-- #page-content -->
               

        
     
  