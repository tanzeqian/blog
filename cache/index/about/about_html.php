<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>漂亮到没朋友的博客</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="public/index/css/bootstrap.min.css">
 

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="public/index/css/font-awesome/css/font-awesome.min.css">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600|PT+Serif:400,400italic' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="public/index/css/style.css" id="theme-styles">

    <!--[if lt IE 9]>      
        <script src="js/vendor/google/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->
    
</head>
<body>
    <header>
         <div style="text-align:right;font-size:15px;">
            <?php if(empty($_SESSION['username'])):?>
                <a href="javascript:;" style="color:red;">你好！游客</a>&nbsp;|&nbsp;
                <a href="index.php?c=user&a=login" style="color:#000;">登录</a>&nbsp;|&nbsp;
                    
                <a href="index.php?c=user&a=register" style="color:#000;">注册</a>&nbsp;|&nbsp;
            <?php else: ?>
                你好！
                <a href="javascript:;" style="color:red;"><?=$_SESSION['username'];?></a>&nbsp;|&nbsp;              
                <?php if(!empty($_SESSION['udertype']) && ($_SESSION['udertype'] == 1)):?>
                        <a href="index.php?m=admin&c=index&a=index" style="color:#000;">文章管理</a>&nbsp;|&nbsp;
                       <a href="index.php?c=user&a=logout" style="color:#000;">退出</a>  
                <?php else: ?> 
                    <a href="index.php?c=user&a=logout" style="color:#000;">退出</a>                  
                <?php endif;?>
            <?php endif;?>
                
        </div>
        <div class="widewrapper masthead">
            <div class="container">
                <a href="index.html" id="logo">
                    <img src="public/index/img/logo.png" alt="clean Blog">
                </a>

                <div id="mobile-nav-toggle" class="pull-right">
                    <a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <nav class="pull-right clean-nav">
                    <div class="collapse navbar-collapse">
                        <ul class="nav nav-pills navbar-nav">
                          
                             <li>
                                <a href="index.php">首页</a>
                            </li>
                            <li>
                                <a href="index.php?c=about&a=about">关于</a>
                            </li>
                            <li>
                                <a href="index.php?c=contact&a=contact">留言</a>
                            </li>                   
                        </ul>
                    </div>
                </nav>        

            </div>
        </div>

        <div class="widewrapper subheader">
            <div class="container">
                <div class="clean-breadcrumb">
                    <a href="#">关于我</a>
                </div>

            </div>
        </div>
    </header>

    <div class="widewrapper main">
        <div class="container about">
            <h1>Hello, My name is <span class="about-bold">  谭泽乾</span></h1>
            <p>子曰：学而时习之，不亦说乎？有朋自远方来，不亦乐乎？人不知而不愠，不亦君子乎？</p>
            <p>欢迎来到我的世界</p>
            <p>联系我</p>
            <p>&nbsp;&nbsp;qq:997598152</p>
            <p>&nbsp;&nbsp;E-mali:997598152</p>

            <div class="about-button">
                <a class="btn btn-xlarge btn-clean-one" href="index.php?c=contact&a=contact">Contact Me</a>
            </div>
            <hr>
        </div>

    </div>

    <footer>
        
        <div class="widewrapper copyright">
                Copyright 2017
        </div>
    </footer>


</body>
</html>