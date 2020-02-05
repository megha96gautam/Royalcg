 <footer>
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
            <li><h6 style="margin: 0;">&copy; Royal-CG</h6></li>
        </ul>
        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
      </div>
 </footer>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.10.2.min.js"></script> 		  <!-- Load jQuery -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jqueryui-1.10.3.min.js"></script> 	  <!-- Load jQueryUI -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 			<!-- Load Bootstrap -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/enquire.min.js"></script> 			<!-- Load Enquire -->

<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/velocityjs/velocity.ui.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->

<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->

<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js"></script> <!-- Mousewheel support needed for Mapael -->

<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/sparklines/jquery.sparklines.min.js"></script> 			 <!-- Sparkline -->

<script type="text/javascript" src="<?php echo base_url();?>assets/js/application.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/demo/demo.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/demo/demo-switcher.js"></script>

<!-- End loading site level scripts -->
    
    <!-- Load page level scripts-->
    
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/charts-chartistjs/chartist.min.js"></script>               <!-- Chartist -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/charts-chartistjs/chartist-plugin-tooltip.js"></script>    <!-- Chartist -->

<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/charts-chartjs/Chart.js"></script>  						<!-- Chart.js -->

<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/easypiechart/jquery.easypiechart.js"></script> 			<!-- EasyPieChart -->
<script type="text/javascript" src="<?php echo base_url();?>assets/demo/demo-index.js"></script> 		<!-- Initialize scripts for this page-->
    <!-- Load page level scripts-->
    
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/demo/demo-datatables.js"></script>

    <!-- End loading page level scripts-->
<script>
  function get_category(regionid){
	 
	   
	  $.ajax({
		url:"<?php echo base_url();?>admin/listing/get_category",
		type:"POST",
		data:({id:regionid}),
		dataType:"html",
		success: function(data) {
                 $("#category_data").html(data);
         },
		  
	  });
  }

   function get_subcategory(regionid){
	 
	   
	  $.ajax({
		url:"<?php echo base_url();?>admin/listing/get_subcategory",
		type:"POST",
		data:({id:regionid}),
		dataType:"html",
		success: function(data) {
                 $("#subcategory_data").html(data);
         },
		  
	  });
  }
  
  <?php if($this->uri->segment(2)=='category'){ ?> 
  
  	$(".keyupsave").on("change",function(){	  
	  var  key = $(this).attr("name");
	  var  val = '';
	  if(key=='mob_sort'){
	      val = $(this).val();
	  }else{
	     	  if($(this).is(":checked")){
	             val = 1;
	         }else{
	             val = 0;
	         }	  
	  }  
	  var id = $(this).attr("data-id");
	  var stuff = {key:key,val:val};
	  data =({stuff,id:id});
		$.ajax({
		url: "<?php echo base_url();?>admin/listing/mobile_order",
		type: "POST",   
		data: data,		
		success: function (data) {
		 
		 
		 } 
		});	
		
 
	   });
	   
	   $(document).on("click",'.send_notification',function(){
	       var id = $(this).attr("data-id");
	      notification(this,1,id);
	   })
	   <?php } ?>
	   function notification(that , type,id){
			$.ajax({
			url: "<?php echo base_url();?>admin/listing/send_notification",
			type: "POST",   
			data: ({id:id,type:type}),
            beforeSend: function() {
                $(that).attr("disabled", true); 
                $(that).html("sended"); 
            },		
			success: function (data) {
			 
			 
			 } 
			});		   
	   }
  </script>
  
<script src="<?php echo base_url();?>assets/js/validate.js"></script>
   
  <!-- jQuery Form Validation code -->
  <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $(".validate").validate({
    
        // Specify the validation rules
        rules: {
            username: "required",
            fullname: "required",
            agree: "required",
             email: {
                required: true,
                email:true
            },
      
            password:"required",
            old_password:"required",
			  ConfirmPassword: {
			    required: true,
               equalTo: "#password"
           }
           
        },
        
        // Specify the validation error messages
        messages: {
            username: "Please enter username",
            fullname: "Please enter fullname",
            agree: "Please accept term and condition",
          	  email: {
                required: "Please provide a email",
                email: "Please provide a valid email"
              
            },
            password: "Please provide a password",
            old_password: "Please provide a old password",
			ConfirmPassword:"password confirm must be same as password",
			ConfirmPassword: {
			required: "Please provide a confirm password",
			equalTo:"confirm password must be same as new password "
               
           }
	
			       
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
  <script>
  
  // When the browser is ready...
  $(function() {
  $.validator.addMethod('filesize', function (value, element, param) {

  	myImage.addEventListener('load', function() {
	     console.log('My width is: ', this.naturalWidth);
	     console.log('My height is: ', this.naturalHeight);
             });
    /*return this.optional(element) || (element.files[0].size <= param)*/
    }, 'File size must be less than {0}');
	
  $.validator.addMethod('width', function (value, element, param) {
	     myImage.addEventListener('load', function() {
	     console.log('My width is: ', this.naturalWidth);
	     console.log('My height is: ', this.naturalHeight);
             });
	  
	  //alert(element.files[0].width);
   // return element.files[0].width <= param
    }, 'image width must be less than {0}');
	   
	   
    // Setup form validation on the #register-form element
    $(".validate_inner").validate({
    
        // Specify the validation rules
        rules: {
			//language form // validation
            language_name: "required",
            language_code: "required",
            add_flag: "required",
            thumbimage:"required",
            
            "region_name[]":"required",
			//category form validation
			 region:"required",
			 "category_name[]":"required",
			 "discription[]":"required",
			 meta_discription:"required",
			 meta_title:"required",
			 meta_tag:{				 
			   required: true,
				remote: {							
				url: "<?php echo base_url();?>admin/uniqueTitle",
				async:false,
				dataType: "json",
				type: "post",
				data: {
				page:function()
				{
				return "<?php echo $page; ?>";
				},
				main_id:function()
				{
				return "<?php  echo $this->uri->segment(3); ?>";
				}								   
				}	 				 
				} 
			 }, 
			  url:{				 
			   required: true,
				remote: {							
				url: "<?php echo base_url();?>admin/unique_suggation",
				async:false,
				dataType: "json",
				type: "post",
				data: {
				page:function()
				{
				return "<?php echo $page; ?>";
				},
				main_id:function()
				{
				return "<?php  echo $this->uri->segment(3); ?>";
				}								   
				}	 				 
				} 
			 },
			  burl:{				 
			   required: true,
				remote: {							
				url: "<?php echo base_url();?>admin/unique_blog",
				async:false,
				dataType: "json",
				type: "post",
				data: {
				page:function()
				{
				return "<?php echo $page; ?>";
				},
				main_id:function()
				{
				return "<?php  echo $this->uri->segment(3); ?>";
				}								   
				}	 				 
				} 
			 },
			 
			 image: {required: true, accept: "jpg|jpeg|png|gif",width:300},
			 edit_image: { accept: "jpg|jpeg|png|gif"},
			
			 //listing form validation
			 email:{ 
                email:true				
			 },
			 /* number:{
				required: true,
                number:true				
			 },*/

			 "subcategory_name[]":"required",
             "listing_name[]":"required",
			/* "contact_name[]":"required",*/
			 category:"required",
			 country:"required",
			  city:"required",
			 subcategory:"required",
			 banner_title:"required",
			 banner_contact:"required",
			 
			 thumbimage: {
			  accept: "jpg|jpeg|png|gif", filesize: 1024000 
			},
			 headerimage: {accept: "jpg|jpeg|png|gif"},
			 fullimage: { accept: "jpg|jpeg|png|gif"},
			 edit_thumbimage: {accept: "jpg|jpeg|png|gif",filesize: 1024000},
			 edit_headerimage: { accept: "jpg|jpeg|png|gif"},
			 edit_fullimage: { accept: "jpg|jpeg|png|gif"},
			 banner: { required: true,accept: "jpg|jpeg|png|gif"},
			 edit_banner: { accept: "jpg|jpeg|png|gif"},
			 
			 //testimonial validation
			 "testimonial_name[]":"required",
			  tasti_image:{ required: true, accept: "jpg|jpeg|png|gif",filesize: 1024000},
			  edit_tasti_image:{accept: "jpg|jpeg|png|gif",filesize: 1024000},
			  
			  //blog validation 
			 
			 "blog_name[]":"required",
			 "sugg_name[]":"required",
			  blog_image : { required: true, accept: "jpg|jpeg|png|gif"},
			  
			  edit_blog_image : { accept: "jpg|jpeg|png|gif"}
			  
			  
		},
        
        // Specify the validation error messages
        messages: {
            language_name: "Please enter language name",
            language_code: "Please enter language  code",
			add_flag:"Please select flag image ",
			city:"Please File Your City",
			thumbimage :"Please Image Select",
			slider_image :"Please Image Select",
            "region_name[]":"Please enter region name",
			//category_form
			region:"Please select region ",
            "category_name[]":"Please enter category name",
            "discription[]":"Please  enter   description",
            meta_discription:"Please enter  meta description",
            meta_title:"Please enter  meta title",
            meta_tag:"Please enter meta tag",
			url:{
				required:"Please enter valid url",
				remote:"This is already exist",
			},
		  burl:{
				required:"Please enter valid url",
				remote:"This is already exist",
			},
            image: {required: '', accept: 'Not an image!'},
            edit_image: { accept: 'Not an image!'},
			
            email:{
				required:"Please Provide valid email"
			},
			/*number:{
				required:"Please Provide valid number"
			},*/

			"subcategory_name[]":"Please enter subcategory name",
			subcategory:"Please select valid subcategory",
			"listing_name[]":"Please Provide name",
			/*"contact_name":"Please Provide contcat name",*/
			category:"Please select valid category",
			country:"Please Enter Your country name",
			banner_title:"Please enter banner title",
			banner_contact:"Please enter banner contact",
			thumbimage:{
				required:"Please select  image",
				accept:"Please select valid image",
				filesize:"file size must be less then 100kb.."
				},
			headerimage:"Please select valid image",
			fullimage:"Please select valid image",
			
			edit_thumbimage:{
				accept:"Please select valid image",
				filesize:"file size must be less then 100kb.."
			},
			edit_headerimage:"please select valid image",
			edit_fullimage:"please select valid image",
			//listing validation end
			//banner
			banner:"Please select valid image",
			edit_banner:"Please select valid image",
			
			//testimonial messages
			"testimonial_name[]":"Please enter name",
			tasti_image:{
				accept:"Please select valid image",
				required:"Please select image",
				filesize:"file size must be less then 100kb.."
			},
			edit_tasti_image:{
				accept:"Please select valid image",
				filesize:"file size must be less then 100kb.."
			},
			
			
			//blog validation
			"blog_name[]":"Please enter name",
			"sugg_name[]":"Please enter name",
			 blog_image:{
				required:"Please select image",
				accept:"Please select valid image" 
			 },
			  edit_blog_image:{
				//required:"Please select image",
				accept:"Please select valid image" 
			 }
			 
			
			       
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });
    

  });
  
 
     $(document).on("change",".popup_setting",function(){
	    var test = confirm('Are you sure to change this setting ? ');
	 
	     if(test==true) {
	         var val = $(this).val();
			$.ajax({
			url: "<?php echo base_url();?>admin/page/set_flag_mobile_popup",
			type: "POST",   
			data: ({val:val}),
 	
			success: function (data) {
			 
			 
			 } 
			});	
         }	        
	 }) 

	 $(document).on("click",".vocher_model",function(){
 
	         var val = $(this).attr("data-id");
			 $("#myModal_voucher").modal('show');
			$.ajax({
			url: "<?php echo base_url();?>admin/home/view_single_voucher",
			type: "POST",   
			data: ({val:val}),
			success: function (data) {
			     $("#myModal_voucher .modal-body").html(data)
			       
			 } 
			});	
                  
	 })	

	 $(document).on("change",".status_change_request",function(){
 
	         var val = $(this).val();
	         var id = $(this).attr("data-id");
			 var test = confirm("Are you sure to change this status");
			 if(test==true){
				$.ajax({
				url: "<?php echo base_url();?>admin/home/chnage_status_voucher",
				type: "POST",   
				data: ({val:val,id:id}),
				success: function (data) {
					   
					    $(".view_offer_request_msg").html('<div class="alert alert-success" style="visibility:visible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong>Mail sent to user</div>');
				 } 
				});	
			}
                  
	 })
 
  
  </script>
   <?php if($this->uri->segment(2)=='bulk-notification'){ ?> 
  <script>
 var table = $('#toggleColumn-datatable').DataTable({});
  $('#select_all').on('click', function(){
    
     var rows = table.rows({ 'search': 'applied' }).nodes();
     $('input[type="checkbox"]',rows).prop('checked', this.checked);
    
   });
   $('.mycheckbox').on('click',function(){

       if($('.mycheckbox:checked').length > 0){
           $('#select_all').prop('checked',true);
       }
       else{
           $('#select_all').prop('checked',false);
       }
   }); 
   $(document).on("click",".sendnotifi",function(){
   
 
var rows = table.rows({ 'search': 'applied' }).nodes();
     var selectedItems = new Array();
     $("input:checkbox[name='inbox_id[]']:checked",rows).each(function() {
       selectedItems.push($(this).val());
     });
	 if(selectedItems.length !== 0){
     var data = selectedItems.join(',');   
				$.ajax({
				url: "<?php echo base_url();?>admin/page/send_notification",
				type: "POST",   
				data: ({ids:selectedItems,ids1:data}),
				success: function (data) {
					   
					     $(".view_offer_request_msg").html('<div class="alert alert-success" style="visibility:visible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Notification sent for selected users </div>'); 
						 $('#select_all').prop('checked',false);
				 } 
				});	 
	     }else{
			$(".view_offer_request_msg").html('<div class="alert alert-warning" style="visibility:visible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Please select check box </div>'); 		 
		 }
	 
	   })
	   
  $(function() {
  
    $(".notification_form").validate({
        rules: {
            title: "required",
            description: "required",           
        },
        messages: {
            title: "Please enter title",
            description: "Please enter description"       
        },
        
        submitHandler: function(form) {
		         form.submit();
        }
    });

  });	

$(document).on('submit',".notification_form",function(e){
    e.preventDefault();
	var formData = new FormData(this);
	$.ajax({
		url:"<?php echo base_url();?>admin/page/save_data_notification",
		type: "post",
		data:formData,
		dataType : 'json',
		contentType: false,       
		cache: false,             
		processData:false, 
		success: function(res){
			  
		  
		}	
	});



});  
  
	   
</script>
<?php } ?>