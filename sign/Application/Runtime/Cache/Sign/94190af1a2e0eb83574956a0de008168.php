<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>后台登录-基本信息管理-添加群组-添加群</title>
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
					<form class="layui-form" method="post" action="<?php echo U('Basicbuild/add_group');?>">
						<div class="layui-form-item">
							<label for="level-name" class="layui-form-label">
                <span class="x-red">*</span>群名称
            </label>
							<div class="layui-input-inline">
								<input type="text" id="level-name" name="group_name" required="" lay-verify="required" autocomplete="off" class="layui-input">
							</div>
						</div>
						<table class="layui-table">
							<thead>
								<tr>
									<th>
										勾选栏
										<th>
											ID
										</th>
										<th>
											用户名
										</th>
										<th>
											一卡通号
										</th>
										<th>
											学院
										</th>
										<th>
											班级
										</th>
										<th>
											职务
										</th>
										<th>
											电话
										</th>
										<th>
											短号
										</th>
									
								</tr>
							</thead>
							<tbody>
								<?php $index=0;?>
									<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><volist name='data' id='vol'>
								<tr>
									<td>
										<input type="checkbox" value="<?php echo ($vol["id"]); ?>" name="<?php echo $index+1; ?>">
									</td>
									<td>
										<?php $index = $index+1;echo $index;?>
									</td>
									<td>
										<!--<u style="cursor:pointer" onclick="member_show('张三','member-show.html','10001','360','400')">-->
										<?php echo ($vol["name"]); ?>
										<!--</u>-->
									</td>
									<td>
										<?php echo ($vol["card"]); ?>
									</td>
									<td>
										<?php echo ($vol["branch"]); ?>
									</td>
									<td>
										<?php echo ($vol["classroom"]); ?>
									</td>
									<td>
										<?php echo ($vol["duty"]); ?>
									</td>
									<td>
										<?php echo ($vol["phonelong"]); ?>
									</td>
									<td>
										<!--<td class="td-status">-->
										<!--<span class="layui-btn layui-btn-normal layui-btn-mini">-->
										<?php echo ($vol["phoneshort"]); ?>
										<!--</span>-->
									</td>
									
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
								
							</tbody>
						</table>
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