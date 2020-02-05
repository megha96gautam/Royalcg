<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Welcome extends CI_Controller {
        public $siteLang ='';
        public $currency ='';
        public $siteLang_id ='';
      function __construct(){   

      parent::__construct();
      $this->load->model('main_model');
       $this->load->library('email');
       $this->load->library('session');
      date_default_timezone_set('Asia/Calcutta'); 
        
    }

     public function index()
  {
       

        $data['subdata']=$this->db->get_where('subcategory', array('pro_catid'=>1,'subcate_status'=>'1'))->result();
      
      $car_tree = array();
      if(!empty($data['subdata'])){
          foreach ($data['subdata'] as $key => $val) {
             if($_SESSION['Language']== 'arabic' && $val->title_arabic!=""){
              $car_tree[$val->title_arabic] = $car_product = $this->main_model->get_carproducts($val->subcate_id);
            }elseif($_SESSION['Language']== 'russian' && $val->title_russian!=""){
               $car_tree[$val->title_russian] = $car_product = $this->main_model->get_carproducts($val->subcate_id);
            }elseif($_SESSION['Language']== 'chiness' && $val->title_chiness!=""){
               $car_tree[$val->title_chiness] = $car_product = $this->main_model->get_carproducts($val->subcate_id);
            }else{
               $car_tree[$val->meta_title] = $car_product = $this->main_model->get_carproducts($val->subcate_id);
            }
            
           
            
          }
      }

       $data['car_tree']  = $car_tree;     
       $data['banners'] = $this->main_model->get_banners(uae); 
       $data['categories'] = $this->main_model->category_by_region();
       $data['cities'] = $this->main_model->get_city_header();
       $data['language'] = $this->main_model->get_language();
       $data['recommended_city'] = $this->main_model->get_city();
       $data['subcategories'] = $this->main_model->product_by_subcate();
       $data['leatestproduct'] = $this->main_model->leatestproduct();
       $data['carproduct'] = $this->main_model->product_by_car(1);
       $data['hotel'] = $this->main_model->get_hotel(13);
       $data['ship'] =$this->main_model->get_carproducts(6);
       $data['footer_booknow'] =$this->main_model->footer_booknow();
       $data['footer_explore'] =$this->main_model->footer_explore();
       $data['destinations'] =$this->main_model->footer_destinations();
       $data['footer'] =$this->db->get_where('contact_page', array('id'=>1))->row();
       $data['comments']=$this->main_model->feedback_comments(1);
       $data['avg_rating']=$this->main_model->avg_rating(13);
       $data['reviews']=$this->main_model->product_reviews(13);
       $data['pages_cate']=$this->main_model->services_data();
       $data['subcategory_product']=$this->main_model->get_carproducts($subcaegory_id);
       $data['footer_deals'] =$this->main_model->footer_deals();
       $data['subdata']=$this->db->get_where('subcategory', array('pro_catid'=>1,'subcate_status'=>'1'))->result();
       $data['contact_footer']=$this->db->get_where('pages_detail', array('id'=>40,'menu_status'=>'0'))->result();
       $data['luxury_jet']=$this->db->get_where('product', array('category_id'=>'11','pro_status'=>'1' ))->result();
       /*var_dump($data['language']); die();*/
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Royalcg';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
     $this->load->view('tamplate/header' , $data);
    // $this->load->view('home_uae');
     $this->load->view('welcome');
     $this->load->view('tamplate/footer',$data);
  }

  function switchLang($language = "") {
      //print_r($language); die();
          $a = $language;
       if($a == 'arabic'){
          $_SESSION['Language'] = 'arabic';
         redirect($_SERVER['HTTP_REFERER']);
       }elseif ($a == 'russian') {
         $_SESSION['Language'] = 'russian';
         redirect($_SERVER['HTTP_REFERER']);
       }elseif ($a == 'chinese') {
         $_SESSION['Language'] = 'chiness';
          redirect($_SERVER['HTTP_REFERER']);
       }else{
         $_SESSION['Language'] = 'english';
          redirect($_SERVER['HTTP_REFERER']);
       }

       $language = ($language != "") ? $language : "english";
       $this->session->set_userdata('site_lang', $language);       
       redirect($_SERVER['HTTP_REFERER']);
       
   }



   public function currency($from_curr){  
    // Fetching JSON
    $req_url = 'https://api.exchangerate-api.com/v4/latest/AED';
    $response_json = file_get_contents($req_url);
    //print_r($response_json); die();
    // Continuing if we got a result
    if(false !== $response_json) {
        // Try/catch for json_decode operation
        try {
      // Decoding
      $response_object = json_decode($response_json);
      // YOUR APPLICATION CODE HERE, e.g.
      $base_price = 12; // Your price in USD
      $EUR_price = round(($base_price * $response_object->rates->$from_curr), 2);
      $currency=$from_curr;
      $currency = ($currency != "") ? $currency : 'AED'; 
      $_SESSION['currency'];
      $this->session->set_userdata('currency', $currency); 
      redirect($_SERVER['HTTP_REFERER']);
    
        }
        catch(Exception $e) {
         
        }
    
      }
    }
      public function test(){
        $this->load->view('website/test');
      }
    public function contact()
  {

      $data['categories'] = $this->main_model->category_by_region();
       $data['cities'] = $this->main_model->get_city_header();
       $data['footer_booknow'] =$this->main_model->footer_booknow();
       $data['footer_explore'] =$this->main_model->footer_explore();
       $data['destinations'] =$this->main_model->footer_destinations();
       $data['footer'] =$this->db->get_where('contact_page', array('id'=>1))->row();
       $data['subcategories'] = $this->main_model->product_by_subcate();
       $data['pages_cate']=$this->main_model->services_data();
       $data['footer_deals'] =$this->main_model->footer_deals();
       
       // $data['pages_cate']=$this->db->get_where('pages_detail', array('menu_status'=>'1'))->result();
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Medical';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
     $this->load->view('tamplate/inner_header', $data);
    $this->load->view('contact_us');
     $this->load->view('tamplate/footer',$data);
  }

  function searchdata(){

       $search  = $this->input->post('search');   
       $data['searchingdata'] = $this->main_model->searching($search);  
       $data['categories'] = $this->main_model->category_by_region();
       $data['subcategories'] = $this->main_model->product_by_subcate();
       $data['carproduct'] = $this->main_model->product_by_car();
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Royalcg';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
    /*$this->load->view('tamplate/header' , $data);*/

    // $this->load->view('home_uae');
    $this->load->view('website/search',$data);

    /*$this->load->view('tamplate/footer',$data);*/
         }  

    function datasearching(){     

       $pro_name  = $this->input->post('pro_name');
       $cuntry  = $this->input->post('cuntry');
       $city  = $this->input->post('city');      

       $data['searchingdata_ship']=$this->main_model->serching_ship($pro_name,$country,$city);
       $data['categories'] = $this->main_model->category_by_region();
       $data['subcategories'] = $this->main_model->product_by_subcate();
       $data['carproduct'] = $this->main_model->product_by_car();
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Royalcg';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
    /*$this->load->view('tamplate/header' , $data);*/

    // $this->load->view('home_uae');

    $this->load->view('website/search',$data);

    }

    public function about_us(){   
        //$data['pages_cate']=$this->db->get_where('pages_detail', array('menu_status'=>'1'))->result();
        $data['pages_cate']=$this->main_model->services_data();
        $data['footer_booknow'] =$this->main_model->footer_booknow();
       $data['footer_explore'] =$this->main_model->footer_explore();
       $data['footer_deals'] =$this->main_model->footer_deals();
       $data['destinations'] =$this->main_model->footer_destinations();
       $data['footer'] =$this->db->get_where('contact_page', array('id'=>1))->row();
        $data['teams']=$this->db->get_where('teams', array('status'=>'1'))->result();
        $data['about']=$this->main_model->aboutcontent(22);
        $data['cities'] = $this->main_model->get_city_header();
        $data['categories'] = $this->main_model->category_by_region();
        $this->load->view('tamplate/inner_header',$data);
        $this->load->view('aboutUS',$data);
    $this->load->view('tamplate/footer',$data);

  }


    public function terms_and_condition(){   
        //$data['pages_cate']=$this->db->get_where('pages_detail', array('menu_status'=>'1'))->result();
        $data['pages_cate']=$this->main_model->services_data();
        $data['footer_booknow'] =$this->main_model->footer_booknow();
       $data['footer_explore'] =$this->main_model->footer_explore();
       $data['footer_deals'] =$this->main_model->footer_deals();
       $data['destinations'] =$this->main_model->footer_destinations();
       $data['footer'] =$this->db->get_where('contact_page', array('id'=>1))->row();
        $data['teams']=$this->db->get_where('teams', array('status'=>'1'))->result();
       $data['tandc']=$this->db->get_where('pages_detail', array('id'=>17))->row();
        $data['cities'] = $this->main_model->get_city_header();
        $data['categories'] = $this->main_model->category_by_region();
        $this->load->view('tamplate/inner_header',$data);
        $this->load->view('website/teams_condition',$data);
    $this->load->view('tamplate/footer',$data);

  }
   public function privacy_policy(){   
        //$data['pages_cate']=$this->db->get_where('pages_detail', array('menu_status'=>'1'))->result();
        $data['pages_cate']=$this->main_model->services_data();
        $data['footer_booknow'] =$this->main_model->footer_booknow();
       $data['footer_explore'] =$this->main_model->footer_explore();
       $data['footer_deals'] =$this->main_model->footer_deals();
       $data['destinations'] =$this->main_model->footer_destinations();
       $data['footer'] =$this->db->get_where('contact_page', array('id'=>1))->row();
        $data['teams']=$this->db->get_where('teams', array('status'=>'1'))->result();
        $data['privacy']=$this->db->get_where('pages_detail', array('id'=>15))->row();
        $data['cities'] = $this->main_model->get_city_header();
        $data['categories'] = $this->main_model->category_by_region();
        $this->load->view('tamplate/inner_header',$data);
        $this->load->view('website/privacy_policy',$data);
    $this->load->view('tamplate/footer',$data);

  }

  function check_email_avalibility(){
         if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))  
           {  
                 
           }  
        else{ 

            if($this->main_model->is_email_available($_POST["email"]))  {                      echo '<b> Email Already Exist</b>'; 

                }  
                else  
                {                      

                }  
        }

      }
  public function product_details()
  { 
      $data['categories'] = $this->main_model->category_by_region();
    $this->load->view('product_details');
    /*$this->load->view('tamplate/footer');*/
  } 
  public function product_list(){
        $filters['category'] = $this->uri->segment(3);
            $filters['subcategory']     = $this->uri->segment(4);
            $data['filters'] = $filters;
                     $id= $this->uri->segment(2);
             /* print_r($id); die();*/

    $data['categories'] = $this->main_model->category_data();
        $data['products'] = $this->main_model->products($id);
    $this->load->view('product_list', $data);
    /*$this->load->view('tamplate/footer',$data);*/

  }



  public function feedback(){
    $product_id=$this->input->post('product_id');
    //print_r($this->input->post('rating')); die();

        $data_store= array('product_id' =>$this->input->post('product_id'),
                            'comment' =>$this->input->post('comment'),
                            'username' =>$this->input->post('username'),
                            'country' =>$this->input->post('country'),
                            'rating'=>$this->input->post('rating'),
                            'feedback_status'=>1,
                            'created_at'=>date('Y-m-d H:i:s'));
        $insert = $this->db->insert("feedback",$data_store);

        if($insert){

           echo "<label class='btn btn-success'>feedback Submitted</label>";

            redirect("carproduct/".$this->input->post('product_id'));

        }else{

           echo "<label class='btn btn-danger'>feedback not Submitted</label>";

        }

  }




  function ajax_get_subcategory()

    {

        $cate_id = $this->input->post('category');

        $data['subcate'] = $this->main_model->get_subcategory($cate_id);

        echo json_encode($data); //die;

    }

/* only cars category product*/

     function ajax_carproduct()

        {
            $subcate = $this->input->post('subcate');
            $data['carproducts'] = $this->main_model->get_carproducts($subcate);
            echo json_encode($data); //die;

        }
      function ajax_get_events(){
        /*$event_id = $this->input->post('event_id');
        echo $event_id;*/
              $event_id = $this->input->post('event_id');
              $data['events'] = $this->main_model->get_event($event_id);
              echo json_encode($data); //die;
      }


    function manage_product(){  

    if($this->input->post('filter_submit') != false){     

      $data['listings'] = $this->user->get_listing_filter($this->input->post());       

    }else{

    $data['listings'] = $this->user->get_listing();   

    } 

    $data['regions'] = $this->user->get_regions(1);
        $data['subcategories'] =  $this->user->subcategory_by_region(uae);
    $data['segment'] = $this->Common_model->getAll("segment"); 
    $this->load->view('product_list');

   }

   function car_product_view($id){
    $this->db->select("*")
               ->from("product c")
               ->where('c.pro_id',$id);
      $result = $this->db->get();
    if($result->num_rows()==0){
    $this->load->view('404');
    }else{
      $data['footer_booknow'] =$this->main_model->footer_booknow();
       $data['footer_explore'] =$this->main_model->footer_explore();
       $data['footer_deals'] =$this->main_model->footer_deals();
       $data['destinations'] =$this->main_model->footer_destinations();
       $data['footer'] =$this->db->get_where('contact_page', array('id'=>1))->row();
      $data['product']= $this->db->get_where('product',  array('pro_id' => $id ))->result_array();
      $data['comments']=$this->main_model->feedback_comments($id);
      $data['reviews']=$this->main_model->product_reviews($id);
      $data['avg_rating']=$this->main_model->avg_rating($id);
      $data['footer_booknow'] =$this->main_model->footer_booknow();
      $data['footer_deals'] =$this->main_model->footer_deals();
      $data['rating1']=$this->main_model->product_rating($id);
      $data['rating2']=$this->main_model->product_rating1($id);
      $data['rating3']=$this->main_model->product_rating2($id);
      $data['rating4']=$this->main_model->product_rating3($id);
      $data['rating5']=$this->main_model->product_rating4($id);
       /*print_r($data['footer_deals']);die();*/
       $data['cities'] = $this->main_model->get_city_header();
     $data['categories'] = $this->main_model->category_by_region();
     /* add review*/
     $ip = $this->input->ip_address();
     $data_store=array(
            'ip_address'=> $ip,
            'product_id' => $id,
            'status'=>1
     );
     $data['pages_cate']=$this->main_model->services_data();
     //$data['pages_cate']=$this->db->get_where('pages_detail', array('menu_status'=>'1'))->result();
     $this->db->insert('product_reviews',$data_store);
     $this->load->view('tamplate/inner_header',$data);
     $this->load->view('website/cars_product_view',$data);
     $this->load->view('tamplate/footer',$data);

  }
}

     public function Subscribe(){
   
           $data_info=  array(

                 'email' => $this->input->post('email'),
                 'created_at' => date('Y-m-d H:i:s'),
                 'Deleted' =>1,
                 'status' => 1
                  );
                     $email_data= $this->db->get_where('tbl_subcribe_email', array('subscribe_id'=>1))->row();
                    $this->email->set_mailtype("html");
                    $this->email->from('group@roylacg.com', 'RoyalCg User Subscribe');
					          $this->email->to($this->input->post('email'));
					          $this->email->cc('another@another-example.com');
					          $this->email->bcc('them@their-example.com');
					          $this->email->subject('RoyalCg');
					          $body = $this->load->view('website/subscribe_email.php',$data_info,true);
  					       // print_r($email_data); 
                    $this->email->message($body);
                   // $this->email->message("megha");
					           $this->email->send();
                  // die();

             if($insert=$this->db->insert("tbl_subcribe_email",$data_info)) {
                     echo "<script>alert('Subscribe successfully...');</script>";
                 redirect('/');                   
               }else{
                    echo "<script>alert(' not successfully...');</script>";
                  redirect('/');                 

                } 
       

     
  }
  function add_like()
    {
        $id = $this->input->post('a1');        
       /* $jid = $this->main_model->get_hotel(13);*/
        $query = $this->db->query('update product set product_likes=product_likes+1 where pro_id="'.$id.'"');
        return $query;
    }
 

  function add_contactus(){
     $data_info=  array(
                 'category_id' => $this->input->post('cate_id'),
                 'first_name' => $this->input->post('name'),
                 'mobile' => $this->input->post('contact'),
                 'email' => $this->input->post('email'),
                 'message' => $this->input->post('message'),
                  );   
     $ins=$this->db->insert("contact_us",$data_info);
     $insert= $this->db->insert_id();

                if($insert){

                  if($_SESSION['Language'] =='arabic'){
                     $this->session->set_flashdata('msg',' شكرا لرسالتك. وقد تم إرساله ');
                     redirect('/contact');
                  }elseif ($_SESSION['Language'] =='russian') {
                     $this->session->set_flashdata('msg','Спасибо за ваше сообщение. Было отправлено');
                     redirect('/contact');
                  }elseif ($_SESSION['Language'] =='chiness') {
                    $this->session->set_flashdata('msg','感谢您的留言。 已发送');
                     redirect('/contact');
                  }else{
                    $this->session->set_flashdata('msg','Thank you for your message. It has been sent');
                     redirect('/contact');
                   }
                    //echo "<script>alert('conact-us successfully...');</script>";
                }else{
                  
                   $this->session->set_flashdata('error','conact-us not successfully...');
                   redirect('/contact');
                } 
       }  
    public function education(){
     $data['categories'] = $this->main_model->category_by_region();
     $data['cities'] = $this->main_model->get_city_header();
     $data['subcategories'] = $this->main_model->product_by_subcate();
     $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Education';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
     $this->load->view('tamplate/inner_header' , $data);
    // $this->load->view('home_uae');
     $this->load->view('website/education');
     $this->load->view('tamplate/footer',$data);    

    }
     public function medical(){
       $data['categories'] = $this->main_model->category_by_region();
       $data['cities'] = $this->main_model->get_city_header();
       $data['subcategories'] = $this->main_model->product_by_subcate();
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Medical';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
     $this->load->view('tamplate/inner_header' , $data);
    // $this->load->view('home_uae');
     $this->load->view('website/medical');
     $this->load->view('tamplate/footer',$data);    

    }
    public function restaurant(){
      $data['categories'] = $this->main_model->category_by_region();
       $data['cities'] = $this->main_model->get_city_header();
       $data['subcategories'] = $this->main_model->product_by_subcate();
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Restaurant';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
     $this->load->view('tamplate/inner_header' , $data);
    // $this->load->view('home_uae');
     $this->load->view('website/Restaurant');
     $this->load->view('tamplate/footer',$data);    

    }
    public function luxury_jet(){
        $data['categories'] = $this->main_model->category_by_region();
        $data['cities'] = $this->main_model->get_city_header();
        $data['subcategories'] = $this->main_model->product_by_subcate();
        $data['logo'] = base_url().'front_assets/images/uae_logo.png';
        $data['title'] ='Restaurant';
        $data['banner_text'] ='Royalcg';
        $data['footer_copy']="Copyright © Royalcg 2019";
        $this->load->view('tamplate/inner_header' , $data);
       // $this->load->view('home_uae');
        $this->load->view('website/luxury_jet');
        $this->load->view('tamplate/footer',$data);    

    }
    public function security(){
      $data['categories'] = $this->main_model->category_by_region();
       $data['cities'] = $this->main_model->get_city_header();
       $data['subcategories'] = $this->main_model->product_by_subcate();
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Restaurant';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
     $this->load->view('tamplate/inner_header' , $data);
    // $this->load->view('home_uae');
     $this->load->view('website/security_guard');
     $this->load->view('tamplate/footer',$data);  
    }

    public function cruise(){
       $data['categories'] = $this->main_model->category_by_region();
       $data['cities'] = $this->main_model->get_city_header();
       $data['subcategories'] = $this->main_model->product_by_subcate();
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Restaurant';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
     $this->load->view('tamplate/inner_header' , $data);
    // $this->load->view('home_uae');
     $this->load->view('website/cruise');
     $this->load->view('tamplate/footer',$data);  
    }
    public function tour_travel(){
       $data['categories'] = $this->main_model->category_by_region();
       $data['cities'] = $this->main_model->get_city_header();
       $data['subcategories'] = $this->main_model->product_by_subcate();
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Restaurant';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
     $this->load->view('tamplate/inner_header' , $data);
    // $this->load->view('home_uae');
     $this->load->view('website/tour_travel');
     $this->load->view('tamplate/footer',$data);  
    }
     public function real_state(){
       $data['categories'] = $this->main_model->category_by_region();
       $data['cities'] = $this->main_model->get_city_header();
       $data['subcategories'] = $this->main_model->product_by_subcate();
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Restaurant';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
     $this->load->view('tamplate/inner_header' , $data);
    // $this->load->view('home_uae');
     $this->load->view('website/real_state');
     $this->load->view('tamplate/footer',$data);  
    }
     public function hotel(){
       $data['categories'] = $this->main_model->category_by_region();
       $data['cities'] = $this->main_model->get_city_header();
       $data['subcategories'] = $this->main_model->product_by_subcate();
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Restaurant';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
     $this->load->view('tamplate/inner_header' , $data);
    // $this->load->view('home_uae');
     $this->load->view('website/hotel');
     $this->load->view('tamplate/footer',$data);  
    }
     public function slider(){
       $data['categories'] = $this->main_model->category_by_region();
       $data['cities'] = $this->main_model->get_city_header();
       $data['subcategories'] = $this->main_model->product_by_subcate();
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Restaurant';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
     /*$this->load->view('tamplate/inner_header' , $data);*/
    // $this->load->view('home_uae');
     $this->load->view('website/slider');
     /*$this->load->view('tamplate/footer',$data);  */
    }
    function destination_wedding(){
      $data['categories'] = $this->main_model->category_by_region();
       $data['cities'] = $this->main_model->get_city_header();
       $data['subcategories'] = $this->main_model->product_by_subcate();
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Restaurant';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
     $this->load->view('tamplate/inner_header' , $data);
    // $this->load->view('home_uae');
     $this->load->view('website/wedding');
     $this->load->view('tamplate/footer',$data);  
    }
    function shoping(){
      $data['categories'] = $this->main_model->category_by_region();
       $data['cities'] = $this->main_model->get_city_header();
       
       $data['subcategories'] = $this->main_model->product_by_subcate();
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Restaurant';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
     $this->load->view('tamplate/inner_header' , $data);
    // $this->load->view('home_uae');
     $this->load->view('website/shoping');
     $this->load->view('tamplate/footer',$data);  
    }
    function yecht_rental(){
       $data['categories'] = $this->main_model->category_by_region();
       $data['cities'] = $this->main_model->get_city_header();
       $data['subcategories'] = $this->main_model->product_by_subcate();
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
     $data['title'] ='Restaurant';
     $data['banner_text'] ='Royalcg';
     $data['footer_copy']="Copyright © Royalcg 2019";
     $this->load->view('tamplate/inner_header' , $data);
    // $this->load->view('home_uae');
     $this->load->view('website/yecht_rental');
     $this->load->view('tamplate/footer',$data);
    }
    function details_page(){
      $id= $this->uri->segment(2);
      
       $data['details']=$this->db->get_where('pages_detail', array('id'=>$id))->row();
       $data['slider']=$this->db->get_where('tbl_serviceslider', array('service_id'=>$id, 'slider_status'=>1))->result();
       $data['categories'] = $this->main_model->category_by_region();
       $data['cities'] = $this->main_model->get_city_header();
       $data['footer_booknow'] =$this->main_model->footer_booknow();
       $data['footer_explore'] =$this->main_model->footer_explore();
       $data['destinations'] =$this->main_model->footer_destinations();
       $data['footer'] =$this->db->get_where('contact_page', array('id'=>1))->row();
      /* $data['subcategories'] = $this->main_model->product_by_subcate();*/
       $data['pages_cate']=$this->main_model->services_data();
     //$data['pages_cate']=$this->db->get_where('pages_detail', array('menu_status'=>'1'))->result();
       $data['footer_deals'] =$this->main_model->footer_deals();
       $data['logo'] = base_url().'front_assets/images/uae_logo.png';
       $data['title'] ='Restaurant';
       $data['banner_text'] ='Royalcg';
       $data['footer_copy']="Copyright © Royalcg 2019";
    //  print_r($data['cities']);die();
       $this->load->view('tamplate/inner_header' , $data);   
       $this->load->view('service_details.php');
       $this->load->view('tamplate/footer',$data);
    }
    function city_events($id){
     
       /*  $data['pages_cate']=$this->main_model->services_data();
         $data['cities'] = $this->main_model->get_city_header();
       $this->load->view('tamplate/inner_header',$data);*/
         $data['pages_cate']=$this->main_model->services_data();
         $data['cities'] = $this->main_model->get_city_header();
        $this->load->view('tamplate/header',$data);
     $data['city_events'] =$this->db->get_where('tbl_events', array('city_id'=>$id))->result();
         
     $this->load->view('website/city_events',$data);
    /* $this->load->view('tamplate/footer',$data); */    
    }
    /* add enquiry fomrs */
public function enquiry(){
                
             if($this->input->post('from_trip')==""){
                $from_trip="";
             }else{
               $from_trip= $this->input->post('from_trip');
             }
              if($this->input->post('to_trip')==""){
                $to_trip="";
             }else{
               $to_trip= $this->input->post('to_trip');
             }
              if($this->input->post('no_passengers')==""){
                $no_passengers="";
             }else{
               $no_passengers= $this->input->post('no_passengers');
             }
              if($this->input->post('accommodation')==""){
                $accommodation="";
             }else{
               $accommodation= $this->input->post('accommodation');
             }
            $cate_id = $this->input->post('cate_id');
            $array = array (
              'name'=>$this->input->post('name'),
              'email'=>$this->input->post('email'),
              'category'=>$this->input->post('cate_id'),
              'city_id'=>$this->input->post('city_id'),
              'contact'=>$this->input->post('contact'),
              'status'=>1,
              'jet_from_trip'=>$from_trip,
              'jet_to_trip'=>$to_trip,
              'jet_no_passengers'=>$no_passengers,
              'curise_accommodation'=>$accommodation,
              'created_at ' => date('Y-m-d H:i:s'),
              'message'=>$this->input->post('message')
              );


          $quesry = $this->db->insert("enquiries_form",$array);

          $insert_id = $this->db->insert_id();

             $data['footer_booknow'] =$this->main_model->footer_booknow();
             $data['footer_explore'] =$this->main_model->footer_explore();
             $data['destinations'] =$this->main_model->footer_destinations();
             $data['footer'] =$this->db->get_where('contact_page', array('id'=>1))->row();
             $data['record']=$this->db->get_where('enquiries_form', array('id'=>$insert_id))->row();
             $data['emaildata']=$this->db->get_where('enquiries_form', array('id'=>$insert_id))->row();
             $data['url'] = base_url();
              $this->email->set_mailtype("html"); 
					$this->email->from('group@roylacg.com', 'RoyalCg');
					$this->email->to('malik@uaet10.com');
					$this->email->cc('another@another-example.com');
					$this->email->bcc('them@their-example.com');

					$this->email->subject('RoyalCg Inquiry');
					$body = $this->load->view('website/email_admin_template.php',$data,true);
				    /*	echo ($body); die();*/
          $this->email->message($body);
					$this->email->send();
            //  echo ($body); die();
					$this->email->set_mailtype("html"); 
					$this->email->from('group@roylacg.com', 'RoyalCg');
					$this->email->to($this->input->post('email'));
					$this->email->cc('another@another-example.com');
					$this->email->bcc('them@their-example.com');

					$this->email->subject('RoyalCg');
					 $body = $this->load->view('website/email_template.php',$data, true);
				
                    $this->email->message($body);

					$this->email->send();
        if($insert_id){
             
                  if($_SESSION['Language'] =='arabic' ){
                    $this->session->set_flashdata('msg','تم إرسال نموذج الاستفسار بنجاح ...');
                      redirect(base_url().'details/'.$cate_id);
                  }elseif($_SESSION['Language'] =='russian' ){
                     $this->session->set_flashdata('msg','Форма запроса успешно отправлена ...');
                      redirect(base_url().'details/'.$cate_id);
                  }elseif($_SESSION['Language'] =='chiness' ){
                     $this->session->set_flashdata('msg','查询表格已成功提交...');
                      redirect(base_url().'details/'.$cate_id);
                  }else{
                     $this->session->set_flashdata('msg','Enquiry form successfully submitted...');
                       redirect(base_url().'details/'.$cate_id);
                    }
                }else{
                  $this->session->set_flashdata('error','Please try again...');
                  redirect(base_url().'details/'.$cate_id);
             //echo "<script>alert('Please try again...');</script>";
          } 
    
      //$this->load->view('tamplate/footer',$data);
        //
   }


   /* add jet enquiry*/

   function email_test(){
   	      $data['record']=$this->db->get_where('enquiries_form', array('id'=>71))->row();
   	        //print_r($data['record']); die();
              
                    $this->email->set_mailtype("html"); 
					$this->email->from('group@roylacg.com', 'RoyalCg');
					$this->email->to('megha8896.mg@gmail.com');
					$this->email->cc('another@another-example.com');
					$this->email->bcc('them@their-example.com');

					$this->email->subject('RoyalCg');
					 $body = $this->load->view('website/test.php',$data, true);
				//	echo ($body); die();
                    $this->email->message($body);
					$this->email->send();

					 $this->email->set_mailtype("html"); 
					$this->email->from('group@roylacg.com', 'RoyalCg');
					$this->email->to('votivepankaj@gmail.com');
					$this->email->cc('another@another-example.com');
					$this->email->bcc('them@their-example.com');

					$this->email->subject('RoyalCg');
					 $body = $this->load->view('website/email_admin_template.php',$data, true);
					//echo ($body); die();
                    $this->email->message($body);

					$this->email->send();
               //   echo $this->email->print_debugger();
   }

public function add_jet_luxury(){
                    $array = array (
              'name'=>$this->input->post('name'),
              'email'=>$this->input->post('email'),
              'category'=>11,
              'jet_from_trip'=>$this->input->post('from_trip'),
              'jet_to_trip'=>$this->input->post('to_trip'),
              'jet_no_passengers'=>$this->input->post('no_passengers'),
              'contact'=>$this->input->post('contact'),
              'status'=>1,
              'created_at ' => date('Y-m-d H:i:s'),
              'message'=>$this->input->post('message')
              );
          $quesry = $this->db->insert("enquiries_form",$array);
         $last_id = $this->db->insert_id();
        if($quesry){

             $data['emaildata']=$this->db->get_where('enquiries_form', array('id'=>$last_id))->row();
               $sendemail='votivephp.megha@gmail.com';
               /* email send client and user */
                /* $this->email->from('admin@royalcg.com', 'Royalcg');
                 $this->email->set_mailtype("html");
                 $this->email->to($sendemail); 
                 $this->email->subject('Welcome Royalcg');
                 $body = $this->load->view('website/email_template.php',$data,TRUE);
                 $this->email->message($body);                 
                 $this->email->send();
*/

               /*  $this->load->library('email');

    $this->email->initialize(array(
      'protocol' => 'smtp',
      'smtp_host' => 'smtp.royalcg.com',
      'smtp_user' => 'royalcg',
      'smtp_pass' => '#djgd^W4*#',
      'smtp_port' => 587,
      'crlf' => "\r\n",
      'newline' => "\r\n"
    ));

  $this->email->from('admin@royalcg.com', 'Your Name');
  $this->email->to('votivephp.megha@gmail.com');
  $this->email->cc('megha8896.mg@gmail.com');
  $this->email->bcc('votivephp.megha@gmail.com');
  $this->email->subject('Email Test');
  $this->email->message('Testing the email class.');
  $this->email->send();
*/
//echo $this->email->print_debugger();
                  echo "<script>alert('Enquiry from successfully...');</script>";
                   redirect(base_url());
                }else{
             echo "<script>alert('Please try again...');</script>";
          }     
      $this->load->view('tamplate/footer',$data);
        //
   }
   function add_medical(){
     $array = array (
              'name'=>$this->input->post('name'),
              'email'=>$this->input->post('email'),
              'category'=>13,              
              'contact'=>$this->input->post('contact'),
              'city_id'=>$this->input->post('city_id'),
              'status'=>1,
              'created_at ' => date('Y-m-d H:i:s'),
              'message'=>$this->input->post('message')
              );
          $quesry = $this->db->insert("enquiries_form",$array);
          $last_id = $this->db->insert_id();
        if($quesry){

             $data['emaildata']=$this->db->get_where('enquiries_form', array('id'=>$last_id))->row();

               $sendemail='malik@uaet10.com';
               /* email send client and user */
                /* $this->email->from('votivephp.megha@gmail.com', 'Royalcg');
                 $this->email->set_mailtype("html");
                 $this->email->to($sendemail); 
                 $this->email->subject('Welcome Royalcg');
                 $body = $this->load->view('website/email_template.php',$data,TRUE);
                 $this->email->message($body);                 
                 $this->email->send();*/

                  echo "<script>alert('Enquiry from successfully...');</script>";
                   redirect(base_url());
                }else{
             echo "<script>alert('Please try again...');</script>";
          }     
      $this->load->view('tamplate/footer',$data);
   }
    function add_education(){
     $array = array (
              'name'=>$this->input->post('name'),
              'email'=>$this->input->post('email'),
              'category'=>13,              
              'contact'=>$this->input->post('contact'),
              'city_id'=>$this->input->post('city_id'),
              'status'=>1,
              'created_at ' => date('Y-m-d H:i:s'),
              'message'=>$this->input->post('message')
              );
          $quesry = $this->db->insert("enquiries_form",$array);
          $last_id = $this->db->insert_id();
        if($quesry){

             $data['emaildata']=$this->db->get_where('enquiries_form', array('id'=>$last_id))->row();
               $sendemail='malik@uaet10.com';
               /* email send client and user */
                /* $this->email->from('votivephp.megha@gmail.com', 'Royalcg');
                 $this->email->set_mailtype("html");
                 $this->email->to($sendemail); 
                 $this->email->subject('Welcome Royalcg');
                 $body = $this->load->view('website/email_template.php',$data,TRUE);
                 $this->email->message($body);                 
                 $this->email->send();
*/
                  echo "<script>alert('Enquiry from successfully...');</script>";
                   redirect(base_url());
                }else{
             echo "<script>alert('Please try again...');</script>";
          }     
      $this->load->view('tamplate/footer',$data);
   }
   function email_template(){
        $this->load->view('website/email_template');
   }
   function email_admin_temp(){
      $this->load->view('website/email_admin_template');
   }

 public  function currencyConverter($from_currency, $to_currency, $amount) {
$amount    = urlencode($amount);
$from    = urlencode($from_currency);
$to        = urlencode($to_currency);
$url    = "http://www.google.com/ig/calculator?hl=en&q=$amount$from=?$to";
$ch     = @curl_init();
$timeout= 0;
 
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch,  CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
 
$rawdata = curl_exec($ch);
curl_close($ch);
$data = explode('"', $rawdata);
$data = explode(' ', $data['3']);
$var = $data['0'];
return round($var,3);
}

 public function weather(){
  

  $url = "http://api.weatherstack.com/current?access_key=e17919b18ad114e4be90288ad1f2f73a&query=london";
 // $url = "https://api.openweathermap.org/data/2.5/forecast?q=indore,IN&APPID=62f6de3f7c0803216a3a13bbe4ea9914&units=metric";
  $json=file_get_contents($url);
  $data=json_decode($json,true);

  echo '<pre>';
  
  print_r($data); 
  /*print_r($data['weather']['list'][0]['dt_txt']); */

}

}

