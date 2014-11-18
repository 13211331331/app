<?php
class CheckAction extends Action {

	public function checkLogin() {
		
		if (session('?username')) {
		
		} else {
			redirect(U('Login/index'));
		}
	}
	

}