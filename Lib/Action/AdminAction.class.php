<?php
class AdminAction extends Action {
    public function index(){
        if(session('?username')){
            $this->display('hero');
        }
        else{
            redirect(U('Login/Index'));
           //echo "333";
        }
    }
}