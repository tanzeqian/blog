<?php
namespace admin\controller;
use admin\controller\BaseController;
use admin\model\Blog;
use tzq\framework\Page;
class BlogController extends BaseController
{
	protected $blog;
	public function _init()
	{
		$this->blog = new Blog();
	}

	public function haha()
	{
		$data = $this->blog->blogList();
		$wz = $this->blog->wzList();
		$wz_num = $wz['cuont'];
		$a = new Page($wz_num,10);
		$b=$a->allPage();
		$c = $a->limit();
		$t = $this->blog->wzzList($c);
		$this->assign('data',$data);
		$this->assign('t',$t);	
		$this->assign('b',$b);
		$this->display();
	}
	public function book()
	{
		$dataa = $this->blog->huitieList();
		$daa= $this->blog->huList();
		$daa_num = $daa['cuont'];
		$a = new Page($daa_num,10);
		$b=$a->allPage();
		$c = $a->limit();
		$t = $this->blog->usernameList($c);
		$this->assign('t',$t);	
		$this->assign('b',$b);
		$this->assign('dataa',$dataa);
		$this->display();
	}
	public function delete()
	{
		$bid=$_GET['bid'];
		$result = $this->blog->deleteList($bid);
		header("location:index.php?m=admin&c=blog&a=book");
	}
	public function redelete()
	{
		$bid=$_GET['bid'];
		//var_dump($bid);
		$result = $this->blog->redeleteList($bid);
		header("location:index.php?m=admin&c=blog&a=haha");
	}
	public function tuijian()
	{
		$bid=$_GET['bid'];
		//var_dump($bid);
		$result = $this->blog->tuijianList($bid);
		header("location:index.php?m=admin&c=blog&a=haha");
	}
	public function qutui()
	{
		$bid=$_GET['bid'];
		//var_dump($bid);
		$result = $this->blog->qutuiList($bid);
		header("location:index.php?m=admin&c=blog&a=haha");
	}
}