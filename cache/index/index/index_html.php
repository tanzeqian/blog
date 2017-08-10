<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <title>漂亮到没朋友的博客</title>
	<meta property="wb:webmaster" content="44293a9aaa5faf23" />
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
					
                  <span id="hzy_fast_login"></span>&nbsp;|&nbsp;
                    
                    <a href="index.php?c=user&a=register" style="color:#000;">注册</a>
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
                    <a href="index.php">Blog</a>
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
                    <div class="row">
                     <?php foreach($data as $blog):?>
                        <div class="col-md-6 col-sm-6">
                            <article class=" blog-teaser">
                                <header>
                                    <img src="public/index/img/1.jpg" alt="">
                                    <h3><a href="index.php?m=index&c=single&a=single&bid=<?=$blog['bid'];?>"><?=$blog['title'];?></a></h3>
                                    <span class="meta"><?=$blog['create_time'];?></span>
                                    <hr>
                                </header>
                                <div class="body">
                                    <?=$blog['content'];?>
                                </div>
                                <div class="clearfix">
                                    <a href="index.php?m=index&c=single&a=single&bid=<?=$blog['bid'];?>" class="btn btn-clean-one">Read more</a>
                                </div>
                            </article>
                        </div>                       
                    <?php endforeach;?>
                    </div>
                    
                    

                    <div class="paging">
                        <a href="index.php?m=index&c=liebiao&a=liebiao" class="older">更多文章</i></a>
                    </div>
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
        <div class="widewrapper footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-user"></i>关于我</h3>

                       <p>子曰：学而时习之，不亦说乎？有朋自远方来，不亦乐乎？人不知而不愠，不亦君子乎？</p>
                         <p>欢迎来到我的博客</p>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-pencil"></i> 最新文章</h3>
                        <ul class="clean-list">
                        <?php foreach($da as $blo):?>
                            <li><a href=""><?=$blo['title'];?></a></li>
                        <?php endforeach;?>
                        </ul>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-envelope"></i><a href="index.php?c=contact&a=contact">给我留言</a></h3>
                        <p>有没有想对我说的呢？</p>
                         <p>有就来吧</p>
                        <p>&nbsp;&nbsp;qq:997598152</p>
                         <p>&nbsp;&nbsp;E-mali:997598152</p>

                    </div>
                   
                </div>
            </div>
        </div>
        <div class="widewrapper copyright">
              
        </div>
    </footer>
    
   

</body>
 <script type="text/javascript" src="http://open.51094.com/user/myscript/15954f25430274.html">
 </script>
</html>