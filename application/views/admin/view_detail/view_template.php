

           
                <div class="static-content-wrapper">
                    <div class="static-content">
					<ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				<li><a href="<?php echo base_url(); ?>admin/blog">manage template</a></li>
                <li><a href="#"><?php echo $page ; ?></a></li>


                 </ol>
				 

				  </div>
				  	<div class="page-heading ">
                      <h1 class="heading"><?php echo $heading;?>  </h1>

                   </div>
<div  class="col-sm-12 " style="margin-top:20px;">
					     
	<table class="table table-bordered">
    <thead>

    </thead>
    <tbody>
     
     
       
    <tr> <td>Template Title</td> <td><?php echo $template[0]['title']; ?></td></tr>
    <tr> <td>Template Description</td> <td><?php echo $template[0]['template']; ?></td></tr>
    <tr><td>Status</td><td><?php if($template[0]['status']==1){ echo "active"; }else{ echo "inactive";}?></td></tr>
	<tr><td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/view_templates" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
                  
				   </div> </br></br>
				   
				   <!-- #page-content -->
               

        
		 
  