<?php
namespace admin\controller;
use admin\controller\BaseController;
use admin\model\User;
use tzq\framework\Page;
class UserController extends BaseController
{
	protected $user;

	public function _init()
	{
		$this->user = new User();

	}
	public function adlogin()
	{
		$this->display();
	}
	public function user()
	{
		$data = $this->user->yonghuList();
		$data_num = $data['cuont'];
		$a = new Page($data_num,10);
		$b=$a->allPage();
		$c = $a->limit();
		$t = $this->user->usernameList($c);
		$dataa = $this->user->userList();
		$this->assign('dataa',$dataa);	
		$this->assign('t',$t);	
		$this->assign('b',$b);
;
		$this->display();

	}
	public function stop()
	{
		$uid=$_GET['uid'];
		$result = $this->user->stopList($uid);
		//$this->success('禁止成功！','index.php?m=admin&c=user&a=user');
		header("location:index.php?m=admin&c=user&a=user");
		
	}
	public function quxiao()
	{
		$uid=$_GET['uid'];
		$result = $this->user->quxiaoList($uid);
		//$this->success('解除成功！','index.php?m=admin&c=user&a=user');
		header("location:index.php?m=admin&c=user&a=user");
	}
	public function delete()
	{
		$uid=$_GET['uid'];
		$result = $this->user->deleteList($uid);
		header("location:index.php?m=admin&c=user&a=user");
	}


	

	/**
	 * 登录处理
	 * @return [type] [description]
	 */
	public function doLogin()
	{

		$username = $_POST['username'];		
		$password = $_POST['password'];			
		

		$result = $this->user->checkLogin($username,$password)[0];
		//var_dump($result);exit;
		if ($result && count($result)>0) {
				$_SESSION['username'] = $username;
				$_SESSION['udertype'] = $result['udertype'];
				$_SESSION['uid'] = $result['uid'];
				
				$this->success('登录成功！','index.php?m=admin&c=index&a=index');
			
			}
		else {
			$this->error('登录失败');
		}
	}

	public function logout()
	{
		unset($_SESSION['username']);
		unset($_SESSION['udertype']);
		unset($_SESSION['uid']);
		$this->success('退出成功','index.php?m=admin&c=user&a=adlogin');
		// $this->display('index/index.html');
	}

	
			
}


