<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>后台登录-管理群组-部门编号</title>
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

	<body onload="init()">
		<!-- 顶部开始 -->
		<div class="container">
			<div class="logo">
				<a href="./index.html">部门编号</a>
			</div>
			<div class="open-nav"><i class="iconfont">&#xe699;</i></div>
			<ul class="layui-nav right" lay-filter="">
				<li class="layui-nav-item">
					<a href="javascript:;">admin</a>
					<dl class="layui-nav-child">
						<!-- 二级菜单 -->
						<dd>
							<a href="">个人信息</a>
						</dd>
						<dd>
							<a href="">切换帐号</a>
						</dd>
						<dd>
							<a href="./login.html">退出</a>
						</dd>
					</dl>
				</li>
				<li class="layui-nav-item" style="visibility: hidden;">
					<a href="/">前台首页</a>
				</li>
			</ul>
		</div>
		<!-- 顶部结束 -->
		<!-- 中部开始 -->
		<div class="wrapper">
			<!-- 左侧菜单开始 -->
			<div class="left-nav">
				<div id="side-nav">
					<ul id="nav">
						<li class="list" current>
							<!--<a href="./index.html">
								<i class="iconfont">&#xe761;</i> 欢迎页面
								<i class="iconfont nav_right">&#xe697;</i>
							</a>-->
						</li>
						<li class="list" id="basic_information">
							<a href="javascript:;">
								<i class="iconfont">&#xe70b;</i> 基本信息管理
								<i class="iconfont nav_right">&#xe697;</i>
							</a>
							<ul class="sub-menu opened" style="display: none;">
								<li>
									<a href="../main/member-list.html">
										<i class="iconfont">&#xe6a7;</i> 主页面
									</a>
								</li>
								<!--<li>
									<a href="member-del.html">
										<i class="iconfont">&#xe6a7;</i> 建立群组
									</a>
								</li>-->
								<li>
									<a href="../build/member-level.html">
										<i class="iconfont">&#xe6a7;</i> 建立群组
									</a>
								</li>
								<li class="current">
									<a href="member-kiss.html">
										<i class="iconfont">&#xe6a7;</i> 部门编号
									</a>
								</li>
								<!--<li>
									<a href="member-view.html">
										<i class="iconfont">&#xe6a7;</i> 浏览记录
									</a>
								</li>-->
							</ul>
						</li>
						<li class="list">
							<a href="javascript:;">
								<i class="iconfont">&#xe6a3;</i> 会场管理
								<i class="iconfont nav_right">&#xe697;</i>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="../../Room/main/member-del.html">
										<i class="iconfont">&#xe6a7;</i> 会场管理主页面
									</a>
								</li>
								<li>
									<a href="../../Room/use/member-view.html">
										<i class="iconfont">&#xe6a7;</i> 会议室使用
									</a>
								</li>
							</ul>
						</li>
						<li class="list">
							<a href="javascript:;">
								<i class="iconfont">&#xe6a3;</i> 会议管理
								<i class="iconfont nav_right">&#xe697;</i>
							</a>
							<ul class="sub-menu" style="display:none">
								<li>
									<a href="../../Conference/member-meeting.html">
										<i class="iconfont">&#xe6a7;</i> 会议管理主页面
									</a>
								</li>
							</ul>
						</li>
						<li class="list">
							<!--<a href="javascript:;">
								<i class="iconfont">&#xe6a3;</i> 管理员管理
								<i class="iconfont nav_right">&#xe697;</i>
							</a>
							<ul class="sub-menu" style="display:none">
								<li>
									<a href="./banner-list.html">
										<i class="iconfont">&#xe6a7;</i> 轮播列表
									</a>
								</li>
							</ul>-->
						</li>
						<li class="list">
							
						</li>
						<li class="list">
							<!--<a href="javascript:;">
								<i class="iconfont">&#xe6a3;</i> 系统设置
								<i class="iconfont nav_right">&#xe697;</i>
							</a>
							<ul class="sub-menu" style="display:none">
								<li>
									<a href="./banner-list.html">
										<i class="iconfont">&#xe6a7;</i> 轮播列表
									</a>
								</li>
							</ul>-->
						</li>
					</ul>
				</div>
			</div>
			<!-- 左侧菜单结束 -->
			<!-- 右侧主体开始 -->
			<div class="page-content">
				<div class="content">
					<!-- 右侧内容框架，更改从这里开始 -->
					<form class="layui-form xbs" action="<?php echo U('Basicnumber/search_branch');?>" method="post">
						<div class="layui-form-pane" style="text-align: left;">
							<div class="layui-form-item" style="display: inline-block;">
								<!--<label class="layui-form-label xbs768">日期范围</label>
								<div class="layui-input-inline xbs768">
									<input class="layui-input" placeholder="开始日" id="LAY_demorange_s">
								</div>
								<div class="layui-input-inline xbs768">
									<input class="layui-input" placeholder="截止日" id="LAY_demorange_e">
								</div>-->
								<div class="layui-input-inline">
									<input type="text" name="branch_num" placeholder="请输入部门/部门编号" autocomplete="off" class="layui-input">
								</div>
								<div class="layui-input-inline" style="width:80px">
									<button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
								</div>
							</div>
						</div>
					</form>
					<xblock><button class="layui-btn layui-btn-danger" onclick="delAll()" style="float: left;"><i class="layui-icon">&#xe640;</i>批量删除</button><button class="layui-btn" onclick="kiss_add('添加部门','<?php echo U('Basicnumber/kiss_add');?>','','','300')" style="float: left;"><i class="layui-icon">&#xe608;</i>添加</button>
						<form  class="layui-btn" style="float: left;" enctype="multipart/form-data"  style="float: left;" action="<?php echo U('Basicnumber/add_batch');?>" method="post">
								<input  type="file" name="upfile" style="text-decoration:none"  title="成员信息上传">
								<button  type="submit"  class="layui-btn" style="float: left;" onclick=""><i class="layui-icon">&#xe608;</i>提交</button>			
						</form>
						<span class="x-right" style="line-height:40px">共有数据：<?php echo ($length); ?> 条</span></xblock>
					<table class="layui-table">
						<thead>
							<tr>
								<th>
									<input type="checkbox" name="" value="">
								</th>
								<th>
									部门编号
								</th>
								<th>
									部门
								</th>
								<!--<th>
									积分
								</th>-->
								<th>
									操作
								</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
								<td>
									<input type="checkbox" value="1" name="">
								</td>
								<td>
									<?php echo ($vol["branch_num"]); ?>
								</td>
								<td>
									<?php echo ($vol["branch_name"]); ?>
								</td>
								<!--<td>
									5
								</td>-->
								<td class="td-manage">
									<a title="编辑" href="javascript:;" onclick="kiss_edit('编辑部门信息','<?php echo U('Basicnumber/kiss_edit');?>?id=<?php echo ($vol["id"]); ?>','4','','300')" style="text-decoration:none">
										<i class="layui-icon">&#xe642;</i>
									</a>
									<a title="删除" href="<?php echo U('Basicnumber/del_branch');?>?id=<?php echo ($vol["id"]); ?>;" onclick="kiss_del(this,'1')" style="text-decoration:none">
										<i class="layui-icon">&#xe640;</i>
									</a>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
					<!-- 右侧内容框架，更改从这里结束 -->
				</div>
			</div>
			<!-- 右侧主体结束 -->
		</div>
		<!-- 中部结束 -->
		<!-- 底部开始 -->
		<!--<div class="footer">
			<div class="copyright">Copyright ©2017 x-admin v2.3 All Rights Reserved. 本后台系统由X前端框架提供前端技术支持</div>
		</div>-->
		<!-- 底部结束 -->
		<!-- 背景切换开始 -->
		<div class="bg-changer">
			<div class="swiper-container changer-list">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><img class="item" src="../../../../../Public/sign/img/a.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../../Public/sign/img/b.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../../Public/sign/img/c.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../../Public/sign/img/d.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../../Public/sign/img/e.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../../Public/sign/img/f.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../../Public/sign/img/g.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../../Public/sign/img/h.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../../Public/sign/img/i.jpg" alt=""></div>
					<div class="swiper-slide"><img class="item" src="../../../../../Public/sign/img/j.jpg" alt=""></div>
					<div class="swiper-slide"><span class="reset">初始化</span></div>
				</div>
			</div>
			<div class="bg-out"></div>
			<div id="changer-set"><i class="iconfont">&#xe696;</i></div>
		</div>
		<!-- 背景切换结束 -->
		<!-- 页面动态效果 -->
		<script>
			layui.use(['laydate'], function() {
				laydate = layui.laydate; //日期插件

				//以上模块根据需要引入
				//

				var start = {
					min: laydate.now(),
					max: '2099-06-16 23:59:59',
					istoday: false,
					choose: function(datas) {
						end.min = datas; //开始日选好后，重置结束日的最小日期
						end.start = datas //将结束日的初始值设定为开始日
					}
				};

				var end = {
					min: laydate.now(),
					max: '2099-06-16 23:59:59',
					istoday: false,
					choose: function(datas) {
						start.max = datas; //结束日选好后，重置开始日的最大日期
					}
				};

				document.getElementById('LAY_demorange_s').onclick = function() {
					start.elem = this;
					laydate(start);
				}
				document.getElementById('LAY_demorange_e').onclick = function() {
					end.elem = this
					laydate(end);
				}

			});

			//批量删除提交
			function delAll() {
				layer.confirm('确认要删除吗？', function(index) {
					//捉到所有被选中的，发异步进行删除
					layer.msg('删除成功', {
						icon: 1
					});
				});
			}
			// 等级-增加
			function kiss_add(title, url, id, w, h) {
				x_admin_show(title, url, w, h);
			}
			// 等级-编辑
			function kiss_edit(title, url, id, w, h) {
				x_admin_show(title, url, w, h);
			}

			/*等级-删除*/
			function kiss_del(obj, id) {
				layer.confirm('确认要删除吗？', function(index) {
					//发异步删除数据
					$(obj).parents("tr").remove();
					layer.msg('已删除!', {
						icon: 1,
						time: 1000
					});
				});
			}
		</script>
		<script>
			//百度统计可去掉
			var _hmt = _hmt || [];
			(function() {
				var hm = document.createElement("script");
				hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
				var s = document.getElementsByTagName("script")[0];
				s.parentNode.insertBefore(hm, s);
			})();
		</script>
		<!--模拟点击（基本信息管理）-->
		<script>
			function init(){
				document.getElementById("basic_information").click();
			}
		</script>
	</body>

</html>