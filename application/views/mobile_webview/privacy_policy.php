<?php  $lang = $this->uri->segment(3);  ?>
<div class="bx_termAndcondition">
	<section class="bcrumb-sec wow fadeInDown">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bc-heading">
					<h1>
					<?php if ($lang == 'ar') { 
 						 echo $privacy->title_arabic;
					  }elseif($lang == 'ru'){
		                 echo $privacy->title_russian;
		              }elseif($lang== 'zh'){
		                 echo $privacy->title_chiness;
		              }else{ echo $privacy->page_title; }?></h1>
					</div>				
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		           <?php if ($lang == 'ar' && $privacy->desc_arabic!="") { 
 						 echo $privacy->desc_arabic;
					  }elseif($lang == 'ru' && $privacy->desc_russian!=""){
		                 echo $privacy->desc_russian;
		              }elseif($lang== 'zh' && $privacy->desc_chiness!=""){
		                 echo $privacy->desc_chiness;
		              }else{ echo $privacy->page_desc; }?>
		
	</div>