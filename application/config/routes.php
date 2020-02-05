<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['login'] = 'Auth';
$route['oauth2callback']='auth/oauth2callback';
/*web api start*/
$route['webapi/get_banner_list'] = 'Webapi/get_banner_list';
$route['webapi/car_subcategory_list']= 'Webapi/car_subcategory_list';
$route['webapi/get_product_list']= 'Webapi/get_product_list';
$route['webapi/recommanded_city_list']= 'Webapi/get_recommanded_city_list';
$route['webapi/destination_list']= 'Webapi/get_destination_list';
$route['webapi/subcategory_product_list']= 'Webapi/subcategory_product_list';
$route['webapi/get_cities']              = 'Webapi/get_cities';
$route['webapi/get_services']            = 'Webapi/get_services';
$route['webapi/get_product_detail']      = 'Webapi/get_product_detail';
$route['webapi/language_list']          =  'webapi/language_list';
$route['webapi/service_details']         = 'webapi/service_details';
$route['webapi/get_city_detail']         = 'webapi/get_city_detail';
$route['webapi/product_like']            = 'webapi/product_like';
$route['webapi/product_images']          = 'webapi/product_images';
$route['webapi/product_feedback']        = 'webapi/product_feedback';
$route['webapi/product_booknow']         = 'webapi/product_booknow';
$route['webapi/product_rating']          = 'webapi/product_rating';
$route['webapi/get_deals']            	 = 'webapi/get_deals';
$route['webapi/get_event']             = 'webapi/get_event';
$route['webapi/get_contact']             = 'webapi/get_contact';
$route['webapi/to_contact']            = 'webapi/to_contact';
$route['webapi/subscribtion']            = 'webapi/subscribtion';
$route['webapi/car_modal']            = 'webapi/car_modal';
$route['webapi/hotel_modal']            ='webapi/hotel_modal';
$route['webapi/service_details/(:any)/(:any)'] ='webapi/service_web/$1/$2';
$route['webapi/About_us/(:any)']                ='webapi/aboutus_webview/$1';
$route['webapi/privacypolicy/(:any)']         ='webapi/privacyAndpolicy/$1';
$route['webapi/Termscondition/(:any)']     ='webapi/TermsOrcondition/$1';
$route['webapi/enquiry_mobile']     = 'webapi/enquiry_mobile';
$route['webapi/send_email']   = 'webapi/send_email';

/*erbapi end*/
$route['webservices/allCategory']      = 'Webservices/allCategory';
$route['webservices/categoryDetails']  = 'Webservices/categoryDetails';
$route['webservices']                  = 'Webservices';
$route['webservices/categoryListing']  = 'Webservices/categoryListing';
$route['webservices/offerListings']    = 'Webservices/offerListings';
$route['webservices/privacy_policy']   = 'Webservices/privacy_policy';
$route['webservices/about_us']         = 'Webservices/about_us';
$route['webservices/terms_condition']  = 'Webservices/terms_condition';
$route['webservices/copyrights']       = 'Webservices/copyrights';
$route['webservices/contact_us']       = 'Webservices/contact_us';
$route['webservices/get_post']         = 'Webservices/get_post';
$route['webservices/add_like']          = 'Webservices/add_like';
$route['webservices/get_post_details']       = 'Webservices/get_post_details';
$route['webservices/homeContent']       = 'Webservices/homeContent';
$route['webservices/homeContent1']       = 'Webservices/homeContent1';
$route['webservices/mobile_pages']       = 'Webservices/privacy_policy_new';
$route['webservices/listing_suggetion']       = 'Webservices/listing_suggetion';
$route['webservices/search_suggetion']       = 'Webservices/search_suggetion';
$route['webservices/buisness_detail']       = 'Webservices/single_listing';
$route['webservices/mobile_suggestion']       = 'Webservices/mobile_suggestion';
$route['webservices/update_view']       = 'Webservices/update_view';
$route['webservices/add_info']       = 'Webservices/add_info';
$route['webservices/device_registration']       = 'Webservices/device_registration';
$route['webservices/device_registration1']       = 'Webservices/device_registration1';
$route['webservices/send_notification']       = 'Webservices/send_notification';
$route['webservices/get_popup_setting']       = 'Webservices/get_popup_setting';
$route['webservices/offer_voucher']       = 'Webservices/offer_voucher';
$route['webservices/voucher_request']       = 'Webservices/voucher_request';
$route['webservices/offerListings_dev']       = 'Webservices/offerListings_dev';
$route['webservices/offer_voucher_dev']       = 'Webservices/offer_voucher_dev';
$route['webservices/offer_voucher_used']       = 'Webservices/offer_voucher_used';
$route['Category_item_Share']       = 'Webservices/category_item_Share';
$route['webservices/get_all_notification'] = 'Webservices/get_all_notification';
$route['webservices/add_views']       = 'Webservices/add_views';
$route['Category_item_ShareiOS']       = 'Webservices/category_item_share_ios';
$route['uae']  = 'welcome/uae';
$route['abudhabi']  = 'welcome/abudhabi';
$route['category/events/branddubai']  = 'home/events_branddubai';
$route['dubai']  = 'welcome/dubai';
$route['listing_suggetion_form']  = 'home/listing_form1';
$route['ios-android']  = 'home/ios_android';
$route['about-us']  = 'home/aboutUS';
$route['coming_soon']  = 'home/coming_soon';
$route['contact']  = 'home/contact';
$route['mailsend']  = 'home/mailsend';
$route['member-application']  = 'home/member_application';
$route['test']  = 'test/index';
$route['member_form']  = 'home/member_form';
//enquiry section
$route['enquiry']  = 'welcome/enquiry';
$route['currencyConverter']  = 'welcome/currencyConverter';
$route['weather']  = 'welcome/weather';
$route['switchLang/(:any)']  = 'welcome/switchLang/$1';
$route['currency/(:any)']  = 'welcome/currency/$1';
$route['add_jet_luxury']  = 'welcome/add_jet_luxury';
$route['add_medical']  = 'welcome/add_medical';
$route['add_like']  = 'welcome/add_like';
$route['Subscribe']  = 'welcome/Subscribe';
$route['events/(:any)']  = 'welcome/city_events/$1';
$route['ajax_get_events'] = 'welcome/ajax_get_events';
$route['details/(:any)']  = 'welcome/details_page/$1';
$route['check_email_avalibility']='welcome/check_email_avalibility';
$route['contact']  = 'welcome/contact';
$route['about-us']  = 'welcome/about_us';
$route['terms_and_condition']  = 'welcome/terms_and_condition';
$route['privacy_policy'] = 'welcome/privacy_policy';
$route['slider']  = 'welcome/slider';
$route['email_template']  = 'welcome/email_template';
$route['email_admin_temp']  = 'welcome/email_admin_temp';
$route['product_details']= 'welcome/product_details';
$route['product_list/(:any)']= 'welcome/product_list/$1';
$route['ajaxsub']='welcome/ajax_get_subcategory';
$route['ajaxcarsproducts']='welcome/ajax_carproduct';
$route['add_contact']='welcome/add_contactus';
$route['carproduct/(:any)']  = 'welcome/car_product_view/$1';
$route['test']='welcome/test';
$route['feedback']='welcome/feedback';
//for catecory single page 
 $route['category/(:any)']  = 'home/single_category/$1';
 $route['search']='welcome/searchdata';
 $route['datasearching']='welcome/datasearching';
//page url 
$route['content/(:any)']  = 'home/display_page/$1';
$route['suggestion/(:any)']  = 'home/display_suggestion/$1';
$route['blogs/(:any)']  = 'home/display_blog/$1';
$route['suggestion']  = 'home/give_suggetion';
//fb  - routing 
$route['fb-campaign']  = 'home/fb_campaign';
$route['fb-tmc']  = 'home/fb_tmc';
$route['offer']  = 'home/fb_campaign_offer';
//
$route['ajaxoffer']  = 'home/ajaxoffer';
$route['add_answer']  = 'campaign/add_answer';
$route['listing_hitcount']  = 'campaign/listing_hitcount';
$route['listings/(:any)']  = 'home/listing_uae/$1';
$route['listings/(:any)/(:any)']  = 'home/listing_uae/$1/$2';
$route['education']  = 'welcome/education';
$route['medical']  = 'welcome/medical';
$route['restaurant']  = 'welcome/restaurant';
$route['security']  = 'welcome/security';
$route['luxury_jet']  = 'welcome/luxury_jet';
$route['cruise']  = 'welcome/cruise';
$route['tour_travel'] = 'welcome/tour_travel';
$route['real_state'] = 'welcome/real_state';
$route['hotel'] = 'welcome/hotel';
$route['shoping'] = 'welcome/shoping';
$route['email'] = 'welcome/email_test';
$route['yecht_rental'] = 'welcome/yecht_rental';
$route['wedding'] = '/welcome/destination_wedding';
$ur = $this->uri->segment(1);
if($ur!='admin'){
$route['(:any)/(:any)']  = 'home/listsingle_uae/$1/$2';
}
$route['dubai/listing/(:any)']  = 'home/listing_dubai/$1';
$route['abudhabi/listing/(:any)']  = 'home/listing_abudhabi/$1';
$route['abudhabi/list_detail/(:any)']  = 'home/listsingle_abudhabi/$1';
$route['uae/list_detail/(:any)']  = 'home/listsingle_uae/$1';
$route['dubai/list_detail/(:any)']  = 'home/listsingle_dubai/$1';
$route['free-LA-BOTTEGA-DEL-GELATO-vouchers']  = 'campaign/campaign_question';
$route['free-spa-vouchers']     = 'campaign/campaign_question';
$route['free-yacht-vouchers']    = 'campaign/campaign_question/';
$route['change_language'] = 'welcome/language_change';
$route['admin'] = 'admin/login';
$route['admin/dashboard'] = 'admin/home';

$route['admin/logout'] = 'admin/login/logout';
$route['admin/profile'] = 'admin/login/edit_profile';
$route['admin/change_password'] = 'admin/login/change_password';
$route['admin/forget_password'] = 'admin/login/forget';
$route['admin/manage_region'] = 'admin/home/region';
$route['admin/manage_language'] = 'admin/home/language';
$route['admin/manage_event'] = 'admin/listing/manage_events';
$route['admin/manage_cities'] = 'admin/listing/manage_cities';
$route['admin/destinations'] = 'admin/listing/destinations';
$route['admin/team'] = 'admin/listing/teams';

$route['admin/service_slider'] = 'admin/listing/service_slider';
$route['admin/add_team'] = 'admin/listing/add_team';
$route['admin/add_destination'] = 'admin/listing/add_destination';
$route['admin/add_language'] = 'admin/home/add_language';
$route['admin/edit_language/(:any)'] = 'admin/home/edit_language/$1';
$route['admin/view_language/(:any)'] = 'admin/home/view_language/$1';
$route['admin/manage_segment'] = 'admin/home/manage_segment';
$route['admin/edit_segment/(:any)'] = 'admin/home/edit_segment/$1';
$route['admin/managae_like_segment'] = 'admin/home/managae_like_segment';
$route['admin/edit_like_segment/(:any)'] = 'admin/home/edit_like_segment/$1';
$route['admin/delete_language/(:any)'] = 'admin/home/delete_language/$1';
$route['admin/delete_language/(:any)'] = 'admin/home/delete_language/$1';
$route['admin/add_region'] = 'admin/home/add_region';
$route['admin/edit_region/(:any)'] = 'admin/home/edit_region/$1';
$route['admin/view_region/(:any)'] = 'admin/home/view_region/$1';
$route['admin/delete_region/(:any)'] = 'admin/home/delete_region/$1';
$route['admin/homecontent/(:any)'] = 'admin/home/homecontent/$1';
$route['admin/homecontent'] = 'admin/home/homecontent';
$route['admin/category'] = 'admin/listing';
$route['admin/add_category'] = 'admin/listing/add_category';
$route['admin/subcategory'] = 'admin/listing/subcategory';
$route['admin/email_history'] = 'admin/listing/email_history';
$route['admin/add_sendemail']='admin/listing/add_sendemail';
$route['admin/add_subcategory'] = 'admin/listing/add_subcategory';
$route['admin/add_template'] = 'admin/listing/add_template';
$route['admin/edit_subcategory/(:any)'] = 'admin/listing/edit_subcategory/$1';
$route['admin/edit_template/(:any)'] = 'admin/listing/edit_template/$1';
$route['admin/view_subcategory/(:any)'] = 'admin/listing/view_subcategory/$1';
$route['admin/delete_subcategory/(:any)'] = 'admin/listing/delete_subcategory/$1';
$route['admin/delete_feedback/(:any)'] = 'admin/listing/delete_feedback/$1';
$route['admin/status_subcategory/(:any)'] = 'admin/listing/status_subcategory/$1';
$route['admin/status_feedback/(:any)'] = 'admin/listing/status_feedback/$1';
$route['admin/status_template/(:any)'] = 'admin/listing/status_template/$1';
$route['admin/status_page/(:any)'] = 'admin/listing/status_page/$1';
$route['admin/edit_category/(:any)'] = 'admin/listing/edit_category/$1';
$route['admin/details_page/(:any)'] = 'admin/listing/details_page/$1';
$route['admin/details_template/(:any)'] = 'admin/page/details_template/$1';
$route['admin/status_subscription/(:any)'] = 'admin/listing/status_subscription/$1';
$route['admin/view_category/(:any)'] = 'admin/listing/view_category/$1';
$route['admin/delete_category/(:any)'] = 'admin/listing/delete_category/$1';
$route['admin/status_category/(:any)'] = 'admin/listing/status_category/$1';
$route['admin/manage_listing'] = 'admin/listing/manage_listing';
$route['admin/listing_like'] = 'admin/listing/listing_like';
//enquiry section
$route['admin/enquiry']  = 'admin/home/enquiry';
$route['admin/feedback']  = 'admin/page/feedback';
$route['admin/details_feedback/(:any)']  = 'admin/page/details_feedback/$1';
$route['admin/view_enquiry/(:any)'] = 'admin/home/view_enquiry/$1';
$route['admin/delete_enquiry/(:any)'] = 'admin/home/delete_enquiry/$1';
$route['admin/add_listing'] = 'admin/listing/add_listing';
$route['admin/view_listing/(:any)'] = 'admin/listing/view_listing/$1';
$route['admin/edit_listing/(:any)'] = 'admin/listing/edit_listing/$1';
$route['admin/delete_listing/(:any)'] = 'admin/listing/delete_listing/$1';
$route['admin/status_listing/(:any)'] = 'admin/listing/status_listing/$1';
$route['admin/status_testimonisal/(:any)']= 'admin/listing/status_testimonisal/$1';
$route['admin/status_event/(:any)']= 'admin/listing/status_event/$1';
$route['admin/status_city/(:any)']= 'admin/listing/status_city/$1';
$route['admin/status_team/(:any)']= 'admin/listing/status_team/$1';
$route['admin/status_service_slider/(:any)']= 'admin/listing/status_service_slider/$1';
$route['admin/menu_status/(:any)']= 'admin/listing/menu_status/$1';
$route['admin/footer_status/(:any)']= 'admin/listing/footer_status/$1';
$route['admin/status_destination/(:any)']= 'admin/listing/status_destination/$1';
$route['admin/banner'] = 'admin/home/banner';
$route['admin/contact_us']  = 'admin/listing/contact_us';
$route['admin/contact_footer/(:any)']  = 'admin/listing/contact_footer/$1';
$route['admin/add_banner'] = 'admin/home/add_banner';
$route['admin/add_event'] = 'admin/home/add_event';
$route['admin/add_service_slider'] = 'admin/home/add_service_slider';
$route['admin/add_city'] = 'admin/listing/add_city';
$route['admin/view_banner/(:any)'] = 'admin/home/view_banner/$1';
$route['admin/edit_banner/(:any)'] = 'admin/home/edit_banner/$1';
$route['admin/edit_event/(:any)'] = 'admin/home/edit_event/$1';
$route['admin/edit_service_slider/(:any)'] = 'admin/home/edit_service_slider/$1';
$route['admin/edit_team/(:any)'] = 'admin/home/edit_team/$1';
$route['admin/view_team/(:any)'] = 'admin/home/view_team/$1';
$route['admin/view_city/(:any)'] = 'admin/home/view_city/$1';
$route['admin/edit_destination/(:any)'] = 'admin/listing/edit_destination/$1';
$route['admin/view_destination/(:any)'] = 'admin/listing/view_destination/$1';
$route['admin/view_event/(:any)'] = 'admin/listing/view_event/$1';
$route['admin/view_email_history/(:any)'] = 'admin/listing/view_email_history/$1';
$route['admin/view_service_slider/(:any)'] = 'admin/home/view_service_slider/$1';
$route['admin/edit_city/(:any)'] = 'admin/home/edit_city/$1';
$route['admin/delete_banner/(:any)'] = 'admin/home/delete_banner/$1';
$route['admin/delete_template/(:any)'] = 'admin/page/delete_template/$1';
$route['admin/delete_event/(:any)'] = 'admin/page/delete_event/$1';
$route['admin/delete_contact/(:any)'] = 'admin/page/delete_contact/$1';
$route['admin/delete_email_history/(:any)'] = 'admin/listing/delete_email_history/$1';
$route['admin/delete_city/(:any)'] = 'admin/page/delete_city/$1';
$route['admin/delete_service_slider/(:any)'] = 'admin/page/delete_service_slider/$1';
$route['admin/delete_team/(:any)'] = 'admin/page/delete_team/$1';
$route['admin/delete_subscription/(:any)'] = 'admin/page/delete_subscription/$1';
$route['admin/delete_destination/(:any)'] = 'admin/page/delete_destination/$1';
$route['admin/status_banner/(:any)'] = 'admin/home/status_banner/$1';
$route['admin/status_laguage/(:any)'] = 'admin/home/status_laguage/$1';
$route['admin/mobile-offer'] = 'admin/home/mobile_offer';
$route['admin/mobile-voucher'] = 'admin/home/mobile_voucher';
$route['admin/bulk-notification'] = 'admin/page/bulk_notification';
$route['admin/mobile-request'] = 'admin/home/mobile_request';
$route['admin/add_mobile_offer'] = 'admin/home/add_mobile_offer';
$route['admin/edit_mobile_offer/(:any)'] = 'admin/home/edit_mobile_offer/$1';
$route['admin/delete_mobile_offer/(:any)'] = 'admin/home/delete_mobile_offer/$1';
$route['admin/testimonial'] = 'admin/content';
$route['admin/add_testimonial'] = 'admin/content/add_testimonial';

$route['admin/website_transulate'] = 'admin/listing/website_transulate';
$route['admin/edit_testimonial/(:any)'] = 'admin/content/edit_testimonial/$1';
$route['admin/view_testimonial/(:any)'] = 'admin/content/view_testimonial/$1';
;
$route['admin/delete_testimonial/(:any)'] = 'admin/content/delete_testimonial/$1';
$route['admin/blog'] = 'admin/content/blog';
$route['admin/add_blog'] = 'admin/content/add_blog';
$route['admin/edit_blog/(:any)'] = 'admin/content/edit_blog/$1';
$route['admin/view_blog/(:any)'] = 'admin/content/view_blog/$1';
$route['admin/delete_blog/(:any)'] = 'admin/content/delete_blog/$1';
$route['admin/suggestion'] = 'admin/content/manage_suggestion';
$route['admin/add_suggestion'] = 'admin/content/add_suggestion';
$route['admin/edit_suggestion/(:any)'] = 'admin/content/edit_suggestion/$1';
$route['admin/edit_static/(:any)'] = 'admin/listing/edit_static/$1';
$route['admin/view_suggestion/(:any)'] = 'admin/content/view_suggestion/$1';
$route['admin/delete_suggestion/(:any)'] = 'admin/content/delete_suggestion/$1';
//
$route['admin/uniqueTitle']  = 'admin/listing/uniqueTitle';
$route['admin/unique_suggation']  = 'admin/content/unique_suggation';
$route['admin/unique_blog']  = 'admin/content/unique_blog';
//page routing //
$route['admin/page']  = 'admin/page';
$route['admin/add_page']  = 'admin/page/add_page';
$route['admin/add_page/(:any)']  = 'admin/page/add_page/$1';
$route['admin/edit_page/(:any)/(:any)']  = 'admin/page/edit_page/$1/$2';
$route['admin/view_page']  = 'admin/page/view_page';
$route['admin/delete_page/(:any)']  = 'admin/page/delete_page/$1';
$route['admin/uniqueURL']  = 'admin/page/uniqueURL';
//contact page 
$route['admin/contact']  = 'admin/page/contact';
$route['admin/contact/(:any)'] = 'admin/page/contact/$1';
//fb_campaign
$route['admin/fb_campaign']  = 'admin/page/fb_campaign';
$route['admin/sort_fb_campaign']  = 'admin/page/sort_fb_campaign';
$route['admin/delete_fb_campaign/(:any)']  = 'admin/page/delete_fb_campaign/$1';

//fb offer page 

$route['admin/offerpage']  = 'admin/page/offerpage';
$route['admin/invitaion']  = 'admin/page/invitaion';
$route['admin/view_invitation']  = 'admin/page/view_invitation';
$route['admin/delete_view_invitation/(:any)']  = 'admin/page/delete_view_invitation/$1';
$route['admin/view_listing_suggetion']  = 'admin/page/view_listing_suggetion';
$route['admin/delete_listing_suggetion/(:any)']  = 'admin/page/delete_listing_suggetion/$1';
$route['admin/view_home_suggetion']  = 'admin/page/view_home_suggetion';
$route['admin/export_category']  = 'admin/page/export_category';
$route['admin/delete_view_home_suggetion/(:any)']  = 'admin/page/delete_view_home_suggetion/$1';
//$route['admin/hasspassword']  = 'admin/hasspassword';
$route['admin/view_question']  = 'admin/page/view_question';
$route['admin/delete_view_question/(:any)']  = 'admin/page/delete_view_question/$1';
$route['admin/view_mobile']  = 'admin/page/view_mobile';
$route['admin/view_templates']  = 'admin/page/templates';
$route['admin/subscription'] = 'admin/page/view_subscription';
$route['admin/mobile-popup']  = 'admin/page/mobile_popup';
$route['free-dinner-vouchers']  = 'campaign/campaign_question';

//$route['free-spa-vouchers']  = 'campaign/campaign_question';

//$route['free-yacht-vouchers']  = 'campaign/campaign_question';

$route['404_override'] = 'error';

$route['translate_uri_dashes'] = FALSE;
$route['invitation']  = 'home/invitation';
$route['invitation/perks-and-rewards']  = 'home/invitation_perk_and_reward';
$route['invitation/disadvantage']  = 'home/invitation_dis';
$route['(:any)']  = 'home/page_data/$1';















