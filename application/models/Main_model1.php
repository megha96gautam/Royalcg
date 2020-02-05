<?php
Class Main_model extends CI_Model
{
	

	
	  public function region(){
		  
		  		$this->db->select("*")
		          ->from("reason r")
				  ->join('reason_detail rd', 'rd.rea_id = r.rea_id', 'left')
				  
				  ->where('rd.rea_langid', language );
				  
				
				 $this->db->where('r.rea_status', 1 );
				 
		         $this->db->order_by("r.rea_dateadd", "desc");
				 
                 $result = $this->db->get();
		  
		         return $result->result_array();
	  }
	
	  function get_banners($str){
		  
		
		
		$this->db->select('*')
		         ->from('slider s')
		         
		         
		         ->where('s.slider_reaid' , $str)
		         ->where('s.slider_status' , 1)
				 ->order_by('s.slider_added','desc');
		$query = $this->db->get();
		
		return  $query->result_array();

		}
		
		
		//getting featurer category
		
		function get_fetaure($str , $language){
			
			  
	                
				    $this->db->select("*")
				   
		           ->from("category c")
				  
				   ->join('category_detail cd', 'c.cate_id = cd.cate_id', 'left')
				  
				   ->where('cd.cate_langid', $language )
				   
				   ->where('c.cate_reaid', $str )
				   
				   ->where('c.cate_feature', 1 )
				   
				   ->where('c.cate_status', 1 );
				  
                   $result = $this->db->get();
				   
				  
		  
		         return $result->result_array();
	
			
			
		}
		
		// get suggation 
		
		
		function get_suggation($str ,$language){
			
			        
					
			  	  $this->db->select("*")
				  
		          ->from("suggession s")
				  
				  ->join('suggession_detail sd', 's.sug_id = sd.sug_id', 'left')
				  
						  
				  ->where('s.sug_reaid', $str )
				  
				  ->where('s.sug_stauts',1 )
				  
				  ->where('sd.sug_langid', $language );
				  
				 
				  
		          $this->db->order_by("s.sug_dateadd", "desc");
	
                  $result = $this->db->get();
				  
				  
		   
		         return $result->result_array();
				  
				   
				  			
		}
		
		//getting blog
		 
	function get_blog($str , $language){
			
				   $this->db->select("*")
				   
		          ->from("blog b")
				  
				  ->join('blog_detail bd', 'b.blog_id = bd.blog_id', 'left')
				  
				   ->where('bd.blog_langid', $language )
				  
				   ->where('b.blog_reaid', $str )
				   
				   ->where('b.blog_status', 1 );
				 
  				   $this->db->order_by("b.orderby", "asc");
	
                   $result = $this->db->get();
				  
				  
		  
		         return $result->result_array();
			
		}
		
		
		function get_testimonial($str,$language){
			
			
				  $this->db->select("*")
				  
		          ->from("testimonial t")
				  
				  ->join('testimonial_detail td', 't.testi_id = td.testi_id', 'left')
			  
				   ->where('td.testi_langid', $language )
				   
				   ->where('t.testi_reaid', $str )
				   
				   ->where('t.testi_status', 1 );
				  
		           $this->db->order_by("t.testi_added", "desc");
	
                   $result = $this->db->get();
				  
				  
		  
		         return $result->result_array();
			
			
		}
		
		//get footer category 
		
		function get_category($str , $language ,$limit){
			
				 $this->db->select("*")
				   
		           ->from("category c")
				  
				   ->join('category_detail cd', 'c.cate_id = cd.cate_id', 'left')
				  
				   ->where('cd.cate_langid', $language )
				   
				   ->where('c.cate_reaid', $str )
				    
				   ->where('c.cate_status', 1 )
				   
				   ->order_by('c.order_by','asc');
				  
                   $result = $this->db->get();
				   
				  
		  
		           return $result->result_array();
			
			
		}
		
		function get_list($id , $region ,$language){
			
			       $this->db->select("*")
				   
		           ->from("product p")
				   
				   ->join('product_detail pd', 'p.pro_id = pd.pro_id', 'inner');
				   
				   $this->db->where('p.pro_reaid', $region );  
				 
				 
				   $this->db->where('p.pro_catid', $id );
				   
				   $this->db->where('p.pro_status', 1 );  
				   
				   $this->db->where('pd.pro_langid', $language );  
				
  				       $this->db->order_by('p.sort','asc');
					   
				  $query = $this->db->get();
				  
				
				  return $query->result_array();
				  
				  
			
			
			
		}
		
			function get_list12($id , $region ,$language){
			
			       $this->db->select("*")
				   
		           ->from("product p")
				   
				   ->join('product_detail pd', 'p.pro_id = pd.pro_id', 'inner');
				   
				   $this->db->where('p.pro_reaid', $region );  
				 
				 
				   $this->db->where('p.pro_catid', $id );

				   
				   $this->db->where('pd.pro_langid', $language );  
				   
				   $this->db->order_by('p.sort','asc');
				 
				  $query = $this->db->get();
				  
				
				  return $query->result_array();
				  
				  
			
			
			
		}	
		
	function get_listsingle($id,$region,$language){
			
				  $this->db->select("*")  
				  
		          ->from("product p")
				  
				  ->join('product_detail pd', 'p.pro_id = pd.pro_id', 'left');
				  
				  $this->db->where('p.pro_id', $id );
				  $this->db->where('p.pro_reaid', $region );
				  $this->db->where('pd.pro_langid', $language );
				  
				  $query = $this->db->get();
				  
				  
				  return $query->result_array();
			
			
		}
		function get_language(){
			
			       $this->db->select("*")  
		          ->from("language")
		          ->where("lang_status",1);
			       $query = $this->db->get();
			 
				  return $query->result_array();
		}
	
	function getHomecontent($language){
		
		  //get content
		$this->db->select("*")
	    ->from("home_content");
		$this->db->where('language_id',$language);
	    $result = $this->db->get();	
		
		
					   
	   return $result->result_array();
	         	   ///
		
		
	}
	
	  function getpages(){
		
		  //get content
		$this->db->select("*")
	    ->from("pages");
		$this->db->or_where('page_id',19);
		$this->db->or_where('page_id',20);
		$this->db->or_where('page_id',21);
		$this->db->or_where('page_id',22);
		$this->db->where('page_status',1);
		$this->db->order_by('page_id','desc');
	    $result = $this->db->get();	
		
			$data = array();
			$privacy = '';
			$tmc = '';
			$copyright = '';
					   
	   foreach($result->result_array() as $result){
		   

		     if($result['page_id']==19){
				 
				   $privacy = $result['page_url'];
				 
			 }
		    if($result['page_id']==20){
				
				$copyright = $result['page_url'];
				 
				
			 }
		    if($result['page_id']==21){
			  
		 		   $tmc = $result['page_url'];
				 
				
		     }
			  if($result['page_id']==22){
			  
		 		   $about = $result['page_url'];
				 
				
		     }
			 

		  
	   }
	   
			 $data['tmc'] = $tmc;
			 $data['privacy'] = $privacy;
			 $data['copyright'] = $copyright;
			 $data['about'] = $about;
			 
			  
			 return $data ; 
	         	   
		
		
	}
	
	  function getlisting_name($cate_id){
		$this->db->select("meta_tag")
	             ->from("product")
                 ->where("pro_catid",$cate_id)
                 ->where("pro_status",1)
                 ->order_by("sort","ASC")
                 ->limit(1, 0);
		$q = $this->db->get();
        return $q->result();		
	  
	  }	
}
?>