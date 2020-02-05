<?php
Class User extends CI_Model
{
	function login($username, $password)
	{
		$this -> db -> select('id, username, password');
		$this -> db -> from('tbl_admin');
		$this -> db -> where('username = ' . "'" . $username . "'"); 
		$this -> db -> where('password = ' . "'" . MD5($password) . "'"); 
		$this -> db -> limit(1);

		$query = $this -> db -> get();
           
		  
		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
	public function login_user_deatils($username,$password)
              {
                $this->db->from('tbl_admin');
                $this->db->where('username',$username);
                $this->db->where('password', MD5($password));
                $query =  $this->db->get();
                return $query->row();
              }
        
	
	//get admin profile
	
	 function get_admin(){
		 
		 $id = $this->session->userdata['logged_in']['id'];
		 $this->db->select('*')
		          ->from('tbl_admin')
				  ->where('id',$id);
		 $query = $this->db->get();
         $result = $query->result_array(); 		 
		 $data['username'] = $result[0]['username'];
		 $data['email'] = $result[0]['email'];
		 return $data;
	 }
		//language section
	function add_language($data){
		
		$query = $this->db->insert("language",$data);
		 
		 return $query;
		
	}
	
	function get_language($status){
		
		$this -> db -> select('*');
		$this -> db -> from('language'); 
		if($status==1){
		$this -> db -> where('lang_status = ' , 1 ); 
		}
		
		$this->db->order_by("lang_id", "desc");
		$query = $this -> db -> get();
		return $query->result_array();
	}

        function get_lang_id($id){
                 $this -> db -> select('*');
		$this -> db -> from('language'); 
		
		$this -> db -> where('lang_id' , $id ); 
		
		$query = $this -> db -> get();
		return $query->result_array();

           }
	
	function get_edit_language($id){
		$this -> db -> select('*');
		$this -> db -> from('language'); 
		$this -> db -> where('lang_id = ' ,$id ); 
		$query = $this -> db -> get();
		$result =$query->result();
		
		 $data['lang_name'] = $result[0]->lang_name;
		 $data['lang_id'] = $result[0]->lang_id;
		 $data['lang_code'] = $result[0]->lang_code;
		 $data['lang_status'] = $result[0]->lang_status;
		 $data['image'] = $result[0]->image;
		 return $data;
		 
		
	}
	function templates(){
		      $this->db->select("*")
		      ->from("tbl_templates");
		      $this->db->where('status',1);
	          $query = $this->db->get();
			  $result = $query->result_array();
			  return $result;
	}
   function users(){
		      $this->db->select("*")
		          ->from("contact_us");	              
				 $query = $this->db->get();
				 $result = $query->result_array();
		          return $result;
	}
	  function contact_users(){
		      $this->db->select("*")
		          ->from("contact_us");	              
				 $query = $this->db->get();
				 $result = $query->result_array();
		          return $result;
	}
	 function subs_users(){
		      $this->db->select("*")
		          ->from("tbl_subcribe_email");	              
				 $query = $this->db->get();
				 $result = $query->result_array();
		          return $result;
	}
	 function inquiry_users(){
		      $this->db->select("*")
		          ->from("enquiries_form");	
		           $this->db->where('Deleted',1);              
				 $query = $this->db->get();
				 $result = $query->result_array();
		          return $result;
	}
	 function footer_contact($id){
		      $this->db->select("*")
		          ->from("contact_page");
		          $this->db->where('id',1);
	              
				 $query = $this->db->get();
				 $result = $query->result_array();

		          return $result;
	}

	function get_cities(){
		$this->db->select("*")
		          ->from("tbl_city");	              
		$query = $this->db->get();
		$result = $query->result_array();
       return $result;
	}
	function get_destinations(){
       $this->db->select("*")
		          ->from("destinations");             
		$query = $this->db->get();
		$result = $query->result_array();
       return $result;
	}
	function get_team(){
       $this->db->select("*")
		          ->from("teams");	              
		$query = $this->db->get();
		$result = $query->result_array();
       return $result;
	}
	function get_service_slider(){
		$this->db->select("*")
		          ->from("tbl_serviceslider");	
		$this->db->order_by("slider_id", "desc");              
		$query = $this->db->get();
		$result = $query->result_array();
       return $result;
	}
	 function get_evnets(){
        $this->db->select("*")
		          ->from("tbl_events E")
		          ->join("tbl_city C",'C.city_id=E.city_id'); 
		$this->db->order_by("E.event_id", "desc");
             
		$query = $this->db->get();
		$result = $query->result_array();
       return $result;
	 }
	function edit_language($data,$id){
		 $this->db->where('lang_id',$id);
		 $query = $this->db->update('language', $data);
		 
		 return $query;
		
	}
	function edit_static($data,$id){
		 $this->db->where('lang_id',$id);
		 $query = $this->db->update('tbl_website_translate', $data);
		 
		 return $query;
		
	}
	function edit_template($data,$id){
		 $this->db->where('template_id',$id);
		 $query = $this->db->update('tbl_templates', $data);
		 
		 return $query;
		
	}
	//end language
	
	//region section 
	public function add_region($data)
	{
		 $insert['rea_status'] = $data['status'];
		 $insert['rea_dateadd'] = date('Y-m-d');
		 $this->db->insert("reason",$insert);
		 $rea_id = $this->db->insert_id(); 
		 
		 $i = 0 ;
		 
		foreach($data['region_name'] as $region ){
			
			 $regiondata['rea_id'] =$rea_id;
			 $regiondata['rea_langid'] = $data['language_id'][$i];
			 $regiondata['rea_name'] = $region;
			 $regiondata['rea_dateadd'] = date('Y-m-d');
			 $this->db->insert("reason_detail",$regiondata);
			
		$i++;
		}
		
		
		return $rea_id ;
		
	}
	
 function get_regions($status){
		
		$this->db->select("*")
		          ->from("reason r")
				  ->join('reason_detail rd', 'rd.rea_id = r.rea_id', 'left')
				  
				  ->where('rd.rea_langid', language );
				  
				  if($status==1){
					$this->db->where('r.rea_status', 1 );
				  }
		$this->db->order_by("r.rea_id", "desc");
				 
             $result = $this->db->get();
		  
		     return $result->result_array();
          				  
	}
	function get_region_by_laguage($lang_id,$reagion_id){
		
				
				  $this->db->select("*")
		          ->from("reason_detail r ")
                  ->join("language l","l.lang_id=r.rea_langid","left")				  
				  ->where('rea_id', $reagion_id )
				  ->where('rea_langid', $lang_id );
				  $result = $this->db->get();
				  return $result->result_array();
		
	}
	function get_region_single($id){
		
				  $this->db->select("*")
		          ->from("reason r")
				  ->join('reason_detail rd', 'rd.rea_id = r.rea_id', 'left')
				  
				  ->where('rd.rea_id', $id );
				  
				  
				 
                 $query = $this->db->get();
				 
				 // echo $this->db->last_query();die;
				 
		          $result = $query->result_array();

		          return $result;
	}

	function get_feedback_single($id){
		
				  $this->db->select("*")
		          ->from("feedback")
	              ->where('feedback_id', $id );
				 $query = $this->db->get();
				 $result = $query->result_array();

		          return $result;
	}
	function get_testimonial_id($id){
		
				  $this->db->select("*")
		          ->from("testimonial")
	              ->where('testi_id', $id );
				 $query = $this->db->get();
				 $result = $query->result_array();

		          return $result;
	}
	
	function edit_region($data,$id){
		
		 $update['rea_status'] = $data['status'];
		 $update['rea_update'] = date('Y-m-d');
		 $this->db->where("rea_id",$id);
		 $query = $this->db->update("reason",$update);
		 
		 
		 $i = 0 ;
		 
		foreach($data['region_name'] as $region ){
			
			 $regiondata['rea_id'] = $id;
			 $language_id = $data['language_id'][$i];
			 $regiondata['rea_name'] = $region;
			 $regiondata['rea_update'] = date('Y-m-d');
			  //this check language id exist ot not
			  //for edit 
	             $q = $this->db->get_where('reason_detail', array(
                 'rea_langid' => $language_id,
                 'rea_id' => $id
                ));
                
				 echo $q->num_rows();
				 
                if($q->num_rows()==0){
					
					  $data12 = array(
                        'rea_id' => $id,
                        'rea_langid' => $language_id
                       );
                 $this->db->insert('reason_detail', $data12);
				}
				//
		
			 $this->db->where("rea_id",$id);
			 $this->db->where("rea_langid",$language_id);
			 $this->db->update("reason_detail",$regiondata);
			
		    $i++;
		}
		
		
		
		
		return $query;
	}
	
	//category module start
	function add_category($data,$image,$image2,$image3,$image4){
		
		 $insert['cate_status'] = $data['status'];
		 $insert['cate_reaid'] = uae;
		 $insert['cate_image'] = $image;		 
		 if(isset($data['feature'])){
			  $insert['cate_feature'] = $data['feature'];
		 }else{
			  $insert['cate_feature'] = 0;
		 }
		/* $insert['order_by'] = $data['sort']; */
		 $insert['cate_date'] = date('Y-m-d');
		/* $insert['meta_tag'] = $this->clean_string($data['meta_tag']);*/
		 $insert['meta_title'] = $data['meta_title'];
		 $insert['title_arabic'] = $data['title_arabic'];
		 $insert['title_russian'] = $data['title_russian'];
		 $insert['title_chiness'] = $data['title_chiness'];
	       $this->db->insert("category",$insert);
		   $insertid = $this->db->insert_id();	   
		   return $insertid;   
		
	}
	function add_destination($data,$image){
		
		 $insert['destination_status'] = $data['status'];
		 $insert['destinations_name'] =$data['destinations_name'];
		  $insert['destinations_url'] =$data['destinations_url'];
		 $insert['destinations_image'] = $image;		 
		 $insert['description'] = $data['description']; 
		 $insert['created'] = date('Y-m-d');

	       $this->db->insert("destinations",$insert);
		   $insertid = $this->db->insert_id();
		   $count = count($data['category_name']);
		   
		  
		   return $insertid;
		   
		
	}
	
	public function get_category($status){
		
				$this->db->select("*")
		          ->from("category c");
				  /*->join('category_detail cd', 'c.cate_id = cd.cate_id', 'left')
				  ->join('reason_detail rd','c.cate_reaid=rd.rea_id','left')*/
				  
				  /*->where('cd.cate_langid', language )
				  ->where('rd.rea_langid', language );*/
				  
		          $this->db->order_by("c.cate_id", "desc");
				  
				  
				 
                    $result = $this->db->get();
		  
		          //print_r ($result->result_array());die;
		     return $result->result_array();
		
		
	}
	
	function get_category_by_laguage($lang_id , $category_id){
							
							
			   	  $this->db->select("*")
				
		          ->from("category_detail cd");
				  
				  $this->db->join('language l', 'cd.cate_langid = l.lang_id', 'left');
				  
	
				 
				   $this->db->where('cd.cate_id', $category_id );
				   $this->db->where('cd.cate_langid', $lang_id );
				  
                    $result = $this->db->get();
		  
		           
				   
		           return $result->result_array();
		
		
	}

	function get_subcategory_by_laguage($lang_id , $subcategory_id){
							
							
			   	  $this->db->select("*")
				
		          ->from("subcategory_detail cd");
				  
				  $this->db->join('language l', 'cd.subcate_langid = l.lang_id', 'left');
				  
	
				 
				   $this->db->where('cd.subcate_id', $subcategory_id );
				   $this->db->where('cd.subcate_langid', $lang_id );
				  
                    $result = $this->db->get();
		  
		           
				   
		           return $result->result_array();
		
		
	}
	
	
	function get_category_single($id , $str){
		
					$this->db->select("*")
		          ->from("category c")
				  ->join('category_detail cd', 'cd.cate_id = c.cate_id', 'left');
				    if($str=='view'){
				     $this->db->join('reason_detail rd', 'c.cate_reaid = rd.rea_id', 'inner');
				     }
				 
				 $this->db->where('c.cate_id', $id );
				 $result = $this->db->get();
		         return $result->result_array();

	}

		function get_page_details($id , $str){
		
					$this->db->select("*")
		          ->from("pages p")
		          ->join('pages_detail d','d.page_id=p.page_id');
				 
				 $this->db->where('p.page_id', $id );
				 $result = $this->db->get();
		         return $result->result_array();

	}

function get_template_details($id){
		
					$this->db->select("*")
		          ->from("tbl_templates");
		          /*->join('pages_detail d','d.page_id=p.page_id');*/
				 
				 $this->db->where('template_id', $id );
				 $result = $this->db->get();
		         return $result->result_array();

	}

	function get_subcategory_single($id , $str){
		
					$this->db->select("c.*");
		            $this->db ->from("subcategory c");				     				 
				    $this->db->where('c.subcate_id', $id );
                    $result = $this->db->get();
		  
		           return $result->result_array();

	}

	function get_page_single($id , $str){
		
			   $this->db->select("*")
		          ->from("pages");
				
				  $this->db->where('page_id', $id );
				  $result = $this->db->get();
		            return $result->result_array();

	}
	function get_template_single($id){
		
			   $this->db->select("*")
		          ->from("tbl_templates");
				
				  $this->db->where('template_id', $id );
				  $result = $this->db->get();
		            return $result->result_array();

	}
	
	
	function edit_category($data , $file , $id){
		
		
		 $update['cate_status'] = $data['status'];
		
		  if(isset($file['file_name']) and $file['file_name'] !=''){
			   $update['cate_image'] = $file['file_name'];
			   
			   $result = $this->get_category_single($id,null);
			  /* unlink('./images/'.$result[0]['cate_image']);*/
		  }
	
		 $update['cate_update'] = date('Y-m-d');
		 $update['meta_tag'] = $this->clean_string($data['meta_tag']);
		 $update['meta_title'] = $data['meta_title'];
		 $update['title_arabic'] = $data['title_arabic'];
		 $update['title_russian'] = $data['title_russian'];
		 $update['title_chiness'] = $data['title_chiness'];		 
		   $this->db->where("cate_id",$id);
		   $query = $this->db->update("category",$update);	   
		   $count = count($data['category_name']);
		   return $query;	
	}
	
	function category_by_region($id){
		
				$this->db->select("*")
		          ->from("category")
				 ->where('cate_status',1)
				  ->order_by('meta_title','asc');
                   $result = $this->db->get();
		  
		     return $result->result_array();
	}

	function subcategory_by_region($id){
		
				$this->db->select("*")
		          ->from("subcategory")
				  ->where('subcate_status',1)
				  ->order_by('meta_title','asc');
                $result = $this->db->get();
		  
		     return $result->result_array();
	}
	
	//subcategory module start
	function add_subcategory($data){
		
		 $insert['subcate_status'] = $data['status'];
		 $insert['pro_catid'] = $data['category'];
		 $insert['subcate_reaid'] = uae;		
		 $insert['keyword'] = $data['keyword'];		
		 $insert['subcate_date'] = date('Y-m-d');
		 $insert['meta_title'] = $data['meta_title'];
		 $insert['title_arabic'] = $data['title_arabic'];
		 $insert['title_russian'] = $data['title_russian'];
		 $insert['title_chiness'] = $data['title_chiness'];
		/* $insert['meta_discription'] = $data['meta_discription'];*/
	       $this->db->insert("subcategory",$insert);
		   $insertid = $this->db->insert_id();

		   return $insertid;
		   
		
	}
	function edit_subcategory($data, $id ){		
		  //print_r("<pre/>");
		  //print_r($data);die();
			 $update['pro_catid'] = $data['category'];
			 $update['subcate_status'] = $data['status'];		
			 $update['subcate_update'] = date('Y-m-d');
			 $update['meta_tag'] = $this->clean_string($data['meta_tag']);
			 $update['meta_title'] = $data['meta_title'];
			 $update['title_arabic'] = $data['title_arabic'];
			 $update['title_russian'] = $data['title_russian'];
			 $update['title_chiness'] = $data['title_chiness'];
		     $update['keyword'] = $data['keyword'];
		 
		     $this->db->where("subcate_id",$id);
		     $query = $this->db->update("subcategory",$update);     
		   	 $count = count($data['subcategory_name']);
		     return $query;
		}

	public function get_subcategory(){
		
				$this->db->select("c.*,cd.meta_title as category")
		          ->from("subcategory c")
				  ->join('category cd ', 'c.pro_catid = cd.cate_id', 'inner');
				   $this->db->order_by("c.subcate_id", "desc");
				   $result = $this->db->get();
		         return $result->result_array();
	}

	
	         function get_subcategory_filter($data){
		
				   $this->db->select("*")  
		          ->from("subcategory p")
				  ->join('subcategory_detail pd', 'p.subcate_id = pd.subcate_id', 'inner')
				  ->join('category_detail cd ', 'p.pro_catid = cd.cate_id', 'inner')
				  ->join('reason_detail rd ', 'p.subcate_reaid = rd.rea_id', 'inner')
				 
				  ->where('pd.subcate_langid', language )
				  ->where('cd.cate_langid', language )
				  ->where('rd.rea_langid', language );
				  
				  if(!empty($data['region'])){
				   $this->db->where('rd.rea_id', uae );  
				  }
				  if(!empty($data['category'])){
				   $this->db->where('cd.cate_id', $data['category'] );  
				  }	
				  if(!empty($data['select_rang']) and $data['select_rang'] !=0){
				      
				      $this->db->where('p.s_id', $data['select_rang'] );  
				  }
				  
				  $this->db->order_by('p.subcate_id','desc');
				  
				  $query = $this->db->get();
				  
				  return $query->result_array();
	}
	
	//listing module start
	
	function add_listing($data,$image){

		$id=$this->db->get_where('subcategory', array('subcate_id'=>$data['subcategory']))->row();
		/*print_r( $id->pro_catid); die();*/
		 $insert['category_id'] = $id->pro_catid;
		 $insert['pro_subcatid'] = $data['subcategory'];
		 $insert['pro_reaid'] = uae;
		 $insert['pro_thumb'] = $image['thumbimage'];
		 $insert['pro_header'] = $image['headerimage'];
		 $insert['pro_inner'] = $image['fullimage'];
		 $insert['image1'] = $image['imageone'];
		 $insert['image2'] = $image['imagetwo'];
		 $insert['image3'] = $image['imagethree'];		
		 $insert['pro_contactno'] = $data['number'];
		 $insert['pro_status'] = $data['status'];
		 $insert['pro_dateadd'] =date('Y-m-d');
		 $insert['pro_update'] =date('Y-m-d');
		/* $insert['meta_tag'] = $this->clean_string($data['meta_tag']);*/
		 $insert['meta_title'] = $data['meta_title'];
		 $insert['title_arabic'] = $data['title_arabic'];
		 $insert['title_russian'] = $data['title_russian'];
		 $insert['title_chiness'] = $data['title_chiness'];
		 $insert['meta_discription'] = $data['meta_discription'];
		 $insert['desc_arabic'] = $data['desc_arabic'];
		 $insert['desc_russian'] = $data['desc_russian'];
		 $insert['desc_chiness'] = $data['desc_chiness'];
		 $insert['ln_url'] = $data['ln_url'];
		 $insert['fb_url'] = $data['fb_url'];
		 $insert['tw_url'] = $data['tw_url'];
		 $insert['insta_url'] = $data['insta_url'];
		 $insert['webname'] = $data['webname'];
		 $insert['product_pricing'] = $data['product_pricing'];
		 $insert['city'] = $data['city'];
		 $insert['city_arabic'] = $data['city_arabic'];
		 $insert['city_russian'] = $data['city_russian'];
		 $insert['city_chiness'] = $data['city_chiness'];
		 $insert['country'] = $data['country'];
		 $insert['country_arabic'] = $data['country_arabic'];
		 $insert['country_russian'] = $data['country_russian'];
		 $insert['country_chiness'] = $data['country_chiness'];

		 
	     $this->db->insert("product",$insert);
		 $insertid = $this->db->insert_id();
		 	
		   
		   return $insertid;
		
	}
	
	function get_listing(){
		//pd.pro_title,p.pro_id,p.pro_status,cd.cate_name,rd.rea_name
		          
				  $this->db->select("p.*,c.meta_title as category_name")  
		          ->from("product p")
		          ->join('subcategory c', 'c.subcate_id=p.pro_subcatid');
		            $this->db->order_by('p.pro_id','desc');
				  $query = $this->db->get();
				  
				  
				  
				  return $query->result_array();
				  
	}
	
	         function get_listing_filter($data){
		
				   $this->db->select("*")  
		          ->from("product p")
				  ->join('product_detail pd', 'p.pro_id = pd.pro_id', 'inner')
				  ->join('category_detail cd ', 'p.pro_subcatid = cd.cate_id', 'inner')
				  ->join('reason_detail rd ', 'p.pro_reaid = rd.rea_id', 'inner')
				 
				  ->where('pd.pro_langid', language )
				  ->where('cd.cate_langid', language )
				  ->where('rd.rea_langid', language );
				  
				  if(!empty($data['region'])){
				   $this->db->where('rd.rea_id', uae );  
				  }
				  if(!empty($data['category'])){
				   $this->db->where('cd.cate_id', $data['category'] );  
				  }	
				  if(!empty($data['select_rang']) and $data['select_rang'] !=0){
				      
				      $this->db->where('p.s_id', $data['select_rang'] );  
				  }
				  
				  $this->db->order_by('p.pro_id','desc');
				  
				  $query = $this->db->get();
				  
				  return $query->result_array();
	}
	
	
	function listing_by_language($lang_id,$list_id){
		
		             
					  
				  $this->db->select("*")  
				  
		          ->from("product_detail pd")
				  
				  ->join('language l', 'pd.pro_langid = l.lang_id', 'left');
				  
				  $this->db->where('pd.pro_id', $list_id );
				  $this->db->where('pd.pro_langid', $lang_id );
				  
				  $query = $this->db->get();
				  
				  
				  return $query->result_array();
		
		
	}
	function get_listing_single($id,$str){
		
				  $this->db->select("*"); 				  
		          $this->db ->from("product");			  
				 $this->db->where('pro_id', $id);
				  $query = $this->db->get();
				 return $query->result_array();
		
	          }
	function get_subscription_single($id){
		
				  $this->db->select("*")  
				  ->from("tbl_subcribe_email");
				 $this->db->where('subscribe_id', $id );
				       $query = $this->db->get();
				 return $query->result_array();
		
	}
	function get_testimonisal_single($id){
		
				  $this->db->select("*")  
				         ->from("testimonial p");
	               $this->db->where('p.testi_id', $id );
				  
				   $query = $this->db->get();
				   return $query->result_array();
		
	}
	function getcontactus(){
		  $this->db->select("*")
		  ->from("contact_us")
		  ->order_by('id','desc'); 
		   $query = $this->db->get();
		 return $query->result_array(); 
	}
	
		function edit_listing($data,$image,$id){
			//print_r($image); die();
				
		 $update['pro_reaid'] = uae;
		 if(isset($image['thumbimage'])){
			 $update['pro_thumb'] = $image['thumbimage']; 
		 }
		  if(isset($image['headerimage'])){
			 $update['pro_header'] = $image['headerimage']; 
		 }
		 if(isset($image['fullimage'])){
			  
		 $update['pro_inner'] = $image['fullimage']; 
		 
		 }
	if(isset($image['imageone'])){
			  
		 $update['image1'] = $image['imageone']; 
		 
		 }
		if(isset($image['imagetwo'])){
			  
		 $update['image2'] = $image['imagetwo']; 
		 
		}
	 if(isset($image['imagethree'])){
			  
		 $update['image3'] = $image['imagethree']; 
		 
        }
		 $update['pro_contactno'] = $data['number'];
		 $update['pro_subcatid'] = $data['subcategory'];
		 $update['pro_conatctemail'] = $data['email'];
		 $update['pro_status'] = $data['status'];
		 $update['pro_update'] =date('Y-m-d');
		 $update['meta_title'] = $data['meta_title'];
		 $update['title_arabic'] = $data['title_arabic'];
		 $update['title_russian'] = $data['title_russian'];
		 $update['title_chiness'] = $data['title_chiness'];
		 $update['meta_discription'] = $data['meta_discription'];
		 $update['desc_arabic'] = $data['desc_arabic'];
		 $update['desc_russian'] = $data['desc_russian'];
		 $update['desc_chiness'] = $data['desc_chiness'];		
		 $update['ln_url'] = $data['ln_url'];
		 $update['fb_url'] = $data['fb_url'];
		 $update['tw_url'] = $data['tw_url'];
		 $update['insta_url'] = $data['insta_url'];
		 $update['webname'] = $data['webname'];
		 $update['city'] = $data['city'];
		 $update['city_arabic'] = $data['city_arabic'];
		 $update['city_russian'] = $data['city_russian'];
		 $update['city_chiness'] = $data['city_chiness'];
		 $update['country'] = $data['country'];
		 $update['country_arabic'] = $data['country_arabic'];
		 $update['country_russian'] = $data['country_russian'];
		 $update['country_chiness'] = $data['country_chiness'];
		 $update['product_pricing'] = $data['product_pricing'];
		 
	     $this->db->where("pro_id",$id);
	     $query = $this->db->update("product",$update);
		 
		 $count = count($data['listing_name']); 
		   
		   return $query;
		
		
	}
	// add banner
	function add_banner($data,$image,$image2){
		
		$insert['slider_reaid'] = uae;
		$insert['slider_image'] = $image;
		$insert['banner_mobile'] = $image2;
		$insert['banner_title'] = $data['banner_title'];
		$insert['arabic_title'] = $data['arabic_title'];
		$insert['chiness_title'] = $data['chiness_title'];
		$insert['russian_title'] = $data['russian_title'];
		$insert['city_name'] = $data['city_name'];
		$insert['sort_order'] = $data['sort_order'];
		$insert['slider_status'] = $data['status'];
		$insert['slider_added'] = date('Y-m-d');
		$this->db->insert("slider",$insert);
		return $this->db->insert_id();
	}
	function add_event($data,$image){
	
		$insert['event_image'] = $image;
		$insert['city_id'] = $data['city_id'];
		$insert['event_title'] = $data['event_title'];
		$insert['title_arabic'] = $data['title_arabic'];
		$insert['title_russian'] = $data['title_russian'];
		$insert['title_chiness'] = $data['title_chiness'];
		$insert['event_description'] = $data['description'];
		$insert['desc_arabic'] = $data['desc_arabic'];
		$insert['desc_russian'] = $data['desc_russian'];
		$insert['desc_chiness'] = $data['desc_chiness'];
		$insert['from_date'] = $data['from_date'];
		$insert['to_date'] = $data['to_date'];
		$insert['address'] = $data['address'];
		$insert['address_arabic'] = $data['address_arabic'];
		$insert['address_russian'] = $data['address_russian'];
		$insert['address_chiness'] = $data['address_chiness'];
		$insert['event_status'] = $data['status'];
		$insert['created_at'] = date('Y-m-d H:i:s');
		$this->db->insert("tbl_events",$insert);
		return $this->db->insert_id();
	}	
	function edit_event($data,$image,$id){
		if($image !=''){
			$update['event_image'] = $image;			
		}
		$update['event_title'] = $data['event_title'];
		$update['title_arabic'] = $data['title_arabic'];
		$update['title_russian'] = $data['title_russian'];
		$update['title_chiness'] = $data['title_chiness'];
		$update['city_id'] = $data['city_id'];
		$update['from_date'] = $data['from_date'];
		$update['to_date'] = $data['to_date'];
		$update['event_description'] = $data['description'];
		$update['desc_arabic'] = $data['desc_arabic'];
		$update['desc_russian'] = $data['desc_russian'];
		$update['desc_chiness'] = $data['desc_chiness'];
		$update['address'] = $data['address'];
		$update['address_arabic'] = $data['address_arabic'];
		$update['address_russian'] = $data['address_russian'];
		$update['address_chiness'] = $data['address_chiness'];
		$update['event_status'] = $data['status'];
		          $this->db->where('event_id',$id);
		$query =  $this->db->update("tbl_events",$update);
		return $query;
		}
   function edit_service_slider($data,$image,$id){
		if($image !=''){
			$update['image'] = $image;			
		}
		$update['service_id'] = $data['service_id'];
		$update['slider_url'] = $data['url'];
		$update['slider_status'] = $data['status'];
		          $this->db->where('slider_id',$id);
		$query =  $this->db->update("tbl_serviceslider",$update);
		return $query;
		}

		function add_service_slider($data,$image){
	
		$insert['image'] = $image;
		$insert['service_id'] = $data['service_id'];
		$insert['slider_url'] = $data['url'];
		
		$insert['slider_status'] = $data['status'];
		$insert['created_at'] = date('Y-m-d H:i:s');
		$this->db->insert("tbl_serviceslider",$insert);
		return $this->db->insert_id();
	}	
		function edit_city($data,$image,$image1,$id){
		if($image !=''){
			$update['city_image'] = $image;			
		}
		    //print_r($image1); die();
		if($image1 !=''){
			$update['city_icon'] = $image1;			
		}
		$update['city_name'] = $data['city_name'];
		$update['city_arabic'] = $data['city_arabic'];		
		$update['city_chiness'] = $data['city_chiness'];		
		$update['city_russian'] = $data['city_russian'];                  
		$update['city_link'] = $data['city_link'];
		$update['total_hotels'] = $data['total_hotels'];
		$update['to_price'] = $data['total_cars'];
		$update['city_status'] = $data['status'];
		          $this->db->where('city_id',$id);
		$query =  $this->db->update("tbl_city",$update);
		return $query;
		}

		function edit_contact_footer($data,$id){
		
		$update['email'] = $data['email'];
		$update['address'] = $data['address'];
		$update['address_russian'] = $data['address_russian'];
		$update['address_chiness'] = $data['address_chiness'];
		$update['address_arabic'] = $data['address_arabic'];
		$update['mobile'] = $data['mobile'];
		$update['facebook'] = $data['facebook'];
		$update['insta'] = $data['insta'];
		$update['gmail'] = $data['gmail'];
		$update['twiter'] = $data['twiter'];
		$update['linkdin'] = $data['linkdin'];
		$update['copy_right'] = $data['copy_right'];
		$update['copy_arabic'] = $data['copy_arabic'];
		$update['copy_russian'] = $data['copy_russian'];
		$update['copy_chiness'] = $data['copy_chiness'];
		          $this->db->where('id',$id);
		$query =  $this->db->update("contact_page",$update);
		return $query;
		}

		function edit_team($data,$image,$id){
		if($image !=''){
			$update['team_image'] = $image;			
		}
		$update['name'] = $data['name'];
		$update['name_arabic'] = $data['name_arabic'];
		$update['name_russian'] = $data['name_russian'];
		$update['name_chiness'] = $data['name_chiness'];
		$update['designation'] = $data['designation'];
		$update['arabic_designation'] = $data['arabic_designation'];
		$update['russian_designation'] = $data['russian_designation'];
		$update['chiness_designation'] = $data['chiness_designation'];
		$update['description'] = $data['description'];
		$update['arabic_description'] = $data['arabic_description'];
		$update['russian_description'] = $data['russian_description'];
		$update['chiness_description'] = $data['chiness_description'];
		$update['facebook'] = $data['facebook'];
		$update['insta'] = $data['insta'];
		$update['gmail'] = $data['gmail'];
		$update['status'] = $data['status'];
		          $this->db->where('team_id',$id);
		$query =  $this->db->update("teams",$update);
		return $query;
		}
		function edit_destination($data,$image,$id){
		if($image !=''){
			$update['destinations_image'] = $image;			
		}
		$update['destinations_name'] = $data['destinations_name'];
		$update['destinations_url'] = $data['destinations_url'];		
		$update['description'] = $data['description'];
		$update['destinations_status'] = $data['status'];
		          $this->db->where('id',$id);
		$query =  $this->db->update("destinations",$update);
		return $query;
		}
	  function get_banners(){		
		$this->db->select('*')
		         ->from('slider s')
		         ->join('reason_detail r','s.slider_reaid=r.rea_id','left')
		         ->where('r.rea_langid',language)
				 ->order_by('s.slider_id','desc');
		$query = $this->db->get();
		
		return  $query->result_array();

		}

		function get_enquiry(){		
		$this->db->select('e.*,c.id as c_id,c.page_title')
		         ->from('enquiries_form e')
		          ->join('pages_detail c','e.category=c.id');
		  $this->db->where('e.Deleted',1);
		 $this->db->order_by('e.id','desc');
		$query = $this->db->get();
		
		return  $query->result_array();

		}
		
		function get_enquiry_single($id){
		
				$this->db->select("*")
		          ->from("enquiries_form")
		          ->where('id', $id);
				$result = $this->db->get();
		  
		      return $result->result_array();

	}
		
		
		function get_banner_single($id){
				 $this->db->select('*')
		                   ->from('slider s')
		                   ->where('s.slider_id',$id);				 
		         $query = $this->db->get();
		         $result = $query->result();				
				 $data['region_id'] = $result[0]->slider_reaid;
				 $data['banner_title'] = $result[0]->banner_title;
				 $data['arabic_title'] = $result[0]->arabic_title;
				 $data['russian_title'] = $result[0]->russian_title;
				 $data['chiness_title'] = $result[0]->chiness_title;
				 $data['city_name'] = $result[0]->city_name;
				 $data['sort_order'] = $result[0]->sort_order;
				 $data['slider_status'] = $result[0]->slider_status;
				 $data['slider_image'] = $result[0]->slider_image;
				 $data['banner_mobile'] = $result[0]->banner_mobile;
				 return $data;			
		}

			function get_language_single($id){
				 $this->db->select('*')
		                   ->from('language s')
		                   ->where('s.lang_id',$id);				 
		         $query = $this->db->get();
		         $result = $query->result();				
				 
				 return $result;			
		}
		function get_event_id($id){
				 $this->db->select('*')
		                   ->from('tbl_events s')
		                   ->where('s.event_id',$id);				 
		         $query = $this->db->get();
		         $result = $query->result();							 
				 $data['event_title'] = $result[0]->event_title;
				 $data['title_arabic'] = $result[0]->title_arabic;
				 $data['title_russian'] = $result[0]->title_russian;
				 $data['title_chiness'] = $result[0]->title_chiness;
				 $data['from_date'] = $result[0]->from_date;
				 $data['to_date'] = $result[0]->to_date;
				 $data['city_id'] = $result[0]->city_id;
				 $data['address'] = $result[0]->address;
				 $data['address_arabic'] = $result[0]->address_arabic;
				 $data['address_russian'] = $result[0]->address_russian;
				 $data['address_chiness'] = $result[0]->address_chiness;
				 $data['event_date'] = $result[0]->event_date;
				 $data['event_status'] = $result[0]->event_status;
				 $data['event_image'] = $result[0]->event_image;
				 $data['event_description'] = $result[0]->event_description;
				 $data['desc_arabic'] = $result[0]->desc_arabic;
				 $data['desc_russian'] = $result[0]->desc_russian;
				 $data['desc_chiness'] = $result[0]->desc_chiness;
				 return $data;			
		}
			function get_service_slider_id($id){
				 $this->db->select('*')
		                   ->from('tbl_serviceslider s')
		                   ->where('s.slider_id',$id);				 
		         $query = $this->db->get();
		         $result = $query->result();							 
				 $data['image'] = $result[0]->image;
				 $data['service_id'] = $result[0]->service_id;
				 $data['slider_status'] = $result[0]->slider_status;
				 $data['slider_url'] = $result[0]->slider_url;
				 $data['created_at'] = $result[0]->created_at;
				 /*$data['to_date'] = $result[0]->to_date;
				 $data['event_status'] = $result[0]->event_status;
				 $data['event_image'] = $result[0]->event_image;
				 $data['event_description'] = $result[0]->event_description;*/
				 return $data;			
		}
		function get_city_id($id){
				 $this->db->select('*')
		                   ->from('tbl_city s')
		                   ->where('s.city_id',$id);				 
		         $query = $this->db->get();
		         $result = $query->result();							 
				 $data['city_name'] = $result[0]->city_name;
				 $data['city_arabic'] = $result[0]->city_arabic;
				 $data['city_russian'] = $result[0]->city_russian;
				 $data['city_chiness'] = $result[0]->city_chiness;
				 $data['city_link'] = $result[0]->city_link;
				 $data['total_hotels'] = $result[0]->total_hotels;				
				 $data['to_price'] = $result[0]->to_price;
				 $data['city_status'] = $result[0]->city_status;
				 $data['city_image'] = $result[0]->city_image;
				 $data['city_icon'] = $result[0]->city_icon;
				 
				 return $data;			
		}
		function get_team_id($id){
				 $this->db->select('*')
		                   ->from('teams s')
		                   ->where('s.team_id',$id);				 
		         $query = $this->db->get();
		         $result = $query->result();							 
				 $data['name'] = $result[0]->name;
				 $data['name_arabic'] = $result[0]->name_arabic;
				 $data['name_russian'] = $result[0]->name_russian;
				 $data['name_chiness'] = $result[0]->name_chiness;
				 $data['description'] = $result[0]->description;
				 $data['arabic_description'] = $result[0]->arabic_description;
				 $data['russian_description'] = $result[0]->russian_description;
				 $data['chiness_description'] = $result[0]->chiness_description;
				 $data['designation'] = $result[0]->designation;				
				 $data['arabic_designation'] = $result[0]->arabic_designation;				
				 $data['russian_designation'] = $result[0]->russian_designation;			
				 $data['chiness_designation'] = $result[0]->chiness_designation;			
				 $data['facebook'] = $result[0]->facebook;
				 $data['insta'] = $result[0]->insta;
				 $data['gmail'] = $result[0]->gmail;
				 $data['team_image'] = $result[0]->team_image;
				 $data['status'] = $result[0]->status;
				 $data['created_date'] = $result[0]->created_date;
				 
				 return $data;			
		}
		function get_destination_id($id){
				 $this->db->select('*')
		                   ->from('destinations s')
		                   ->where('s.id',$id);				 
		         $query = $this->db->get();
		         $result = $query->result();							 
				 
				 $data['destinations_name'] = $result[0]->destinations_name;
				 $data['destinations_url'] = $result[0]->destinations_url;				
				 $data['description'] = $result[0]->description;				 
				 $data['created'] = $result[0]->created;				 
				 $data['destinations_status'] = $result[0]->destinations_status;				 
				 $data['destinations_image'] = $result[0]->destinations_image;
				 
				 return $data;			
		}
		function view_email_history($id){
				 $this->db->select('*')
		                   ->from('email_send_record s')
		                   ->where('s.email_id',$id);				 
		         $query = $this->db->get();
		         $result = $query->result();							 
				 
				 $data['email_subject'] = $result[0]->email_subject;
				 $data['destinations_url'] = $result[0]->destinations_url;				
				 $data['sender_type'] = $result[0]->sender_type;				 
				 $data['template_id'] = $result[0]->template_id;				 
				 $data['created_at'] = $result[0]->created_at;				 
				 $data['users_id'] = $result[0]->users_id;
				 $data['status'] = $result[0]->status;
				 
				 return $data;			
		}
		
		
		function edit_banner($data,$image,$id,$image2){
			
		$update['slider_reaid'] = uae;
		if($image !=''){
			$update['slider_image'] = $image;
			
		}
		if($image2 !=''){
			$update['banner_mobile'] = $image2;
			
		}
		$update['banner_title'] = $data['banner_title'];
		$update['arabic_title'] = $data['arabic_title'];
		$update['chiness_title'] = $data['chiness_title'];
		$update['russian_title'] = $data['russian_title'];
		$update['city_name'] = $data['city_name'];
		$update['sort_order'] = $data['sort_order'];
		$update['slider_status'] = $data['status'];
		$update['slider_updated'] = date('Y-m-d');
		          $this->db->where('slider_id',$id);
		$query =  $this->db->update("slider",$update);
		return $query;
		}
		
function clean_string($str){
	   
	   $cleanStr = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $str)));
	   
	   return str_replace(" ","-",$cleanStr);
	   
   }
   //section for  page content
 function add_page($data,$data1){
	 
	 $this->db->insert("pages",$data);
	 $data1['page_id'] = $this->db->insert_id();
	  $query = $this->db->insert("pages_detail",$data1);
	  
	  return $query;
	  
	 
 }
 function add_template($data){
	 
	 $this->db->insert("tbl_templates",$data);
	 return $query;
	  
	 
 }
 
  function get_page($language,$page=null){
	  		
		$this->db->select('*')
		         ->from('pages p')
		         ->join('pages_detail pd','p.page_id=pd.page_id','left')
		         ->where('pd.page_lang_id',$language);
				 if($page != null){
					$this->db->where('p.page_id',$page); 
				 }
				$this->db->order_by('p.page_id','desc');
		         $query = $this->db->get();
		
		return  $query->result_array();
	  
  }
   function get_template($id){
	  		
		$this->db->select('*')
		         ->from('tbl_templates');
		         $this->db->where('template_id',$id);
		       
				$this->db->order_by('template_id','desc');
		         $query = $this->db->get();
		
		        return  $query->result_array();
	  
  }
   
   
  function edit_page($data,$data1,$page_id){
	  
	 		   //this check language id exist or not
			   
			   	$q = $this->db->get_where('pages_detail', array(
                 'page_lang_id' => $data1['page_lang_id'],
				 'page_id' => $page_id
                ));

                if($q->num_rows()==0){
					  $data12 = array(
						 'page_lang_id' => $data1['page_lang_id'],
						 'page_id' => $page_id
                       );
                 $this->db->insert('pages_detail', $data12);
				}
				
				// 
	 $this->db->where('page_id',$page_id);
	 $this->db->update("pages",$data);
	 
	 $this->db->where('page_id',$page_id);
	 $this->db->where('page_lang_id',$data1['page_lang_id']);
	 $query = $this->db->update("pages_detail",$data1);
	  
	   return $query;

	  
	  
	  
  }

	public function update_view($seg,$pro_id){
	
			 $this->db->select('*');
	         $this->db->from("segment");
	         $this->db->where("seg_id",$seg);
	         $query1 = $this->db->get();
	         $minmxk = $query1->result_array();
 

			  $data['mobile_view'] = rand($minmxk[0]['start_range'],$minmxk[0]['end_range']); 
			  $this->db->where('pro_id',$pro_id );
			  $this->db->update('product', $data); 
	         
	}  
  
  
    function get_city(){
    	$this->db->select('*');
    	$this->db->from('tbl_city');
    	$this->db->where('city_status',1);
    	$query = $this->db->get();
	    return  $query->result_array();
    }  
     function get_services(){
    	$this->db->select('*');
    	$this->db->from('pages_detail');
    	
    	$query = $this->db->get();
	    return  $query->result_array();
    }  
	
	
}
?>