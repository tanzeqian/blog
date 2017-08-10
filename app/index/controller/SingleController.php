<?php
namespace index\controller;
use index\controller\BaseController;
use index\model\Blog;
class SingleController extends BaseController
{
	protected $blog;
	public function _init()
	{
		$this->blog = new Blog();
	}
	
	public function single()
	{
		$bid = $_GET['bid'];
		$data = $this->blog->where("bid=$bid")->singleList();
		$dataa = $this->blog->where("bid=$bid")-> huitieList();
		$dataaa = $this->blog->where("bid=$bid")-> huishuList();
		$daataa = $this->blog->tuiList();
		$this->assign('data',$data);
		$this->assign('dataa',$dataa);
		$this->assign('dataaa',$dataaa);
		$this->assign('daataa',$daataa);
		$this->display();
		
	}
	public function huiRegister()
	{
		$message = $_POST['message'];
		$addtime = time();
		$bid = $_GET['bid'];	
		$username = $_SESSION['username'];		
		$result = $this->blog->huitieRegister($message,$bid,$addtime,$username);
		if($result){
		$this->success('留言成功');
	}else{
		//$this->success('请先登录','index.php?c=user&a=login');
	}
	}	
	
}
