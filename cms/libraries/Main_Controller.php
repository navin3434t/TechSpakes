<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");
/************
Application Name : Tech Spakes Custom CMS Admin 
Author : Tech Spakes 
Author URL : https:\\www.techspakes.com
Version : V1.0
*************/
/**
 * @subpackage      Controllers
 */
class Main_Controller extends CI_Controller
{
	protected $userRole;
	function Main_Controller()
	{
		parent::__construct();
		/*Load Base Codeigniter Files*/
		$this->load->database();

		/*Load Libraries*/
		$this->load->library("session");	##Load Session Class
		$this->load->library("email");		##Load Email Class

		/*Load Helpers*/
		$this->load->helper('url');		##Load URL Helper
		$this->load->helper("form");	##Load Form Helper

		/*Load Base Prop Files*/
		$this->load->config("prop");

		/*view container files*/
		$this->_loginContainerPage = $this->config->item("techspake_main_dir") . "login_container.php";
		$this->_dashboardContainerPage = $this->config->item("techspake_main_dir") . "dashboard_container.php";
		$this->_dashboardListingContainerPage = $this->config->item("techspake_main_dir") . "dashboard_listing_container.php";

		
		
		/*************** Seller View ************/
		$this->_seller_container = $this->config->item("template_views_seller") . "seller_container.php";
		$this->_seller_pending_product_container = $this->config->item("template_views_seller") . "seller_pending_product_container.php";

		/*Load different models*/
		$this->load->model("AjaxModel","TSAJAX");
		$this->load->model("AdminModel","ADNM");
		$this->load->model("CmsModel","CMSM");
		$this->load->model("BlogModel","BLGM");
		$this->load->model("NewsModel","NWSM");
		$this->load->model("ArticleModel","ARTM");
		$this->load->model("ServicesModel","SERM");
		$this->load->model("EcommerceModel","ECOMM");

		//$this->load->model("Af_Model","AF");

	}

	function checkUserLogin() {
		if(!($this->session->userdata("TS_CMS"))){
			redirect("","refresh");
		}
	}
	function checksellerloginsession() {
		if(!($this->session->userdata("vendor_login_id"))){
			redirect("login/","refresh");
		}
	}
	function userSessionExist() {
		if(($this->session->userdata("SABKA_UID"))){
			redirect("Products/","refresh");
		}
	}
	
	function commonLanguageItems()
	{
	
		/*********** Header Langauge Item Start *******/
		$this->lang->load('sabka', 'english');
		$data['cart_menu_txt'] = $this->lang->line('cart_menu_txt');
		$data['login_signup_menu_txt'] = $this->lang->line('login_signup_menu_txt');
		$data['search_placeholder_txt'] = $this->lang->line('search_placeholder_txt');
		/*********** Footer ******/
		$data['copyright_txt'] = $this->lang->line('copyright_txt');
		$data['poweredby_name_txt'] = $this->lang->line('poweredby_name_txt');
		$data['poweredby_url_txt'] = $this->lang->line('poweredby_url_txt');
		$data['right_reserved_txt'] = $this->lang->line('right_reserved_txt');
		$data['logout_menu_txt'] = $this->lang->line('logout_menu_txt');
		return $data;
	}
	/**Start Functions for Random String Generator**/
	function crypto_rand_secure($min, $max)
	{
		$range = $max - $min;
		if ($range < 1) return $min; // not so random...
		$log = ceil(log($range, 2));
		$bytes = (int) ($log / 8) + 1; // length in bytes
		$bits = (int) $log + 1; // length in bits
		$filter = (int) (1 << $bits) - 1; // set all lower bits to 1
		do {
				$rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
				$rnd = $rnd & $filter; // discard irrelevant bits
		} while ($rnd > $range);
		return $min + $rnd;
	}

	function getToken($length)
	{
		$token = "";
		$codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
		$codeAlphabet.= "0123456789";
		$max = strlen($codeAlphabet); // edited

		for ($i=0; $i < $length; $i++) {
				$token .= $codeAlphabet[$this->crypto_rand_secure(0, $max-1)];
		}

		return $token;
	}
	/**End Functions for Random String Generator**/

}
/* End of Main_controller.php */
/* Location: ./style/libraries/Main_Controller.php */
