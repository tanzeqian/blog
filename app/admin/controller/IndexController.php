<?php
namespace admin\controller;
use admin\controller\BaseController;
use admin\model\Blog;

class IndexController extends BaseController
{
	protected $blog;
	public function _init()
	{
		$this->blog = new Blog();
	}
	public function index()
	{
		$data = $this->blog->blogList();
		$this->assign('data',$data);
		$this->display();

	}


	
}
