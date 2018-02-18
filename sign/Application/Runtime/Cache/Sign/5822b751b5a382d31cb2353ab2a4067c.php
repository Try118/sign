<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>后台登录-基本信息管理-主页面</title>
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
					<form class="layui-form" action="<?php echo U('Basicmain/edit_save');?>" method="post">
							<div class="layui-form-item" style="display: none;">
							<label for="L_username" class="layui-form-label">
                        id
                    </label>
							<div class="layui-input-inline">
								<input type="text" id="L_username" name="id" required lay-verify="required" autocomplete="off" value="<?php echo ($data["id"]); ?>" class="layui-input">
							</div>
							
						</div>
						<div class="layui-form-item">
							<label for="L_username" class="layui-form-label">
                        用户名
                    </label>
							<div class="layui-input-inline">
								<input type="text" id="L_username" name="name" required lay-verify="required" autocomplete="off" value="<?php echo ($data["name"]); ?>" class="layui-input">
							</div>
							
						</div>
						<div class="layui-form-item">
							<label for="L_username" class="layui-form-label">
                        一卡通
                    </label>
							<div class="layui-input-inline">
								<input type="text" id="L_username" name="card" required lay-verify="required" autocomplete="off" value="<?php echo ($data["card"]); ?>" class="layui-input">
							</div>
							
						</div>
						<div class="layui-form-item">
							<label for="L_city" class="layui-form-label">
                        学院
                    </label>
							<div class="layui-input-inline">
								<input type="text" id="L_city" name="branch" autocomplete="off" value="<?php echo ($data["branch"]); ?>" class="layui-input">
							</div>
						</div>
						<div class="layui-form-item">
							<label for="L_city" class="layui-form-label">
                        班级
                    </label>
							<div class="layui-input-inline">
								<input type="text" id="L_city" name="classroom" autocomplete="off" value="<?php echo ($data["classroom"]); ?>" class="layui-input">
							</div>
						</div>
						<div class="layui-form-item">
							<label for="L_city" class="layui-form-label">
                        职务
                    </label>
							<div class="layui-input-inline">
								<input type="text" id="L_city" name="duty" autocomplete="off" value="<?php echo ($data["duty"]); ?>" class="layui-input">
							</div>
						</div>
						<div class="layui-form-item">
							<label for="L_city" class="layui-form-label">
                        电话号码
                    </label>
							<div class="layui-input-inline">
								<input type="text" id="L_city" name="phonelong" autocomplete="off" value="<?php echo ($data["phonelong"]); ?>" class="layui-input">
							</div>
						</div>
						<div class="layui-form-item">
							<label for="L_city" class="layui-form-label">
                        短号
                    </label>
							<div class="layui-input-inline">
								<input type="text" id="L_city" name="phoneshort" autocomplete="off" value="<?php echo ($data["phoneshort"]); ?>" class="layui-input">
							</div>
						</div>

						<div class="layui-form-item">
							<label for="L_sign" class="layui-form-label">
                    </label>
							<button class="layui-btn" type="submit" key="set-mine" lay-filter="save" lay-submit>
                        保存
                    </button>
						</div>
					</form>
					<!-- 右侧内容框架，更改从这里结束 -->
				</div>
			</div>
			<!-- 右侧主体结束 -->
		</div>
		<!-- 中部结束 -->
	</body>

</html>