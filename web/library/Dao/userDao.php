<?php 
class userDao extends Dao {
	
	public $table_name = 'user';
	private $fields = "userName,email";
	
	/**
	 * 新增用户
	 * @param $user
	 */
	public function addUser($user) {
		$user = $this->dao->db->build_key($user, $this->fields);
		return $this->dao->db->insert($user, $this->table_name);
	}
	
	
	public function getUser(){
		return $this->dao->db->get_all('user');	
	}
}