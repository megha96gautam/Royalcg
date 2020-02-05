<?php
Class Content_model extends CI_Model
{
	
	 function add_testimonial($data,$image){
		 
		 $insert['testi_reaid'] = uae;
		 $insert['testi_image'] = $image;
		 $insert['testi_added'] = date('Y-m-d');
		 $insert['testi_status'] = $data['status'];
		 $this->db->insert('testimonial',$insert);
		 $insert_id = $this->db->insert_id();
		 $count = count($data['testimonial_name']);
		   
		   for ($i=0; $i<$count; $i++){
			   
			   $detail['testi_id'] = $insert_id;
			   $detail['testi_name'] = $data['testimonial_name'][$i];
			   $detail['test_desc'] =  $data['discription'][$i];
			   $detail['testi_langid'] =  $data['language_id'][$i];
			   $this->db->insert("testimonial_detail",$detail);
		   }
		   
		   return $insert_id;
	 }	



  function get_testimonial(){
	  				$this->db->select("*")
		          ->from("testimonial t")
				  ->join('testimonial_detail td', 't.testi_id = td.testi_id', 'left')
				  ->join('reason_detail rd','t.testi_reaid=rd.rea_id','left')
				  
				   ->where('td.testi_langid', language )
				   ->where('rd.rea_langid', language );
				  
		           $this->db->order_by("t.testi_id", "desc");
	
                   $result = $this->db->get();
				  
				  
		  
		         return $result->result_array();
	  
	  
                 }	 
  
  
                function get_testimonial_by_laguage($lan_id,$testi_id){
			   
			      $this->db->select("*")
		          ->from("testimonial_detail td")
				  ->join('language l', 'l.lang_id = td.testi_langid', 'left');
				    
				  $this->db->where('td.testi_id', $testi_id );
				  $this->db->where('td.testi_langid', $lan_id );
	
                  $result = $this->db->get();
				  
				  
		  
		         return $result->result_array();
			   
			   
		   }
  
  
  
  
       function get_testimonial_single($id){
					
	  	  		  $this->db->select("*")
		          ->from("testimonial t")
				  ->join('testimonial_detail td', 't.testi_id = td.testi_id', 'left');
				  
				  /* if($str=='view'){
                 $this->db->join('reason_detail r','t.testi_reaid = r.rea_id','inner');
				
				 }	*/			  
				  $this->db->where('t.testi_id', $id );	
                  $result = $this->db->get();		  
		         return $result->result_array();
           }
		   
		   function edit_testimonial($data,$image,$id){
			 		 $update['testi_reaid'] = uae;
					 if($image !=''){
						 $update['testi_image'] = $image; 
					 }
		            
		             $update['testi_update'] = date('Y-m-d');
		             $update['testi_status'] = $data['status'];
		             $this->db->where('testi_id',$id);
		             $query = $this->db->update('testimonial',$update);
		            
		             $count = count($data['testimonial_name']);
		   
		              for ($i=0; $i<$count; $i++){
			   
			   
			            $detail['testi_name'] = $data['testimonial_name'][$i];
			            $detail['test_desc'] =  $data['discription'][$i];
			            $languageid =  $data['language_id'][$i];
						
				//this check language id exist or not
			   
			   	$q = $this->db->get_where('testimonial_detail', array(
                 'testi_langid' => $languageid,
				 'testi_id' => $id
                ));

                if($q->num_rows()==0){
					
					
					  $data12 = array(
                        'testi_id' => $id,
                        'testi_langid' => $languageid
                       );
                 $this->db->insert('testimonial_detail', $data12);
				}
				
				//
						
						$this->db->where('testi_id',$id);
						$this->db->where('testi_langid',$languageid);
			            $this->db->update("testimonial_detail",$detail);
		                    }
		   
		                return $query;  
			   
			   
		   }
		   
		   function add_blog($data,$image){
			   
		 $insert['blog_reaid'] = uae;
		 $insert['blog_image'] = $image;
		 $insert['url'] = $this->clean_string($data['burl']);
		 $insert['blog_dateadd'] = date('Y-m-d');
		 $insert['blog_status'] = $data['status'];
		 $this->db->insert('blog',$insert);
		 $insert_id = $this->db->insert_id();
		 $count = count($data['blog_name']);
		   
		   for ($i=0; $i<$count; $i++){
			   
			   $detail['blog_id'] = $insert_id;
			   $detail['blog_title'] = $data['blog_name'][$i];
			   $detail['blog_desc'] =  $data['discription'][$i];
			   $detail['blog_langid'] =  $data['language_id'][$i];
			   $this->db->insert("blog_detail",$detail);
		   }
		   
		   return $insert_id;

			   
			   
		   }
		   
     function get_blog(){
			 
		  	  	  $this->db->select("*")
		          ->from("blog b")
				  ->join('blog_detail bd', 'b.blog_id = bd.blog_id', 'left')
				  ->join('reason_detail rd','b.blog_reaid=rd.rea_id','left')
				  
				  ->where('bd.blog_langid', language )
				  ->where('rd.rea_langid', language );
				  
		          $this->db->order_by("b.blog_id", "desc");
	
                  $result = $this->db->get();
				  
				  
		  
		         return $result->result_array();
	
	            }  
	  
  
                  function get_blog_by_laguage($lang_id,$blog_id){
					  
					  $this->db->select("*")
					  
		            ->from("blog_detail bd")
					
				    ->join('language l', 'bd.blog_langid = l.lang_id', 'left');
				  
	
				  
				    $this->db->where('bd.blog_id', $blog_id );
				    $this->db->where('bd.blog_langid', $lang_id );
				  
				  
		          
	
                    $result = $this->db->get();
				  
				  
		  
		            return $result->result_array();
	   
					  
					  
					  
				  }
  
  

   public function get_blog_single($id,$str){
	   
	   	  	  	   $this->db->select("*")
		            ->from("blog b")
				    ->join('blog_detail bd', 'b.blog_id = bd.blog_id', 'left');
				  
				  
				   if($str=='view'){
					$this->db->join('reason_detail rd','b.blog_reaid=rd.rea_id','left');   
				   
				   }
				  
				  $this->db->where('b.blog_id', $id );
				  
				  
		          
	
                  $result = $this->db->get();
				  
				  
		  
		         return $result->result_array();
	   
	   
	   
   }
   
   function edit_blog($data,$image,$id){
	   
	   	 $update['blog_reaid'] = uae;
		 if($image !=''){
			$update['blog_image'] = $image; 
		 }
		 
		 $update['blog_update'] = date('Y-m-d');
		 $update['blog_status'] = $data['status'];
		 $update['url'] = $this->clean_string($data['burl']);
		 
		 $this->db->where('blog_id',$id);
		 $query = $this->db->update('blog',$update);
		
		 $count = count($data['blog_name']);
		   
		   for ($i=0; $i<$count; $i++){
			   
			  
			   $detail['blog_title'] = $data['blog_name'][$i];
			   $detail['blog_desc'] =  $data['discription'][$i];
			   $language_id =  $data['language_id'][$i];
			   
			   	//this check language id exist or not
			   
			   	$q = $this->db->get_where('blog_detail', array(
                 'blog_langid' => $language_id,
				 'blog_id' => $id
                ));

                if($q->num_rows()==0){
					  $data12 = array(
                        'blog_id' => $id,
                        'blog_langid' => $language_id
                       );
                 $this->db->insert('blog_detail', $data12);
				}
				
				//
			   
			   $this->db->where('blog_id',$id);
			   $this->db->where('blog_langid',$language_id);
			   $this->db->update("blog_detail",$detail);
		   }
		   
		   return $query;
	   
   }
   
   //suggetion module 
   
      function add_suggetion($data){
		 $insert['sug_reaid'] = uae;
		 $insert['sug_dateadd'] = date('Y-m-d');
		 $insert['sug_stauts'] = $data['status'];
		 $insert['url'] = $this->clean_string($data['url']);
		 $this->db->insert('suggession',$insert);
		 $insert_id = $this->db->insert_id();
		 $count = count($data['sugg_name']);
		   
		   for ($i=0; $i<$count; $i++){
			   
			   $detail['sug_id'] = $insert_id;
			   $detail['sug_title'] = $data['sugg_name'][$i];
			   $detail['sug_ldesc'] =  $data['discription'][$i];
			   $detail['sug_langid'] =  $data['language_id'][$i];
			   $this->db->insert("suggession_detail",$detail);
		   }
		   
		   return $insert_id;

		  
		  
	  }
	  
	  function get_suggestion(){
		  
		  	  	  $this->db->select("*")
		          ->from("suggession s")
				  ->join('suggession_detail sd', 's.sug_id = sd.sug_id', 'left')
				  ->join('reason_detail rd','s.sug_reaid=rd.rea_id','left')
				  
				  ->where('sd.sug_langid', language )
				  ->where('rd.rea_langid', language );
				  
		          $this->db->order_by("s.sug_id", "desc");
	
                  $result = $this->db->get();
				  
				  
		 
		         return $result->result_array();
	
		  
		  
		  
	  }
	  
	   function suggation_by_language($langid,$sug_id){
		   
		  		  $this->db->select("*")
				  
		          ->from("suggession_detail sd")
				  
				  ->join(' language l', 'l.lang_id = sd.sug_langid', 'left');
				  
				 
				  
				  $this->db->where('sd.sug_id', $sug_id );
				  $this->db->where('sd.sug_langid', $langid );
				  
				  
		          
                  $result = $this->db->get();
				  
				  
		 
		         return $result->result_array(); 
		   
		   
	   }
	  
	  
	  
	  function get_suggestion_single($id,$str){
		  		   $this->db->select("*")
		          ->from("suggession s")
				  ->join('suggession_detail sd', 's.sug_id = sd.sug_id', 'left');
				  
				  if($str=='view'){
				 $this->db->join('reason_detail rd','s.sug_reaid=rd.rea_id','left');
				  }
				  
				  $this->db->where('s.sug_id', $id );
				  
				  
		          
                  $result = $this->db->get();
				  
				  
		 
		         return $result->result_array();
		  
		  
		  
	  }
	  
	  function edit_suggestion($data,$id){
		  
		 $update['sug_reaid'] = uae;
		 $update['sug_update'] = date('Y-m-d');
		 $update['sug_stauts'] = $data['status'];
		 $update['url'] = $this->clean_string($data['url']);
		 $this->db->where('sug_id',$id);
		 $query =  $this->db->update('suggession',$update);
	
		 $count = count($data['sugg_name']);
		   
		    
		   
		   for ($i=0; $i<$count; $i++){
			   
			
			   $detail['sug_title'] = $data['sugg_name'][$i];
			   $detail['sug_ldesc'] =  $data['discription'][$i];
			   $languageid =  $data['language_id'][$i];
			   
			   	//this check language id exist or not
			   
			   	$q = $this->db->get_where('suggession_detail', array(
                 'sug_langid' => $languageid,
				 'sug_id' => $id
                ));

                if($q->num_rows()==0){
					  $data12 = array(
                        'sug_id' => $id,
                        'sug_langid' => $languageid
                       );
                 $this->db->insert('suggession_detail', $data12);
				}
				
				//
			   
			   $this->db->where("sug_id",$id);
			   $this->db->where("sug_langid",$languageid);
			   $this->db->update("suggession_detail",$detail);
		   }
		   
		   
		   
		   return $query;

		 
		  
		  
	  }
	  
	
	function clean_string($str){
	   
	   $cleanStr = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $str)));
	   
	   return str_replace(" ","-",$cleanStr);
	   
   }
	
}
?>