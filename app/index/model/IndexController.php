<?php
namespace index\controller;
use index\controller\BaseController;
use index\model\Blog;
use index\model\Open51094;
$name = null;    
        $open = new Open51094();
        if (!empty($_GET['code'])) {
            $code = $_GET['code'];
            $name = $open->me($code);
            session('username',$name['name']);
}
//$username = Session::get('username');


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
		$dataa = $this->blog->tuiList();
		$da = $this->blog->blList();

		$this->assign('data',$data);
		$this->assign('dataa',$dataa);
		$this->assign('da',$da);

		$this->display();

	}

	


	
}
