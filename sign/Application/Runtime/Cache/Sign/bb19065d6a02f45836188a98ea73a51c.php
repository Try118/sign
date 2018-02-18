<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>后台登录-基本信息管理-主页面-添加成员</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<!--<link rel="stylesheet" href="css/font.css" />-->
		<link rel="stylesheet" href="../../../../../Public/sign/css/font.css" />
		<!--<link rel="stylesheet" href="css/xadmin.css" />-->
		<link rel="stylesheet" href="../../../../../Public/sign/css/xadmin.css" />
		<!--<link rel="stylesheet" href="css/swiper.css">-->
		<link rel="stylesheet" href="../../../../../Public/sign/css/swiper.css" />
		<!--<script type="text/javascript" src="js/jquery.js"></script>-->
		<script type="text/javascript" src="../../../../../Public/sign/js/jquery.js" ></script>
		<!--<script type="text/javascript" src="js/swiper.js"></script>-->
		<script type="text/javascript" src="../../../../../Public/sign/js/swiper.js" ></script>
		<!--<script src="./lib/layui/layui.js" charset="utf-8"></script>-->
		<!--<script src="lib/layui/layui.js" charset="utf-8"></script>-->
		<script type="text/javascript" src="../../../../../Public/sign/lib/layui/layui.js" ></script>
		<!--<script type="text/javascript" src="js/xadmin.js"></script>-->
		<script type="text/javascript" src="../../../../../Public/sign/js/xadmin.js" ></script>
		<!--   <script type="text/javascript" src="./js/xadmin.js"></script>-->

	</head>

	<body>
		<!-- 中部开始 -->
		<div class="wrapper">
			<!-- 右侧主体开始 -->
			<div class="page-content">
				<div class="content">
					<!-- 右侧内容框架，更改从这里开始 -->
					<form class="layui-form" action="<?php echo U('Basicmain/add_member');?>" method="post">
						<div class="layui-form-item">
							<label for="L_username" class="layui-form-label">
                        <span class="x-red">*</span>一卡通
                    </label>
							<div class="layui-input-inline">
								<input type="text" id="L_username" name="card" required="" lay-verify="nikename" autocomplete="off" class="layui-input">
							</div>
						</div>
						<div class="layui-form-item">
							<label for="L_username" class="layui-form-label">
                        <span class="x-red">*</span>名称
                    </label>
							<div class="layui-input-inline">
								<input type="text" id="L_username" name="name" required="" lay-verify="nikename" autocomplete="off" class="layui-input">
							</div>
						</div>
						<div class="layui-form-item">
							<label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>学院
                    </label>
							<div class="layui-input-inline">
								<input type="text" id="L_pass" name="branch" required="" lay-verify="pass" autocomplete="off" class="layui-input">
							</div>
							<!--<div class="layui-form-mid layui-word-aux">
                        6到16个字符
                    </div>-->
						</div>
						<div class="layui-form-item">
							<label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>班级
                    </label>
							<div class="layui-input-inline">
								<input type="text" id="L_repass" name="classroom" required="" lay-verify="repass" autocomplete="off" class="layui-input">
							</div>
						</div>
						<div class="layui-form-item">
							<label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>职务
                    </label>
							<div class="layui-input-inline">
								<input type="text" id="L_repass" name="duty" required="" lay-verify="repass" autocomplete="off" class="layui-input">
							</div>
						</div>
						<div class="layui-form-item">
							<label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>联系号码
                    </label>
							<div class="layui-input-inline">
								<input type="text" id="L_repass" name="phonelong" required="" lay-verify="repass" autocomplete="off" class="layui-input">
							</div>
						</div>
						<div class="layui-form-item">
							<label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>短号
                    </label>
							<div class="layui-input-inline">
								<input type="text" id="L_repass" name="phoneshort" required="" lay-verify="repass" autocomplete="off" class="layui-input">
							</div>
						</div>
						<div class="layui-form-item">
							<label for="L_repass" class="layui-form-label">
                    </label>
							<button class="layui-btn" lay-filter="add" lay-submit="" type="submit" >
                        添加
                    </button>
						</div>
					</form>
					<!-- 右侧内容框架，更改从这里结束 -->
				</div>
			</div>
			<!-- 右侧主体结束 -->
		</div>
		<script>
			function windowclose(){
			
		</script>
		<!-- 中部结束 -->
	</body>

</html>