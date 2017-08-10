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
                <a href="index.php" id="logo">
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
                    <a href="#">Contact Me</a>
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
    <?php if(!empty($_SESSION['udertype']) && ($_SESSION['udertype'] == 1)):?>
        <aside class="comments" id="comments">
                        <hr>
                    <?php foreach($dataaa as $bloggg):?>
                        <h2><i class="fa fa-comments"></i> 给你的留言：<?=$bloggg['cuont'];?> </h2>
                    <?php endforeach;?>
                <?php if(!empty($data)):?>  
                     <?php foreach($data as $blogg):?>
                        <article class="comment">
                            <header class="clearfix">
                                <img src="public/index/img/avatar.png" alt="A Smart Guy" class="avatar">
                                <div class="meta">
                                    <h3>
                                         <a href="#"><b><?=$blogg['username'];?></b></a>
                                    </h3>
                                    <span class="date">
                                        <?=$blogg['time'];?>&nbsp;&nbsp;<a href="index.php?c=contact&a=delete&cid=<?=$blogg['cid'];?>">删除</a>
                                    </span>
                                    <span class="separator"></span>                                                  
                                </div>
                            </header>
                             <div class="body">
                               <?=$blogg['content'];?>
                            </div>
                        </article> 
                     <?php endforeach;?> 
                <?php endif;?>      
        </aside>
    <?php else: ?>
    <div class="widewrapper main">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 clean-superblock" id="contact">
                    <h2>Contact</h2>                   
                    <form action="index.php?c=contact&a=contacth" method="post" accept-charset="utf-8" class="contact-form">
                        <textarea rows="10" name="message" id="contact-body" placeholder="Your Message" class="form-control input-lg"></textarea>
                        <div class="buttons clearfix">
                            <button type="submit" class="btn btn-xlarge btn-clean-one">Submit</button>
                        </div>                    
                    </form>
                </div>
            </div>        
        </div>
    </div>
    <?php endif;?>

        <div class="widewrapper copyright">
                Copyright 2015
        </div>
    
 
</body>
</html>