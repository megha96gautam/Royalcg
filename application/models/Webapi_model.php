<?php
defined("BASEPATH") OR exit("path not defined");



class Webapi_model extends CI_Model

{
	function get($where=null){
		$res=$this->db->get_where('subcategory',$where);	
		return $re->result();
	}
}