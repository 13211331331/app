<?php
class AdminAction extends Action {
    public function index(){
        if(session('?username')){
            $this->display();
        }
        else{
            redirect(U('Login/Index'));
           //echo "333";
        }
    }
}