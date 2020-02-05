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
          $data=array(
            'email'=>$this->input->post('email',true),
            'status'=>1,
            'deleted'=>1,
            'created_at'=>date('Y-m-d H:i:s')
          );
        $res=$this->db->insert('tbl_subcribe_email',$data);

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
        }
        else{
          $data=array(
            'email'=>$this->input->get('email',true),
            'status'=>1,
            'deleted'=>1,
            'created_at'=>date('Y-m-d H:i:s')
          );

        $res=$this->db->insert('tbl_subcribe_email',$data);
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
        $banner  = $this->db->get_where('slider', array(
            'slider_status' => 1
        ))->result();
        
        if (!empty($banner)) {
            
            $response_array['status']  = 1;
            $response_array['message'] = 'Data found successfully.';
            $response_array['img_url'] ='https://royalcg.com/images/banner/';
            $response_array['data']    = $banner;
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
        $banner  = $this->db->get_where('subcategory', array(
           'pro_catid'=>1, 'subcate_status' => 1
        ))->result();
        
        if (!empty($banner)) {
            
            $response_array['status']  = 1;
            $response_array['message'] = 'Data found successfully.';
           //$response_array['img_url'] ='http://royalcg.com/demo/images/banner/';
            $response_array['data']    = $banner;
        } else {
            $response_array['status']  = 0;
            $response_array['message'] = 'Can not found';
        }        
        $json_response_array = json_encode($response_array);
        print_r($json_response_array);
    }

    public function get_product_list(){
     if(($this->input->post('subcategory_id') == null) && ($this->input->get('subcategory_id') == null)){
        $response=array(
            'status'=>'errror',
            'msg'=>'Id required'

        );
        echo json_encode($response);
        exit;

     }
     if($this->input->post('subcategory_id')!==null){
          $res = $this->db->get_where('product', array(
        "pro_subcatid" => $this->input->post('subcategory_id',true),              
              "pro_status" =>"1",
            ))->result();
          if(!empty($res)){
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
      if($this->input->get('subcategory_id')!==null){
          $res = $this->db->get_where('product', array(
        "pro_subcatid" => $this->input->get('subcategory_id',true),              
              "pro_status" =>"1",
            ))->result();
          if(!empty($res)){
          $response=array(
          'status'=>'success',
          'msg'=>'Data found successfully.',
          'img_url'=>'https://royalcg.com/images/listing/',
          'data'=>$res
          );
        echo json_encode($response);
        
     }
     }
    }

      public function get_recommanded_city_list()
    {
        $response_array = array();
        $data  = $this->db->get_where('tbl_city', array(
           'city_status'=>1
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
    
     public function get_destination_list()
    {
        $response_array = array();
        $data  = $this->db->get_where('destinations', array(
           'destinations_status'=>1
        ))->result();
        
        if (!empty($data)) {
            
            $response_array['status']  = 1;
            $response_array['message'] = 'Data found successfully.';
            $response_array['img_url'] ='http://royalcg.com/images/';
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
          $res[0]->latitude='24.428400';
          $res[0]->longitude='54.467793';
          $response=array(
            'status'=>'success',
            'msg'=>$res[0]
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
    $res=$this->db->get_where('tbl_city',array('city_status'=>1))->result();
    echo "";
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
            'msg'=>'something wrong try again'
           );
           echo json_encode($response);
           }
       }

                     function get_services(){
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
        if(($this->input->post('pro_id')=='')&&($this->input->get('pro_id')=='')){
          $response=array(
           'status'=>'error',
           'msg'=>'Product id required '
          );
          echo json_encode($response);
          
        }
        if($this->input->post('pro_id')==!null){
          $res=array();
          $res=$this->db->get_where('product',array('pro_id'=>$this->input->post('pro_id',true)))->result();


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
        else{
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

        }

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
          $data['url']='http://royalcg.com/details';
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
        $this->form_validation->set_rules('country', 'Country', 'required|alpha');
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
        if(($this->input->get('product_id')==null)&&($this->input->get('username')==null)&&($this->input->get('rating')==null)&&($this->input->get('country')==null)&&($this->input->get('comment')==null)){
          $response=array(
            'status'=>'error',
            'msg'=>'All fields are required'
          );
          echo json_encode($response);
          exit;

        }
        else{
             $data=array(
            'product_id'=>$this->input->get('product_id',true),
            'username'=>$this->input->get('username',true),
            'rating'=>$this->input->get('rating',true),
            'country'=>$this->input->get('country',true),
            'comment'=>$this->input->get('comment',true),
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
          }
          else{
             $response=array(
              'status'=>'error',
              'msg'=>'Something wrong try again'
            );
            echo json_encode($response);
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
       if(($this->input->post('city_id',true)==null)&&($this->input->get('city_id',true)==null)){
       $response=array(
        'status'=>'error',
        'msg'=>'City is is required'
       );
       echo json_encode($response);
       exit;
     }
     if($this->input->post('city_id',true)==!null){
      $res=$this->db->get_where('tbl_events',array('city_id'=>$this->input->post('city_id',true)))->result();
      if(!empty($res)){
        $response=array(
          'status'=>'success',
          'url'=>'https://royalcg.com/images/',
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
      $res=$this->db->get_where('tbl_events',array('city_id'=>$this->input->get('city_id',true)))->result();
      if(!empty($res)){
        $response=array(
          'status'=>'success',
          'url'=>'https://royalcg.com/images/',
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


      }


      function product_booknow()
      {

        $this->form_validation->set_rules('product_id', 'Product ID ', 'required|numeric');
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
          'category'=>$this->input->post('product_id',true),
          'message'=>$this->input->post('message',true),
          'status'=>1,
          'created_at'=>date('Y-m-d H:i:s')
        );
          $res=$this->db->insert('enquiries_form',$data);

          if($res > 0){
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
                  'msg'=>'Email  sent successfully'
                   );
                echo json_encode($response);
                 exit;
              }
          }


                  }

                  // if((($this->input->get('name',true)==null)&&($this->input->get('email',true)==null)&&($this->input->get('contact',true)==null)&&($this->input->get('city',true)==null)&&($this->input->get('product_id',true)==null)&&(this->input->get('message',true)==null)))
                  // {
                  //   echo "string";
                 

                  // }
                  if(($this->input->get('name',true)==null)&&($this->input->get('email',true)==null)&&($this->input->get('contact',true)==null)&&($this->input->get('city',true)==null)&&($this->input->get('product_id',true)==null)&&($this->input->get('message',true)==null)){
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
                      'category'=>$this->input->get('product_id',true),
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

    


}
?>