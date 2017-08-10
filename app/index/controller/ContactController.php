<?php
namespace index\controller;
use index\controller\BaseController;
use index\model\Contact;

class ContactController extends BaseController
{
	protected $blog;
	public function _init()
	{
		$this->blog = new Contact();
	}
	public function contact()
	{
		$data = $this->blog->singleList();
		$dataaa = $this->blog-> huishuList();
		$this->assign('data',$data);
		$this->assign('dataaa',$dataaa);
		$this->display();

	}
	public function contacth()
	{
		$message = $_POST['message'];
		$addtime = time();
		if($_SESSION){
			$username = $_SESSION['username'];
			$result = $this->blog->contactRegister($message,$addtime,$username);
			if($result){
				$this->success('他将会看到你的留言！');	
			}
		}else{
			$this->error('请先登录');
		}	
	}
	public function delete()
	{
		$cid=$_GET['cid'];
		$result = $this->blog->deleteList($cid);
		$this->success('删除成功！');	
	}
}
	


	
