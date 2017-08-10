<?php
namespace index\model;
use tzq\framework\Model;
use tzq\framework\Page;
class Blog extends Model
{
	public function huitieRegister($message,$bid,$addtime,$username)
	{
		return $this->insert(['content'=>$message,'tid'=>$bid,'username'=>$username,'first'=>'0']);
		//var_dump($return);
	}
	//博文列表
	public function blogList()
	{
		return $this->field('bid,title,create_time,content')->where('first=1')
		->order( 'bid desc')->limit('4')->select();
	}
	public function bloggList()
	{
		return $this->field('bid,title,create_time,content')->where('first=1')->select();
	}
	//博文内容
	public function singleList()
	{
		return $this->field('bid,title,create_time,content,username')->select();
	}
	//文章数量
	public function wenList()
	{
		return $this->field('count(*) as cuont')->where("first=1")->select()[0];
	}
	//文章数量
	public function limitList($c)
	{
		return $this->field('title,bid')->where("first=1")->limit("$c")->select();
	}
	

	//回复内容
	public function huitieList()
	{
		$bid=$_GET['bid'];
		return $this->field('bid,title,create_time,content,username')->where("first=0 and tid=$bid")->select();
	}
	//回复数量
	public function huishuList()
	{
		$bid=$_GET['bid'];
		return $this->field('count(*) as cuont')->where("first=0 and tid=$bid")->select();
	}
	//推荐博文内容
	public function tuiList()
	{
		return  $this->field('bid,title,create_time,content,username')->where('is_tui=1')->limit('6')->select();
	}
	//博文列表
	public function blList()
	{
		return $this->field('bid,title,create_time,content')->where('first=1')
		->order( 'bid desc')->limit('6')->select();
	}
	
	
	
}