<div class="bx_termAndcondition">
	<section class="bcrumb-sec wow fadeInDown">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bc-heading">
						<?php if($_SESSION['Language']== 'arabic' && $privacy->title_arabic!=""){ ?>
							<h1><?php echo ucfirst($privacy->title_arabic); ?></h1>
						<?php }elseif($_SESSION['Language']== 'russian' && $privacy->title_russian!=""){?>
							<h1><?php echo ucfirst($privacy->title_russian); ?></h1>
						<?php  }elseif($_SESSION['Language']== 'chiness' && $privacy->title_chiness!=""){?>
							<h1><?php echo ucfirst($privacy->title_chiness); ?></h1>
						<?php }else{ ?>
							<h1><?php echo ucfirst($privacy->page_title); ?></h1>
						<?php } ?>
						
					</div>				
				</div>
			</div>
		</div>
	</section>
	<section class="box_ben mani_ben wow fadeInDown">
  		<div class="container">
  			<?php if($_SESSION['Language']== 'arabic' && $privacy->desc_arabic!=""){
  				echo $privacy->desc_arabic; }
  				elseif ($_SESSION['Language']== 'russian' && $privacy->desc_russian!="") {
  					echo $privacy->desc_russian;
  				}elseif ($_SESSION['Language']== 'chiness' && $privacy->desc_chiness!="") {
  					echo $privacy->desc_chiness;
  				}else{
  					echo $privacy->page_desc;
  			}
  			?>
  			<!-- <h2>Privacy and policy</h2>

  			<h2><span>Scope and amendments</span></h2>
			<p>This policy ("Privacy Policy") sets out how we process personal information that you share with us or that we may collect when you browse the Website. Capitalized terms in this Privacy Policy have the meanings defined in the Terms of Use. This Privacy Policy applies to any use of the Website. We may amend this Privacy Policy at any time and effective immediately, with effect for the future. If we make amendments, they apply as of the date of their publication on the Website. We expect you to regularly refer to this section to make sure you are familiar with the applicable Privacy Policy.</p>

			<h2>1.Information used for statistical and similar purposes</h2>
			<p>When you use the Site, we collect certain data (including your IP address, browser type and operating system, the number of pages you visit, the duration of your visits, if you are a returning visitor or not, from where you came to the Site, and other similar information). We use this information for statistical purposes, to improve your experience on the Site, to make it easier to use, to better tailor it to your interests and needs, or to speed up your future activities and experience on the Site. We use this information anonymously and in the aggregate. </p>
			<p>If you transfer additional information to us, for example when you carry out booking queries or fill data into forms, we may evaluate such information anonymously and in the aggregate for statistical purposes, even without prior registration and even if no booking takes place. As per GDPR regulations, this data is not shared with any parties not mentioned in this privacy policy.</p>

			<h2>2. Account information and bookings</h2>
			<p>When you register an account with us, you will transfer personal information to us, such as your name, address, date of birth, phone number and e-mail address, and information relating to booked activities. By registering your account, you provide consent for us to send you messages and documents through electronic means. By registering an account with us, you may also permit us to send you our regular newsletters and updates about specials and other announcements. You can at any time unsubscribe from receiving such messages through an included link. When you book an activity, personal information will be transmitted to the relevant supplier. When you book an activity you also permit the relevant supplier to send you related information. When you pay for booked activities using a credit card, the payment will be processed by a payment solution provider we select in our sole discretion, currently PayPal (paypal.com) or third party Payment gateways.</p>
			
			<h2>3. Sharing information with third parties</h2>
			<p>We and suppliers of booked activities may be obliged to pass on or make certain information available to authorities. Some data is also transmitted to Google, as set out in section 6 and 7. In case of payments carried out through the Website, relevant information will be passed on to our external payment provider (see section 2). When you permit us to send you newsletters and updates, the required data will be hosted by an external e-mail marketing service provider. Moreover, we may pass on information to authorities, officials and other third parties if we are required to do so by law, and for legitimate business reasons.</p>

			<h2>4. Storage time</h2>
			<p>We store personal information for as long as reasonably required for its purpose. Account information is deleted when you or when we delete your account. We may store core information longer when needed by local law for tax purposes. To request full account deletion, you may contact us</p>

			<h2>5. Cookies</h2>
			<p>Like most internet service providers, we use what is known as browser cookies to simplify the use of the Website and obtain information that can help us to improve the information and services made available through the Website. Cookies are small text files that your browser stores on your device (for example your computer). We use cookies to make the Website easy to use and to better tailor the Website and our products to your interests and needs. Cookies may also be used to help speed up your future activities and experience on the Website. We also use cookies to compile anonymous, aggregated statistics that allow us to understand how people use our Website and to help us improve their structure and content. One of the cookies we use has already been set. This site does not work without cookies. By using the Website, you agree to the use of cookies for this purpose. You can decide for yourself if our Website's server is allowed to save cookies on your device or not. You can opt to change your web browser settings so that your browser does not allow cookies to be accepted or saved at any time. Alternatively, you can opt to be shown a warning message every time before you accept cookies or you can set your browser up in such a way that it only accepts cookies from certain websites. You can also delete cookies that have already been saved at any time. This can be done through the settings of your web browser, and by deleting all cookies. However, if you decline cookies on the Website, some functions on the Website may be limited or unavailable. As a result, to make it easier to use the Website, we recommend that your browser settings accept cookies on the Website.</p>

			<h2>6. Google Analytics</h2>
			<p>The Website uses Google Analytics, a web analytics service provided by Google, Inc. (“Google”). Google Analytics uses cookies (see above), to help the website analyze how users use the site. The information generated by the cookie about your use of the website will be transmitted to and stored by Google on servers in the United States. You may refuse the use of cookies (see above). You can also opt out from being tracked by Google Analytics with effect for the future by downloading and installing Google Analytics Opt-out Browser Addon for your current web browser.</p>

			<h2>7. Google Maps API</h2>
			<p>We use Google Maps on the Website through an interface provided by Google ("Google Maps API") to provide you with additional information. Through the Google Maps API, certain data can be transmitted to Google, but only in an anonymous form.</p>

			<h2>8. Other locally stored information</h2>
			<p>When you browse the Website, information may be stored on your device (locally) through the "DOM Storage" process. DOM storage is used for storing data in a web browser, similar to cookies (see below), but with enhanced capacity. Locally stored information does not permit us to identify you, but the DOM storage process records information on how you browse the Website on your computer (the pages you have viewed, date and time of viewing, etc.) that we can read during your subsequent visits. You can delete that information manually. Please consult the user help section of your web browser.</p>

			<h2>9. Data transfer through the internet</h2>
			<p>Data transmitted through an open network such as the internet or an email service can be accessed openly. We cannot guarantee the confidentiality of messages or materials sent through such open networks. When you share personal information through an open network, you should consider the fact that third parties may access this information and collect and use it for their purposes. Even where the sender and the recipient are in the same country, data may be routed through third countries including countries that do not have an adequate level of protection. Please use other means of communication where you consider this appropriate for security concerns.</p> -->

			 	
		</div>
	</section>

</div>	