<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>

<link href="./Public/css/index.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./Public/jquery.min.js"></script>
<script type="text/javascript"> 
$(function(){
	
	// 移到留言上可以删除,编辑-------------------------------------------
		$('#mian .list .onep').hover(function() {
			$(this).find('a').show();
			$(this).find('.edit_a').show();
			$(this).find('.content').addClass('content1');
		}, function() {
			$(this).find('a').hide();
			$(this).find('.edit_a').hide();
			$(this).find('.content').removeClass('content1');
		});

   // 留言方式的切换------------------------------------------------
		var c=1;
		$('.close').click(function(event) {
			if(c==1){
				$('#right').stop().animate({"top": 800+'px'},2000).parent().parent().find('#bottom_out').stop().animate({"bottom": 0+'px'},3000);
				c=0;
			}else{
				$('#right').stop().animate({"top": 50+'px'},2000).parent().parent().find('#bottom_out').stop().animate({"bottom": -120+'px'},3000);
				c=1;
			}
		});

	
	
})


</script>

</head>

<body>
<div id="top">
		<h1>留言板</h1>
</div>

<div id="mian_out">
	  <div id="mian">
			<h2>其它人都说了什么</h2>
			<ul class="list">
      					<li class="onep">
					<p class="pic"><img src="./Public/images/3.jpg" alt="" /></p>
					<p class="name"><?php echo (date("Y-m-d H:i:s",$time)); ?></p>
					<p class="content"><?php echo (strtolower($username)); ?></span>
					</p>
					<a class="edit_a" href="javascript:" onclick="if(confirm('确定修改吗？')) location.href='#'" >修改</a>
					<a class="delete" href="javascript:" onclick="if(confirm('确定删除吗？')) location.href='#'" >删除</a>
				</li>
				        </ul>
   </div>
   
   <div id="right">
			<h2>留下你的脚步吧</h2>
			<form action="upadd.php" method="post">
				<p class="one">
				昵称:<input class="name" name="username" type="text" placeholder="你的名字" />
				<input type="radio" name="sex" value="男" checked="checked" />男侠
				<input type="radio" name="sex" value="女" />女侠
				</p>
				<p><textarea name="message" placeholder="这个人很懒,什么都没有写" ></textarea></p>
				<p class="tow">
					<input type="radio" name="imgurl" value="./Public/images/1.jpg" checked="checked" /><img src=" ./Public/images/1.jpg" alt="" />
					<input type="radio" name="imgurl" value="./Public/images/2.jpg" /><img src=" ./Public/images/2.jpg" alt="" />
					<input type="radio" name="imgurl" value="./Public/images/3.jpg" /><img src=" ./Public/images/3.jpg" alt="" />
					<input type="radio" name="imgurl" value="./Public/images/4.jpg" /><img src=" ./Public/images/4.jpg" alt="" />
				</p>
				<p class="thr"><input class="btn" type="submit" value="提交" /></p>
			</form>
			<div class="close"></div>
</div>
   
</div>

<div id="bottom_out">
		<div id="bottom">
			<form action="upadd.php" method="post">
				<p class="one">
				昵称:<input class="name" name="username" type="text" placeholder="大爷你的名字" />
				<br/><br/>
				<input type="radio" name="sex" value="男" checked="checked" />男侠
				<input type="radio" name="sex" value="女" />女侠
				</p>
				<p><textarea name="message" placeholder="这个人很懒,什么都没有写" ></textarea></p>
				<p class="tow">
					<input type="radio" name="imgurl" value="./Public/images/1.jpg" checked="checked" /><img src=" ./Public/images/1.jpg" alt="" />
					<input type="radio" name="imgurl" value="./Public/images/2.jpg" /><img src=" ./Public/images/2.jpg" alt="" />
					<input type="radio" name="imgurl" value="./Public/images/3.jpg" /><img src=" ./Public/images/3.jpg" alt="" />
					<input type="radio" name="imgurl" value="./Public/images/4.jpg" /><img src=" ./Public/images/4.jpg" alt="" />
				</p>
				<p class="thr"><input class="btn" type="submit" value="提交" /></p>
			</form>
			<div class="close"></div>
		</div>
</div>

</body>
</html>