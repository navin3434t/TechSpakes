<?php

/************
Application Name : Tech Spakes Custom CMS Admin 
Author : Tech Spakes 
Author URL : https:\\www.techspakes.com
Version : V1.0
*************/
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends Main_Controller {

	
	/*********** 
		Function Name : Main Dashboard Page 
		Description : 
		Response : 
		Parameter :
	*********/
	public function adminUserLogin()
	{
		if(isset($_REQUEST['userLogin']) && !empty($_REQUEST['userLogin']) && isset($_REQUEST['userPassword']) && !empty($_REQUEST['userPassword']) )
		{
			$userLogin=$_REQUEST['userLogin'];
			$userPassword=$_REQUEST['userPassword'];
			$userValidate=$this->TSAJAX->validateAdminUser($userLogin,$userPassword);
			if($userValidate['status']=="1")
			{
				$enteredPassword=md5($userPassword);
				if($userValidate['data']->userPassword==$enteredPassword)
				{
					if($userValidate['data']->isDelete=="0" || $userValidate['data']->status=="1")
					{
						$_SESSION['TS_CMS']['USER_ID']=$userValidate['data']->id;
						$_SESSION['TS_CMS']['USER_FNAME']=$userValidate['data']->userFirstName;
						$_SESSION['TS_CMS']['USER_MNAME']=$userValidate['data']->userMiddleName;
						$_SESSION['TS_CMS']['USER_LNAME']=$userValidate['data']->userLastName;
						$_SESSION['TS_CMS']['USER_DESIGNATION']=$userValidate['data']->userDesignation;
						echo json_encode(array("status"=>"1","msg"=>"User Validated",'validate_key'=>"1"));
					}
					else
					{
						echo json_encode(array("status"=>"0","msg"=>"Account disabled",'validate_key'=>"0"));
					}
				}
				else
				{
					echo json_encode(array("status"=>"0","msg"=>"Invalid User/Password",'validate_key'=>"0",'error_code'=>"101"));
				}
					
			}
			else
			{
				echo json_encode(array("status"=>"0","msg"=>"Invalid User/Password",'validate_key'=>"0",'error_code'=>"102"));
			}
		}
		else
		{
			echo json_encode(array("status"=>"0","msg"=>"Invalid Request"));
			die();
		}
	}
	
	
	
	
	
	
}
