<?php
/**
 * DEMO的Service测试
 * @author zhuli
 */
class userService extends Service {
	
	/**
	 * @var userDao
	 */
	private $userDao;
	
	
	public function getUser() {
		return $this->userDao->getUser();
	}
	
	/**
	 * 创建一个用户
	 *//*
	public function createUser($user) {
		$this->userDao = InitPHP::getDao("user");
		return $this->userDao->addUser($user);
	}*/
	
	
	public function __construct() {
		parent::__construct();
		$this->userDao = InitPHP::getDao("user");
	}

}