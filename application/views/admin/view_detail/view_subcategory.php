
                <div class="static-content-wrapper">
                    <div class="static-content">
					<ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				<li><a href="<?php echo base_url(); ?>admin/subcategory">manage sub category</a></li>
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
        <td>Meta title</td>
        <td><?php echo $cate[0]['meta_title']; ?></td>
        
      </tr>
       <tr>
        <td>Title Arabic</td>
        <td style="text-align: right;"> <?php echo $cate[0]['title_arabic']; ?></td>
        
      </tr>
       <tr>
        
        <td>Title Russian </td>
        <td><?php echo $cate[0]['title_russian']; ?></td>
        
      </tr>
      <tr>
      <td>Title Chinese</td>
        <td><?php echo $cate[0]['title_chiness']; ?></td>
        
      </tr>
     
	  
	  <!-- 	<tr>
        <td>Meta description</td>
        <td><php echo $cate[0]['meta_discription']; ?></td>
        
      </tr> -->
        <tr>
        <td>Meta Keyword</td>
        <td><php echo $cate[0]['keyword']; ?></td>
        
      </tr>
      <tr>
      
        <td>Status</td>
        <td><?php if($cate[0]['subcate_status']==1){ echo "active"; }else{ echo "inactive";}?></td>
      </tr>
	  
	   <tr>
      
        <td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/subcategory" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
</div> 
<?php $this->load->view('admin/include/footer');  ?> 
</div>			   
				   <!-- #page-content -->
               

        
		 
  