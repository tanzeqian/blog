<?php
namespace admin\model;
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
		return $this->field('bid,title,create_time,content,is_tui')->where('first=1')->select();
	}
	//文章数量
	public function wzList()
	{
		return $this->field('count(*) as cuont')->where("first=1")->select()[0];
	}
	//分页内容
	public function wzzList($c)
	{
		return $this->field('bid,title,create_time,content,is_tui')->where("first=1")->limit("$c")->select();
	}
	//回复内容
	public function huitieList()
	{
		return $this->field('bid,title,create_time,content,username')->where("first=0")->select();
	}
	//回复数量
	public function huList()
	{
		return $this->field('count(*) as cuont')->where("first=0")->select()[0];
	}
	//分页内容
	public function usernameList($c)
	{
		return $this->field('bid,title,create_time,content,username')->where("first=0")->limit("$c")->select();
	}
	//发布文章
	public function fabuList($title,$content,$username)
	{
		return  $this->insert(['content'=>$content,'title'=>$title,'tid'=>'0','username'=>$username]);	
	}
	//删除留言
	public function deleteList($bid)
	{
		return $this->where("bid=$bid")->delete();
	}
	//删除文章
	public function redeleteList($bid)
	{
		return $this->where("bid=$bid")->delete();
	}
	//推荐文章
	public function tuijianList($bid)
	{
		return $this->where("bid=$bid")->update(['is_tui'=>'1']);
	}
	//取消推荐文章
	public function qutuiList($bid)
	{
		return $this->where("bid=$bid")->update(['is_tui'=>'0']);
	}



	
	
	
}