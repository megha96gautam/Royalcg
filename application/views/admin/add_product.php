
<div class="static-content-wrapper">
<div class="static-content">
<ol class="breadcrumb">

<li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>
<li><a href="<?php echo base_url(); ?>admin/manage_listing">Manage Product</a></li>
<li><a href="#"><?php echo $page ; ?></a></li>


</ol>
<div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
<div class="page-heading">
<h1 class="heading"><?php echo $heading;?>  </h1>

</div>
<div  class="tab-pane active" style="margin-top:20px;">


<form  action="<?php echo $action;?>" enctype="multipart/form-data" method="post" id="validation_product" class="form-horizontal" >

<h4 style="color:green"><?php if(isset($msg)){ echo $msg ;}
?></h4>
<h3  style="color:red; margin-left: 58px;" > <?php if(isset($error)){ echo $error; }?></h3>

<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> Select Subcategory </label>
<div class="col-sm-8">
<select name="subcategory" id="subcategory" class="form-control" required="">
        <option value=""> select subcategory </option>


<?php   $cateid ='';
        if(isset($listing[0]['pro_reaid'])){
          $regionid = $listing[0]['pro_reaid'];
          $subcateid = $listing[0]['pro_subcatid'];
        } 
          $subcategories = $this->user->subcategory_by_region(uae);
         foreach($subcategories as $cat){
?>

<option value="<?php echo $cat['subcate_id'];?>" <?php if($cat['subcate_id'] == $subcateid) { echo "selected" ;} ?> > <?php echo $cat['meta_title'];?> </option>

<?php 


} 
// end get category for edit page section
?>
</select>
</div>



</div>

<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> Product Name</label>
<div class="col-sm-8">

<input value="<?php if(isset($listing[0]['meta_title'])){ echo $listing[0]['meta_title']; } ?>" name="meta_title" type="text"  placeholder=" Product Name"   class="form-control" required="">
</div>


</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> Product Description</label>
<div class="col-sm-8">

<textarea name="meta_discription"class="form-control" placeholder="Description" required=""><?php if(isset($listing[0]['meta_discription'])){ echo $listing[0]['meta_discription']; } ?></textarea>
</div>


</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">Country</label>
<div class="col-sm-8">

<input value="<?php if(isset($listing[0]['country'])){ echo $listing[0]['country']; } ?>" name="country" type="text"  placeholder="country"   class="form-control" required="">
</div>


</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">City</label>
<div class="col-sm-8">

<input value="<?php if(isset($listing[0]['city'])){ echo $listing[0]['city']; } ?>" name="city" type="text"  placeholder="city"   class="form-control" required="">
</div>


</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> Product keyword</label>
<div class="col-sm-8">
<textarea name="meta_keyword"class="form-control" placeholder=" meta keyword" required=""><?php if(isset($listing[0]['meta_keyword'])){ echo $listing[0]['meta_keyword']; } ?></textarea>
</div>


</div>



<div class="form-group">

<?php 
//display  thumb image in edit page 
if(isset($listing[0]['pro_thumb'])) { ?>

    <label class="col-sm-2 control-label" for="focusedinput"></label>   
        <?php if($listing[0]['pro_thumb']!=""){?>
          <img height="200" width="400" src="<?php echo base_url();?>images/listing/<?php echo $listing[0]['pro_thumb']; ?>">
          <?php }else{ ?>
          <img height="200" width="400" src="<?php echo base_url(); ?>images/place.png">
          <?php } ?>
            </br></br>
    <?php } ?>
<label class="col-sm-2 control-label" for="focusedinput">slider-image</label>   
<div class="col-sm-8">

<input type="file" id="image_one" name="<?php echo $thumbimage;?>" class="file-control">
</div>
<p class="error" id="image1_error"></p>


</div>

  <div class="form-group">
     <?php 
      //display  header image in edit page 
      if(isset($listing[0]['pro_header'])) { ?>
      <label class="col-sm-2 control-label" for="focusedinput"></label>
      <?php if($listing[0]['pro_header']!=""){?>  
        <img height="200" width="400" src="<?php echo base_url();?>images/listing/<?php echo $listing[0]['pro_header']; ?>">
        <?php }else{ ?>
          <img height="200" width="400" src="<?php echo base_url(); ?>images/place.png">
          <?php } ?>
        </br></br>
     <?php } ?>
      <label class="col-sm-2 control-label" for="focusedinput">slider-image 1</label> 
      <div class="col-sm-8">

      <input type="file" id="image2" name="<?php echo $headerimage;?>" class="file-control">
      </div>
    </div>  

<div class="form-group">
<?php 
//display  full image in edit page 
if(isset($listing[0]['pro_inner'])) { ?>

  <label class="col-sm-2 control-label" for="focusedinput"></label>   
    <?php if($listing[0]['pro_inner']!=""){?>
                   <img height="200" width="400" src="<?php echo base_url();?>images/listing/<?php echo $listing[0]['pro_inner']; ?>">
                   <?php }else{ ?>
          <img height="200" width="400" src="<?php echo base_url(); ?>images/place.png">
          <?php } ?>

</br></br>
<?php } ?>
<label class="col-sm-2 control-label" for="focusedinput">slider-image 2</label> 
    <div class="col-sm-8">

    <input type="file" id="image3" name="<?php echo $fullimage;?>" class="file-control">
</div>


</div>
<div class="form-group">
     <?php 
      //display  header image in edit page 
      if(isset($listing[0]['image1'])) { ?>
      <label class="col-sm-2 control-label" for="focusedinput"></label> 
      <?php  if($listing[0]['image1']!=""){?>
        <img height="200" width="400" src="<?php echo base_url();?>images/listing/<?php echo $listing[0]['image1']; ?>">
        <?php }else{ ?>
          <img height="200" width="400" src="<?php echo base_url(); ?>images/place.png">
          <?php } ?>
        </br></br>
     <?php } ?>
      <label class="col-sm-2 control-label" for="focusedinput">slider-image 3</label> 
      <div class="col-sm-8">

      <input type="file" id="image4" name="<?php echo $imageone;?>" class="file-control">
      </div>


    </div>
    <div class="form-group">
     <?php 
      //display  header image in edit page 
      if(isset($listing[0]['image2'])) { ?>
      <label class="col-sm-2 control-label" for="focusedinput"></label>
      <?php if($listing[0]['image2']!=""){ ?> 
        <img height="200" width="400" src="<?php echo base_url();?>images/listing/<?php echo $listing[0]['image2']; ?>">
            <?php }else{?>
        <img  height="200" width="400" src="<?php  echo base_url(); ?>images/place.png">
             <?php  } ?>
        </br></br>
     <?php } ?>
      <label class="col-sm-2 control-label" for="focusedinput">slider-image 4</label> 
      <div class="col-sm-8">

      <input type="file" id="image5" name="<?php echo $imagetwo;?>" class="file-control">
      </div>


    </div>  
    <div class="form-group">
     <?php 
      //display  header image in edit page 
      if(isset($listing[0]['image3'])) { ?>
      <label class="col-sm-2 control-label" for="focusedinput"></label> 
      <?php if($listing[0]['image3']!=""){ ?> 
        <img height="200" width="400" src="<?php echo base_url();?>images/listing/<?php echo $listing[0]['image3']; ?>">
        <?php }else{?>
        <img  height="200" width="400" src="<?php  echo base_url(); ?>images/place.png">
             <?php  } ?>
        </br></br>
     <?php } ?>
      <label class="col-sm-2 control-label" for="focusedinput">slider-image 5</label> 
      <div class="col-sm-8" >

      <input type="file" id="imagethree" name="<?php echo $imagethree;?>" class="file-control">
      </div>


    </div>    

<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput">Product Pricing</label>
<div class="col-sm-8">

<input  type="text"  placeholder="Pricing" value="<?php if(isset($listing[0]['product_pricing'])) { echo $listing[0]['product_pricing']; } ?>"  name="product_pricing"   class="form-control" required="">
</div>


</div>


<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> Contact number</label>
<div class="col-sm-8">

<input  type="number" maxlength="14" minlength="7" placeholder="contact number" value="<?php if(isset($listing[0]['pro_contactno'])) { echo $listing[0]['pro_contactno']; } ?>"  name="number"   class="form-control" required="">
</div>


</div>

<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> Email</label>
<div class="col-sm-8">

<input  type="text"  placeholder="contact email" value="<?php if(isset($listing[0]['pro_conatctemail'])) { echo $listing[0]['pro_conatctemail']; } ?>"   name="email"   class="form-control" required="">
</div>


</div>

<hr/>
<b align="center">Social Url</b>
<hr/>
<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> Facebook</label>
<div class="col-sm-8">

      <input  type="text"  placeholder="facebook url " value="<?php if(isset($listing[0]['fb_url'])) { echo $listing[0]['fb_url']; } ?>"   name="fb_url"   class="form-control" id="url_vlid" required="">
       <div id="statusur" style="color: red;"></div>

</div>


</div>


<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> Twitter </label>
<div class="col-sm-8">

<input  type="text"  placeholder="Twitter" value="<?php if(isset($listing[0]['tw_url'])) { echo $listing[0]['tw_url']; } ?>"   name="tw_url"   class="form-control" required="">
</div>


</div>

      <div class="form-group">
          <label class="col-sm-2 control-label" for="focusedinput"> Linked In </label>
          <div class="col-sm-8">

                 <input  type="text"  placeholder="Linked In" value="<?php if(isset($listing[0]['ln_url'])) { echo $listing[0]['ln_url']; } ?>"  id="url_vlid1"  name="ln_url"   class="form-control" required="">
                 <div id="statusur1" style="color: red;"></div>
          </div>
      </div>


<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> Instagram In </label>
<div class="col-sm-8">

<input  type="text"  placeholder="Instagram url" value="<?php if(isset($listing[0]['insta_url'])) { echo $listing[0]['insta_url']; } ?>"   name="insta_url"   class="form-control" required="">
</div>


</div>


<div class="form-group">
<label class="col-sm-2 control-label" for="focusedinput"> Web site name </label>
<div class="col-sm-8">

<input  type="text"  placeholder="website name" value="<?php if(isset($listing[0]['webname'])) { echo $listing[0]['webname']; } ?>"   name="webname"   class="form-control" required="">
</div>


</div>


<div class="form-group">
<label class="col-sm-2 control-label" for=" ">Status</label>
<div class="col-sm-8">
<select name="status" class="form-control">
<option value="1" <?php if(isset($listing[0]['pro_status']) and $listing[0]['pro_status']==1){ ?> selected <?php } ?> >
Enable
</option>
<option value="0" <?php if(isset($listing[0]['pro_status']) and  $listing[0]['pro_status']==0){ ?> selected <?php } ?> >
Disable
</option>
</select>
</div>

</div>



  <div class="panel-footer">
<div class="row">
<div class="col-sm-8 col-sm-offset-2">
<input type="submit"  name="submit"  id="submit" value="Submit"  class="btn-primary btn">

</div>
</div>
</div>
</form>
</div>
</div>
</div>
<?php $this->load->view('admin/include/footer');  ?> 
</div> 

<!-- #page-content -->



    <!-- include summernote css/js-->
<link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

<script type="text/javascript">
  $(document).ready(function() {

        function validateURL(textval) {
          var urlregex = new RegExp( "^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
          return urlregex.test(textval);
        }
        
        $('#url_vlid').change(function(){
            var url = $("#url_vlid").val();
            if(!validateURL(url)) {
                $("#statusur").html("Enter valid facebook URL");
                $("#submit").attr("disabled", true);
            }
            else {
                    $("#statusur").hide();
                    $('#submit').removeAttr("disabled");

            }
        }); //event handler

    }); //document.ready

    $(document).ready(function() {

        function validateURL(textval) {
          var urlregex = new RegExp( "^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
          return urlregex.test(textval);
        }
        
        $('#url_vlid1').change(function(){
            var url = $("#url_vlid1").val();
            if(!validateURL(url)) {
                $("#statusur1").html("Enter valid linkdin URL");
                $("#submit").attr("disabled", true);
            }
            else {
                    $("#statusur1").hide();
                    $('#submit').removeAttr("disabled");
            }
        }); //event handler
        
    }); //document.ready

     $(document).ready(function() {

        function validateURL(textval) {
          var urlregex = new RegExp( "^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
          return urlregex.test(textval);
        }
        
        $('#url_vlid2').change(function(){
            var url = $("#url_vlid2").val();
            if(!validateURL(url)) {
                $("#statusur2").html("Enter valid instagram URL");
                $("#submit").attr("disabled", true);
            }
            else {
                    $("#statusur2").hide();
                    $('#submit').removeAttr("disabled");
            }
        }); //event handler
        
    }); //document.ready


     $(document).ready(function() {

        function validateURL(textval) {
          var urlregex = new RegExp( "^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
          return urlregex.test(textval);
        }
        
        $('#url_vlid3').change(function(){
            var url = $("#url_vlid3").val();
            if(!validateURL(url)) {
                $("#statusur3").html("Enter valid Twitter URL");
                $("#submit").attr("disabled", true);
            }
            else {
                    $("#statusur3").hide();
                    $('#submit').removeAttr("disabled");
            }
        }); //event handler
        
    }); //document.ready

        $(document).ready(function() {

        function validateURL(textval) {
          var urlregex = new RegExp( "^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
          return urlregex.test(textval);
        }
        
        $('#url_vlid4').change(function(){
            var url = $("#url_vlid4").val();
            if(!validateURL(url)) {
                $("#statusur4").html("Enter valid Gmail URL");
                $("#submit").attr("disabled", true);
            }
            else {
                    $("#statusur4").hide();
                    $('#submit').removeAttr("disabled");
            }
        }); //event handler
        


        /*validation */

         $("#validation_product").validate({
            // Specify validation rules
            ignore: [],
              debug: false,
            rules: {
            
             
            email: {
              required:true,
              emails:true,
            },
            UserPhone: {
              minlength: 14,
              maxlength: 14,
              required: true
            },
            subcategory: {
              required: true,
            },
            thumbimage: {
              required:true,
            },
            headerimage: {
              required:true,
            },
            fullimage:{
              required:true,
            },

        
         },
            messages: {
              subcategory: {
              required: "subcategory  is required.",
             },
           
          
             email: {
              required: "Email address is required.",
             },

             thumbimage:{
              required: "Front Image is required.",
             },
             headerimage:{
               required: "Image is required.",
             },
             fullimage:{
               required: "Image is required.",
             },
             UserPhone: {
              minlength: "Minimum length is 10.",
              maxlength: "Maximum length is 10.",              
              required: "Phone number is required.",

             },
 
             
            },
         
          });
    }); //document.ready




</script>


