<?php
namespace admin\model;
use tzq\framework\Model;
use tzq\framework\Page;
class User extends Model
{
	public function checkLogin($username,$password)
	{
		$password = md5($password);
		return  $this->where("username='$username' and password='$password'")
					 ->limit('1')
					 ->field('uid,username,udertype')
					 ->select();					 
	}
	public function userList()
	{
		return $this->field('uid,username,regtime,email,udertype,allowlogin')->select();
	}
	//用户数量
	public function yonghuList()
	{
		return $this->field('count(*) as cuont')->select()[0];
	}
	//文章数量
	public function usernameList($c)
	{
		return $this->field('uid,username,regtime,email,udertype,allowlogin')->limit("$c")->select();
	}
	//禁止登录
	public function stopList($uid)
	{
		return $this->where("uid=$uid")->update(['allowlogin'=>'1']);
	}
	//取消禁止
	public function quxiaoList($uid)
	{
		return $this->where("uid=$uid")->update(['allowlogin'=>'0']);
	}
	//删除用户
	public function deleteList($uid)
	{
		return $this->where("uid=$uid")->delete();
	}



	
}