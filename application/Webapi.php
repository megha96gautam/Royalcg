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

      public function get_banner_list()
    {
        $response_array = array();
        $banner  = $this->db->get_where('slider', array(
            'slider_status' => 1
        ))->result();
        
        if (!empty($banner)) {
            
            $response_array['status']  = 1;
            $response_array['message'] = 'Data found successfully.';
            $response_array['img_url'] ='http://royalcg.com/demo/images/banner/';
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
          'img_url'=>'http://royalcg.com/demo/images/listing/',
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
          'img_url'=>'http://royalcg.com/demo/images/listing/',
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
            $response_array['img_url'] ='http://royalcg.com/demo/images/';
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
            $response_array['img_url'] ='http://royalcg.com/demo/images/';
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
      $res=$this->db->select('id,page_id,page_title,service_icon')->get_where('pages_detail',array('menu_status'=>1))->result();
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
         
          foreach ($res as $key => $value) 
          {
            $res[$key]->review = $review_count;
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
          foreach ($res as $key => $value) 
          {
            $res[$key]->review = $review_count;
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
          $data['url']='http://royalcg.com/demo/details';
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
          $data['url']='http://royalcg.com/demo/details';
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
        $response_array = array();
        
        if ($_POST && $_POST != "") {

            if ($this->input->post('product_id') == "") {
                $response_array['status'] = "0";
                $response_array['message']   = "Product Id  Required";
            } 
           
            else{ 
           
            $emp = $this->db->get_where('product', array(
              "pro_id" =>$this->input->post('product_id'),
              
            ))->row();

             $data = array(
                'image1' => $emp->pro_thumb,
                'image2' => $emp->pro_header,
                'image3' => $emp->pro_inner,
                'image4' => $emp->image1,
                'image5' => $emp->image2,
                'image6' => $emp->image3,
             );

           
            if (!empty($data)) {
                
                $response_array['status']  = 1;
                $response_array['message'] = 'Data found successfully.';
                $response_array['data']    = $data;
            } else {
                $response_array['status']  = 0;
                $response_array['message'] = 'Can not found';
            }
        }

        } else {
            $response_array['status']  = 0;
            $response_array['message'] = 'Blank input .';
        }
        
        $json_response_array = json_encode($response_array);
        print_r($json_response_array);
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