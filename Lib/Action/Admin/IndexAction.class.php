<?php
class IndexAction extends  CheckAction {

    public function index(){
        parent::checkLogin();
        $this->display();
    }

}