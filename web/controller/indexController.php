<?php
class indexController extends Controller {
	
	/**
	 * @var userService
	 */
	private $userService;
	
	public function __construct() {
		parent::__construct();
		//可以在构造函数中初始化
		//如果追求性能的话，可以在具体使用到的Action中调用
		$this->userService = InitPHP::getService("user");
	}
	
	
	
	public $initphp_list = array('test'); 
	
	public function run() {
		$username = $this->userService->getUser();
		//var_dump($username);
		$this->view->assign('username', $username);
		$this->view->set_tpl('index'); //设置template/user/userinfo.htm
		$this->view->display(); //模板显示
	}
	

}