<?php
class AdminAction extends CheckAction {

    public function index(){
        parent::checkLogin(); 
    	$this->display();
    }

}