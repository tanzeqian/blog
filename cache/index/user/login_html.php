<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>登录|Blog</title>
    
    <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
    <script src="js/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="js/easyui-lang-zh_cn.js"></script>
   

    
    
    <style type="text/css">
		body
		{
			font: normal 14px/1.4 "Helvetica Neue","HelveticaNeue",Helvetica,Arial,sans-serif;
		}
		div
		{
			display:block;
		}
		a
		{
			text-decoration:none;
			opacity: 1;
			color: #fff;
		 }
		 input,button{ outline:none; }
		::-moz-focus-inner{border:0px;}   /*去除按钮点击时出现的虚线边框*/
        .login_bg
        {
			position: fixed;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			background-image:url(images/bg_1.jpg);
			background-size: cover;
        }
		.login_header {
			position:absolute;
			top:0;
			left:0;
			right:0;
			}
		.container {
			position:relative;
			top:50%;
			margin: 0 auto;
			width: 260px;
			}
		#logo
		{
			display: block;
			text-align: center;
			font-weight: bold;
			font-size: 50px;
			color: white;
			height: 100%;
		}
		#subheading 
		{
		  position: relative;
		  width: 517px;
		  left: 50%;
		  margin: 10px 0 16px -258px;
		  font-size: 15px;
		  font-weight: normal;
		  color: #fff;
		  text-align: center;
		}
		.signup_forms
		{
			width:260px;
			height:145px;	
		}
		.signup_forms_container
		{
			width:260px;
			
			overflow: hidden;
			background: #fff;
			border-radius:3px;	
		}
		.form_user,.form_password
		{
			width:260px;
			height:45px;
			margin:0px;
        	padding:0px;
			border:0px;	
		}
		.form_password{border-top: 1px solid #e3e3e3;}
		.signup_forms input
		{
			padding: 11px 10px 11px 13px;
			width: 100%;
			margin:0px;
        	background: 0;
			font: 16px/1.4 "Helvetica Neue","HelveticaNeue",Helvetica,Arial,sans-serif;
			border:0px;	
		}
		#signup_forms_submit{
		  margin-top:8px;		
		  width:260px;
		  height:45px;
		  background:#529ECC;
		  border:0px;
		  border-radius:3px;
		  cursor:pointer;       <!--CSS属性设置鼠标为手型--> 
		 }
		 #signup_forms_submit span
		 {
			 color: #fff;
			 font: "Helvetica Neue",Arial,Helvetica,sans-serif;
			 font-size:16px;
		}
		.footer
		 {
			position: fixed;
			top: auto;
			right: 0;
			bottom: 0;
			left: 0;
		 }
		 .footer_signup_link
		 {
			 position: absolute;
			 width:141px;
			 height:78px;
			 bottom: 0;
			 padding: 0 20px;
			 margin: 0 0 13px 0;
			 line-height: 25px;
			 text-align: center;
			 opacity: 1;
			 color: #fff;
		 }
		 .signup_link
		 {
			  display: block;
			  height: 45px;
			  padding: 0 10px;
			  margin: 0 0 8px 0;
			  font-size: 16px;
			  font-weight: bold;
			  line-height: 45px;
			  border: 0;
			  border-radius: 2px;
			  color: #fff;
              background: rgba(255,255,255,0.33);
		}
		.link
		{
			font-size: 14px;
			padding-right: 5px;
			margin-right: 12px;
			color: #fff;
		}
		.design_show
		{
			position: fixed;
			bottom: 0;
			right: 0;
			padding: 0 12px;
			margin: 0 0 13px 0;
			line-height: 25px;
		}
		.designer_info
		{
			position: relative;
			color: #FFFFFF;
		}
		#face
		{
			margin: 0 0 0 10px;
			vertical-align: middle;
			border-radius:20px;
			padding: 0;
			height: 24px;
			width: 24px;
		}
    </style>
	<script type="text/javascript">
		
		$(function(){
			$("submit").click(function(){
			if($("#signup_username").val()==""||$("#signup_password").val()=="")
			{
				$.messager.alert('警告','账号和密码不能为空!');
				 
			}
			else
			{
				$("#sign_form").submit();
			}
		});
	});
    </script>
</head>
<body>
    <div id="login_bg" class ="login_bg" style="background-image:url(public/index/img/u3.jpg);"></div>
    <div class="login_header">
    	<span></span>
    </div>
    
    <div class="container">
    	<div class="form_header">
        	<h1 id="logo">登录</h1>
			<h2 id="subheading">To explore and discover</h2>
        </div>
        <div class="signup_forms" class="signup_forms">
            	<div id="signup_forms_container" class="signup_forms_container">
                    	<form class="signup_form_form" id="sign_form" method="post" action="index.php?c=user&a=doLogin" />
                        	<div class="signup_account" id="signup_account">
                            	<div class="form_user">	
        							<input type="text" name="username" placeholder="用户名" id="signup_username" required="required" >
                                </div>
                                <div class="form_password">
           							<input type="password" name="password" placeholder="密码" id="signup_password" required="required">
        						</div>       						
        					</div>
        					<div class="form_password">
           							 <input type="text" style="width:132px;height:10px;" name="code" placeholder="填写右侧的验证码" required="required" />
                           			<img src="index.php?c=user&a=yzm" alt="" width="100" height="32" class="passcode" style="height:40px;cursor:pointer;" onclick="show();" id='yzm'>  
                           		<script>
                                function show()
                                {
                                    var obj = document.getElementById('yzm');
                                    obj.src = "index.php?c=user&a=yzm&"+Math.random();
                                }
                          		 </script> 
                			</div>
                            <div>
               					 <button type="submit" id="signup_forms_submit"><span><strong>登录</strong></span></button>
            				</div>
                        </form>
   

    			</div>
				
                  		 <a href="https://api.weibo.com/oauth2/authorize?client_id=1827566357&redirect_uri=http%3A%2F%2Fwww.onefoot.cn%2Findex.php&response_type=code">
    			 <img src="public/index/img/weibo_login.png"  /></a>	
    	</div>
    <div class="footer">
    	<div class="footer_signup_link">
        	<a class="signup_link" href="index.php?c=user&a=register">注册</a>
            <a href="index.php"  class="link unnamed_1">Home</a>
            <a href="#" target="_blank" class="link unnamed_2">About</a>
        </div>
    </div>
</body>
</html>