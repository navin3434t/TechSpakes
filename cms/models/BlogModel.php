<?php
/************
Application Name : Tech Spakes Custom CMS Admin 
Author : Tech Spakes 
Author URL : https:\\www.techspakes.com
Version : V1.0
*************/
class BlogModel extends CI_Model
{
	/***************** Category ***************/
	/***********
		Function : blogList 
		Response :
		Parameter : 
		Description :
	************/
	function blogCategoryList()
	{
		$this->db->select("cat.*,log.userFirstName,log.userMiddleName,log.userLastName");
		$this->db->from("blog_category as cat");
		$this->db->join("adminlogin as log","log.id=cat.userId");
		$this->db->where("cat.isDelete","0");
		$this->db->where("cat.status","1");
		$query=$this->db->get();
		if($query->num_rows()>0) 
		{
			$checkQuery = $query->result();
		}
		else
		{
			$checkQuery =array();  
		}
		return $checkQuery;
	}
	/***************** Post ***************/
	/***********
		Function : blogList 
		Response :
		Parameter : 
		Description :
	************/
	function blogPostList()
	{
		$this->db->select("post.*,log.userFirstName,log.userMiddleName,log.userLastName");
		$this->db->from("blog_post as post");
		$this->db->join("blog_category as cat","cat.id=post.categoryId");
		$this->db->join("adminlogin as log","log.id=post.userId");
		$this->db->where("post.isDelete","0");
		$this->db->where("post.status","1");
		$query=$this->db->get();
		if($query->num_rows()>0) 
		{
			$checkQuery = $query->result();
		}
		else
		{
			$checkQuery =array();  
		}
		return $checkQuery;
	}
}//End Of Class Model
?>