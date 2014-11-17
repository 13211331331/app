<?php
class LoginAction extends Action {
    public function index(){
    	if(session('?username') && session('userid')){
    		redirect(U('Index/index'));
    		exit();
    	}
    	if($this->isGet()){	
    		//if(session('errors')>2)$this->show_recaptcha();					//如果为get请求并且错误尝试次数大于3,显示验证码
    		$this->display();
    		exit();
    	}
    	else if($this->isPost()){
    	    if(!session('errors')){
    	        session('errors',0);
    	     }
		    if(session('errors')<3 || $this->recaptcha_valiaute()) {	//如果为post请求并且错误尝试次数小于4,则无需验证；否则需要对验证码进行验证
		    	$username=htmlentities($this->_post('usernameoremail'));
		    	$password=trim(htmlentities($this->_post('password')));
		    	$User = M('user');
				$User->where("username='%s' or email='%s' ",$username,$username)->find();
		        if(isset($User->password) && ($User->password===md5Encrypt($password))){
		            session('username',$username);
					session('userid',$User->id);
					$M=M('log');
					$M->update_user = session('userid');
					$M->update_time = get_time();
					$M->operate 	= 'login';
					$M->ip 			= get_client_ip();
					$M->status 		= '0';
					$M->add();

					$this->msg='success!';
		            redirect(U('Admin/index'));
		            exit();
		        } else{
		        	$this->msg = "用户名或者密码错误";
		        }
		    }
		   
		    session('errors',session('errors')+1);
		    $this->errors=session('errors');
			$this->username=$username;
        	$this->display();
		}
		else if($this->isAjax()){
			exit();//Ajax cross domain attack
		}
    }

    public function logout(){
		session('username',null);
		session('userid',null);
		session('mediaID',null);
		session('mediaUserID',null);
		 session('errors',null);
        $this->redirect("index");
    }



    protected function recaptcha_valiaute(){
       if(md5($this->_post('verify')) == $_SESSION['verify']){
           return true;
       }else{
           $this->username=htmlentities($this->_post('usernameoremail'));
           $this->msg = "验证码错误";
           $this->display();
           exit();
       }
    }


    public function verify() {
        import ( "ORG.Util.Image" );//引入类文件
        Image::buildImageVerify(4,1,'png',50,28,'verify');
    }

    public function signup(){
    	if($this->isGet()){
    		$this->display();
    		exit();
    	}
    	session('errors',0);
    	session('errors',session('errors')+1);
    	if(session('errors')>3 && !$this->recaptcha_valiaute()) {
			$this->display();
			exit();
		}
		$User = D("User");
		$username=$this->_post('uname');
		$email=$this->_post('mail');
		$password=$this->_post('pwd');

		//Verify
		$msg=(empty($username)?'username ':'').(empty($email)?'email ':'').(empty($password)?'password ':'');
		if(!empty($msg)){
			$msg.='shuould be input.';
		}else {
			if($password!=$this->_post('confirm')){
				$msg="The password didn't match.";
			}else{
				$id=$User->getFieldByUsername($username,'id');
				if(!empty($id)){
					$msg="Username already exists.";
				}
				else{
					$email=$User->getFieldByEmail($email,'id');
					if(!empty($email)){
						$msg="$email,Email already exists.";
					}
				}
			}
		}
		if(!empty($msg)){
			$this->username=$username;
			$this->email=$email;
			$this->msg=$msg;
			$this->display();
			exit();
		}

		$result=$User->create();
		if($result){
			$User->password=md5Encrypt($password);
			$User->add();
			$this->success('Register Success.',U('Login/index'),3);
		} else {
		    $this->error('Register Fail.',U('Login/signup'));
		}
		
		$this->display();
	}

}