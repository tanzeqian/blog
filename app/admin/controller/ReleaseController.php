<?php
namespace admin\controller;
use admin\controller\BaseController;
use admin\model\Blog;

class ReleaseController extends BaseController
{
	protected $blog;
	public function _init()
	{
		$this->blog = new Blog();
	}


	
	public function release()
	{
		if($_POST){
		$title = $_POST['title'];
		$content = $_POST['content'];
		$username = $_SESSION['username'];
		$daataa = $this->blog->fabuList($title,$content,$username);
$this->success('发布成功！');
	}

		$this->display();
	}
}	