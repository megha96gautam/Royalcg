<?php

class Campaign extends CI_Controller

{       public $siteLang ='';

        public $siteLang_id ='';

            function __construct(){



			parent::__construct();

	    	$this->load->model('main_model');	

		 			  	if(!$this->session->userdata('language')){

			   

			  $this->session->set_userdata('language',language); 

			  $this->session->set_userdata('language_name',language_name); 

			

			   

		   }

		   $this->siteLang = strtoupper($this->session->userdata('language_name'));

		   $this->siteLang_id = $this->session->userdata('language');

		}

					

				  function index()

					{

					   $this->load->view('404'); 

					}

		

		  public function campaign_question(){

		  

		        $url = $this->uri->segment(1);

				

		  

				$language = $this->siteLang_id;

				$data['pages'] = $this->main_model->getpages();



				$data['categories'] = $this->main_model->get_category( uae ,$language , 0 );



				$data['language'] = $this->main_model->get_language();



				$data['home_content'] = $this->main_model->getHomecontent($language);



				//get offer page content

				$this->db->select("*")

				->from("fb_offer_page")

				->where("id",1);

				$result = $this->db->get();	 

				$data['fb_data'] = $result->result_array();

				//

                 if($url=='free-LA-BOTTEGA-DEL-GELATO-vouchers'){

				$this->load->view('question/campaign_question_dinner',$data);

                 }

				  elseif($url=='free-spa-vouchers'){

				  $this->load->view('question/campaign_question_spa',$data);

                 }

				 elseif($url=='free-yacht-vouchers'){

				  $this->load->view('question/campaign_question_yacht',$data);

                 }elseif($url=='test'){

				 $this->load->view('question/test',$data);

				 }

				 else{

				 $this->load->view('404');

				 }

          }

		  

		  

				public function add_answer(){





				$array = array (

				'name'=>$this->input->post('name'),

				'email'=>$this->input->post('email'),

				'contact'=>$this->input->post('contact'),

				'question1'=>$this->input->post('question1'),

				'question2'=>$this->input->post('question2'),

				'question3'=>$this->input->post('question3'),

				'answer1'=>$this->input->post('answer1'),

				'answer2'=>$this->input->post('answer2'),

				'answer3'=>$this->input->post('answer3'),

				'category'=>$this->input->post('category'),

				);



				$quesry = $this->db->insert("questions",$array);



				if($quesry){

				echo "true";

				}





				}

		  

		  

		  public function listing_hitcount(){

		           $array = array(

				  'ip_addr'=>$_SERVER['REMOTE_ADDR'],

				  'listing_id'=>$_POST['listing_id'],

				  'listing_id'=>$_POST['listing_id'],

				  'other_info'=>$_SERVER['HTTP_REFERER'].'<NEXT>'.$_SERVER['HTTP_USER_AGENT'],

				  'date'=>date('y-m-d h:m:s'),

				  ); 

                  $quesry = $this->db->insert("ltisting_hit_count",$array);	  

		  }



}



?>