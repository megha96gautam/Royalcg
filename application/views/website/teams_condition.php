<div class="bx_termAndcondition">
	<section class="bcrumb-sec wow fadeInDown">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bc-heading">
						<?php if($_SESSION['Language']== 'arabic' && $tandc->title_arabic!=""){ ?>
							<h1><?php echo ucfirst($tandc->title_arabic); ?></h1>
						<?php }elseif($_SESSION['Language']== 'russian' && $tandc->title_russian!=""){?>
							<h1><?php echo ucfirst($tandc->title_russian); ?></h1>
						<?php  }elseif($_SESSION['Language']== 'chiness' && $tandc->title_chiness!=""){?>
							<h1><?php echo ucfirst($tandc->title_chiness); ?></h1>
						<?php }else{ ?>
							<h1><?php echo ucfirst($tandc->page_title); ?></h1>
						<?php } ?>
						
					
					</div>				
				</div>
			</div>
		</div>
	</section>
	<section class="box_ben mani_ben wow fadeInDown">
  		<div class="container">
  			<?php if($_SESSION['Language']== 'arabic' && $tandc->desc_arabic!=""){
  				echo $tandc->desc_arabic; }
  				elseif ($_SESSION['Language']== 'russian' && $tandc->desc_russian!="") {
  					echo $tandc->desc_russian;
  				}elseif ($_SESSION['Language']== 'chiness' && $tandc->desc_chiness!="") {
  					echo $tandc->desc_chiness;
  				}else{
  					echo $tandc->page_desc;
  			}
  			?>
  		
  			<!-- <h2>Terms Of Use</h2>
  			
  			<h2>About Royal Concierge</h2>
			<p>Royal Concierge including its software and content – text, images, video, services and any other information – contained in or presented on the website is owned by Mr. Hammad Abu Dhabi, United Arab Emirates, P.O. BOX 39999 In case of queries, you can contact us. </p>

			<p>Bookings in person or through the Website are subject to these Terms of Use, our Privacy Policy, and/or the specific Terms and Conditions applied by the Provider (see Terms and Conditions link on each booking page). </p>

			<p>Upon registration with royalcg.com  (opening of an account), you agree to these Terms of Use, the Privacy Policy of royalcg.com  and Provider terms and conditions, as the contents of your legal relationship with royalcg.com  and any Providers of services or goods present on the Website. Any further use of the Website or any part of it means you have read and you understand the Terms of the Use and the Privacy Policy, plus any specific Provider Terms and Conditions and agree to be bound by them. </p>

			<p>royalcg.com  provides you with this Website to inform you of the experiences available within the United Arab Emirates, entertain you with video that illustrates the things you may wish to see and do; and also so that you can get in direct contact with the service provider of your choice and make a booking. The contract relating to the service booked is directly between you and the Provider of the service. royalcg.com  is not a contractual partner for the booked service. Royal Concierge acts solely as the mediator between you and the Provider of the service.</p>

			<h2>Opening of a royalcg.com  account</h2>
			<p>Prior to booking a service on royalcg.com , you need to open a user account and register. When you register, you will enter personal information that will, as far as necessary, be forwarded to the Provider during the course of the booking process. The registration of more than one user account for the same natural or legal person is not allowed. The user account is not transferable. As a User you are required to provide complete and accurate information and keep it up to date as royalcg.com  is not liable if a booked service cannot be carried out or other damages occur, because of outdated or incomplete information.</p>


			<h2>No binding offer</h2>
			<p>The information on this Website is for general informational purposes only. Information on royalcg.com  does not constitute an offer binding to us. Binding agreements with Providers of activities available on the Website require a booking request through the platform and the Provider's acceptance of the booking request.</p>

		
			<h2>No warranty</h2>
			<p>royalcg.com  makes every effort to ensure that the information in or through the Website is accurate, however we do not provide any warranties, express or implied, in relation to its correctness, completeness, validity, reliability, suitability for any purpose or otherwise (including for any information provided by third parties).For each booking, the currently effective Terms and Conditions as stipulated for that experience/activity are applicable. </p>


			<p>Due to the nature of the Website, we may change, add or remove information and amend its structure and functions at any time at our sole discretion, without specifically informing Users, and without removing outdated information or characterizing it as such. We may also block Users from accessing the Website or parts of it, or require certain conditions to be fulfilled for such access. We do not provide any warranties, express or implied, in relation to the availability of the Website or its functions, that the Website is free from defects, or that the Website and the infrastructure on which it runs is free from viruses and other harmful software. Moreover, we do not guarantee that information available on the Website has not been altered through technical defects or by unauthorized third parties.</p>

			<h2>Online booking procedure</h2>
			<p>If you book a certain service, all booking and payment processes, amendment or cancellation of the booking need to be conducted using the specific forms on royalcg.com , to which you receive links in the e-mails royalcg.com  sends you upon completion of the booking process. Otherwise there may be difficulties in the proper completion or termination of the contract. In this case, royalcg.com  is not liable. For assistance, you can call +9714 4243640. </p>
			<p>When booking a service using royalcg.com  you are bound to your request (offer) for two working days (excluding Friday and Saturday that are non-working days in the United Arab Emirates where royalcg.com  is based). For calculation of time, the time zone of the United Arab Emirates (GST – Gulf Standard Time) applies.</p>

			<h2>Payment Information</h2>
			<p>In order to use the Payment Services offered on royalcg.com , the User must provide account information for a valid credit card through the royalcg.com  website’s booking process. </p>
			<p>All credit/debit card details and personally identifiable information will NOT be stored, sold, shared, rented or leased to any third parties. </p>
			<p>The User may make payments through royalcg.com  in the currencies of United States Dollars (US$) or United Arab Emirates Dirhams (AED). If the User selects to pay by credit card then the details on the customer’s ID (cardholder’s ID) should exactly match that of the credit card used to make the purchase. </p>

			
			<p>Following a payment transaction, royalcg.com  will block the allocated credit card for up to two working days while the booking request is confirmed with the Provider. If successful, the card will then be charged. Should the Provider not be able to fulfill the booking request, the blocked amount will be released. Please note that the time taken to unblock the amount depends on the policies and procedures of your card issuer, however, royalcg.com  releases the amount in all cases within two working days of the transaction if it is not confirmed with the Provider. </p>

			
			<p>As a courtesy, we will email a receipt to the email address associated with your Account upon completion of a transaction using the Payment Services. Please note that Payments will be recorded to Royal Cg LLC (the parent company of royalcg.com ) on bank notifications and credit card statements. You may print and save copies of these receipts. The booking confirmation will follow as soon as the request has been confirmed from the Provider.</p>

			<h2>Cancellation policy</h2>
			<p>If the User cancels the activity, the cancellation policy mentioned on the booking confirmation and/or voucher is authoritative. The User is advised to carefully read the cancellation policy mentioned in the booking terms and conditions on the website for each individual experience prior to booking. </p>


			
			<p>If not stipulated otherwise on the booking confirmation and/or voucher, the following cancellation policy applies:</p>
			<p>• No refunds will be made after the scheduled experience has commenced.</p>
			
			<p>• Unless stated otherwise, cancellations made 72 hours prior to the scheduled booking date will be refunded in full. No refunds will be made for cancellations made less than 72 hours prior to the scheduled booking date. No refunds will be made to no-shows after the scheduled experience has commenced.</p>
			<p>• Amends to the date and time of a scheduled booking are subject to the partner’s availability. Unless stated otherwise, the User may amend the date and time of the booking at no charge up to 72 hours prior to the scheduled booking date and subject to availability.</p>

			<p>• To amend or cancel a booked service, it is mandatory to use the relevant form on the royalcg.com  website under User Profile – Booking History.</p>

			<p>• Refunds will be made in full in instances where the Provider cannot fulfill the booking request. Should the requested date and time not be available, an alternative date and time will be suggested to the User. Should the User decide to cancel the booking due to non-availability of the preferred date and time, a full refund will be made.</p>

			<p>• The refund will be made within 20 working days by crediting the credit card used for booking. If credit card payments before the use of the booked service are not honoured or revoked, this will be considered as a booking cancellation and cancellation fees will apply.</p>
			<p>• Bespoke bookings and curated packages created upon User request are exempted from the Cancellation Policy and any / all components of bespoke bookings are considered non-cancellable and non-refundable.</p>

			
			<h2>Limitation of liability</h2>
			<p>We exclude our liability, and that of our agents and independent contractors, and our and their employees, officers and agents, for damages relating to your access to (or inability to access) the Website, or to any errors or omissions, or the results obtained from the use, of the Website, whatever the legal basis of such liability would be, except liability for damages caused willfully or through gross negligence, and only to the extent permitted by applicable law.</p>

			<h2>Royal Concierge partner services</h2>
			<p>The Provider offering the requested service, will answer your request within the given period of time specified within the Terms and Conditions for that particular service. Upon the acceptance of the request, the contract between you and the Provider becomes effective. The charges for the booked service will be deducted from your credit card or bank account. If the Provider declines the request, the contract between you and the Provider of the service does not become effective. You will be notified for the acceptance or non-acceptance of your request via e-mail.The Provider provides the agreed services under his own behalf and on his own account. The Provider may set eligibility requirements for his products. These you will find in the product description. You are self-responsible to fulfill these requirements. The Provider is entitled to disapprove or exclude you from a certain service, in case that you do not fulfill the requirements. In this case, there will be no refund. The Provider of the service may need to conduct booking confirmations or advise you of any changes to schedules or operations. Thus, you should always keep the information in your user account up to date and check the e-mail in the given in your user account for new messages.</p>
			
			<h2>Transportation</h2>
			<p>The Provider will be at the specified location at the time requested when making your online booking. Please note that the driver will wait for a maximum of fifteen minutes before departure if you cannot be reached. Should you wish for the Provider to wait longer than this, we will need to be advised (please refer to your booking confirmation) and additional charges may be levied directly by the Provider depending on the waiting time. </p>
			<p>Transportation is provided on a point-to-point basis and additional charges may be levied directly by the Provider in case of requested route changes or stop-offs by passengers on the journey. A maximum of four passengers will be permitted in any single vehicle, although multiple vehicles may be booked if required. </p>

			
			<h2>Reviews</h2>
			<p>Upon completion of an Experience, you have the opportunity to review the booked service using the royalcg.com  review system. royalcg.com  reviews aim to create a meaningful and accurate profile of the performance, reliability and trustworthiness of the Provider. The corresponding information will be sent to you via e-mail after completion of the service.</p>

			<h2>True and accurate assessment</h2>
			<p>You are obliged to make only factual and truthful statements. Inaccurate, irrelevant, insulting comments etc. are to be omitted. royalcg.com explicitly reserves the right not to publish reviews without stating any reason. All reviews are subject to moderation before being published on royalcg.com </p>

			<h2>Third party content, links to other websites</h2>
			<p>We do not assume any responsibility for third party content (including any experiences/activities available for booking requests, and information relating to such experiences/activities) that may be available through the Website, and for content linked to the Website or which are linked to from it or referred to. We do not recommend or endorse such content, and will not have any liability relating to it. Where we link to third party websites, you use such websites at your own risk. We recommend reading the policies of these websites and review how these websites may process personally identifiable data relating to you. royalcg.com  is and remains protected by copyright and/or any other intellectual property rights (including protection granted through unfair competition law). You acquire no rights in the Website, and in any names, trade names, and distinctive signs of any nature (including trademarks) published on the Website. You may access and view the Website, but not incorporate it into other websites, and not copy, present, license, publish, download, upload, send or make it perceptible in any other way without our prior written consent.</p>


			<h2>Amendments to the Terms of Use</h2>
			<p>We may amend these Terms of Use at any time, as well as the Payment Gateway Provider/Bank. Such modifications will apply with immediate effect. If we make amendments, they apply as of the date of their publication on the Website. We expect you to regularly refer to this section to make sure you are familiar with the applicable Terms of Use. Any further use of the Website following such amendments means you consent to the amendment.</p>

			<h2>Applicable law and jurisdiction</h2>
			<p>These Terms of Use and any disputes arising out of or in connection with it are subject to the laws of United Arab Emirates.</p>

				 -->
		</div>
	</section>
	
</div>	