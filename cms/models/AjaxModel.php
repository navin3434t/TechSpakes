<?php
/************
Application Name : Tech Spakes Custom CMS Admin 
Author : Tech Spakes 
Author URL : https:\\www.techspakes.com
Version : V1.0
*************/
class AjaxModel extends CI_Model
{
	/*********** 
		Function Name : validateAdminUser
		Description :   Admin User Login Validation
		Response : 
		Parameter :
	*********/
	function validateAdminUser($userLogin,$userPassword)
	{
		$this->db->select("*");
		$this->db->from("adminlogin");
		$this->db->where("userName",$userLogin);
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			$data= $query->result();
			$returnArr=array("status"=>"1","data"=>$data[0]);
			
		}
		else
		{
			$returnArr=array("status"=>"0");
		}
		return $returnArr;
		
	}
	
	
}//End Of Class Model
?>