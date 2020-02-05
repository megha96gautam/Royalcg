<?php $this->load->view('admin/include/header'); ?>
<style>
.error {
     
 
}
.panel.panel-default {
    margin-top: 100px;
}
</style>
<div class="container" id="login-form">
 
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2> Enter password</h2>
					</div>
					<div class="panel-body">
						
						<form method="post" action="<?php echo base_url(); ?>admin/hasspassword" class="form-horizontal validate" id="validate">
 

							<div class="form-group mb-md">
		                        <div class="col-xs-12">
		                        	<div class="input-group">
										<span class="input-group-addon">
											<i class="ti ti-key"></i>
										</span>
									<input type="password" name="password" class="form-control required password"  placeholder="Password">
									<div class="myerror error"><p><?php if(isset($error)){ echo $error; } ?><p>
									</div>
									</div>
		                        </div>
							</div>
					</div>
					<div class="panel-footer">
						<div class="clearfix">
						
							<input type="submit" href="extras-login.html" name="submit" value="Submit" class="btn btn-primary pull-right">
						</div>
					</div>
					</form>
				</div>


			</div>
		</div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->

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
    
 
<script src="<?php echo base_url();?>assets/js/validate.js"></script>
<script>
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $(".validate").validate({
    
        // Specify the validation rules
        rules: {
 
            password:"required",
  
           
        },
 
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
</script>