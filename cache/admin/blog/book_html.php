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
    <div class="panel-head"><strong class="icon-reorder"> 留言管理</strong></div>
    <!--
    <div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="submit"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
          <button type="submit" class="button border-red"><span class="icon-trash-o"></span>批量删除</button>
        </li>
      </ul>
    </div>
    -->
    <table class="table table-hover text-center">
      <tr>
        <th width=70>ID</th>
        <th  width=100>姓名</th>       
        <th width="20%">内容</th>
         <th width=80>留言时间</th>
        <th width=70>操作</th>       
      </tr> 
        <?php foreach($t as $vall):?>     
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="id[]" value="" class="checkbox" />
            <?=$vall['bid'];?></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$vall['username'];?></td>
        
          <td><?=$vall['content'];?></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$vall['create_time'];?></td>
          <td><div class="button-group">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="button border-red" href="index.php?m=admin&c=blog&a=delete&bid=<?=$vall['bid'];?>" onclick="return del(1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <?php endforeach;?>
        
      <tr>
        <td colspan="8"><div class="pagelist"> <a href="<?=$b['first'];?>">首页</a><a href="<?=$b['pre'];?>">上一页</a><a href="<?=$b['next'];?>">下一页</a><a href="<?=$b['last'];?>">尾页</a> <b>每页共10条</b></div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

function del(id){
	if(confirm("您确定要删除吗?")){
		
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