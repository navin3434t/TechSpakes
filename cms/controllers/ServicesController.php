<?php

/************
Application Name : Tech Spakes Custom CMS Admin 
Author : Tech Spakes 
Author URL : https:\\www.techspakes.com
Version : V1.0
*************/
defined('BASEPATH') OR exit('No direct script access allowed');

class ServicesController extends Main_Controller {

	
	/*********** 
		Function Name : Main Dashboard Page 
		Description : 
		Response : 
		Parameter :
	*********/
	public function servicesListPage()
	{
		$this->checkUserLogin();
		$loginId=$this->session->userdata('TS_CMS')['USER_ID'];
		$data['loginUserData']=$this->ADNM->getLoggedinUserDetail($loginId);
		$data["pageName"]="services/list";
		$this->load->view($this->_dashboardListingContainerPage,$data);
	}
	
	
	
}
