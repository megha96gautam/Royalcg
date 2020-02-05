<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	
	var $data;
	
	function __construct(){
			
			parent::__construct();
			
	        // Loading second db and running query.
	$CI = &get_instance();
	//setting the second parameter to TRUE (Boolean) the function will return the database object.
	$this->db2 = $CI->load->database('wpblog', TRUE);
	
		
		
		  
	}
	
	public function index()
	{
		
	  $sql = "SELECT wp_posts.*, wp_postmeta.meta_value FROM wp_posts
			LEFT JOIN wp_postmeta ON(wp_posts.ID = wp_postmeta.post_id)
			LEFT JOIN wp_term_relationships ON(wp_posts.ID = wp_term_relationships.object_id)
			LEFT JOIN wp_term_taxonomy ON(wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id)
			WHERE wp_term_taxonomy.term_id = 26
			AND wp_term_taxonomy.taxonomy = 'category'
			AND wp_posts.post_status = 'publish'
			AND wp_postmeta.meta_key = '_thumbnail_id'
			ORDER BY wp_postmeta.meta_value ASC LIMIT 3";
			
			
    
	
	
	$qry = $this->db2->query($sql);
	
	$blogs = $qry->result();
	
	 $data['blog_content'] = "";	
	 
	 foreach($blogs as $blog)
		{	
		
		   $sql1 = "SELECT meta_value FROM wp_postmeta WHERE meta_key = '_wp_attached_file' AND post_id = '".$blog->meta_value."'";
		   $qry1 = $this->db2->query($sql1);
	       $image = $qry1->row();
		   $url = site_url()."/blog/wp-content/uploads/".$image->meta_value;
		 
		    
			$data['blog_content'] .= '<div class="col-md-4 col-sm-3 col-xs-4">
            <div class="blog_one"> <img width="340" height="304" alt="top 10 tourist attractions in uae" src="'.$url.'">
              <h3>'.$blog->post_title.'</h3>
              <span class="about_dub">
              '.$blog->post_excerpt.'</span> <br>
              <div> <a href="'.$blog->guid.'" class="blog_readmore">
                read more </a> </div>
            </div>
          </div>';
			
		}
		
		
      $this->load->view('test', $data); 
	}
 
 
}

 
	