<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>  
    <link rel="stylesheet" href="public/admin/css/pintuer.css">
    <link rel="stylesheet" href="public/admin/css/admin.css">
    <script src="public/admin/js/jquery.js"></script>
    <script src="public/admin/js/pintuer.js"></script>  
</head>
<body>
<form method="post" action="">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 用户管理</strong></div>
    <div class="padding border-bottom">
 
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width=70>ID</th>
        <th  width=100>姓名</th>       
       <th width="20%">邮箱</th>
       <th width=70>用户类型</th>
         <th width=20>注册时间</th>
        <th width=100>操作</th>       
      </tr> 
        <?php foreach($t as $vall):?>     
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="id[]" value="" />
            <?=$vall['uid'];?></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$vall['username'];?></td>
        
          <td><?=$vall['email'];?></td>
          <?php if($vall['udertype']==1):?>
            <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>管理员</b></td>
            <?php else: ?>
            <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>普通用户</b></td>
          <?php endif;?>
          <td> &nbsp;&nbsp;&nbsp;&nbsp;<?=$vall['regtime'];?></td>
          <?php if($vall['udertype']==0):?>
          <td><div class="button-group">&nbsp;
          <?php if($vall['allowlogin'] == 0):?>
          <a class="button border-red" href="index.php?m=admin&c=user&a=stop&uid=<?=$vall['uid'];?>" onclick="return del(1)"><span class="icon-trash-o"></span> 禁止登录</a>
          <?php else: ?>
          <a class="button border-red" href="index.php?m=admin&c=user&a=quxiao&uid=<?=$vall['uid'];?>" onclick="return del(1)"><span class="icon-trash-o"></span> 解除禁止</a>
          <?php endif;?>
          &nbsp;&nbsp;
          <a class="button border-red" href="index.php?m=admin&c=user&a=delete&uid=<?=$vall['uid'];?>" onclick="return del(1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
          <?php else: ?><td></td>
          <?php endif;?>
        </tr>
        <?php endforeach;?>
        
      <tr>
        <td colspan="8"><div class="pagelist"> <a href="<?=$b['first'];?>">首页</a><a href="<?=$b['pre'];?>">上一页</a><a href="<?=$b['next'];?>">下一页</a><a href="<?=$b['last'];?>">尾页</a> &nbsp;&nbsp;<b>每页显示10条</b></div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

function del(id){
  if(confirm("您确定要执行该操作吗?")){
    
  }
}

$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
    if (this.checked) {
      this.checked = false;
    }
    else {
      this.checked = true;
    }
  });
})

function DelSelect(){
  var Checkbox=false;
   $("input[name='id[]']").each(function(){
    if (this.checked==true) {   
    Checkbox=true;  
    }
  });
  if (Checkbox){
    var t=confirm("您确认要删除选中的内容吗？");
    if (t==false) return false;     
  }
  else{
    alert("请选择您要删除的内容!");
    return false;
  }
}

</script>
</body></html>