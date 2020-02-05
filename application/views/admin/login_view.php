<?php $this->load->view('admin/include/header');?>
<div class="container" id="login-form">
	<a href="#" class="login-logo">
	
	<!--s<img src="<?php echo base_url();?>assets/img/logo-big.png"> -->
	 UAETOP10
	</a>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>Login Form</h2>
					</div>
					<div class="panel-body">
						
						<form method="post" action="<?php echo base_url();?>admin/login/login" class="form-horizontal validate" id="validate">
							<div class="form-group mb-md">
							          <p class="error"><?php if(isset($error)){ echo $error ;}?></p>
		                        <div class="col-xs-12">
		                        	<div class="input-group">							
										<span class="input-group-addon">
											<i class="ti ti-user"></i>
										</span>
										<input type="text" class="form-control" name="username" placeholder="Username" data-parsley-minlength="6" placeholder="At least 6 characters" >
									</div>
		                        </div>
							</div>

							<div class="form-group mb-md">
		                        <div class="col-xs-12">
		                        	<div class="input-group">
										<span class="input-group-addon">
											<i class="ti ti-key"></i>
										</span>
										<input type="password" class="form-control"  name="password" id="exampleInputPassword1" placeholder="Password">
									</div>
		                        </div>
							</div>

							<div class="form-group mb-n">
								<div class="col-xs-12">
									<!--<a href="<?php echo base_url();?>admin/forget_password" class="pull-left">Forgot password?</a> -->

								</div>
							</div>
						
					</div>
					<div class="panel-footer">
						<div class="clearfix">
						
							<input type="submit" href="extras-login.html" name="submit" value="Login" class="btn btn-primary pull-right">
						</div>
					</div>
					</form>
				</div>


			</div>
		</div>
</div>
<?php $this->load->view('admin/include/footer'); ?>