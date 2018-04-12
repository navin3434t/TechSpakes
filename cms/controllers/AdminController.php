<?php

/************
Application Name : Tech Spakes Custom CMS Admin 
Author : Tech Spakes 
Author URL : https:\\www.techspakes.com
Version : V1.0
*************/
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends Main_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data["pageTitle"]="Login";
		$data['systemConfiguration']=$this->ADNM->getSystemConfiguration();
		$this->load->view($this->_loginContainerPage,$data);
		
	}
	/*********** 
		Function Name : Main Dashboard Page 
		Description : 
		Response : 
		Parameter :
	*********/
	public function mainDashboardPage()
	{
		$this->checkUserLogin();
		$loginId=$this->session->userdata('TS_CMS')['USER_ID'];
		$data['loginUserData']=$this->ADNM->getLoggedinUserDetail($loginId);
		$data['systemConfiguration']=$this->ADNM->getSystemConfiguration();
		$data["pageTitle"]="Dashboard";
		$data["pageName"]="maindashboard";
		$this->load->view($this->_dashboardContainerPage,$data);
	}
	/*********** 
		Function Name : Admin Users List Page
		Description : 
		Response : 
		Parameter :
	*********/
	public function adminUsersListPage()
	{
		$this->checkUserLogin();
		$loginId=$this->session->userdata('TS_CMS')['USER_ID'];
		$data['loginUserData']=$this->ADNM->getLoggedinUserDetail($loginId);
		$data['systemConfiguration']=$this->ADNM->getSystemConfiguration();
		$data["pageTitle"]="System Configuration";
		$data["pageName"]="adminuser/list";
		$this->load->view($this->_dashboardListingContainerPage,$data);
	}
	/*********** 
		Function Name : System Configuration List Page
		Description : 
		Response : 
		Parameter :
	*********/
	public function systemConfigurationPage()
	{
		$this->checkUserLogin();
		$loginId=$this->session->userdata('TS_CMS')['USER_ID'];
		$data['loginUserData']=$this->ADNM->getLoggedinUserDetail($loginId);
		$data['systemConfiguration']=$this->ADNM->getSystemConfiguration();
		$data["pageTitle"]="System Configuration";
		$data["pageName"]="systemconfiguration/edit";
		$this->load->view($this->_dashboardContainerPage,$data);
	}
	
	/*********** 
		Function Name : System Configuration List Page
		Description : 
		Response : 
		Parameter :
	*********/
	public function adminUserLogout()
	{
		$this->session->unset_userdata("TS_CMS");
		$this->session->sess_destroy();
		redirect('/');
	}
	
	
	
	
	
}
