

           
                <div class="static-content-wrapper">
                    <div class="static-content">
					<ol class="breadcrumb">
                                
                <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				<li><a href="<?php echo base_url(); ?>admin/page">manage page</a></li>
                <li><a href="#">View page</a></li>


                 </ol>			 

				  </div>
				  	<div class="page-heading ">
                      <h1 class="heading">View Page </h1>

                   </div>
<div  class="col-sm-12 " style="margin-top:20px;">
					     
	<table class="table table-bordered">
    <thead>

    </thead>
    <tbody>
     
       <tr> <td>Page Name</td> <td><?php echo $pages[0]['page_title']; ?></td></tr>
       
    <tr><td>Page Title English</td> <td><?php echo $pages[0]['page_title']; ?></td></tr>
    <tr><td>Page Title Arabic</td> <td><?php echo $pages[0]['title_arabic']; ?></td></tr>
    <tr><td>Page Title Russian</td> <td><?php echo $pages[0]['title_russian']; ?></td></tr>
    <tr><td>Page Title Chinese</td> <td><?php echo $pages[0]['title_chiness']; ?></td></tr>

    <tr><td>Page Heading English</td> <td><?php echo $pages[0]['page_heading']; ?></td></tr>
    <tr><td>Page Heading Arabic</td> <td><?php echo $pages[0]['heading_arabic']; ?></td></tr>
    <tr><td>Page Heading Russian</td> <td><?php echo $pages[0]['heading_russian']; ?></td></tr>
    <tr> <td>Page Heading Chinese</td> <td><?php echo $pages[0]['heading_chiness']; ?></td></tr>
     <tr><td>status</td><td><?php if($pages[0]['page_status']==1){ echo "active"; }else{ echo "inactive";}?></td></tr>
    <tr>
        <td>icon image</td>
        <td>
         <?php  if(!empty($pages[0]['service_icon'])){ ?>
          <a target="_blank" href="<?php echo base_url();?>images/service_icons/<?php echo $pages[0]['service_icon']; ?>" ><img height="100" width="200" src="<?php echo base_url();?>images/service_icons/<?php echo $pages[0]['service_icon']; ?>"></a>
        <?php }else{
  ?>
  <a target="_blank" href="<?php echo base_url()?>images/users.png" ><img height="100" width="200" src="<?php echo base_url()?>images/place.png"></a>
   <?php
    } ?>
        </td>        
      </tr>

    <tr><td>Page Description English</td> <td><?php echo $pages[0]['page_desc']; ?></td></tr>
    <tr><td>Page Description Arabic</td> <td><?php echo $pages[0]['desc_arabic']; ?></td></tr>
    <tr><td>Page Description Russian</td> <td><?php echo $pages[0]['desc_russian']; ?></td></tr>
    <tr><td>Page Description Chinese</td> <td><?php echo $pages[0]['desc_chiness']; ?></td></tr>
   
	  <tr><td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/page" >GO BACK</a></td></tr>
    
    </tbody>
  </table>
</div>
<?php $this->load->view('admin/include/footer');  ?> 
</div>

               

        
		 
  