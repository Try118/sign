<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录-基本信息管理-部门编号-修改部门信息</title>
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
    <form class="layui-form" method="post" action="<?php echo U('Basicnumber/edit_save');?>">
        <!--<div class="layui-form-item">
            <label for="level-id" class="layui-form-label">
                id
            </label>
            <div class="layui-input-inline">
                <input type="text" id="level-id" name="level-id" disabled="" value="20" class="layui-input">
            </div>
        </div>-->
         <div class="layui-form-item" style="display: none;">
            <label for="level-name" class="layui-form-label">
                <span class="x-red">*</span>部门编号
            </label>
            <div class="layui-input-inline">
                <input type="text" id="level-name" name="id" 
                autocomplete="off" value="<?php echo ($data["id"]); ?>" >
            </div>
        </div>
        <div class="layui-form-item">
            <label for="level-name" class="layui-form-label">
                <span class="x-red">*</span>部门编号
            </label>
            <div class="layui-input-inline">
                <input type="text" id="level-name" name="branch_num" required="" lay-verify="required"
                autocomplete="off" value="<?php echo ($data["branch_num"]); ?>" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="level-kiss" class="layui-form-label">
                <span class="x-red">*</span>部门
            </label>
            <div class="layui-input-inline">
                <input type="text" id="level-kiss" name="branch_name" required="" value="<?php echo ($data["branch_name"]); ?>" lay-verify="required"
                autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label">
            </label>
            <button  class="layui-btn" type="submit" lay-filter="save" lay-submit="">
                保存
            </button>
        </div>
    </form>
    <!--<script>
    //百度统计可去掉
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>-->
</body>
</html>