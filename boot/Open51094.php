<?php
class Open51094{
	private $appid;
	private $token;	
	private $return_uri;
	private $access_token;
	private $url = 'http://www.onefoot.cn/index.php';

	function __construct(){
		$this->appid = '1545454173a186';
		$this->token = 'f135e629656417fe159e0de2f8c430a9';
	}

	function me( $code ){
		#$this->getAccessToken();
		$params=array(
				'type'=>'get_user_info',
				'code'=>$code,
				'appid'=>$this->appid,
				'token'=>$this->token
	
			);
		return $this->http( $params );
	}


	/*private function getAccessToken(){
		if( !isset( $_SESSION['open_51094_access_token'] ) || empty( $_SESSION['open_51094_access_token'] ) ){
			$params = array(
					'type'=>'get_access_token',
					'appid'=>$this->appid,
					'token'=>$this->token
				);
			$ret = $this->http( $params );
			if( isset( $ret['access_token'] ) && !empty( $ret['access_token'] ) &&  32 == strlen( $ret['access_token'] ) ){
				$this->access_token = $ret['access_token'];
				$_SESSION['open_51094_access_token'] = $ret['access_token'];
			}else{
				exit('time out');
			}
		}else{
			$this->access_token = $_SESSION['open_51094_access_token'];
		}
	}*/

	private function http( $postfields='', $method='POST', $headers=array()){
		$ci=curl_init();
		curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, FALSE); 
		curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ci, CURLOPT_TIMEOUT, 30);
		if($method=='POST'){
			curl_setopt($ci, CURLOPT_POST, TRUE);
			if($postfields!='')curl_setopt($ci, CURLOPT_POSTFIELDS, $postfields);
		}
		$headers[]="User-Agent: 51094PHP(open.51094.com)";
		curl_setopt($ci, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ci, CURLOPT_URL, $this->url);
		$response=curl_exec($ci);
		curl_close($ci);
		$json_r=array();
		if(!empty( $response ))$json_r=json_decode($response, true);
		return $json_r;
	}
}
?>