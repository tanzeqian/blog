<?php
namespace index\controller;
use index\controller\BaseController;
use tzq\framework\VerifyCode;
use index\model\User;
class UserController extends BaseController
{
	protected $user;

	public function _init()
	{
		$this->user = new User();

	}
	public function login()
	{
		$this->display();
	}

	public function yzm()
	{
		$vc = new VerifyCode();
		$vc->outputImage();
		$_SESSION['code'] = $vc->getCode();
	}

	/**
	 * 登录处理
	 * @return [type] [description]
	 */
	public function doLogin()
	{

		$username = $_POST['username'];		
		$password = $_POST['password'];			
		$code = $_POST['code'];

		$result = $this->user->checkLogin($username,$password)[0];
		
		if ($result && count($result)>0) {
			if($result['allowlogin']==0)
			{
				if ($code == $_SESSION['code']) {
					unset($_SESSION['code']);
					$_SESSION['username'] = $username;
					$_SESSION['udertype'] = $result['udertype'];				
					$_SESSION['uid'] = $result['uid'];				
					$this->success('登录成功！','index.php');
				}else{
 					$this->error('验证码错误');
					}
			}else{
				$this->error('该用户已被锁定，不能登录');					
			}
		}else {
			$this->error('密码或账户名错误');
		}
	}

	public function logout()
	{
		unset($_SESSION['username']);
		unset($_SESSION['udertype']);
		unset($_SESSION['uid']);
		$this->success('退出成功','index.php');
		// $this->display('index/index.html');
	}

	public function register()
	{
		$this->display();
	}
	public function doRegister()
	{
		// var_dump($_POST);
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];
		$email = $_POST['email'];
		
		
		//1 用户名是否重复
		if ($this->user->usernameRepeat($username)) {
			$this->error('用户名重复');exit;
		}
		//1 用户名不能超过于6个字
		if ($this->user->usermaxRepeat($username)) {
			$this->error('用户名不能多于六个字');exit;
		}
		//邮箱格式不正确
		if ($this->user->emailRepeat($email)) {
			$this->error('邮箱格式不正确');exit;
		}
		//密码不能少于6位
		if ($this->user->passwordRepeat($password)) {
			$this->error('密码不能少于6位');exit;
		}
		//密码密码不一样
		if ($this->user->confirmRepeat($password,$confirm)) {
			$this->error('密码不一样');exit;
		}
		
		$_SESSION['username'] = $username;
		$result = $this->user->checkRegister($username,$password,$confirm,$email);
		
		$this->success('注册成功！','index.php');
	} 
			
}


