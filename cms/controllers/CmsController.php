<?php

/************
Application Name : Tech Spakes Custom CMS Admin 
Author : Tech Spakes 
Author URL : https:\\www.techspakes.com
Version : V1.0
*************/
defined('BASEPATH') OR exit('No direct script access allowed');

class CmsController extends Main_Controller {

	
	/*********** 
		Function Name : Main Dashboard Page 
		Description : 
		Response : 
		Parameter :
	*********/
	public function contentPagesListPage()
	{
		$this->checkUserLogin();
		$loginId=$this->session->userdata('TS_CMS')['USER_ID'];
		$data['loginUserData']=$this->ADNM->getLoggedinUserDetail($loginId);
		$data["pageName"]="cms/list";
		$this->load->view($this->_dashboardListingContainerPage,$data);
	}
	
	
	
}
