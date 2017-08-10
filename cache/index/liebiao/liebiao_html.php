<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>漂亮到没朋友的博客</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
     <link rel="stylesheet" href="public/admin/css/pintuer.css">
    <link rel="stylesheet" href="public/admin/css/admin.css">

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
                    <a href="index.php">首页</a>
                    <span class="separator">&#x2F;</span>
                    <a href="index.php?m=index&c=liebiao&a=liebiao">博文列表</a>
                </div>

              
                <div class="clean-searchbox">
                    <form action="#" method="get" accept-charset="utf-8">
                       
                        <input class="searchfield" id="searchbox" type="text" placeholder="Search">
                         <button class="searchbutton" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <div class="widewrapper main">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <article class="blog-post">
                        <header>
                           
                            <div class="lead-image">
                                <img src="public/index/img/single-post.jpg" alt="" class="img-responsive">
                                
                            </div>
                        </header>
                    <div class="body">
                        <ul class="clean-list">
                            <?php foreach($tootal as $quan):?>
                                <li><a href="index.php?m=index&c=single&a=single&bid=<?=$quan['bid'];?>"><?=$quan['title'];?></a></li>
                             <?php endforeach;?>   
                            </ul>
                            
                    </div> 
                     <tr>
                        <td colspan="8"><div class="pagelist"> <a href="<?=$b['first'];?>">首页</a><a href="<?=$b['pre'];?>">上一页</a><a href="<?=$b['next'];?>">下一页</a><a href="<?=$b['last'];?>">尾页</a>&nbsp;&nbsp;<b>每页显示10条 </b> 
                   
                        </div>
                        </td>

                    </tr>                      
                    </article>
                                  
                </div>
                <aside class="col-md-4 blog-aside">
                    
                    <div class="aside-widget">
                        <header>
                            <h3>推荐文章</h3>
                        </header>
                        <div class="body">
                            <ul class="clean-list">
                            <?php foreach($dataa as $tuih):?>
                                <li><a href="index.php?m=index&c=single&a=single&bid=<?=$tuih['bid'];?>"><?=$tuih['title'];?></a></li>
                             <?php endforeach;?>   
                            </ul>
                        </div>
                    </div>
                    <div class="aside-widget">
                        <header>
                            <h3>友情推荐</h3>
                        </header>
                        <div class="body">
                            <ul class="clean-list">
                                 <li><a href="http://blog.sina.com.cn/s/blog_1515cbfd80102wzq8.html?tj=1" target="_blank">冯小刚批小鲜肉太娘！为什么说冯导怼的其实是中国电影的"鲜肉崇拜"？</a></li>
                                 <li><a href="http://blog.sina.com.cn/s/blog_7659fcad0102wxrr.html#cre=blogpc&mod=g&loc=11&r=0&doct=0&rfunc=54&tj=none&s=0" target="_blank">【津巴布韦】在非洲草原与野生狮子零距离接触 </a></li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="aside-widget">
                        <header>
                            <h3>天气情况</h3>
                        </header>
                        <div class="body">
                           <iframe id="fancybox-frame" name="fancybox-frame1497944573705" frameborder="0" scrolling="no" hspace="0"  src="http://i.tianqi.com/index.php?c=code&a=getcode&id=38&h=60&w=610"></iframe>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </div>

    <footer>
      
        <div class="widewrapper copyright">
                Copyright 2017
        </div>
    </footer>

 

</body>
</html>