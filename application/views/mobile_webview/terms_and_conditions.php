<?php  $lang = $this->uri->segment(3);  ?>
<div class="bx_termAndcondition">
	<section class="bcrumb-sec wow fadeInDown">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bc-heading">
						<h1><?php if($lang == 'ar' && $tandc->title_arabic!=""){ ?>
							<h1><?php echo ucfirst($tandc->title_arabic); ?></h1>
						<?php }elseif($lang== 'ru' && $tandc->title_russian!=""){?>
							<h1><?php echo ucfirst($tandc->title_russian); ?></h1>
						<?php  }elseif($lang== 'zh' && $tandc->title_chiness!=""){?>
							<h1><?php echo ucfirst($tandc->title_chiness); ?></h1>
						<?php }else{ ?>
							<h1><?php echo ucfirst($tandc->page_title); ?></h1>
						<?php } ?></h1>
					</div>				
				</div>
			</div>
		</div>
	</section>
	<section class="box_ben mani_ben wow fadeInDown">
  		<div class="container">
  			<?php  if($lang == 'ar' && $tandc->desc_arabic!=""){
  				echo $tandc->desc_arabic;  				
  			}elseif ($lang == 'ru' && $tandc->desc_russian!="") {
  				echo $tandc->desc_russian;
  			}elseif ($lang == 'zh' && $tandc->desc_chiness!="") {
  				echo $tandc->desc_chiness;
  			} else{  
  				echo $tandc->page_desc;
  			}?>
  		</div>
	</section>
</div>	