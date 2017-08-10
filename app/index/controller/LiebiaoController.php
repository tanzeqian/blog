<?php
namespace index\controller;
use index\controller\BaseController;
use tzq\framework\Page;
use index\model\Blog;
class LiebiaoController extends BaseController
{
	protected $blog;
	protected $page;
	public function _init()
	{
		$this->blog = new Blog();
	}
	
	public function liebiao()
	{		
		$data = $this->blog->bloggList();
		$dataa = $this->blog->tuiList();
		$total = $this->blog->wenList();
		$total_num = $total['cuont'];
		$a = new Page($total_num,10);
		$b=$a->allPage();
		$c = $a->limit();
		$tootal = $this->blog->limitList($c);

		$this->assign('total',$total);
		$this->assign('data',$data);
		$this->assign('dataa',$dataa);
		$this->assign('tootal',$tootal);

		$this->assign('b',$b);
		$this->display();
		
	}
	

}

