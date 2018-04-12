<?php

/************
Application Name : Tech Spakes Custom CMS Admin 
Author : Tech Spakes 
Author URL : https:\\www.techspakes.com
Version : V1.0
*************/
defined('BASEPATH') OR exit('No direct script access allowed');

class EcommerceController extends Main_Controller {

	/********************** Category Start *****************/
	/*********** 
		Function Name : Main Dashboard Page 
		Description : 
		Response : 
		Parameter :
	*********/
	public function ecommerceCategoryListPage()
	{
		$this->checkUserLogin();
		$loginId=$this->session->userdata('TS_CMS')['USER_ID'];
		$data['loginUserData']=$this->ADNM->getLoggedinUserDetail($loginId);
		$data["pageName"]="ecommerce/category/list";
		$this->load->view($this->_dashboardListingContainerPage,$data);
	}
	
	/********************** Product Start *********************/
	/*********** 
		Function Name : Main Dashboard Page 
		Description : 
		Response : 
		Parameter :
	*********/
	public function ecommerceProductListPage()
	{
		$this->checkUserLogin();
		$loginId=$this->session->userdata('TS_CMS')['USER_ID'];
		$data['loginUserData']=$this->ADNM->getLoggedinUserDetail($loginId);
		$data["pageName"]="ecommerce/product/list";
		$this->load->view($this->_dashboardListingContainerPage,$data);
	}
	
	
}
