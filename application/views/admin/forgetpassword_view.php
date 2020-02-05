<div class="container" id="forgotpassword-form">
	<a href="index.html" class="login-logo"><img src="<?php echo base_url();?>assets/img/logo-big.png"></a>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Login Form</h2>
				</div>
				<div class="panel-body">
				 <p  class="error"><?php if(isset($error)){ echo $error ;}?></p>
				 <p  class="green"><?php if(isset($suc)){ echo $suc ;}?></p>
					<form action="<?php  echo base_url();?>admin/forget_password" method="post" class="form-horizontal validate">
						<div class="form-group mb-n">
	                        <div class="col-xs-12">
	                        	<p>Enter your email to reset your password</p>
	                        	<div class="input-group">							
									<span class="input-group-addon">
										<i class="ti ti-user"></i>
									</span>
									<input type="text" name="email" class="form-control" placeholder="Email Address">
								</div>
	                        </div>
						</div>
					
				</div>
				<div class="panel-footer">
					<div class="clearfix">
						<a href="<?php echo base_url();?>admin/" class="btn btn-default pull-left">Go Back</a>
						<input type="submit" name="submit" value="Reset" class="btn btn-primary pull-right">
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>