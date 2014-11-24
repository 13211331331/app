<?php
class IndexAction extends  CheckAction {

    public function index(){
        parent::checkLogin();
        $this->display();
    }

    public function menu(){
        parent::checkLogin();
        $this->display();
    }

}