<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller {



        public $siteLang ='';

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

	public function index()
	{
	}

	function single_category($url){

		

	 $language = $this->siteLang_id;

		 if($url=='top-clinics'){

		  redirect('category/top-hospitals');

		 }

		 if($url=='top-luxury-tourism'){

		    redirect('category/things-to-do');

		 }

		 if($url=='top-jewelry-watches'){

		 redirect('category/top-jewelry');

		 }

		 if($url=='watches'){

		 redirect('category/top-watches');

		 }

		 if($url=='perfumes'){

		 redirect('category/top-perfumes');

		 }

		$this->db->select("*")  

	   ->from("category c") 

	   ->join('category_detail cd', 'c.cate_id = cd.cate_id', 'left') 

	   ->where('cd.cate_langid', language )
	   ->where('c.cate_status', 1 )

	   

	   ->where('c.meta_tag like binary',$url);	  

		$result = $this->db->get();
	    if($result->num_rows()==0){	

		$this->load->view('404');	

		}else{

	    $data['categories'] = $this->main_model->get_category( uae ,$language , 0 );
	     $data['category'] = $result->result_array();
		 $data['pages'] = $this->main_model->getpages(); 

	  	 $data['language'] = $this->main_model->get_language(); 

		 $data['home_content'] = $this->main_model->getHomecontent($language);
	   $this->load->view('category_view',$data);

	}

}

 function listing_uae($category,$other=null){
	if($other=='top-jewelry-watches'){
	     redirect('listings/top-jewelry');	}
	if($other=='DESERT-SAFARI'){
	     redirect('listings/things-to-do/desert-safari');
	}	
    if($category=='Luxury-Car-Renta'){
	     redirect('listings/luxury-car-rental/golden-limousine');
	}
	 if($category=='Luxury-Car-Rental'){
	     redirect('listings/luxury-car-rental/golden-limousine');
	}

	$this->db->select("*")
	->from("product")
	->where('meta_tag',$other ) ;
	$listingresultempty = $this->db->get()->result();
	//print_r($listingresultempty);die;
	$query = $this->db->get_where("category",array("meta_tag"=>$category));
	$row = $query->result();
	if($other==null){
		if(!empty($row)){
			$listingss = $this->main_model->getlisting_name($row[0]->cate_id);
				if(!empty($listingss)){
				redirect('listings/'.$category.'/'.$listingss[0]->meta_tag);
				}else{
					$this->load->view('404');
				}
		}else{
			$this->load->view('404');
		}            		

	}else if(empty($listingresultempty)) {
	$this->load->view('404');
	}else{
		 if($category=='top-clinics'){
		  redirect('listings/top-hospitals');
		 }
	 if($category=='top-luxury-tourism'){
		    redirect('listings/things-to-do');
	  }
		$language = $this->siteLang_id;
	    $data['pages'] = $this->main_model->getpages(); 
	     $data['categories'] = $this->main_model->get_category( uae ,$language , 0 );
	  	 $data['language'] = $this->main_model->get_language();	 
		 $data['home_content'] = $this->main_model->getHomecontent($language);
		 if(!$row){
		   $this->load->view('404');
		 }
		 else{
		  $this->db->select("*")  
	               ->from("category c")
                   ->where('c.meta_tag',$category );
				$cresult = $this->db->get();
				$data['singlecategory'] = $cresult->result();
				$id = $row[0]->cate_id;
				$data['title'] ='UAE Listing';
				$data['lists'] = $this->main_model->get_list($id , uae ,language);
				$data['categories'] = $this->main_model->get_category(uae ,language , 0);
		        $data['cat_url'] = base_url().'listings/';
	            $data['url'] = base_url().$category.'/';
				$data['listingmeta'] = '';

		/*next and prvious*/

		if($other !=null ){
			 $this->db->select("*")
			 ->from("product")
			 ->where('meta_tag',$other );
			 $listingresult = $this->db->get();
			 $listingresult1 = $listingresult->result();
			 $data['listingmeta'] = $listingresult1;
			 $listingid = $listingresult1[0]->sort;
		     $this->db->select("meta_tag,pro_id")
			 ->from("product") 
			 ->where("sort = (select min(sort) from product where sort>'".$listingid."' and pro_catid='".$id."' and pro_status=1 )")
			 ->where('pro_catid',$id)
			 ->limit(0,1);
			 $next = $this->db->get();
			 foreach($next->result() as $next){};
			 $data['next'] = base_url().'listings/'.$category.'/'.$next->meta_tag;
			 $this->db->select("meta_tag,pro_id")
			 ->from("product") 
			 ->where("sort = (select max(sort) from product where sort<'".$listingid."' and pro_catid='".$id."' and pro_status=1 )")
			 ->where('pro_catid',$id)
			 ->limit(0,1);
			 $prev = $this->db->get();
			 //echo $this->db->last_query();die;
			 foreach($prev->result() as $prev){};
			 $data['prev'] = base_url().'listings/'.$category.'/'.$prev->meta_tag;
			 }else{
		     $listingid = $data['lists'][0]['sort'];
		     $this->db->select("meta_tag,pro_id")
			 ->from("product") 
			 ->where("sort = (select min(sort) from product where sort>'".$listingid."' and pro_catid='".$id."' and pro_status=1 )")
			 ->where('pro_catid',$id)
			 ->limit(0,1);
			 $next = $this->db->get();
			 foreach($next->result() as $next){};
			 $data['next'] = base_url().'listings/'.$category.'/'.$next->meta_tag;	
		     $data['prev'] = '#';
			 $this->db->select("*")
			 ->from("product") 
			 ->where("sort = (select min(sort) from product where   pro_catid='".$id."'    )")
			 ->where('pro_catid',$id)
			 ->limit(0,1);
			 $listingmeta = $this->db->get()->result();
			 $data['listingmeta'] = $listingmeta;
		}
		$this->load->view('list_view',$data);
		}
	  }
	}
 function listing_uae1($category,$other=null){

		

		//$id = base64_decode($id);

		

	 if($category=='top-clinics'){

		  redirect('listings/top-hospitals');

		 }

		$query = $this->db->get_where("category",array("meta_tag"=>$category));

		

		$row = $query->result(); 

			     $language = $this->siteLang_id;

	

	     $data['pages'] = $this->main_model->getpages();

	   

	     $data['categories'] = $this->main_model->get_category( uae ,$language , 0 );

	   

	  	 $data['language'] = $this->main_model->get_language();

		 

		 $data['home_content'] = $this->main_model->getHomecontent($language);

		 if(!$row){

		 

		   $this->load->view('404');

		 }

		 else{ 

		 

		  $this->db->select("*")

	   

	    ->from("category c")

	   

	    ->where('c.meta_tag',$category );

		

		 $cresult = $this->db->get();

		 $data['singlecategory'] = $cresult->result();

		 

		 

		$id = $row[0]->cate_id;

	    $data['title'] ='UAE Listing';

	   

	    $data['lists'] = $this->main_model->get_list($id , uae ,language);



		$data['categories'] = $this->main_model->get_category(uae ,language , 0);

		

		//$data['cat_url'] = base_url().'uae/listing/';

		

		$data['cat_url'] = base_url().'listings/';

		

	    //$data['url'] = base_url().'uae/list_detail/';

		

	    $data['url'] = base_url().$category.'/';

		

		/*next and prvious*/

		if($other !=null ){

			 $this->db->select("*")

			 ->from("product")

			 ->where('meta_tag',$other ) ;

			 $listingresult = $this->db->get();

			 $listingresult1 = $listingresult->result();

			 $listingid = $listingresult1[0]->sort;

		     $this->db->select("meta_tag,pro_id")

			 ->from("product") 

			 ->where("sort = (select min(sort) from product where sort>'".$listingid."' and pro_catid='".$id."' and pro_status=1 )")

			 ->where('pro_catid',$id)

			 ->limit(0,1);			 

			 $next = $this->db->get();

			 foreach($next->result() as $next){};

			 $data['next'] = base_url().'listings1/'.$category.'/'.$next->meta_tag;

			 $this->db->select("meta_tag,pro_id")

			 ->from("product") 

			 ->where("sort = (select max(sort) from product where sort<'".$listingid."' and pro_catid='".$id."' and pro_status=1 )")

			 ->where('pro_catid',$id)

			 ->limit(0,1);

			 $prev = $this->db->get();

			 //echo $this->db->last_query();die;

			 foreach($prev->result() as $prev){};

			 $data['prev'] = base_url().'listings1/'.$category.'/'.$prev->meta_tag;

			 

			 

		}else{

		     $listingid = $data['lists'][0]['sort'];

		     $this->db->select("meta_tag,pro_id")

			 ->from("product") 

			 ->where("sort = (select min(sort) from product where sort>'".$listingid."' and pro_catid='".$id."' and pro_status=1 )")

			 ->where('pro_catid',$id)

			 ->limit(0,1);

			 $next = $this->db->get();

			 foreach($next->result() as $next){};

			 $data['next'] = base_url().'listings1/'.$category.'/'.$next->meta_tag;		

		     $data['prev'] = '#';

		}

		/*end next previous*/	

		

		$this->load->view('list_view1',$data);

		}

	}

	

	

 function listing_dubai($id){

		

		$id = base64_decode($id);

	    $data['title'] ='dubai Listing';

	   

	    $data['lists'] = $this->main_model->get_list($id , dubai ,language);

		

		$data['categories'] = $this->main_model->get_category(dubai ,language , 0);

		

		$data['cat_url'] = base_url().'dubai/listing/';

		

	    $data['url'] = base_url().'dubai/list_detail/';

		$this->load->view('list_view',$data);

		

	}



 function listing_abudhabi($id){

	 

		$id = base64_decode($id);

	    $data['title'] ='abudhabi Listing';

	   

	    $data['lists'] = $this->main_model->get_list($id , abudhabi ,language);

		

		$data['categories'] = $this->main_model->get_category(abudhabi ,language , 0);

		

		$data['cat_url'] = base_url().'abudhbabi/listing/';

	    $data['url'] = base_url().'abudhbabi/list_detail/';

		$this->load->view('list_view',$data);

		

	}	

	

	

	function listsingle_uae($catnmae,$listname){

		

          $language = $this->siteLang_id;

		

	    $query = $this->db->get_where("product",array("meta_tag"=>$listname));

		

		$row = $query->result(); 

		

		if(!$row){

		

		 $this->load->view('404');

		 

		}else{ 

		

		/*coomon content*/

		 $data['categories'] = $this->main_model->get_category( uae ,$language , 0 );



		 $data['pages'] = $this->main_model->getpages();

	  

	  	 $data['language'] = $this->main_model->get_language();

		 

		 $data['home_content'] = $this->main_model->getHomecontent($language);

		/* end common content */

		

		$id = $row[0]->pro_id;

		

		

		 $data['list'] = $this->main_model->get_listsingle($id , uae ,$language);

		

		 

	    $data['title'] ='Listing';

		

	    $data['footer'] ='Copyright © 2016 UAE Pty Limited';

	  

	    $data['image'] = base_url().'front_assets/images/thre_logo.png';

		

		$this->load->view('listview_single',$data); 

		

		}

		

	}

	

	

		function listsingle_dubai($id){

		

		$id = base64_decode($id);

		

		$data['list'] = $this->main_model->get_listsingle($id , dubai ,language);

		

	    $data['title'] ='Listing';

		$data['footer'] ='Copyright © 2016 Dubai Pty Limited';

	    $data['image'] = base_url().'front_assets/images/thre_logo.png';

		

		$this->load->view('listview_single',$data);

		

	}

	

		function listsingle_abudhabi($id){

		

		$id = base64_decode($id);

		

		$data['list'] = $this->main_model->get_listsingle($id , abudhabi ,language);

		

	

		

	    $data['title'] ='Listing';

		

	    $data['footer'] ='Copyright © 2016 Abudhabi Pty Limited';

		

	    $data['image'] = base_url().'front_assets/images/thre_logo.png';

	   

		$this->load->view('listview_single',$data);

		

	}

	

	function coming_soon(){

		

				

					$data = array();

		   if($this->input->post('submit') !=false){

			    $email = $this->input->post('email');

				 if($email==''){

					 

					 $data['error'] = 'Please Enter Email Id';

				 }else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){

					 

					 $data['error'] = 'Please Enter Valid Email Id';

				 }else{

					$to      = 'Alpha2inc@outlook.com';

					$subject = 'Subscribe';

					$from_email = $email;

					$msg = '<table>

					<tr><th>Email</th><td>'. $email.' </td></tr>				

					</table>';;

					$headers = "MIME-Version: 1.0" . "\r\n";

					$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

					$headers .= 'From: "'.$name.'"<"'.$from_email.'">' . "\r\n";

                if(mail($to, $subject, $msg,$headers)){

	                $data['error'] = 'Thank You For Connacting Us';

                }else{

	                $data['error'] = 'Mail Coulde not Sent';

                 }  

					 

					 

					 

				 }

		   }

		   $this->load->view('coming_soon',$data);

			

	

	}

	

public function contact(){

	 

	     $language = $this->siteLang_id;

	

	     $data['pages'] = $this->main_model->getpages();

	   

	     $data['categories'] = $this->main_model->get_category( uae ,$language , 0 );

	   

	  	 $data['language'] = $this->main_model->get_language();

		 

		 $data['home_content'] = $this->main_model->getHomecontent($language);

	       $this->load->view('contact_us',$data);

  }	

  /*

  function mailsend(){



if($_POST['email']){



$name = $this->input->post('name');

$email = $this->input->post('email');

$message = $this->input->post('message');



require 'PHPMailer/PHPMailerAutoload.php';



$mail = new PHPMailer;



$mail->isSMTP();                                   // Set mailer to use SMTP

$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers

$mail->SMTPAuth = true;                            // Enable SMTP authentication

$mail->Username = 'atultiwari9713@gmail.com';          // SMTP username

$mail->Password = 'Amit*tiwari'; // SMTP password

$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted

$mail->Port = 587;                                 // TCP port to connect to



$mail->setFrom($email, $email);



$mail->addAddress('votive.amit@gmail.com');   // Add a recipient

//$mail->addCC('cc@example.com');

//$mail->addBCC('bcc@example.com');



$mail->isHTML(true);  // Set email format to HTML





$bodyContent = '<table>

<tr><th>Name</th><td>'.$name.'</td></tr>

<tr><th>Email</th><td>'. $email.' </td></tr>

<tr><th>Message</th><td>'.$message.'</td></tr>

</table>';



$mail->Subject = 'Contact';

$mail->Body    = $bodyContent;

if(!$mail->send()) {

echo  'false';



} else {

echo   'true';

}











}

  }	*/

  

  function mailsend(){

$name = $this->input->post('name');

$email = $this->input->post('email');

$message = $this->input->post('message');

$category = $this->input->post('category');

$contact = $this->input->post('contact');

$to      = 'votivephp.nitin@gmail.com';

$subject = 'contact';

$from_email = $email;

$msg = '<table>

<tr><th>Name</th><td>'.$name.'</td></tr>

<tr><th>Email</th><td>'. $email.' </td></tr>

<tr><th>Contact</th><td>'. $contact.' </td></tr>

<tr><th>Category</th><td>'. $category.' </td></tr>

<tr><th>Message</th><td>'.$message.'</td></tr>

</table>';

$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

$headers .= 'From: "'.$name.'"<"'.$from_email.'">' . "\r\n";

  if(mail($to, $subject, $msg,$headers)){

	  

	  echo "true";

  }else{

	  echo "false";

  }  

} 

	

 function display_page($url){

	 

	     $language = $this->siteLang_id;

	

	     $data['pages'] = $this->main_model->getpages();

	   

	     $data['categories'] = $this->main_model->get_category( uae ,$language , 0 );

	   

	  	 $data['language'] = $this->main_model->get_language();

		 

		 $data['home_content'] = $this->main_model->getHomecontent($language);



		$this->db->select("*")

	    ->from("pages p")

		->join("pages_detail pd" ,"p.page_id=pd.page_id","left");

		$this->db->where('page_status',1);

		$this->db->where('page_url',$url);

	    $result = $this->db->get();	

		 if($result->num_rows()){

        $data['page'] = $result->result_array();

        $this->load->view('display_page',$data);

		 }else{

			$this->load->view('404'); 

		 }

	 

 }

 

function fb_campaign(){

	

	     $this->load->helper('resize');

	

	     $language = $this->siteLang_id;

	

	     $data['pages'] = $this->main_model->getpages();

	   

	     $data['categories'] = $this->main_model->get_category( uae ,$language , 0 );

	   

	  	 $data['language'] = $this->main_model->get_language();

		 

		 $data['home_content'] = $this->main_model->getHomecontent($language);

	

	

	 if($this->input->post('submit') !=false){

		 				

         $image = '';

				if(!empty($_FILES['image']['name'])){

				

		  $config['upload_path']   = './images/fb_comp/';

          $config['allowed_types'] = 'jpg|jpeg|png|gif';

	

       

         $this->load->library('upload', $config);

			

         if ( ! $this->upload->do_upload('image')) {

         

			

		  $error1 =  $this->upload->display_errors(); 



           }

			

         else { 

              $data1 =  $this->upload->data();

			 

			  $image = time().$data1['file_name'];

			  $thumb = './images/fb_comp/thumb/'.$image;

			  resize_image($data1,$thumb,200,200);

			  unlink('./images/fb_comp/'.$image);

			}

	      }			

           

		$name = $this->input->post('name');

		$email = $this->input->post('email');

		$contact = $this->input->post('contact');

		$city = $this->input->post('city');

		

		$insert['name'] = $name;

		$insert['email'] = $email;

		$insert['contact'] = $contact;

		$insert['city'] = $city;

		$insert['image'] = $image;

		$this->db->insert("fb_campaign",$insert);

		$to      = 't10dubai@gmail.com';

		

		$subject = 'fb-campaign';

		$from_email = $email;

		$msg = "<table>

		<tr><th>Name</th><td>$name</td></tr>

		<tr><th>Email</th><td> $email </td></tr>

		<tr><th>Contact</th><td>$contact</td></tr>

		<tr><th>City</th><td>$city</td></tr>

		";

		

		 if($image !=''){

		  $msg .= "<tr><th>Image</th><td><img src='https://www.uaet10.com/images/fb_comp/thumb/$image' alt='' /></td></tr>";

		

		  }

       	 $msg .="</table>";	  

		$headers = "MIME-Version: 1.0" . "\r\n";

		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		$headers .= 'From: "'.$name.'"<"'.$from_email.'">' . "\r\n";

  if(mail($to, $subject, $msg,$headers)){

	  echo "<script>alert('Thank You ..');</script>";

	 

	      redirect(base_url());

	 

  }else{

	   echo "<script>alert('Please try again...');</script>";

  } 

		 

		 

		 

	 }

	

	$this->load->view('fbcampaign',$data);

	

	

	

}





function fb_tmc(){

	     $language = $this->siteLang_id;

	

	     $data['pages'] = $this->main_model->getpages();

	   

	     $data['categories'] = $this->main_model->get_category( uae ,$language , 0 );

	   

	  	 $data['language'] = $this->main_model->get_language();

		 

		 $data['home_content'] = $this->main_model->getHomecontent($language);

		 

	     $this->load->view('fbtmc',$data);

	

} 

 

 

//1 september editing [fb free offer page]

 function fb_campaign_offer(){

	 

	 	   $this->load->helper('resize');

	 	 $language = $this->siteLang_id;

	

	       //submit format



		   // end submit form

	

	

	

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

		 

	     $this->load->view('fb_campaign_offer',$data);

	  

  	

   }

   

    public function ajaxoffer(){

		 

	   $this->load->helper('resize');

         $image = '';

		if(!empty($_FILES['file1']['name'])){

				

		  $config['upload_path']   = './images/fb_comp/';

          $config['allowed_types'] = 'jpg|jpeg|png|gif';

          $config['overwrite'] = false;

	

       

         $this->load->library('upload', $config);

			

         if ( ! $this->upload->do_upload('file1')) {

         

			

		  $error1 =  $this->upload->display_errors(); 



           }

			

         else { 

              $data1 =  $this->upload->data();

			 

			  $image = $data1['file_name'];

			  $thumb = './images/fb_comp/thumb/'.$image;

			  resize_image($data1,$thumb,200,200);

			  //unlink('./images/fb_comp/'.$data1['file_name']);

			}

	      }			

           

		$name = $this->input->post('name');

		$email = $this->input->post('email');

		$contact = $this->input->post('contact');

		$city = $this->input->post('city');

		$hotelname = $this->input->post('hotelname');

		

		if($name!= '' and $email !='' and $contact != '' and $city !='' and $hotelname !='') {

		$insert['name'] = $name;

		$insert['email'] = $email;

		$insert['contact'] = $contact;

		$insert['city'] = $city;

		$insert['image'] = $image;

		$insert['hotelname'] = $hotelname;

		$insert['offer'] = 'fb_offer';

		$this->db->insert("fb_campaign",$insert);

		$to      = 'Alpha2inc@outlook.com';

		

		$subject = 'fb-campaign';

		$from_email = $email;

		$msg = "<table>

		<tr><th>Name</th><td>$name</td></tr>

		<tr><th>Email</th><td> $email </td></tr>

		<tr><th>Contact</th><td>$contact</td></tr>

		<tr><th>City</th><td>$city</td></tr>

		<tr><th>Hotel name</th><td>$hotelname</td></tr>

		";

		

		 if($image !=''){

		  $msg .= "<tr><th>Image</th><td><img src='https://www.uaet10.com/images/fb_comp/thumb/$image' alt='' /></td></tr>";

		

		  }

       	 $msg .="</table>";	  

		$headers = "MIME-Version: 1.0" . "\r\n";

		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		$headers .= 'From: "'.$name.'"<"'.$from_email.'">' . "\r\n";

  if(mail($to, $subject, $msg,$headers)){

	  echo 'true';

	 

  }else{

	   echo 'false';

  } 

	 }else{

		 echo 'false';

	 }

    



	 

	

	}

    function invitation(){

		 $language = $this->siteLang_id;

		 



		 

		 

	     $data['pages'] = $this->main_model->getpages();

	   

	     $data['categories'] = $this->main_model->get_category( uae ,$language , 0 );

	   

	  	 $data['language'] = $this->main_model->get_language();

		 

		 $data['home_content'] = $this->main_model->getHomecontent($language);

		 

		 $this->db->select("*")

	      ->from("fb_offer_page")

	      ->where("id",2);

	      $result = $this->db->get();	

			   

	     $data['invitation'] = $result->result_array();

		 

	          if($this->input->post('submit') !=false){

		 	    $this->load->library('form_validation');

                $this->form_validation->set_rules('name', 'Name', 'required');

                $this->form_validation->set_rules('email', 'Email', 'required');

                $this->form_validation->set_rules('contact', 'Contact', 'required');

                $this->form_validation->set_rules('company', 'Company', 'required');



                if ($this->form_validation->run() == TRUE)

                {

				

					  $name    = $this->input->post('name');

					  $email   = $this->input->post('email');

					  $contact = $this->input->post('contact');

					  $company = $this->input->post('company');

					  

                    $array = array(

					  'name'=>$name,

					  'email'=>$email ,

					  'contact'=>$contact,

					  'company'=>$company

					 );

			         $this->db->insert('invitation',$array);

					 $to      = 'votive.amit@gmail.com';

					$subject = 'fb-campaign';

					$from_email = $email;

					$msg = "<table>

					<tr><th>Name</th><td>$name</td></tr>

					<tr><th>Email</th><td> $email </td></tr>

					<tr><th>Contact</th><td>$contact</td></tr>

					<tr><th>City</th><td>$company</td></tr>";

       	           $msg .="</table>";	  

		           $headers = "MIME-Version: 1.0" . "\r\n";

		           $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		           $headers .= 'From: "'.$name.'"<"'.$from_email.'">' . "\r\n";

                  if(mail($to, $subject, $msg,$headers)){

	              echo "<script>alert('Thank You ..');</script>";  

                 }

		        }

		       }

		 

	     $this->load->view('invitation',$data);

   }

	 public function page_data($page){

	      if($page !='admin') {

	 	 $language = $this->siteLang_id;

		 

	     $data['pages'] = $this->main_model->getpages();

	   

	     $data['categories'] = $this->main_model->get_category( uae ,$language , 0 );

	   

	  	 $data['language'] = $this->main_model->get_language();

		 

		 $data['home_content'] = $this->main_model->getHomecontent($language);

		 

		 

	  	$this->db->select("*")

	    ->from("pages p")

		->join("pages_detail pd" ,"p.page_id=pd.page_id","left");

		 $this->db->where('p.page_status',1);

		 $this->db->where('p.page_url',$page);

		 $this->db->where('p.page_id !=',20);

		 $this->db->where('p.page_id !=',21);

		 $this->db->where('p.page_id !=',19);

	 	 $result = $this->db->get();	

		  if($result->num_rows()){

	      $data['page'] = $result->result_array();

		       $this->load->view('dynamic_page',$data);

		  }else{

		  $this->load->view('404'); 

		  }

		 }

	 }



   //suggation readmore

     function display_suggestion($url){

	 

 

	     $language = $this->siteLang_id;

	

	     $data['pages'] = $this->main_model->getpages();

	   

	     $data['categories'] = $this->main_model->get_category( uae ,$language , 0 );

	   

	  	 $data['language'] = $this->main_model->get_language();

		 

		 $data['home_content'] = $this->main_model->getHomecontent($language);



		$this->db->select("*")

	    ->from("suggession s")

		->join("suggession_detail sd" ,"s.sug_id=sd.sug_id","left");

		$this->db->where('s.sug_stauts',1);

		$this->db->where('s.url',$url);

	    $result = $this->db->get();	

		 if($result->num_rows()){

        $data['page'] = $result->result_array();

        $this->load->view('display_suggetion',$data);

		 }else{

			$this->load->view('404'); 

		 }

	 

 }

 

    //suggation readmore

     function display_blog($url){

	 

 

	     $language = $this->siteLang_id;

	

	     $data['pages'] = $this->main_model->getpages();

	   

	     $data['categories'] = $this->main_model->get_category( uae ,$language , 0 );

	   

	  	 $data['language'] = $this->main_model->get_language();

		 

		 $data['home_content'] = $this->main_model->getHomecontent($language);



		$this->db->select("*")

	    ->from("blog b")

		->join("blog_detail bd" ,"b.blog_id=bd.blog_id","left");

		$this->db->where('b.blog_status',1);

		$this->db->where('b.url',$url);

	    $result = $this->db->get();	

		 if($result->num_rows()){

        $data['page'] = $result->result_array();

        $this->load->view('display_blog',$data);

		 }else{

			$this->load->view('404'); 

		 }

	 

 }

 

  function listing_form1(){

        

		   $name    = $this->input->post('name');

		   $email   = $this->input->post('email');

		   $contact = $this->input->post('contact');

		   $category = $this->input->post('category');

		   $brand = $this->input->post('brand');

		  

				$array = array(

				  'name'=>$name,

				  'email'=>$email ,

				  'contact'=>$contact,

				  'category'=>$category,

				  'brand'=>$brand

				 );

				$this->db->insert('listing_form',$array);

				$to      = 'votive.amit@gmail.com';

				$subject = 'suggetion';

				$from_email = $email;

				

						$msg = "<table>

						<tr><th>Name</th><td>$name</td></tr>

						<tr><th>Email</th><td> $email </td></tr>

						<tr><th>Contact</th><td>$contact</td></tr>

						<tr><th>Brand</th><td>$brand</td></tr>

						<tr><th>Category</th><td>$category</td></tr>";

						$msg .="</table>";	  

						$headers = "MIME-Version: 1.0" . "\r\n";

						$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

						$headers .= 'From: "'.$name.'"<"'.$from_email.'">' . "\r\n";

							if(mail($to, $subject, $msg,$headers)){

							echo 'true';  

							}else{

							echo 'false';

							}

		

		

		

   }

   

   function give_suggetion(){

   

          $language = $this->siteLang_id;

		

	     $data['pages'] = $this->main_model->getpages();

	   

	     $data['categories'] = $this->main_model->get_category( uae ,$language , 0 );

	   

	  	 $data['language'] = $this->main_model->get_language();

		 

		 $data['home_content'] = $this->main_model->getHomecontent($language);

		 

		 $this->db->select("*")

	      ->from("fb_offer_page")

	      ->where("id",2);

	      $result = $this->db->get();	

			   

	     $data['invitation'] = $result->result_array();

		 

	          if($this->input->post('submit') !=false){

		 	    $this->load->library('form_validation');

                $this->form_validation->set_rules('name', 'Name', 'required');

                $this->form_validation->set_rules('email', 'Email', 'required');

                $this->form_validation->set_rules('contact', 'Contact', 'required');

                $this->form_validation->set_rules('company', 'Company', 'required');



                if ($this->form_validation->run() == TRUE)

                {

				

					  $name    = $this->input->post('name');

					  $email   = $this->input->post('email');

					  $contact = $this->input->post('contact');

					  $company = $this->input->post('company');

					  

                    $array = array(

					  'name'=>$name,

					  'email'=>$email ,

					  'contact'=>$contact,

					  'company'=>$company,

					  'para'=>1

					 );

			         $this->db->insert('invitation',$array);

					 $to      = 'votive.amit@gmail.com';

					$subject = 'Suggetion';

					$from_email = $email;

					$msg = "<table>

					<tr><th>Name</th><td>$name</td></tr>

					<tr><th>Email</th><td> $email </td></tr>

					<tr><th>Contact</th><td>$contact</td></tr>

					<tr><th>Suggetion</th><td>$company</td></tr>";

       	           $msg .="</table>";	  

		           $headers = "MIME-Version: 1.0" . "\r\n";

		           $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		           $headers .= 'From: "'.$name.'"<"'.$from_email.'">' . "\r\n";

                  if(mail($to, $subject, $msg,$headers)){

	              echo "<script>alert('Thank You ..');</script>";  

                 }

		        }

		       }

		 

	     $this->load->view('suggetion',$data);

  

  

   }

 

 

  public function aboutUS(){

  

 

 

     	 $language = $this->siteLang_id;

		 $data['categories'] = $this->main_model->get_category( uae ,$language , 0 );

		 $data['pages'] = $this->main_model->getpages();

	  

	  	 $data['language'] = $this->main_model->get_language();

		 

		 $data['home_content'] = $this->main_model->getHomecontent($language);

		$this->db->select("*")

	    ->from("pages p")

		->join("pages_detail pd" ,"p.page_id=pd.page_id","left");

		$this->db->where('page_status',1);

		$this->db->where('p.page_id',22);

	    $result = $this->db->get();	

		$data['page'] = $result->result_array();

	     $this->load->view('aboutUS',$data);

	}

	

	public function events_branddubai(){
	  $this->load->view('question/events_branddubai');
	}
	public function member_application(){
		   $language = $this->siteLang_id;
	      $data['categories'] = $this->main_model->get_category( uae ,$language , 0 );

	  $this->load->view('member_application',$data);
	}

	public function member_form(){



	  $brand_name = $_POST['brand_name'];

	  $reg_no = $_POST['reg_no'];

	  $stablish_in = $_POST['stablish_in'];

	  $category = $_POST['category'];

	  $email = $_POST['email'];

	  $website = $_POST['website'];

	  $phone = $_POST['phone'];

	  $fax = $_POST['fax'];

	  $probox = $_POST['probox'];

	  $other_member = $_POST['other_member'];

	  $website1 = $_POST['website1'];

	  $sociallinks = $_POST['sociallinks'];

	  $to      = 'alpha2inc@outlook.com';

	  $subject = 'Member Application';

	  $from_email = 'votive.amit@gmail';

	  $msg = "<table>

	  <tr><th>Brand name</th><td>$brand_name</td></tr>

	  <tr><th>Registration no.</th><td> $reg_no </td></tr>

	  <tr><th>Stablish In</th><td>$stablish_in</td></tr>

	  <tr><th>Category</th><td>$category</td></tr>

	  <tr><th>Email</th><td>$email</td></tr>

	  <tr><th>Website</th><td>$website</td></tr>

	  <tr><th>Phone</th><td>$phone</td></tr>

	  <tr><th>Po Box</th><td>$probox</td></tr>

	  <tr><th>Fax</th><td>$fax</td></tr>

	  <tr><th>Other Membership</th><td>$other_member</td></tr>

	  <tr><th>Reputation score website</th><td>$website1</td></tr>

	  <tr><th>Social links</th><td>$sociallinks</td></tr>";

	  $msg .="</table>";	  

	  $headers = "MIME-Version: 1.0" . "\r\n";

	  $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	  $headers .= 'From: "'.$name.'"<"'.$from_email.'">' . "\r\n";

	  if(mail($to, $subject, $msg,$headers)){

	  echo "4";  

	  }else{

	    echo "5";

	  }

	    

	    

	}





	function suggestCategory($str){

		$language = $this->siteLang_id;

		// $this->db->select("*")

				   

		//        ->from("category c")

			  

		// 	   ->join('category_detail cd', 'c.cate_id = cd.cate_id', 'left')

			  

		// 	   ->where('cd.cate_langid', $language )

			   

		// 	   ->where('c.cate_reaid', $str )

			    

		// 	   ->where('c.cate_status', 1 )

			   

		// 	   ->order_by('c.order_by','asc');

			  

        $result = $this->db->select("*")

       					  ->join('category_detail cd', 'c.cate_id = cd.cate_id', 'left')

       					  ->like("cd.cate_name", $str)

       					  ->where('cd.cate_langid', $language )

       					  ->where('c.cate_status', 1 )

       					  ->order_by('c.order_by','asc')

       					  ->get("category c");

       	$content = "<ul class='search-result'>";

       	if($result->num_rows() > 0){

			foreach($result->result() as $cat){

				$content .= "<li><a href=".base_url("listings/$cat->meta_tag").">".$cat->cate_name."</a></li>";

			}

		}

		else{

			$content .= '<li>No result found for "'.$str.'"</li>';

		}



		$content .= "</ul>";

		echo json_encode(array("msg"=>$content));

	}

	

     public function ios_android(){

	 

	      $this->load->view('mobile/ios_android');

	      

	 }	

      

 

}