<?php

/************
Application Name : Tech Spakes Custom CMS Admin 
Author : Tech Spakes 
Author URL : https:\\www.techspakes.com
Version : V1.0
*************/
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends Main_Controller {

	/****************** Category Start ***********/	
	/*********** 
		Function Name : Main Dashboard Page 
		Description : 
		Response : 
		Parameter :
	*********/
	public function blogCategoryListPage()
	{
		$this->checkUserLogin();
		$loginId=$this->session->userdata('TS_CMS')['USER_ID'];
		$data['loginUserData']=$this->ADNM->getLoggedinUserDetail($loginId);
		$data["pageName"]="blog/category/list";
		$data['dataListdataList']=$this->BLGM->blogCategoryList();
		$this->load->view($this->_dashboardListingContainerPage,$data);
	}
	
	
	/****************** Category End  ***********/
	
	/****************** Posts Start ***********/
	/*********** 
		Function Name : Main Dashboard Page 
		Description : 
		Response : 
		Parameter :
	*********/
	public function blogPostListPage()
	{
		$this->checkUserLogin();
		$loginId=$this->session->userdata('TS_CMS')['USER_ID'];
		$data['loginUserData']=$this->ADNM->getLoggedinUserDetail($loginId);
		$data["pageName"]="blog/post/list";
		$this->load->view($this->_dashboardListingContainerPage,$data);
	}
	/****************** Posts Start ***********/
	
	
	/****************** Tags Start ***********/
	/*********** 
		Function Name : Main Dashboard Page 
		Description : 
		Response : 
		Parameter :
	*********/
	public function blogTagListPage()
	{
		$this->checkUserLogin();
		$loginId=$this->session->userdata('TS_CMS')['USER_ID'];
		$data['loginUserData']=$this->ADNM->getLoggedinUserDetail($loginId);
		$data["pageName"]="blog/tag/list";
		$this->load->view($this->_dashboardListingContainerPage,$data);
	}
	/****************** Tags Start ***********/
	
	
}
