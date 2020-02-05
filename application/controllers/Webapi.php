<?php
defined("BASEPATH") OR exit("path not defined");



class Webapi extends CI_Controller
{
    
    function __construct()
    {
        
        parent::__construct();
        
        $this->load->helper(array(
            'form',
            'url'
        ));
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->library('email');
        $this->load->library('session');
        $this->load->model('webapi_model','w');
        $this->form_validation->set_error_delimiters('', '');
        date_default_timezone_set("Asia/Kolkata");
    }
    
    
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function car_modal()
    {
       $this->load->view('webcar_view');
    }
     public function hotel_modal()
    {
       
        $this->load->view('webhotel_view');
    }

    public function service_web($ab,$id)
    {
      /*print_r($id); die();*/
        /* print_r($data); die();*/
        $data['details']=$this->db->get_where('pages_detail', array('id'=>$id))->row();
        $data['slider']=$this->db->get_where('tbl_serviceslider', array('service_id'=>$id, 'slider_status'=>1))->result();
        $data['cities'] = $this->db->get_where('tbl_city', array('city_status' =>1))->result();
        /* print_r($id); die();*/
         $this->load->view('mobile_webview/header', $data);
        $this->load->view('mobile_webview/service_details', $data);
        $this->load->view('mobile_webview/footer', $data);
    }
     public function aboutus_webview()
    {
      
        $data['about']=$this->db->get_where('pages_detail', array('id'=>18))->row();
       
         $data['teams']=$this->db->get_where('teams', array('status'=>'1'))->result();
        $data['cities'] = $this->db->get_where('tbl_city', array('city_status' =>1))->result();
        $this->load->view('mobile_webview/header');
        $this->load->view('mobile_webview/about_us_web', $data);
        $this->load->view('mobile_webview/footer');
    }
     public function privacyAndpolicy()
    {
      
        $data['privacy']=$this->db->get_where('pages_detail', array('id'=>15))->row();
       
         $data['teams']=$this->db->get_where('teams', array('status'=>'1'))->result();
        $data['cities'] = $this->db->get_where('tbl_city', array('city_status' =>1))->result();
        $this->load->view('mobile_webview/header', $data);
        $this->load->view('mobile_webview/privacy_policy', $data);
        $this->load->view('mobile_webview/footer', $data);
    }

    public function TermsOrcondition()
    {
      
        $data['tandc']=$this->db->get_where('pages_detail', array('id'=>17))->row();
        $this->load->view('mobile_webview/header', $data);
        $this->load->view('mobile_webview/terms_and_conditions', $data);
        $this->load->view('mobile_webview/footer', $data);
    }

    function get_deals(){
      $this->load->view('deals_view');
    }



    function subscribtion(){
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if($this->form_validation->run()==false){
          $response=array(
            'status'=>'error',
            'msg'=>validation_errors()
          );
          echo json_encode($response);
          exit;
        }
        else{
        if(($this->input->post('email',true)==!null)){
          $email_check=$this->db->get_where('tbl_subcribe_email',array('email'=>$this->input->post('email',true),'status'=>'1'))->result();
          if(empty($email_check)){

          $data=array(
            'email'=>$this->input->post('email',true),
            'status'=>1,
            'deleted'=>1,
            'created_at'=>date('Y-m-d H:i:s')
          );
        $res=$this->db->insert('tbl_subcribe_email',$data);

        if(!empty($res)){
            $this->load->library('email');
            $data=array();
            $message=$this->load->view('website/subscribe_email','',true);
            $config=array(
              'charset'=>'utf-8',
              'wordwrap'=> TRUE,
              'mailtype' => 'html'
              );
            $this->email->initialize($config);
            $this->email->from('group@roylacg.com', 'RoyalCg User Subscribe');
            $this->email->to($this->input->post('email',true));
            $this->email->subject('RoyalCg');
            $this->email->message($message);
            $this->email->send();
            if ($this->email->send(FALSE))
              {
                $response=array(
                  'status'=>'error',
                  'msg'=>'Something wrong try again '
                   );
                echo json_encode($response);
                exit;
              }
              else{
                $response=array(
                  'status'=>'success',
                  'msg'=>'Subscribtion successfully'
                   );
                echo json_encode($response);
                 exit;
              }


        }
      }else{
        $response=array(
                  'status'=>'error',
                  'msg'=>'Allready Subscribed'
                   );
                echo json_encode($response);

      }
        }
        else{
          $email_check=$this->db->get_where('tbl_subcribe_email',array('email'=>$this->input->get('email',true),'status'=>'1'))->result();
          if(empty($email_check)){
          $data=array(
            'email'=>$this->input->get('email',true),
            'status'=>1,
            'deleted'=>1,
            'created_at'=>date('Y-m-d H:i:s')
          );

        $res=$this->db->insert('tbl_subcribe_email',$data);
        if(!empty($res)){

          $this->load->library('email');
            $data=array();
            $message=$this->load->view('website/subscribe_email','',true);
            $config=array(
              'charset'=>'utf-8',
              'wordwrap'=> TRUE,
              'mailtype' => 'html'
              );
            $this->email->initialize($config);
            $this->email->from('group@roylacg.com', 'RoyalCg User Subscribe');
            $this->email->to($this->input->get('email',true));
            $this->email->subject('RoyalCg');
            $this->email->message($message);
            $this->email->send();
            if ($this->email->send(FALSE))
              {
                $response=array(
                  'status'=>'error',
                  'msg'=>'Something wrong try again '
                   );
                echo json_encode($response);
                exit;
              }
              else{
                $response=array(
                  'status'=>'success',
                  'msg'=>'Subscribtion successfully'
                   );
                echo json_encode($response);
                 exit;
              }


        }
      }else{
        $response=array(
                  'status'=>'error',
                  'msg'=>'Allready Subscribed'
                   );
                echo json_encode($response);

      }

        }
        }
        
      }


     function to_contact(){
$this->form_validation->set_rules('name', 'Name', 'required|alpha');
$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
$this->form_validation->set_rules('contact', 'Contact', 'required|numeric|exact_length[10]');
$this->form_validation->set_rules('service_id', 'Service  id', 'required|numeric');
if($this->form_validation->run()==false){
  $response=array(
    'status'=>'error',
    'msg'=>validation_errors()
  );
  echo json_encode($response);
  exit;
}
if(($this->input->post('name',true)==!null)&&($this->input->post('email',true)==!null)&&($this->input->post('contact',true)==!null)&&($this->input->post('service_id',true))==!null){
      $data=array(
        'first_name'=>$this->input->post('name',true),
        'email'=>$this->input->post('email',true),
        'mobile'=>$this->input->post('contact',true),
        'category_id'=>$this->input->post('service_id',true),
        );
      if($this->input->post('message',true)==!null){
        $data['message']=$this->input->post('message',true);
      }
      $res=$this->db->insert('contact_us',$data);
      if(!empty($res)){
            $this->load->library('email');
            $this->email->from('group@roylacg.com', 'Royal');
            $this->email->to($this->input->post('email',true));
            // $this->email->cc('another@another-example.com');
            // $this->email->bcc('them@their-example.com');
            $this->email->subject('Acknowledgement');
            $this->email->message('Confirmation mail');
            $this->email->send();
            if ($this->email->send(FALSE))
              {
                $response=array(
                  'status'=>'error',
                  'msg'=>'Email didn,t send'
                   );
                echo json_encode($response);
           
                      
              }
              else{
                $response=array(
                  'status'=>'success',
                  'msg'=>'We will reply you soon'
                   );
                echo json_encode($response);
                 exit;
              }

      }
      else{
        $response=array(
          'status'=>'error',
          'msg'=>'Something wrong try again'
        );
        echo json_encode($response);
        exit;
      }

    }
    else{
           $data=array(
        'first_name'=>$this->input->get('name',true),
        'email'=>$this->input->get('email',true),
        'mobile'=>$this->input->get('contact',true),
        'category_id'=>$this->input->get('service_id',true),
        );
      if($this->input->post('message',true)==!null){
        $data['message']=$this->input->get('message',true);
      }
      $res=$this->db->insert('contact_us',$data);
      if(!empty($res)){
        $this->load->library('email');
            $this->email->from('group@roylacg.com', 'Royal');
            $this->email->to($this->input->get('email',true));
            // $this->email->cc('another@another-example.com');
            // $this->email->bcc('them@their-example.com');
            $this->email->subject('Acknowledgement');
            $this->email->message('Confirmation mail');
            $this->email->send();
            if ($this->email->send(FALSE))
              {
                $response=array(
                  'status'=>'error',
                  'msg'=>'Email didn,t send'
                   );
                echo json_encode($response);
           
                      
              }
              else{
                $response=array(
                  'status'=>'success',
                  'msg'=>'We will reply you soon'
                   );
                echo json_encode($response);
                 exit;
              }

      }
      else{
        $response=array(
          'status'=>'error',
          'msg'=>'Something wrong try again'
        );
        echo json_encode($response);
        exit;
      }
    }


      }

      public function get_banner_list()
    {
        $response_array = array();
         if (isset($_POST) && !empty($_POST)) {
           if ($this->input->post('lang') == "") {
                $response_array['status'] = "0";
                $response_array['message']   = "Language Required";
            }else{
                $lang= $this->input->post('lang');
              if($lang == 'ar'){
                 $this->db->select('slider_id,arabic_title as banner_title,slider_image,slider_status');
                 }elseif ($lang == 'ru') {
                   $this->db->select('slider_id,russian_title as banner_title ,slider_image, slider_status');
                 }elseif ($lang == 'zh') {
                   $this->db->select('slider_id,chiness_title as banner_title,slider_image,slider_status');
                 }else{
                  $this->db->select('slider_id,banner_title,slider_image,slider_status');
                }
                  $this->db->from('slider');
                  $this->db->where('slider_status','1');
                  $banner= $this->db->get()->result();
              
                if (!empty($banner)) {
            
            $response_array['status']  = 1;
            $response_array['message'] = 'Data found successfully.';
            $response_array['img_url'] ='https://royalcg.com/images/banner/';
            $response_array['data']    = $banner;
        } else {
            $response_array['status']  = 0;
            $response_array['message'] = 'Can not found';
        } 
      }
               
        }else {
            $response_array['status'] = "0";
            $response_array['message']   = "Input Blank";
        }       
        $json_response_array = json_encode($response_array);
        print_r($json_response_array);
    }

     public function language_list()
    {
        $response_array = array();
        $language  = $this->db->get_where('language', array(
            'lang_status' => 1
        ))->result();
        
        if (!empty($language)) {
            
            $response_array['status']  = 1;
            $response_array['message'] = 'Data found successfully.';
            $response_array['data']    = $language;
        } else {
            $response_array['status']  = 0;
            $response_array['message'] = 'Can not found';
        }        
        $json_response_array = json_encode($response_array);
        print_r($json_response_array);
    }

      public function car_subcategory_list()
    {
        $response_array = array();
      if (isset($_POST) && !empty($_POST)) {
           if ($this->input->post('lang') == "") {
                $response_array['status'] = "0";
                $response_array['message']   = "Language Required";
            }else{
               $lang= $this->input->post('lang');
               if($lang == 'ar'){
                 $this->db->select('subcate_id,title_arabic as meta_title,subcate_status');
                 }elseif ($lang == 'ru') {
                   $this->db->select('subcate_id,title_russian as meta_title,subcate_status');
                 }elseif ($lang == 'zh') {
                   $this->db->select('subcate_id,title_chiness as meta_title,subcate_status');
                 } else{
                  $this->db->select('subcate_id,meta_title,subcate_status');
                  }
                  $this->db->from('subcategory');
                  $this->db->where('pro_catid','1');
                  $this->db->where('subcate_status','1');
                  $banner= $this->db->get()->result();
                  
        
        if (!empty($banner)) {
            
            $response_array['status']  = 1;
            $response_array['message'] = 'Data found successfully.';
           //$response_array['img_url'] ='http://royalcg.com/demo/images/banner/';
            $response_array['data']    = $banner;
        } else {
            $response_array['status']  = 0;
            $response_array['message'] = 'Can not found';
        }
        }
               
        }else {
            $response_array['status'] = "0";
            $response_array['message']   = "Input Blank";
        }         
        $json_response_array = json_encode($response_array);
        print_r($json_response_array);
    }

    public function get_product_list(){

     if($this->input->post('subcategory_id') == null){
        $response=array(
            'status'=>'errror',
            'msg'=>'Id required'
        );
        echo json_encode($response);
        exit;

     } elseif($this->input->post('lang') == null){
        $response=array(
            'status'=>'errror',
            'msg'=>'Language required'
        );
        echo json_encode($response);
        exit;
     }
     if($this->input->post('subcategory_id')!==null){
          $res=array();
           $lang= $this->input->post('lang');
               if($lang == 'ar'){
                 $this->db->select('pro_id,title_arabic as meta_title,pro_thumb,pro_header,pro_inner,image1,image2,image3,pro_status,desc_arabic as description ,product_likes,country_arabic as country ,city_arabic as city ,fb_url,ln_url,webname,tw_url,insta_url,product_pricing, product_likes');
                 }elseif ($lang == 'ru') {
                   $this->db->select('pro_id,title_russian as meta_title,pro_thumb,pro_header,pro_inner,image1,image2,image3,pro_status,desc_russian as description ,product_likes,country_russian as country ,city_russian as city, fb_url, ln_url, webname ,tw_url,insta_url,product_pricing,product_likes');
                 }elseif ($lang == 'zh') {
                   $this->db->select('pro_id,title_chiness as meta_title,pro_thumb,pro_header,pro_inner,image1,image2,image3,pro_status,desc_chiness as description ,product_likes,country_chiness as country ,city_chiness as city,fb_url,ln_url,webname,tw_url,insta_url,product_pricing,product_likes');
                 } else{
                  $this->db->select('pro_id,meta_title,pro_thumb,pro_header,pro_inner,image1,image2,image3,pro_status,meta_discription as description,country,city,fb_url,ln_url,webname,tw_url,insta_url,product_pricing,product_likes');
                  }
                $this->db->from('product');
                $this->db->where('pro_subcatid', $this->input->post('subcategory_id',true));
                $this->db->where('pro_status','1');
               $res= $this->db->get()->result();
          /* print_r($res[0]->pro_id); die();*/
          if(!empty($res)){
                  foreach ($res as  $value) {
                  /*  print_r($value->pro_id);*/
                       $review=$this->db->get_where('product_reviews',array('product_id'=>$value->pro_id))->result();
                     $val= $value->review_count=count($review);
                      $overall_rating = $this->db->query("SELECT AVG(rating) as average_rating from feedback where product_id='".$value->pro_id."' and feedback_status=1")->result();
                       $allrating=$overall_rating[0]->average_rating;
                           $aa=round($allrating, 1);                              
                           $rat=  $value->average_rating=$aa;                              
                  }    
            
          $response=array(
          'status'=>'success',
          'msg'=>'Data found successfully.',
          'img_url'=>'https://royalcg.com/images/listing/',
          'data'=>$res
        );
        echo json_encode($response);
        exit;
     }
     }
    
    }

      public function get_recommanded_city_list()
    {
        $response_array = array();
        if (isset($_POST) && !empty($_POST)) {
           if ($this->input->post('lang') == "") {
                $response_array['status'] = "0";
                $response_array['message']   = "Language Required";
            }else{
             
            $lang=$this->input->post('lang');
              if($lang == 'ar' ){
                  $this->db->select('city_id,city_arabic as city_name,city_image,city_icon,city_link,total_hotels,create_date,city_status, to_price as total_car');
              }elseif($lang == 'ru'){
                  $this->db->select('city_id,city_russian as city_name ,city_image,city_icon,city_link,total_hotels,create_date,city_status, to_price as total_car');
              }elseif($lang == 'zh' ){
                  $this->db->select('city_id,city_chiness as city_name,city_image,city_icon,city_link,total_hotels,create_date,city_status, to_price as total_car');
              }else{
                $this->db->select('city_id,city_name,city_image,city_icon,city_link,total_hotels,create_date,city_status, to_price as total_car');
              }

            
              $this->db->from('tbl_city');
              $this->db->where('city_status','1');
              $city= $this->db->get()->result();
        if (!empty($city)) {
            
            $response_array['status']  = 1;
            $response_array['message'] = 'Data found successfully.';
            $response_array['img_url'] ='https://royalcg.com/images/';
            $response_array['data']    = $city;
        } else {
            $response_array['status']  = 0;
            $response_array['message'] = 'Can not found';
        }  
        }
      }else {
            $response_array['status'] = "0";
            $response_array['message']   = "Input Blank";
        }    
        $json_response_array = json_encode($response_array);
        print_r($json_response_array);
    }
    
     public function get_destination_list()
    {
        $response_array = array();
        $data  = $this->db->get_where('destinations', array(
           'destinations_status'=>1
        ))->result();
        
        if (!empty($data)) {
            
            $response_array['status']  = 1;
            $response_array['message'] = 'Data found successfully.';
            $response_array['img_url'] ='https://royalcg.com/images/';
            $response_array['data']    = $data;
        } else {
            $response_array['status']  = 0;
            $response_array['message'] = 'Can not found';
        }        
        $json_response_array = json_encode($response_array);
        print_r($json_response_array);
    }
      /*public function get_city_list()
    {
        $response_array = array();
        $data  = $this->db->get_where('destinations', array(
           'destinations_status'=>1
        ))->result();
        
        if (!empty($data)) {
            
            $response_array['status']  = 1;
            $response_array['message'] = 'Data found successfully.';
            $response_array['img_url'] ='http://royalcg.com/demo/images/';
            $response_array['data']    = $data;
        } else {
            $response_array['status']  = 0;
            $response_array['message'] = 'Can not found';
        }        
        $json_response_array = json_encode($response_array);
        print_r($json_response_array);
    }*/

    function subcategory_product_list (){
        if($this->input->post('id')==!null){

    $this->form_validation->set_rules('id', 'Id', 'required');
              if ($this->form_validation->run() == false)
                {
                 $response=array(
                    'status'=>'error',
                    'msg'=>validation_errors()
                );
                 echo json_encode($response);
                 exit;
                 }

                 $res  = $this->db->get_where('subcategory', array(
                        'subcate_id' =>$this->input->post('id',true)
                    ))->result();  
                    
                    if(!empty($res)){
                        $response=array(
                        'status'=>'success',
                        'msg'=>$res
                );
                 echo json_encode($response);
                 exit;
                        
                }
            }
            else{

                 $res  = $this->db->get_where('subcategory', array(
                        'subcate_id' =>$this->input->get('id',true)
                    ))->result();  
                    
                    if(!empty($res)){
                        $response=array(
                        'status'=>'success',
                        'msg'=>$res
                );
                 echo json_encode($response);
                 exit;
                        
                }
            }
                  

           }


function get_contact($id=null){
        $res=array();
        $res=$this->db->get_where('contact_page',array('id !='=>$id))->result();
        if(!empty($res)){
          foreach ($res as $key => $value) {
            $res[$key]->id=$value->id;
            $res[$key]->copy_right=$value->copy_right;
            $res[$key]->linkdin=$value->linkdin;
            $res[$key]->twiter=$value->twiter;
            $res[$key]->email=$value->email;
            $res[$key]->email_plcae=$value->email_plcae;
            $res[$key]->address=$value->address;
            $res[$key]->facebook=$value->facebook;
            $res[$key]->gmail=$value->gmail;
            $res[$key]->mobile=$value->mobile;
            $res[$key]->valid_email=$value->valid_email;
            $res[$key]->insta=$value->insta;
            $res[$key]->latitude='24.428400';
            $res[$key]->longitude='54.467793';
            }


          // $res[0]->latitude='24.428400';
          // $res[0]->longitude='54.467793';
          $response=array(
            'status'=>'success',
            'msg'=>$res
          );
          echo json_encode($response);
          exit;
        }
        else{

           $response=array(
            'status'=>'error',
            'msg'=>'Data not found'
          );
          echo json_encode($response);
          exit;
        }

      }
           
    function get_cities(){
    $response_array = array();
        if (isset($_POST) && !empty($_POST)) {
           if ($this->input->post('lang') == "") {
                $response_array['status'] = "0";
                $response_array['message']   = "Language Required";
            }else{
             
            $lang=$this->input->post('lang');
              if($lang == 'ar' ){
                  $this->db->select('city_id,city_arabic as city_name,city_image,city_icon,city_link,total_hotels,create_date,city_status, to_price as total_car');
              }elseif($lang == 'ru'){
                  $this->db->select('city_id,city_russian as city_name ,city_image,city_icon,city_link,total_hotels,create_date,city_status, to_price as total_car');
              }elseif($lang == 'zh' ){
                  $this->db->select('city_id,city_chiness as city_name,city_image,city_icon,city_link,total_hotels,create_date,city_status, to_price as total_car');
              }else{
                $this->db->select('city_id,city_name,city_image,city_icon,city_link,total_hotels,create_date,city_status, to_price as total_car');
              }

            
              $this->db->from('tbl_city');
              $this->db->where('city_status','1');
              $city= $this->db->get()->result();
        if (!empty($city)) {
            
            $response_array['status']  = 1;
            $response_array['message'] = 'Data found successfully.';
            $response_array['img_url'] ='https://royalcg.com/images/';
            $response_array['data']    = $city;
        } else {
            $response_array['status']  = 0;
            $response_array['message'] = 'Can not found';
        }  
        }
      }else {
            $response_array['status'] = "0";
            $response_array['message']   = "Input Blank";
        }    
        $json_response_array = json_encode($response_array);
        print_r($json_response_array);
       }


   function get_services(){
    $response_array = array();
        if (isset($_POST) && !empty($_POST)) {
           if ($this->input->post('lang') == "") {
                $response_array['status'] = "0";
                $response_array['message']   = "Language Required";
            }else{
             
            $lang=$this->input->post('lang');
              if($lang == 'ar' ){
                  $this->db->select('P.id as service_id,P.service_icon  ,  P.title_arabic as page_title, S.page_status');
              }elseif($lang == 'ru'){
                  $this->db->select('P.id as service_id, P.service_icon  , P.title_russian as page_title,S.page_status');
              }elseif($lang == 'zh' ){
                  $this->db->select('P.id as service_id,P.service_icon , P.title_chiness as page_title, S.page_status');
              }else{
                $this->db->select('P.id as service_id, P.page_title, P.service_icon ');
              }
            
              $this->db->from("pages_detail P");
              $this->db->join('pages S','P.page_id = S.page_id');
              $this->db->where('S.page_status','1');
              $this->db->where('P.menu_status','1');
              $this->db->order_by("order_by", "asc");
              $res= $this->db->get()->result();
        if (!empty($res)) {
            
            $response_array['status']  = 1;
            $response_array['message'] = 'Data found successfully.';
            $response_array['img_url'] ='https://royalcg.com/images/';
            $response_array['data']    = $res;
        } else {
            $response_array['status']  = 0;
            $response_array['message'] = 'Can not found';
        }  
        }
      }else {
            $response_array['status'] = "0";
            $response_array['message']   = "Input Blank";
        }    
        $json_response_array = json_encode($response_array);
        print_r($json_response_array);
       }

 function get_servicess(){
      // $res=$this->db->select('id,page_id,page_title,service_icon')->get_where('pages_detail',array('menu_status'=>1))->result();

  $res=$this->db->select("pages_detail.*,pages.*")->from("pages_detail")->join('pages','pages_detail.page_id = pages.page_id', 'left')->where('pages_detail.menu_status',1)->where('pages.page_status',1)->order_by("order_by", "asc")->get()->result();
      if(!empty($res)){
        $response=array(
         'status'=>'success',
         'msg'=>$res
        );
        echo json_encode($response);
        exit;
       }
      }


      function get_product_detail(){
        if($this->input->post('pro_id')==''){
            $response=array(
           'status'=>'error',
           'msg'=>'Product id required '
          );
          echo json_encode($response);
          
        }elseif($this->input->post('lang')==''){
            $response=array(
           'status'=>'error',
           'msg'=>'Language  required '
          );
          echo json_encode($response);
        }else{
            $lang= $this->input->post('lang');
          $res=array();
           /* $res=$this->db->get_where('product',array('pro_id'=>$this->input->post('pro_id',true)))->result();*/
            if($lang == 'ar'){
               $this->db->select('pro_id,pro_thumb,pro_header,pro_inner,image1,image2,image3,pro_contactno,pro_status,title_arabic as meta_title,product_pricing,desc_arabic as description,product_likes,country_chiness as country ,city_chiness as city,fb_url,ln_url,webname,tw_url,insta_url');
            }elseif ($lang == 'ru') {
              $this->db->select('pro_id,pro_thumb,pro_header,pro_inner,image1,image2,image3,pro_contactno,pro_status,title_russian as meta_title,product_pricing, desc_russian as description,product_likes,country_chiness as country ,city_chiness as city,fb_url,ln_url,webname,tw_url,insta_url');
            }elseif ($lang == 'zh') {
              $this->db->select('pro_id,pro_thumb,pro_header,pro_inner,image1,image2,image3,pro_contactno,pro_status,title_chiness as meta_title,product_pricing, desc_chiness as description,product_likes,country_chiness as country ,city_chiness as city,fb_url,ln_url,webname,tw_url,insta_url');             
            }else{
              $this->db->select('pro_id,pro_thumb,pro_header,pro_inner,image1,image2,image3,pro_contactno,pro_status,meta_title,product_pricing,meta_discription as description,product_likes,country_chiness as country ,city_chiness as city,fb_url,ln_url,webname,tw_url,insta_url');
            }
            $this->db->from('product');
            $this->db->where('pro_id',$this->input->post('pro_id'));
           $res=  $this->db->get()->result();
          
        
          $review=$this->db->get_where('product_reviews',array('product_id'=>$this->input->post('pro_id',true)))->result();
          $review_count=count($review);
          ////for rating///

          $query1=$this->db->get_where('feedback',array('product_id'=>$this->input->post('pro_id',true),'rating'=>1))->result();
          $rating1_count=count($query1);

          $query2=$this->db->get_where('feedback',array('product_id'=>$this->input->post('pro_id',true),'rating'=>2))->result();
          $rating2_count=count($query2);

          $query3=$this->db->get_where('feedback',array('product_id'=>$this->input->post('pro_id',true),'rating'=>3))->result();
          $rating3_count=count($query3);

          $query4=$this->db->get_where('feedback',array('product_id'=>$this->input->post('pro_id',true),'rating'=>4))->result();
          $rating4_count=count($query4);

          $query5=$this->db->get_where('feedback',array('product_id'=>$this->input->post('pro_id',true),'rating'=>5))->result();
          $rating5_count=count($query5);
          
          

            $overall_rating = $this->db->query("SELECT AVG(rating) as average_rating from feedback where product_id='".$this->input->post('pro_id',true)."' and feedback_status=1")->result();
          
          $allrating=$overall_rating[0]->average_rating;
          
          $aa=(round($allrating, 1));
         
          
          /////end block code/////
          
          foreach ($res as $key => $value) 
          {
            $res[$key]->average_rating=$aa;
            $res[$key]->review = $review_count;
            $res[$key]->rating1 = $rating1_count;
            $res[$key]->rating2 = $rating2_count;
            $res[$key]->rating3 = $rating3_count;
            $res[$key]->rating4 = $rating4_count;
            $res[$key]->rating5 = $rating5_count;
            $res[$key]->images = array('pro_thumb' => $value->pro_thumb,'pro_header'=>$value->pro_header,'pro_inner'=>$value->pro_inner,'image1'=>$value->image1,'image2'=>$value->image2,'image3'=>$value->image3);
          }

                   if(!empty($res)){
            $response=array(
              'status'=>'success',
              'msg'=>$res
            );
            echo json_encode($response);
          }
          else{
            $response=array(
              'status'=>'error',
              'msg'=>'Data not found'
            );
            echo json_encode($response);
            exit;

          }
        }
        
      /*  else{
          $res=array();
          $res=$this->db->get_where('product',array('pro_id'=>$this->input->get('pro_id',true)))->result();
          $review=$this->db->get_where('product_reviews',array('product_id'=>$this->input->get('pro_id',true)))->result();
          $review_count=count($review);
          
          $query1=$this->db->get_where('feedback',array('product_id'=>$this->input->get('pro_id',true),'rating'=>1))->result();
          $rating1_count=count($query1);

          $query2=$this->db->get_where('feedback',array('product_id'=>$this->input->get('pro_id',true),'rating'=>2))->result();
          $rating2_count=count($query2);

          $query3=$this->db->get_where('feedback',array('product_id'=>$this->input->get('pro_id',true),'rating'=>3))->result();
          $rating3_count=count($query3);

          $query4=$this->db->get_where('feedback',array('product_id'=>$this->input->get('pro_id',true),'rating'=>4))->result();
          $rating4_count=count($query4);

          $query5=$this->db->get_where('feedback',array('product_id'=>$this->input->get('pro_id',true),'rating'=>5))->result();
          $rating5_count=count($query5);

          $overall_rating = $this->db->query("SELECT AVG(rating) as average_rating from feedback where product_id='".$this->input->get('pro_id',true)."' and feedback_status=1")->result();
          
          $allrating=$overall_rating[0]->average_rating;
          
          $aa=(round($allrating, 1));

          foreach ($res as $key => $value) 
          {
            $res[$key]->average_rating=$aa;
            $res[$key]->review = $review_count;
            $res[$key]->rating1 = $rating1_count;
            $res[$key]->rating2 = $rating2_count;
            $res[$key]->rating3 = $rating3_count;
            $res[$key]->rating4 = $rating4_count;
            $res[$key]->rating5 = $rating5_count;
            $res[$key]->images = array('pro_thumb' => $value->pro_thumb,'pro_header'=>$value->pro_header,'pro_inner'=>$value->pro_inner,'image1'=>$value->image1,'image2'=>$value->image2,'image3'=>$value->image3);
          }
          if(!empty($res)){
            $response=array(
              'status'=>'success',
              'msg'=>$res
            );
            echo json_encode($response);
          }
          else{
            $response=array(
              'status'=>'error',
              'msg'=>'Data not found'
            );
            echo json_encode($response);
            exit;

          }

        }*/

      }


      function service_section(){
           
           $this->load->view('website/test1');
      }


      function service_details(){

        if(($this->input->post('id')==null) && ($this->input->get('id'))==null){
          $response=array(
            'status'=>'error',
            'msg'=>'ID is required'
          );
          echo json_encode($response);
         exit;
       }
       if($this->input->post('id')==!null){
        $res=$this->db->get_where('pages_detail',array('id'=>$this->input->post('id',true)))->result();
        if(!empty($res)){
          $html_data=$res[0]->page_desc;
          $discription=strip_tags($html_data);
          $data=array();
          $data['id']=$res[0]->id;
          $data['page_id']=$res[0]->page_id;
          $data['page_lang_id']=$res[0]->page_lang_id;
          $data['footer_type']=$res[0]->footer_type;
          $data['page_title']=$res[0]->page_title;
          $data['page_heading']=$res[0]->page_heading;
          $data['page_desc']=$discription;
          $data['menu_status']=$res[0]->menu_status;
          $data['footer_status']=$res[0]->footer_status;
          $data['service_icon']=$res[0]->service_icon;
          $data['url']='https://royalcg.com/details';
          $response=array(
            'status'=>'success',
            'msg'=>$data
          );
          echo json_encode($response);
          }
          else{
             $response=array(
            'status'=>'error',
            'msg'=>'No data found'
          );
          echo json_encode($response);
          }
        }
        else{
          $res=$this->db->get_where('pages_detail',array('id'=>$this->input->get('id',true)))->result();
          if(!empty($res)){
          $html_data=$res[0]->page_desc;
          $discription=strip_tags($html_data);
          $data=array();
          $data['id']=$res[0]->id;
          $data['page_id']=$res[0]->page_id;
          $data['page_lang_id']=$res[0]->page_lang_id;
          $data['footer_type']=$res[0]->footer_type;
          $data['page_title']=$res[0]->page_title;
          $data['page_heading']=$res[0]->page_heading;
          $data['page_desc']=$discription;
          $data['menu_status']=$res[0]->menu_status;
          $data['footer_status']=$res[0]->footer_status;
          $data['service_icon']=$res[0]->service_icon;
          $data['url']='https://royalcg.com/details';
          $response=array(
            'status'=>'success',
            'msg'=>$data
          );
          echo json_encode($response);
        }
        else{
             $response=array(
            'status'=>'error',
            'msg'=>'No data found'
          );
          echo json_encode($response);
          }
        }
       


      }

      function get_city_detail(){

        if(($this->input->post('id',true)==null)&&($this->input->get('id',true)==null)){
          $response=array(
            'status'=>'error',
            'msg'=>'ID id required'

          );
          echo json_encode($response);
           }
           if($this->input->post('id',true)==!null){
            $res=$this->db->get_where('tbl_city',array('city_id'=>$this->input->post('id',true)))->result();
            if(!empty($res)){
              $response=array(
                'status'=>'success',
                'msg'=>$res
              );
              echo json_encode($response);
            }
            else{
              $response=array(
                'status'=>'error',
                'msg'=>'Data not found'
              );
              echo json_encode($response);

            }
           }
           else{
             $res=$this->db->get_where('tbl_city',array('city_id'=>$this->input->get('id',true)))->result();
            if(!empty($res)){
              $response=array(
                'status'=>'success',
                'msg'=>$res
              );
              echo json_encode($response);
            }
            else{
              $response=array(
                'status'=>'error',
                'msg'=>'Data not found'
              );
              echo json_encode($response);

            }

           }
      }

      function product_like(){
        if(($this->input->post('pro_id',true)==null)&&($this->input->get('pro_id',true))==null){

              $response=array(
                'status'=>'error',
                'msg'=>'Pro Id is required'
              );
              echo json_encode($response);
            }

            if($this->input->post('pro_id',true)==!null){
              $res=$this->db->get_where('product',array('pro_id'=>$this->input->post('pro_id',true)))->result();
              if(!empty($res)){
              $like=$res[0]->product_likes + 1;
              // echo $like;
              $query=$this->db->update('product',array('product_likes'=>$like),array('pro_id'=>$this->input->post('pro_id')));
              if($query >0){

                $response=array(
                  'status'=>'success',
                  'msg'=>$like
                );
                echo json_encode($response);
              }
              else{
                 $response=array(
                  'status'=>'error',
                  'msg'=>'Something Wrong tru again'
                );
                echo json_encode($response);

              }
            }
              else{
                $response=array(
                'status'=>'error',
                'msg'=>'Data not found'
              );
              echo json_encode($response);

              }

            }
            else{
               $res=$this->db->get_where('product',array('pro_id'=>$this->input->get('pro_id',true)))->result();
              if(!empty($res)){
              $like=$res[0]->product_likes + 1;
              echo $like;
              $query=$this->db->update('product',array('product_likes'=>$like),array('pro_id'=>$this->input->get('pro_id')));
              if($query >0){
                $response=array(
                  'status'=>'success',
                  'msg'=>$like
                );
                echo json_encode($response);
              }
              else{
                 $response=array(
                  'status'=>'error',
                  'msg'=>'Something Wrong tru again'
                );
                echo json_encode($response);

              }
            }
              else{
                $response=array(
                'status'=>'error',
                'msg'=>'Data not found'
              );
              echo json_encode($response);

              }

            }
      }

      function product_feedback(){

        $this->form_validation->set_rules('product_id', 'Product ID ', 'required|numeric');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('rating', 'Rating', 'required|numeric');
        $this->form_validation->set_rules('comment', 'Comment', 'required');
        if($this->form_validation->run()==false){
          $response=array(
            'status'=>'error',
            'msg'=>validation_errors()
          );
          echo json_encode($response);
        }
        else{
          $data=array(
            'product_id'=>$this->input->post('product_id',true),
            'username'=>$this->input->post('username',true),
            'rating'=>$this->input->post('rating',true),
            'country'=>$this->input->post('country',true),
            'comment'=>$this->input->post('comment',true),
            'feedback_status'=>1,
            'created_at'=>date('Y-m-d H:i:s')
          );
          $res=$this->db->insert('feedback',$data);
          if($res > 0){
            $response=array(
              'status'=>'success',
              'msg'=>'Thank you for your feedback'
            );
            echo json_encode($response);
            exit;
          }
          else{
             $response=array(
              'status'=>'error',
              'msg'=>'Something wrong try again'
            );
            echo json_encode($response);
            exit;
          }

        }
     
      }

   public function product_images()
    {
        

     if(($this->input->post('product_id',true)==null)&&($this->input->get('product_id',true))==null){
      $response=array(
        'status'=>'error',
        'msg'=>'Product id is required'
      );
      echo json_encode($response);
     exit;
     }
     if(($this->input->post('product_id',true))==!null){
      $res=$this->db->get_where('product',array('pro_id'=>$this->input->post('product_id',true)))->result();

      if(!empty($res)){
        $data=array();

        $data[0]['image1'] = $res[0]->pro_thumb;
        $data[0]['image2'] = $res[0]->pro_header;
        $data[0]['image3'] = $res[0]->pro_inner;
        $data[0]['image4'] = $res[0]->image1;
        $data[0]['image5'] = $res[0]->image2;
        $data[0]['image6'] = $res[0]->image3;
        
           $response=array(
           'status'=>'success',
              'msg'=>$data
        );
       echo json_encode($response);
       exit;

      }else{
           $response=array(
           'status'=>'error',
              'msg'=>'Data not found'
        );
       echo json_encode($response);
       exit;

      }
     
     }
     else{
      $res=$this->db->get_where('product',array('pro_id'=>$this->input->get('product_id',true)))->result();

      if(!empty($res)){
        $data=array();

        $data[0]['image1'] = $res[0]->pro_thumb;
        $data[0]['image2'] = $res[0]->pro_header;
        $data[0]['image3'] = $res[0]->pro_inner;
        $data[0]['image4'] = $res[0]->image1;
        $data[0]['image5'] = $res[0]->image2;
        $data[0]['image6'] = $res[0]->image3;
        
           $response=array(
           'status'=>'success',
              'msg'=>$data
        );
       echo json_encode($response);
       exit;

      }else{
           $response=array(
           'status'=>'error',
              'msg'=>'Data not found'
        );
       echo json_encode($response);
       exit;

      }
     }


    }

    
          function product_rating(){
        if(($this->input->post('product_id',true)==null)&&($this->input->get('product_id',true)==null)){
          $response=array(
            'status'=>'error',
            'msg'=>'Product id is required '

          );
          echo json_encode($response);
          exit;
        }

        if($this->input->post('product_id',true)==!null){
          $res=$this->db->get_where('feedback',array('product_id'=>$this->input->post('product_id',true)))->result();
          if(!empty($res)){
            $response=array(
              'status'=>'success',
              'msg'=>$res
               );
            echo json_encode($response);
            exit;
          }
          else{
            $response=array(
              'status'=>'error',
              'msg'=>'Data not found'
               );
            echo json_encode($response);
            exit;
          }
        }
        else{
          $res=$this->db->get_where('feedback',array('product_id'=>$this->input->get('product_id',true)))->result();
          if(!empty($res)){
            $response=array(
              'status'=>'success',
              'msg'=>$res
               );
            echo json_encode($response);
            exit;
          }
          else{
            $response=array(
              'status'=>'error',
              'msg'=>'Data not found'
               );
            echo json_encode($response);
          }

        }
      }

     function get_event(){
      $response_array = array();
        if (isset($_POST) && !empty($_POST)) {
          if ($this->input->post('city_id') == "") {
                $response_array['status'] = "0";
                $response_array['message']   = "City Id Required";
            } elseif ($this->input->post('lang') == "") {
                $response_array['status'] = "0";
                $response_array['message']   = "Language Required";
            }else{
             
            $lang=$this->input->post('lang');
              if($lang == 'ar' ){
                  $this->db->select('city_id,title_arabic as event_title ,event_image,address_arabic as address, desc_arabic as event_description ,created_at,event_status , from_date , to_date');
              }elseif($lang == 'ru'){
                  $this->db->select('city_id,title_russian as event_title ,event_image,address_russian as address, desc_russian as event_description, created_at ,event_status , from_date , to_date');
              }elseif($lang == 'zh' ){
                  $this->db->select('city_id,title_chiness as event_title,event_image, address_chiness as address, desc_chiness as event_description,created_at,event_status  , from_date, to_date');
              }else{
                $this->db->select('city_id,event_title,event_image,address,event_description,created_at ,event_status, from_date, to_date');
              }

            
              $this->db->from('tbl_events');
              $this->db->where('city_id',$this->input->post('city_id'));
              $this->db->where('event_status','1');
              $city= $this->db->get()->result();
        if (!empty($city)) {
            
            $response_array['status']  = 1;
            $response_array['message'] = 'Data found successfully.';
            $response_array['img_url'] ='https://royalcg.com/images/';
            $response_array['data']    = $city;
        } else {
            $response_array['status']  = 0;
            $response_array['message'] = 'Can not found';
        }  
        }
      }else {
            $response_array['status'] = "0";
            $response_array['message']   = "Input Blank";
        }    
        $json_response_array = json_encode($response_array);
        print_r($json_response_array);
     }

   


      function product_booknow()
      {

        $this->form_validation->set_rules('service_id', 'Service ID ', 'required|numeric');
        $this->form_validation->set_rules('name', 'Name', 'required|alpha');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('contact', 'Contact', 'required|exact_length[10]');
        $this->form_validation->set_rules('city', 'City', 'required|alpha');
        $this->form_validation->set_rules('message', 'Message', 'required');
         if($this->form_validation->run()==false){
          $response=array(
            'status'=>'error',
            'msg'=>validation_errors()
          );
          echo json_encode($response);
          exit;
        }
        else{
          $data=array(
          'name'=>$this->input->post('name',true),
          'email'=>$this->input->post('email',true),
          'contact'=>$this->input->post('contact',true),
          'city_id'=>$this->input->post('city',true),
          'category'=>$this->input->post('service_id',true),
          'message'=>$this->input->post('message',true),
          'status'=>1,
          'created_at'=>date('Y-m-d H:i:s')
        );
          $res=$this->db->insert('enquiries_form',$data);

          if($res > 0){
            $this->load->library('email');
            $msg['emaildata']= (object) array(
                        'name'=>$this->input->post('name'),
                        'email'=>$this->input->post('email'),
                        'contact'=>$this->input->post('contact'),
                        'city_id'=>$this->input->post('city'),
                        'message'=>$this->input->post('message')
                       );

            $message=$this->load->view('website/email_template',$msg,true);
            $config=array(
              'charset'=>'utf-8',
              'wordwrap'=> TRUE,
              'mailtype' => 'html'
              );
            $this->email->initialize($config);
            $this->email->from('group@roylacg.com', 'Thank you for enquiry');
            $this->email->to($this->input->post('email',true));
            $this->email->subject('RoyalCg');
            $this->email->message($message);
            $this->email->send();
            if ($this->email->send(FALSE))
              {
                $response=array(
                  'status'=>'error',
                  'msg'=>'Email didn,t send'
                   );
                echo json_encode($response);
           
                      
              }
              else{


            $this->load->library('email');

            $message=$this->load->view('website/email_admin_template',$msg,true);
            $config=array(
              'charset'=>'utf-8',
              'wordwrap'=> TRUE,
              'mailtype' => 'html'
              );
            // malik@uaet10.com
            $this->email->initialize($config);
            $this->email->from($this->input->post('email',true), 'User');
            $this->email->to('malik@uaet10.com');
            $this->email->subject('RoyalCg');
            $this->email->message($message);
            $this->email->send();
             if ($this->email->send(FALSE))
              {
                $response=array(
                  'status'=>'error',
                  'msg'=>'Email didn,t send'
                   );
                echo json_encode($response);
              }
              else{
                $response=array(
                  'status'=>'success',
                  'msg'=>'Email  sent successfully'
                   );
                echo json_encode($response);
                 exit;
                }
              }
          }


                  }

                  // if((($this->input->get('name',true)==null)&&($this->input->get('email',true)==null)&&($this->input->get('contact',true)==null)&&($this->input->get('city',true)==null)&&($this->input->get('product_id',true)==null)&&(this->input->get('message',true)==null)))
                  // {
                  //   echo "string";
                 

                  // }
                  if(($this->input->get('name',true)==null)&&($this->input->get('email',true)==null)&&($this->input->get('contact',true)==null)&&($this->input->get('city',true)==null)&&($this->input->get('service_id',true)==null)&&($this->input->get('message',true)==null)){
                    $response=array(
                      'status'=>'error',
                      'msg'=>'All fields are required'

                    );
                    echo json_encode($response);
                    exit;
                  }
                  else{
                    $data=array(
                      'name'=>$this->input->get('name',true),
                      'email'=>$this->input->get('email',true),
                      'contact'=>$this->input->get('contact',true),
                      'city_id'=>$this->input->get('city',true),
                      'category'=>$this->input->get('service_id',true),
                      'message'=>$this->input->get('message',true),
                      'status'=>1,
                      'created_at'=>date('Y-m-d H:i:s')
                    );
          $res=$this->db->insert('enquiries_form',$data);

          if($res > 0){
            $this->load->library('email');
            $this->email->from('group@roylacg.com', 'Royal');
            $this->email->to($this->input->get('email',true));
            // $this->email->cc('another@another-example.com');
            // $this->email->bcc('them@their-example.com');
            $this->email->subject('Acknowledgement');
            $this->email->message('Confirmation mail');
            $this->email->send();
            if ($this->email->send(FALSE))
              {
                $response=array(
                  'status'=>'error',
                  'msg'=>'Email didn,t send'
                   );
                echo json_encode($response);
           
                      
              }
              else{
                $response=array(
                  'status'=>'success',
                  'msg'=>'Email  sent successfully'
                   );
                echo json_encode($response);

              }
          }

                  }               
       
      }    
    public function enquiry_mobile(){
                
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
            $lang = $this->input->post('lang');
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
             $data['record']=$this->db->get_where('enquiries_form', array('id'=>$insert_id))->row();
             $data['emaildata']=$this->db->get_where('enquiries_form', array('id'=>$insert_id))->row();
             $data['url'] = base_url();
              $this->email->set_mailtype("html"); 
          $this->email->from('group@roylacg.com', 'RoyalCg');
          $this->email->to('votivephp.megha@gmail.com');
          $this->email->cc('another@another-example.com');
          $this->email->bcc('them@their-example.com');

          $this->email->subject('RoyalCg Inquiry');
          $body = $this->load->view('website/email_admin_template.php',$data,true);
            /*  echo ($body); die();*/
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
             
                  if($lang =='ar' ){
                    $this->session->set_flashdata('msg','تم إرسال نموذج الاستفسار بنجاح ...');
                      redirect(base_url().'webapi/service_details/'.$cate_id);
                  }elseif($lang =='ru' ){
                     $this->session->set_flashdata('msg','Форма запроса успешно отправлена ...');
                      redirect(base_url().'webapi/service_details/'.$cate_id);
                  }elseif($lang =='zh' ){
                     $this->session->set_flashdata('msg','查询表格已成功提交...');
                      redirect(base_url().'webapi/service_details/'.$cate_id);
                  }else{
                     $this->session->set_flashdata('msg','Enquiry form successfully submitted...');
                       redirect(base_url().'webapi/service_details/'.$cate_id);
                    }
                }else{
                  $this->session->set_flashdata('error','Please try again...');
                  redirect(base_url().'webapi/service_details/'.$cate_id);
             //echo "<script>alert('Please try again...');</script>";
          } 
    
      //$this->load->view('tamplate/footer',$data);
        //
   }


   function send_email(){
        $from_email = "group@roylacg.com";
        $to_email = "votivephp.megha@gmail.com";
        //Load email library
        $this->load->library('email');
        $this->email->from($from_email, 'EMAIL TEST');
        $this->email->to($to_email);
        $this->email->subject('Send Email RoyalCg');
        $this->email->message('<a href="https://www.royalcg.co/">Royalcg</a>');
        //Send mail
        if($this->email->send()){
          print_r("email send");
        }

   }

}
?>