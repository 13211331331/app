<?php

class testDao extends Dao {
	public function test() {
		$this->dao->db->insert(array('name' => 'cccccccc'), 'test');
		print_r($this->dao->db->get_all('test'));
	}
}