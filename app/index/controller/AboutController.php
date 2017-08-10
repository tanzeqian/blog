<?php
namespace index\controller;
use index\controller\BaseController;
use index\model\Blog;

class AboutController extends BaseController
{
	protected $blog;
	public function _init()
	{
		$this->blog = new Blog();
	}
	public function about()
	{
		$this->display();

	}


	}

	


	
