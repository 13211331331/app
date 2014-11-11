<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
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