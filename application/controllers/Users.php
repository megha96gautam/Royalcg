<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model("Users");
      
       /* $this->load->helper('custom_userdata');*/

        // Load the social library
        /*$this->load->library('facebook');*/
        /*$this->load->library('instagram_api');*/
        
        require_once APPPATH.'third_party/src/Google_Client.php';
        require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';
        
        $this->config->load('google');
       
    }



  public function google_login() {
         /* print_r("megha gautam");
          die();*/
        $clientId = $this->config->item('google_client_id'); //Google client ID
        $clientSecret = $this->config->item('google_client_secret'); //Google client secret
        $redirectURL = $this->config->item('google_redirect_uri');
        
        //Call Google API
        $gClient = new Google_Client();
        $gClient->setApplicationName('Login');
        $gClient->setClientId($clientId);
        $gClient->setClientSecret($clientSecret);
        $gClient->setRedirectUri($redirectURL);
        $google_oauthV2 = new Google_Oauth2Service($gClient);
        
        if(isset($_GET['code'])) {
            $gClient->authenticate($_GET['code']);
            $_SESSION['token'] = $gClient->getAccessToken();
            header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
        }

        if (isset($_SESSION['token'])) {
            $gClient->setAccessToken($_SESSION['token']);
        }
        
        if ($gClient->getAccessToken()) {
            $userData = array();
            $uname = '';
            $gmUserProfile = $google_oauthV2->userinfo->get();
            //echo "<pre>"; print_r($gmUserProfile); die;

            // Preparing data for database insertion
            $userData['oauth_provider'] = 'gmail';
            $userData['oauth_uid'] = $gmUserProfile['id'];
            $userData['firstname'] = $gmUserProfile['given_name'];
            $userData['lastname'] = $gmUserProfile['family_name'];
            $userData['email'] = $gmUserProfile['email'];

            // $uname = explode('@', $userData['email']);
            // $userData['username'] = $uname[0];
            $userData['username'] = $this->generateRandomUsername();
            $userData['gender'] = '';

            $userData['profile_image'] = $gmUserProfile['picture'];
            $userData['status'] = 1;
            //$userData['locale'] = $gmUserProfile['locale'];
            //$userData['cover'] = $gmUserProfile['cover']['source'];
            //$userData['link'] = $gmUserProfile['link'];

            // Insert or update user data
            $userID = $this->Users->checkUser($userData);

            // Check user data insert or update status
            if(!empty($userID)) {
                $data['userData'] = $userData;
                $this->session->set_userdata('userData',$userData);
                $this->session->set_userdata('isUserLoggedIn',TRUE);
                redirect('/');
            } else {
               $data['userData'] = array();
            }
        } else {
            $url = $gClient->createAuthUrl();
            header("Location: $url");
            exit;
        }
    }

    public function social_logout() {
        // Remove local Facebook session
      //  $this->facebook->destroy_session();
        // Remove user data from session
          $ses='5';
         if($this->session->flashdata('manageSession') > 0){
            $ses=$this->session->flashdata('manageSession'); 
         }
         $this->session->unset_userdata('userData');
         $this->session->sess_destroy();
      
          if($ses == 4){
              redirect('?atv=deactive');
          } else if($ses == 3){
              redirect('?atv=acountdelete');
          } else{
              redirect('/');
          }
          
        // Redirect to login page
    }

    public function ForgetPassword() {
        $data = array();
        $data['error_msg']="";
        $data['success_msg'] = "";
        
        $con = array(
            'uname'=>$this->input->post('forgot_user')
        );
        $checkLogin = $this->User->checkRow($con);
        if($checkLogin['role_id'] != 1 && !empty($checkLogin['email'])){
            if($checkLogin['status'] == 0){
                $data['error_msg'] = $this->lang->line('label_52');
            } else {
                $reset_link = $this->generateRandomString();
                $where_condition = array('id' => $checkLogin['id']);
                $upd = $this->login_model->updateRecords('gb_users',array('act_link' => $reset_link),$where_condition);
                if($upd >=1)
                $message = "Please click on the below link to reset your password.<br><a href='".base_url()."reset/password/".$reset_link."'> Reset Password</a><br>";
                //$row3 =  $this->Admin_model->get_data('email_templates',array('eid'=>3));
                $to = $checkLogin['email'];
                $subject = "Forgot password request";
                //$message = $row3[0]->content;
                //$message = str_replace("{msginner}",$msginner,$message);
                //$message = str_replace("{base_url}",base_url(),$message);
                //$message = str_replace("{email}",$email,$message);
                //$message = str_replace("{temppass}",$temppass,$message);
                sendEmail($to, $subject, $message);
                //echo $x;
                $data['success_msg'] = $this->lang->line('label_53');
            }
        } else {
            $data['error_msg'] = $this->lang->line('label_54');
        }

        if (!empty($data['success_msg'])) {
            echo json_encode(array("status"=>1, "msg"=>$data['success_msg']));
        } else {
            echo json_encode(array("status"=>0, "msg"=>$data['error_msg']));
        }
    }


        public function check_email_exists() {
        if ($this->input->post("reg_email") != '') {
            $email=$this->input->post("reg_email");
             $check = $this->User->countwhereuser('gb_users',array("email"=>$email, "status !="=>3));
            if ($check==0) {
                die('true');
            } else {
                die('false');        
            }
        }
    }

    public function UpdateNotification(){
            $id = $_POST['id'];
            $status = $_POST['status'];
            if($status == 1){
                $status = 2;
            }else{
               $status = 1;
            }

            $con = array( $id=> $status );
     $return = $this->login_model->updateRecords("gb_users", $con, array('id'=> $this->session->userdata('user_id')));
           
            if($return > 0){
                echo json_encode(array('status'=>1, 'msg'=>'Notification Status Updated Successfully'));
            }else{
                echo json_encode(array('status'=>0, 'msg'=>'Something went wrong!'));
            }
  }



  
}