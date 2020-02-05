<div class="static-content-wrapper">
   <div class="static-content">
			<ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
				<li><a href="<?php echo base_url(); ?>admin/manage_cities">manage City</a></li>
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
     
     
       
    <tr> <td>City Name english</td> <td><?php echo $city_data['city_name']; ?></td></tr>
    <tr> <td>City Name arabic</td> <td  style="text-align:right"><?php echo $city_data['city_arabic']; ?></td></tr>
    <tr> <td>City Name russian</td> <td><?php echo $city_data['city_russian']; ?></td></tr>
    <tr> <td>City Name chinese</td> <td><?php echo $city_data['city_chiness']; ?></td></tr>
    <tr> <td>Total Hotel</td> <td><?php echo $city_data['total_hotels']; ?></td></tr>
    <tr> <td>Total car</td> <td><?php echo $city_data['to_price']; ?></td></tr>
    <tr> <td>City Url</td> <td><?php echo $city_data['city_link']; ?></td></tr>
    <tr><td>Status</td><td><?php if($city_data['city_status']==1){ echo "active"; }else{ echo "inactive";}?></td></tr>
     <tr>
       <td>City icon</td>
        <td>
         <?php if(!empty($city_data['city_icon'])){ ?>
          <a target="_blank" href="<?php echo base_url();?>images/city_icons/<?php echo $city_data['city_icon']; ?>" ><img width="400" height="200"  src="<?php echo base_url();?>images/city_icons/<?php echo $city_data['city_icon']; ?>"></a>
        <?php }else{
            ?>
          <a target="_blank" href="<?php echo base_url()?>images/users.png" ><img  src="<?php echo base_url()?>images/users.png"></a>
           <?php   } ?>
        </td>
        </tr>
          <tr>
        <td>City image</td>
        <td>
         <?php if(!empty($city_data['city_image'])){ ?>
          <a target="_blank" href="<?php echo base_url();?>images/<?php echo $city_data['city_image']; ?>" ><img width="400" height="200"  src="<?php echo base_url();?>images/<?php echo $city_data['city_image']; ?>"></a>
        <?php }else{
            ?>
          <a target="_blank" href="<?php echo base_url()?>images/users.png" ><img  src="<?php echo base_url()?>images/users.png"></a>
           <?php   } ?>
        </td>
        
      </tr>
	<tr><td><a class="btn-primary btn" href="<?php echo base_url(); ?>admin/manage_cities" >GO BACK</a></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
<?php $this->load->view('admin/include/footer');  ?> 
</div>
				   
				   <!-- #page-content -->
               

        
		 
  