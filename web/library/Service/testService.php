<?php

class testService extends Service {
	public function test() {
		$this->getTestaDao()->test();
	}
	/**
	 * @return testDao
	 */
	private function getTestDao() {
		return InitPHP::getDao('test', 'test');
	}
	/**
	 * @return testaDao
	 */
	private function getTestaDao() {
		return InitPHP::getDao('testa', 'test');
	}
}
