		<style>
		ul{
			list-style:none;
			
		}
		ul li {
			margin-top:10px;
			
		}
		.lang{
			padding:5px 5px 5px 5px;
			text-transform: uppercase;
			border-radius: 1px;
			 border-color 0.2s ease;
			display: block;
			width: 100%; 
			
			
			border-color: #03a9f4 !important;
			box-sizing: border-box;

			border-color: #03a9f4;
				display: block;
		}
		.active1{
			color:blue !important;
		}
		</style>
			<div class="static-content-wrapper">
			<div class="static-content">
			<ol class="breadcrumb">

			<li><a href="<?php echo base_url() ?>admin/dashboard">dashbord</a></li>

			<li><a href="#"><?php echo $page ; ?></a></li>


			</ol>
			<div class="panel panel-default" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
			<div class="page-heading">
			<h1 class="heading"><?php echo $heading;?>  </h1>

			</div>
			<div  class="tab-pane active" style="margin-top:20px;">
			<div class="col-sm-3">
			<ul>
			<?php 

			if($languages){
			$i = 0 ;
			$idd = $this->uri->segment(3);
			 if(empty($idd)){
				 $idd=20;
			 }
			foreach($languages as $lang) { ?>
			   <li>
			   <a class="lang <?php if($idd==$lang['lang_id']) { echo "active1" ; }?>" href="<?php echo base_url();?>admin/homecontent/<?php echo $lang['lang_id']?>"><?php echo $lang['lang_name']; ?></a>
			   </li>
			
			 <?php }
			}
			?>	
			</ul>
			</div>
			<div class="col-sm-8">
			<form  action="<?php echo $action;?>"method="post" id="home_content" class="form-horizontal ">

			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> Heading 
			</label>
			 <div class="col-sm-9">
				<input type="text" value="<?php if( isset($home_content[0]['heading'])) { echo $home_content[0]['heading']; } ?>" class="form-control" name="heading">
			 </div> 
			</div>
			 <div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">Category  Heading 
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" value="<?php  if(isset($home_content[0]['category_heading'])) { echo $home_content[0]['category_heading']; } ?>" name="category_heading">
			 </div> 
			</div>
			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">Category  Discription 
			</label>
			 <div class="col-sm-9">
				<textarea class="form-control" name="category_dis"><?php if(isset($home_content[0]['category_dis'])) {  echo $home_content[0]['category_dis']; } ?></textarea>
			 </div> 
			</div>
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">Feature Category  Heading 
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" value="<?php if(isset($home_content[0]['fetur_category_heading'])) { echo $home_content[0]['fetur_category_heading']; } ?>" name="fetur_category_heading">
			 </div> 
			</div>
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">Feature Category  Discription 
			</label>
			 <div class="col-sm-9">
				 <textarea class="form-control" name="feature_category_dis"><?php if(isset($home_content[0]['feature_category_dis'])) {   echo $home_content[0]['feature_category_dis']; }?></textarea>
			 </div> 
			</div>
			
				<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> Suggetion  Heading 
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" value="<?php if(isset($home_content[0]['suggetion_heading'])) {  echo $home_content[0]['suggetion_heading']; } ?>" name="suggetion_heading">
			 </div> 
			</div>
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> Suggetion  Discription 
			</label>
			 <div class="col-sm-9">
				<textarea class="form-control" name="suggetion_dis"><?php if(isset($home_content[0]['suggetion_dis'])) {  echo $home_content[0]['suggetion_dis'];} ?></textarea>
			 </div> 
			</div>
			
			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> Testimonial Title 
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" value="<?php  if(isset($home_content[0]['testi_title'])) {  echo $home_content[0]['testi_title']; } ?>" name="testi_title">
			 </div> 
			</div>
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> Blog Title 
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" value="<?php  if(isset($home_content[0]['blog_title'])) {  echo $home_content[0]['blog_title']; } ?>" name="blog_title">
			 </div> 
			</div>
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> Blog  Discription 
			</label>
			 <div class="col-sm-9">
				<textarea class="form-control" name="blog_dis"><?php if(isset($home_content[0]['blog_dis'])) { echo $home_content[0]['blog_dis']; } ?></textarea>
			 </div> 
			</div>
			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> Also Visit Title 
			</label>
			 <div class="col-sm-9">
				<input type="text"  value="<?php if(isset($home_content[0]['visit_title'])) { echo $home_content[0]['visit_title']; } ?>"  class="form-control" name="visit_title">
			 </div> 
			</div>


			 <div class="col-sm-11	">
				 <h2>Footer Content</h2>
			 </div></br> 
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">Category text
			</label>
			 <div class="col-sm-9">
				<input type="text" value="<?php if(isset($home_content[0]['category_text'])) { echo $home_content[0]['category_text']; } ?>" class="form-control" name="category_text">
			 </div> 
			</div>
			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">Information text
			</label>
			 <div class="col-sm-9">
				<input type="text"  value="<?php  if(isset($home_content[0]['info_text'])) {  echo $home_content[0]['info_text'];} ?>" class="form-control" name="info_text">
			 </div> 
			</div>
			
				
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">Newsletter Title
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" name="news_title" value="<?php  if(isset($home_content[0]['news_title'])) {  echo $home_content[0]['news_title'];} ?>" >
			 </div> 
			</div>
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> News Letter  Discription 
			</label>
			 <div class="col-sm-9">
				<textarea class="form-control" name="news_dis"><?php if(isset($home_content[0]['news_dis'])) { echo $home_content[0]['news_dis'];} ?></textarea>
			 </div> 
			</div>
			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> Copy Right Text
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" name="copy_right"  value="<?php  if(isset($home_content[0]['copy_right'])) {  echo $home_content[0]['copy_right'];} ?>">
			 </div> 
			</div>
				<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">Privacy Policy
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" name="privacy" value="<?php  if(isset($home_content[0]['privacy'])) {  echo $home_content[0]['privacy'];} ?>">
			 </div> 
			</div>
				<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">Term and condition
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" name="term" value="<?php  if(isset($home_content[0]['term'])) {  echo $home_content[0]['term'];} ?>" >
			 </div> 
			</div>
				<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">Copy Right Policy
			</label>
			 <div class="col-sm-9">
				<input type="text"  value="<?php  if(isset($home_content[0]['copy_policy'])) {  echo $home_content[0]['copy_policy'];} ?>" class="form-control" name="copy_policy">
			 </div> 
			</div>
			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">Read more
			</label>
			 <div class="col-sm-9">
				<input type="text" class="form-control" name="readmore" value="<?php  if(isset($home_content[0]['readmore'])) {  echo $home_content[0]['readmore'];} ?>">
			 </div> 
			</div>
			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">Region name
			</label>
			 <div class="col-sm-9">
				<input type="text" value="<?php  if(isset($home_content[0]['region'])) {  echo $home_content[0]['region'];} ?>" class="form-control" name="region">
			 </div> 
			</div>
			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput">Search name
			</label>
			 <div class="col-sm-9">
				<input type="text" value="<?php  if(isset($home_content[0]['search'])) {  echo $home_content[0]['search'];} ?>" class="form-control" name="search">
			 </div> 
			</div>
			
			 <div class="col-sm-11	">
				 <h2> Menu Content </h2>
			 </div>
			 </br>
			 
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> Home Title 
			</label>
			 <div class="col-sm-9">
				<input type="text" value="<?php  if(isset($home_content[0]['home'])) {  echo $home_content[0]['home'];} ?>" class="form-control" name="home">
			 </div> 
			</div>
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> about Title 
			</label>
			 <div class="col-sm-9">
				<input type="text" value="<?php  if(isset($home_content[0]['about'])) {  echo $home_content[0]['about'];} ?>" class="form-control" name="about">
			 </div> 
			</div>
			
			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> blog Title 
			</label>
			 <div class="col-sm-9">
				<input type="text" value="<?php  if(isset($home_content[0]['blog'])) {  echo $home_content[0]['blog'];} ?>" class="form-control" name="blog">
			 </div> 
			</div>
			
			
						<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> contact Title 
			</label>
			 <div class="col-sm-9">
				<input type="text" value="<?php  if(isset($home_content[0]['contact'])) {  echo $home_content[0]['contact'];} ?>" class="form-control" name="contact">
			 </div> 
			</div>
			
			
						<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> features Title 
			</label>
			 <div class="col-sm-9">
				<input type="text" value="<?php  if(isset($home_content[0]['features'])) {  echo $home_content[0]['features'];} ?>" class="form-control" name="features">
			 </div> 
			</div>
			
			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> suggestions Title 
			</label>
			 <div class="col-sm-9">
				<input type="text" value="<?php  if(isset($home_content[0]['suggestions'])) {  echo $home_content[0]['suggestions'];} ?>" class="form-control" name="suggestions">
			 </div> 
			</div>
			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> Category Title 
			</label>
			 <div class="col-sm-9">
				<input type="text" value="<?php  if(isset($home_content[0]['categories_m'])) {  echo $home_content[0]['categories_m'];} ?>" class="form-control" name="categories_m">
			 </div> 
			</div>
			
			 <div class="col-sm-11	">
				 <h2> Seo Content </h2>
			 </div>
			 </br>
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> Meta title
			</label>
			 <div class="col-sm-9">
				<textarea class="form-control" name="meta_title"><?php  if(isset($home_content[0]['meta_title'])) {  echo $home_content[0]['meta_title'];} ?></textarea>
			 </div> 
			</div>
			
			<div class="form-group">
			<label class="col-sm-3 control-label" for="focusedinput"> Meta description
			</label>
			 <div class="col-sm-9">
				<textarea class="form-control" name="meta_description"><?php  if(isset($home_content[0]['meta_description'])) {  echo $home_content[0]['meta_description'];} ?></textarea>
			 </div> 
			</div>			
			 
			<div class="col-sm-8 col-sm-offset-2">
			<input type="submit"  name="submit" value="Submit"  class="btn-primary btn">

			</div>
			</form>
			</div>
			</div>
			</div>
			</div>
			</div>	
			</div> </br></br>

			<!-- #page-content -->
		<script>
		function chageid(id){
			document.getElementById('language').value = id;
			
		}
		</script>



