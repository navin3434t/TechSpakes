<?php
/************
Application Name : Tech Spakes Custom CMS Admin 
Author : Tech Spakes 
Author URL : https:\\www.techspakes.com
Version : V1.0
*************/
class AdminModel extends CI_Model
{
	/*********** 
		Function Name : getLoggedinUserDetail
		Description :   Admin User Login Details
		Response : 
		Parameter :
	*********/
	function getLoggedinUserDetail($userLoginId)
	{
		$this->db->select("*");
		$this->db->from("adminlogin");
		$this->db->where("id",$userLoginId);
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			$returnArr= $query->result();
			
			
		}
		else
		{
			$returnArr=array();
		}
		return $returnArr;
		
	}
	/*********** 
		Function Name : getSystemConfiguration
		Description :   Website System Configuration
		Response : 
		Parameter :
	*********/
	function getSystemConfiguration()
	{
		$this->db->select("*");
		$this->db->from("configuration");
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			$returnArr= $query->result();
			
			
		}
		else
		{
			$returnArr=array();
		}
		return $returnArr;
		
	}
}//End Of Class Model
?>