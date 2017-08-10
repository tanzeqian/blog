<?php
namespace index\model;
use tzq\framework\Model;
class Contact extends Model
{
	public function contactRegister($message,$addtime,$username)
	{
		return $this->insert(['content'=>$message,'username'=>$username]);
		//var_dump($return);
	}
	//留言内容
	public function singleList()
	{
		return $this->field('time,content,username,cid')->select();
	}
	//留言数量
	public function huishuList()
	{

		return $this->field('count(*) as cuont')->select();
	}
	//删除留言
	public function deleteList($cid)
	{
		return $this->where("cid=$cid")->delete();
	}
	
	
	
}