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

	  function get_language(){
	  	$this->db->select('*');
	  	$this->db->from('language');
	  	$this->db->where('lang_status','1');
	  	$result = $this->db->get();
	  	return $result->result_array();
	  }
	  function services_data(){
	      $this->db->select("*")
				->from("pages r")
				->join('pages_detail rd', 'rd.page_id = r.page_id')
				->where('rd.menu_status', 1 );
		  $this->db->where('r.page_status', 1 );
          $this->db->order_by("r.order_by", "Asc");
          $result = $this->db->get();
         return $result->result_array();
	  }

   public function get_banners($str){	  
			$this->db->select('*')
		         ->from('slider s')
		         ->where('s.slider_reaid' , $str)
		         ->where('s.slider_status' , 1)
		         ->order_by('s.sort_order','asc');
		         $this->db->limit(100);
		$query = $this->db->get();	

		return  $query->result_array();
		}
	public  function is_email_available($email){  
           $this->db->where('email', $email); 
           $query = $this->db->get("tbl_subcribe_email"); 
           if($query->num_rows() > 0) 
           {  
                return true;  
           }
           else 
           { 
                return false;
           } 
      }



	public	function category_by_region(){	

				$this->db->select("*")
		          ->from("category c")
				  ->where('cate_status',1)
				  ->order_by('meta_title','asc');
                   $result = $this->db->get();	  

		     return $result->result_array();
	}



	function enquiry_by_data($post_email){
		$this->db->select('email')
		         ->from('enquiries_form')
		         ->where('email', $post_email );
		$query = $this->db->get();
		return  $query->result_array();
		}

		function subcribe_email($post_email){	  

		$this->db->select('email')
		         ->from('tbl_subcribe_email')
		         ->where('email', $post_email );
		$query = $this->db->get();
		return  $query->result_array();
		}

		function get_city(){
                $this->db->select('*')
                  ->from('tbl_city')
				  ->where('city_status',1)
				  ->order_by('city_id','Asc');
				  $this->db->limit(12);
				$query = $this->db->get();
                return  $query->result_array();
            }
        function get_city_header(){
                $this->db->select('*')
                  ->from('tbl_city')
				  ->where('city_status',1)
				  ->order_by('city_id','Asc');
				 
				$query = $this->db->get();
                return  $query->result_array();
          }

	function product_by_subcate(){

		$this->db->select('*')

		         ->from('subcategory')

		         ->where('pro_catid',140);

		$query = $this->db->get();

		

		return  $query->result_array();

	}	

	function footer_booknow(){

		$query = $this->db->query('select p.* from pages_detail p , pages s where s.page_id=p.page_id and s.page_status=1 and p.menu_status=1 and p.footer_type="BookNow"');
	     return $query->result_array();		
	}
	function footer_deals(){

		$query = $this->db->query('select p.* from pages_detail p , pages s where s.page_id=p.page_id and s.page_status=1 and p.menu_status=1 and p.footer_type="Deals"');
	     return $query->result_array();		
	}
	function footer_contact(){

		$query = $this->db->query('select * from contact_page where id="1"');
	     return $query->result_array();		
	}
	function footer_destinations(){
		$query = $this->db->query('select * from destinations where destinations_status="1"');
	     return $query->result_array();	
	}
   function footer_explore(){

		$query = $this->db->query('select p.* from pages_detail p , pages s where s.page_id=p.page_id and s.page_status=1 and p.menu_status=1 and p.footer_type="Explore"');
	     return $query->result_array();		
	}

	function products($id){
		$this->db->select('*')
		         ->from('product')
		         ->where('category_id',$id);
		$query = $this->db->get();
		return  $query->result_array();
	}	
	function get_hotel(){
		$this->db->select('*')
		         ->from('product')
		         ->where('pro_id',13);
		         $query = $this->db->get();
		         return  $query->result_array();
	}

	function category_data(){

		$this->db->select('*')

		         ->from('category');

		$query = $this->db->get();

		

		return  $query->result_array();

	}

	function get_subcategory($cate_id){

		$this->db->select('*')

		         ->from('subcategory')

		         ->where('pro_catid',$cate_id);

		$query = $this->db->get();

		return  $query->result_array();

	}	
    function get_event($id){

		$this->db->select('*')

		         ->from('tbl_events')

		         ->where('event_id',$id);
		$query = $this->db->get();
		return  $query->result_array();

	}
	function get_carproducts($shipid){

	  $this->db->select('*')
		         ->from('product')

		         ->where('pro_subcatid',$shipid);
         $this->db->where('pro_status',1);
		$query = $this->db->get();
		return  $query->result_array();	

	}

	public function product_by_car()

	{
		 $this->db->select('*')
		         ->from('product')
		         ->where('pro_subcatid',1);
		$query = $this->db->get();
		return  $query->result_array();	
	}



	public function leatestproduct(){

		$this->db->select('*')
		         ->from('product')
		         ->order_by('pro_id','desc');
		         $this->db->limit(8);
		$query = $this->db->get();
		return  $query->result_array();	
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

	

	 function searching($data){

	 	$query = $this->db->query('select P.*, C.* from product P, category C where P.meta_title="'.$data.'" OR C.meta_title="'.$data.'"');

	    /*$query = $this->db->get();*/

	     return $query->result_array();

	 }

 function serching_ship($pro_title,$country,$city){


 	$query ='select * from product  where meta_title="'.$pro_title.'" or country="'.$country.'" or city="'.$city.'"';

	    $sql=$this->db->query($query);

        return $sql->result_array();

 }

  function aboutcontent(){
  	$this->db->select('*')
  	         ->from('pages_detail')
  	         ->where('page_id',22);
  	        $query = $this->db->get();
            return $query->result_array();

  }
 function product_reviews($id){
           $this->db->select('count(*) as reviews')
  	         ->from('product_reviews')
  	         ->where('product_id',$id);
  	        $query = $this->db->get();
            return $query->result_array();
 }
 function product_rating($id){
        $query ='select count(*) as rating from feedback  where product_id="'.$id.'" and rating="1"';

	    $sql=$this->db->query($query);

        return $sql->result_array();
 }
  function product_rating1($id){
        $query ='select count(*) as rating from feedback  where product_id="'.$id.'" and rating="2"';

	    $sql=$this->db->query($query);

        return $sql->result_array();
 }
 function product_rating2($id){
        $query ='select count(*) as rating from feedback  where product_id="'.$id.'" and rating="3"';

	    $sql=$this->db->query($query);

        return $sql->result_array();
 }
  function product_rating3($id){
        $query ='select count(*) as rating from feedback  where product_id="'.$id.'" and rating="4"';

	    $sql=$this->db->query($query);

        return $sql->result_array();
 }
  function product_rating4($id){
        $query ='select count(*) as rating from feedback  where product_id="'.$id.'" and rating="5"';

	    $sql=$this->db->query($query);

        return $sql->result_array();
 }
  function feedback_comments($pid){

         $this->db->select('*');
         $this->db ->from('feedback');
         $this->db ->where('feedback_status',1);
         $this->db ->where('product_id',$pid);

     $query = $this->db->get();

     return $query->result_array();

  }



  function avg_rating($id){

  $query = $this->db->query("SELECT AVG(rating) as AVGRATE from feedback where product_id='".$id."' and feedback_status=1");

  return $query->result_array();

  }



}

?>