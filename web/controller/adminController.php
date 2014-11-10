<?php
class adminController extends Controller {
	

	private $userService;
	
	public function __construct() {
		parent::__construct();
		$this->userService = InitPHP::getService("user");
	}
	
	public function before() {
		//echo '前置执行Action';
	}
	
	public function after() {
		//echo '后置执行Action';
	}
	
	
	
	
	public function run() {
		$this->view->set_tpl('admin/run'); 
		$this->view->display();
	}
	
	
	
	
	
	/*public function produnt_list() {
		$this->view->set_tpl('admin/produnt/list'); 
		$this->view->display(); //模板显示
	}*/
	
	
	public function test() {
		$this->view->set_tpl('admin/test'); 
		$this->view->display(); 
	}
	


}
