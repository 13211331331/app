<?php
class ProductAction extends CheckAction {

    public function index(){
    	parent::checkLogin(); 
    	$this->display();
    }
       
}