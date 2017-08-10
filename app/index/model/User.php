<?php
namespace index\model;
use tzq\framework\Model;

class User extends Model
{
	public function checkLogin($username,$password)
	{
		$password = md5($password);
		return  $this->where("username='$username' and password='$password'")
					 ->limit('1')
					 ->field('uid,username,udertype,allowlogin')
					 ->select();					 
	}

	public function checkRegister($username,$password,$confirm,$email)
	{
		$password = md5($password);
		return $this->insert(['username'=>$username, 'password'=>$password , 'confirm'=>$confirm , 'email'=>"$email"]);
	}
	//用户名不能多于六个字
	public function usermaxRepeat($username)
	{
		if (strlen($username) >= 18) {
		return !empty($username);
		}
	}
//判断用户名是否存在
	public function usernameRepeat($username)
	{
		$data =  $this->where("username='$username'")->select();
		//1如果用户存在返回true，否则返回fale
		return !empty($data[0]);

	}
//判断邮箱格式是否正确
	public function emailRepeat($email)
	{
		$reg = '/\w+@(\w+\.)+(com|cn|net)$/';
		if (!preg_match($reg,$email)) {
			return !empty($email);
		}
	}
//密码不能少于六位
	public function passwordRepeat($password)
	{
		if (strlen($password) < 6) {
		return !empty($password);
		}
	}
//判断两次密码是否一致
	public function confirmRepeat($confirm,$password)
	{
		if (strlen($password != $confirm)) {
		return !empty($confirm);
		}
	}
}