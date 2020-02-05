
                <div class="static-content-wrapper">
                    <div class="static-content">
					<ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				<li><a href="<?php echo base_url(); ?>admin/category">manage category</a></li>
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
        <td>Category Name</td>
        <td><?php echo $cate[0]['meta_title']; ?></td>
        
      </tr>
	  <tr>
        <td>Category Name Arabic</td>
        <td style="text-align: right;"><?php echo $cate[0]['title_arabic']; ?></td>
        
      </tr> 
	  	<tr>
        <td>Category Name Russian</td>
        <td><?php echo $cate[0]['title_russian']; ?></td>
        
      </tr>
        <tr>
        <td>Category Name chinese</td>
        <td><?php echo $cate[0]['title_chiness']; ?></td>
        
      </tr>
 <tr>
        <td>Category image</td>
        <td><a target="_blank" href="<?php echo base_url();?>images/<?php echo $cate[0]['cate_image']; ?>" ><img height="200" width="300" src="<?php echo base_url();?>images/<?php echo $cate[0]['cate_image']; ?>" ></a></td>
        
      </tr>
      <tr>
      
        <td>Status</td>
        <td><?php if($cate[0]['cate_status']==1){ echo "active"; }else{ echo "inactive";}?></td>
      </tr>
	  
	   <tr>
      
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/category" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
 </div> 
<?php $this->load->view('admin/include/footer');  ?> 
</div>
				   
				   <!-- #page-content -->
               

        
		 
  