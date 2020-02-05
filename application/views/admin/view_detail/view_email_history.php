<div class="static-content-wrapper">
    <div class="static-content">
          <ol class="breadcrumb">
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
                 <li><a href="<?php echo base_url(); ?>admin/email_history">Manage Email History</a></li>
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
        <td>Email Template</td>
        <td><?php 
           $template=$this->db->get_where('tbl_templates', array('template_id'=>$email_data['template_id']))->row();
        echo $template->title; ?></td>
        
      </tr>
    <tr>
        <td>Sender Email Type</td>
        <td><?php echo ucfirst($email_data['sender_type']); ?></td>
        
      </tr>
      <tr>
        <td>Subject</td>
        <td><?php echo $email_data['email_subject']; ?></td>
        
      </tr>
      <tr>
      
        <td>Date</td>
        <td><?php echo date('Y-m-d',strtotime($email_data['created_at'])); ?></td>
      </tr> 
      <tr>
      
        <td>Status</td>
        <td><?php if($email_data['status']==1){ echo "Active";} else{ echo "inactive" ; }?></td>
      </tr>
       <!--  -->
     <tr>
      
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/email_history" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

                   </div> 
 <?php $this->load->view('admin/include/footer');  ?> 
</div>
           
           <!-- #page-content -->
               


     
  