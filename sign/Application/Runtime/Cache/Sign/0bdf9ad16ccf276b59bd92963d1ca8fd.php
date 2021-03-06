<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

	<head>
		<meta   charset="utf-8">
		<title>后台登录</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<!--<link rel="stylesheet" href="css/font.css" />-->
		<link rel="stylesheet" href="../../../../Public/sign/css/font.css" />
		<link rel="stylesheet" href="../../../../Public/sign/lib/layui/css/layui.css" />
		<!--<link rel="stylesheet" href="css/xadmin.css" />-->
		<link rel="stylesheet" href="../../../../Public/sign/css/xadmin.css" />
		<!--<link rel="stylesheet" href="css/swiper.css">-->
		<link rel="stylesheet" href="../../../../Public/sign/css/swiper.css" />
		<script type="text/javascript" src="../../../../Public/sign/js/jquery.js" ></script>
		<!--<script type="text/javascript" src="js/jquery.js"></script>-->
		<!--<script type="text/javascript" src="js/swiper.js"></script>-->
		<script type="text/javascript" src="../../../../Public/sign/js/swiper.js" ></script>
		<!--<script src="lib/layui/layui.js" charset="utf-8"></script>-->
		<script type="text/javascript" src="../../../../Public/sign/lib/layui/layui.js"  charset="utf-8"></script>
		<!--<script type="text/javascript" src="js/xadmin.js"></script>-->
		<script type="text/javascript" src="../../../../Public/sign/js/xadmin.js" ></script>
	</head>
	<body>
		<div class="login-logo">
			<h1>签到管理系统111</h1></div>
		<div class="login-box">
			<form class="layui-form layui-form-pane" action="<?php echo U('checklogin');?>" method="post">
				<h3>登录你的帐号</h3>
				<label class="login-title" for="username">帐号</label>
				<div class="layui-form-item">
					<label class="layui-form-label login-form"><i class="iconfont">&#xe6b8;</i></label>
					<div class="layui-input-inline login-inline">
						<input type="text" name="username" lay-verify="required" placeholder="请输入你的帐号" autocomplete="off" class="layui-input">
					</div>
				</div>
				<label class="login-title" for="password">密码</label>
				<div class="layui-form-item">
					<label class="layui-form-label login-form"><i class="iconfont">&#xe82b;</i></label>
					<div class="layui-input-inline login-inline">
						<input type="text" name="password" lay-verify="required" placeholder="请输入你的密码" autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="form-actions">
					<button class="btn btn-warning pull-right" lay-submit lay-filter="" type="submit">登录</button>
					<div class="forgot">
						<a href="#" class="forgot">忘记帐号或者密码</a>
					</div>
				</div>
			</form>
		</div>
		<div class="bg-changer">
			<div class="swiper-container changer-list">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><img class="item" src="../../../../Public/sign/img/a.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../Public/sign/img/b.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../Public/sign/img/c.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../Public/sign/img/d.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../Public/sign/img/e.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../Public/sign/img/f.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../Public/sign/img/g.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../Public/sign/img/h.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../Public/sign/img/i.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../Public/sign/img/j.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../Public/sign/img/k.jpg" alt=""></div>
					<div class="swiper-slide"><span class="reset">初始化</span></div>
				</div>
			</div>
			<div class="bg-out"></div>
			<div id="changer-set"><i class="iconfont">&#xe696;</i></div>
		</div>
		<script>
			$(function() {
				layui.use('form', function() {
					var form = layui.form();
					//监听提交
					form.on('submit(login)', function(data) {
						layer.msg(JSON.stringify(data.field), function() {
							location.href = '../Basic/main/member-list.html'
						});
						return false;
					});
				});
			})
		</script>
	</body>

</html>